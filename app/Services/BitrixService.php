<?php


namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Log;
use Mail;
use App\City;
use Illuminate\Support\Facades\Session;
use DateTimeImmutable;

class BitrixService
{
    public function __construct()
    {
    }

    public function sendContactForm($data)
    {
        $data = json_decode($data, true);

        if ($data['phone'] == null || strlen((string)$data['phone']) < 11) {
            throw new Exception();
        }

        $data['name'] = isset($data['name']) ? htmlspecialchars(strip_tags($data['name']), ENT_QUOTES) : '';
        $data['phone'] =  isset($data['phone']) ? strip_tags($data['phone']) : '';
        $data['comment'] = isset($data['comment']) ? htmlspecialchars(strip_tags($data['comment']), ENT_QUOTES) : '';

        $data['comment'] = str_replace('w--', '<br>', $data['comment']);

        $data['date'] = isset($data['date']) ? htmlspecialchars(strip_tags($data['date']), ENT_QUOTES) : '';
        $data['date_sending'] = isset($data['date_sending']) ? htmlspecialchars(strip_tags($data['date_sending']), ENT_QUOTES) : '';
        $data['time'] = isset($data['time']) ? htmlspecialchars(strip_tags($data['time']), ENT_QUOTES) : '';
        $data['gift'] = isset($data['gift']) ? htmlspecialchars(strip_tags($data['gift']), ENT_QUOTES) : '';
        $data['car'] = isset($data['car']) ? htmlspecialchars(strip_tags($data['car']), ENT_QUOTES) : '';

        $data['responsible_id'] = isset($data['responsible_id']) ? intval($data['responsible_id']) : '';
        $data['form_id'] = isset($data['form_id']) ? htmlspecialchars(strip_tags($data['form_id']), ENT_QUOTES) : '';
        $data['city'] = isset($data['city']) ? htmlspecialchars(strip_tags($data['city']), ENT_QUOTES) : '';
        $data['caption'] = isset($data['caption']) ? htmlspecialchars(strip_tags($data['caption']), ENT_QUOTES) : '';
        $data['form_type'] = isset($data['form_type']) ? intval($data['form_type']) : '';
        $data['gift'] = isset($data['gift']) ? htmlspecialchars(strip_tags($data['gift']), ENT_QUOTES) : '';

        if ($data['phone'] == '79217471138') {
            return false;
        }

        $url = '';
        if (isset($data['url']) && count($data['url'])) {
            $url = $data['url']['href'];
            foreach (['href', 'search'] as $label) {
                if (isset($data['url'][$label]) && !empty($data['url'][$label])) {
                    $data['url'][$label] = htmlspecialchars(strip_tags($data['url'][$label]));
                }
            }
        }

        if (isset($data['utm']) && count($data['utm'])) {
            foreach (['utm_campaign', 'utm_content', 'utm_medium', 'utm_source', 'utm_term', 'block', 'source', 'yclid'] as $label) {
                if (isset($data['utm'][$label]) && !empty($data['utm'][$label])) {
                    $data['utm'][$label] = htmlspecialchars(strip_tags($data['utm'][$label]));
                }
            }
        }

        $phone = $data['phone'];

        $request = [
            'type' => "PHONE",
            'values' => [$phone],
        ];

        $city = City::where('alias', $data['city'])->get();

        if (!$city) {
            throw new Exception();
        }

        $emailFrom = 'admin@brightpark.ru';
        $emailsTo = 'dmitriy.ivanov@brightpark.ru,';

        $is_service = false;
        $no_lead = false;
        $resp_id = 0;
        $responsible_id = 19465; // Ответственная ЕРЦ Черемных Елена
        $source_id = "SELF";
        $channel = '';

        switch ($data['form_type']) {
            case 1:
            case 3:
                $emailsTo .= 'new-cars@brightpark.ru';
            break;
            case 2:
                $emailsTo .= $city[0]->callback_service_emails;
                $is_service = true;
                $resp_id = 1221; // Юлия Лазарева
            break;
            case 4:
                $emailsTo .= 'carhunter@brightpark.ru';
            break;
            case 5: // Вайбер / Сервис
                $emailsTo .= 'service@brightpark.ru';
                $is_service = true;
                $resp_id = 32787;  // Мучкина Татьяна
                $source_id = '11';
                $channel = 'Viber';
            break;
            case 6: // Вайбер / Пролонгация
                $emailsTo .= 'nmr@brightpark.ru';
                $no_lead = true;
                $source_id = '11';
                $channel = 'Viber';
            break;
            case 7: // Вайбер / Отдел продаж
                $emailsTo .= 'new-cars@brightpark.ru';
                $resp_id = 19465; // Безматерных Анастасия
                $source_id = '11';
                $channel = 'Viber';
            break;
        }

        $emailsTo = str_replace(' ', '', $emailsTo);

        $subject = 'Брайт Парк. Заявка с сайта ';

        $params['name'] = isset($data['name']) ? $data['name'] : '';
        $params['phone'] = isset($data['phone']) ? $data['phone'] : '';
        $params['date'] = isset($data['date']) ? $data['date'] : '';
        $params['time'] = isset($data['time']) ? $data['time'] : '';
        $params['gift'] = isset($data['gift']) ? $data['gift'] : '';
        $params['car'] = isset($data['car']) ? $data['car'] : '';
        $params['comment'] = isset($data['comment']) ? $data['comment'] : '';
        $params['gift'] = isset($data['gift']) ? $data['gift'] : '';

        $params['city'] = isset($city[0]->title_ru) ? $city[0]->title_ru : '';
        $params['caption'] = isset($data['caption']) ? $data['caption'] : '';
        $params['url'] = isset($data['url']['href']) ? $data['url']['href'] : '';

        if (isset($data['url']) && empty($data['url']['search'])) {
            $params['url'] .= '?';
            foreach (['utm_campaign', 'utm_content', 'utm_medium', 'utm_source', 'utm_term', 'block', 'source', 'yclid'] as $label) {
                if (isset($data['utm'][$label]) && !empty($data['utm'][$label])) {
                    $params['url'] .= '&' . $label . '=' . $data['utm'][$label];
                }
            }
        }

        if (!$is_service) {
            Mail::send('emails.feedback', $params, function($message) use ($emailsTo, $emailFrom, $subject) {
                $emails = explode(',', $emailsTo);

                foreach ($emails as $key => $email) {
                    if (!$key) {
                        $message->to($email)->subject($subject)->from($emailFrom, 'Брайт Парк');
                    } else {
                        $message->cc($email)->subject($subject)->from($emailFrom, 'Брайт Парк');
                    }
                }
            });
        }

        // Ищем есть ли лиды или контакты с таким номером в Битриксе, если есть
        // Ставим признак "Повторный лид"
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://team.brightpark.ru/rest/610/g1iski89ajvio040/crm.duplicate.findbycomm.json',
            CURLOPT_POSTFIELDS => http_build_query($request),
        ]);

        $resultDuplicate = curl_exec($curl);
        curl_close($curl);
        $resultDuplicate = json_decode($resultDuplicate, 1);

        $contactID = 0;
        if (!empty($resultDuplicate['result'])) {
            if (isset($resultDuplicate['result']["CONTACT"]) && !empty($resultDuplicate['result']["CONTACT"])) {
                $count = count($resultDuplicate['result']["CONTACT"]) - 1;
                $contactID = $resultDuplicate['result']["CONTACT"][$count];
            }
        }

        $isDuplicate = intval($contactID) > 0;

        // Определение ответственного из сотрудниц ЕРЦ которые онлайн
        $department_id = $data['form_type'] === 2 ? 1552 : 834;

        $request = [
            "FILTER" => [
                "UF_DEPARTMENT" => $department_id, // ID подразделения ЕРЦ/АСЦ
                "ACTIVE" => "true",
                "IS_ONLINE" => "Y",
            ]
        ];

        $info = 'Создан новый лид #ID_SUSH# и к нему прикреплено дело #ID_JOB#';

        if ($url) {
            $url = explode('?', $url);
            $urlArr = explode('//', $url[0]);
            $urlArr2 = explode('/', $urlArr[1]);
            array_shift($urlArr2);
            array_shift($urlArr2);
            $referer = implode('/', $urlArr2);
        } else {
            $referer = '';
        }

        $datetime = '';
        if (isset($data['date']) && $data['date'] && isset($data['time']) && $data['time'] ) {
            $datetime = $data['date'] . ' ' . $data['time'] . ':00';
        }

        $title = $data['caption'] ? $data['caption'] : 'Test lid';

        if ($is_service) {
            $title = $data['caption'];
        }

        if ($data['form_type'] == 5 || $data['form_type'] == 6 || $data['form_type'] == 7) {
            $title .= '. Вайбер';
        }

        $title = isset($city[0]->title_ru) ? $title . ' ' . $city[0]->title_ru : $title;

        if ($no_lead) {
            return false;
        }

        if ($resp_id) {
            $responsible_id = $resp_id;
        }

        // Добавление лида
        $request = [
            'fields' => [
                "TITLE" => $title, //название формы на сайте
                "UF_CRM_MGO_CC_TAG_ID" => $title,
                "STATUS_ID" => "NEW",
                "OPENED" => "Y",
                "ASSIGNED_BY_ID" => $responsible_id,
                "UF_CRM_1471411617" => '40', // источник=brightpark.ru
                "UF_CRM_MT_REFERER" => $referer,
                "SOURCE_ID" => $source_id,
                "NAME" => $data['name'], //имя из поля
                "PHONE" => [["VALUE" => $phone, "VALUE_TYPE" => "MOBILE"]],
            ],
            'params' => ["REGISTER_SONET_EVENT" => "Y"],
        ];

        if ($is_service) {
            $request['fields']['UF_CRM_1604059429'] = 5833;
        }

        if ($data['date_sending']) {
            $request['fields']['UF_CRM_MGO_CC_CREATE'] = $data['date_sending'] . ' 01:00:00';
        }

        if ($datetime) {
            $date_1 =  new \DateTimeImmutable($datetime);
            $date_1 = $date_1->modify('+1 hour');
            $gift = '';
            if (isset($data['gift']) && $data['gift']) {
                $gift = ', подарок: ' . $data['gift'];
            }
            $request['fields']['UF_CRM_MT_PRIMECHENI'] = 'Дата перезвона: ' . $date_1->format('d.m.Y H:i:s') . $gift;
        }

        if ($data['car']) {
            $request['fields']['UF_CRM_1623242141'] = $data['car'];
        }

        if ( $isDuplicate ) {
            $request['fields']['CONTACT_ID'] = $contactID;
        }

        if ( $data['comment'] ) {
            $data['comment'] = str_replace('<br>', '', $data['comment']);
            $request['fields']['UF_CRM_1631279386943'] = $data['comment'];
        }

        if (isset($data['utm']) && count($data['utm'])) {
            foreach (['utm_campaign', 'utm_content', 'utm_medium', 'utm_source', 'utm_term', 'block', 'source', 'yclid'] as $label) {
                if (isset($data['utm'][$label]) && !empty($data['utm'][$label])) {
                    $request['fields'][strtoupper($label)] = $data['utm'][$label];
                }
            }
        }

        if ($data['form_type'] == 5 ||
            $data['form_type'] == 6 ||
            $data['form_type'] == 7
        ) {
            // Лид / Направление - UF_CRM_1604059429
            // 5833 - Сервис
            // 5828 - Продажи новые ФЛ
            $request['fields']['UF_CRM_1604059429'] = $data['form_type'] == 5 || $data['form_type'] == 6 ? 5833 : 5828;
            $request['fields']['UF_CRM_1471411617'] = '';
            $request['fields']['UF_CRM_1660132211'] = 12047; // Тип обращения - Клиентская база
            $request['fields']['UF_CRM_1660132477'] = 12067; // Канал обращения  - Viber
            Log::info('Вайбер форма: ' . json_encode($request));
        }

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://team.brightpark.ru/rest/610/g1iski89ajvio040/crm.lead.add.json',
            CURLOPT_POSTFIELDS => http_build_query($request),
        ]);

        $result = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($result, 1);

        $id = $result['result'];
        $type = 1;

        // Прикрепление дела
        $request = [
            'fields' => [
                'OWNER_ID' => $id, //ID Сущности: лид/контакт/компания
                'OWNER_TYPE_ID' => $type, //1 лид, 3 контакт, 4 компания
                'TYPE_ID' => 2,
                'COMMUNICATIONS' => [['VALUE' => $phone]],
                'SUBJECT' => 'Заявка с сайта!',
                'END_TIME' => date('Y-m-d H:i:s'),
                'COMPLETED' => 'N',
                'PRIORITY' => 3,
                'RESPONSIBLE_ID' => $responsible_id, //ответственный
                'DESCRIPTION' => 'Важный звонок',
                'DESCRIPTION_TYPE' => 1,
                'DIRECTION' => 2, //Тип звонка: 0 без данных, 1 Входящее, 2 Исходящее
            ],
        ];

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://team.brightpark.ru/rest/610/g1iski89ajvio040/crm.activity.add.json',
            CURLOPT_POSTFIELDS => http_build_query($request),
        ]);
        $result = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($result, 1);
    }

    function getUrl()
    {
        return sprintf(
            "%s://%s%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            $_SERVER['REQUEST_URI']
        );
    }

    function checkVisitorCookie()
    {
        $key = 'cuidF2y0seW';

        $utm = [];

        foreach (['utm_campaign', 'utm_content', 'utm_medium', 'utm_source', 'utm_term'] as $label) {
            if (isset($_GET[$label]) && is_scalar($_GET[$label])) {
                $utm[$label] = mb_substr($_GET[$label], 0, 255);
            }
        }

        if (!isset($_SESSION['utm' . $key])) {
            $_SESSION['utm' . $key] = [];
        }

        $_SESSION['utm' . $key] = array_merge($_SESSION['utm' . $key], $utm);

        if (isset($_COOKIE[$key])) {
            $now = time();
            $gap = 60 * 60 * 24;
            $cookie = json_decode(base64_decode($_COOKIE[$key]), true);

            if (!isset($cookie['pages'])) {
                $cookie['pages'] = [];
            }

            array_unshift($cookie['pages'], $_SERVER['REQUEST_URI']);
            $cookie['pages'] = array_slice($cookie['pages'], 0, 20);

            if (!isset($cookie['last_visit']) || isset($cookie['last_visit']) && $cookie['last_visit'] + $gap < $now) {
                $cookie['last_visit'] = $now;


                $curl = curl_init();

                $request = [
                    'id' => $cookie['owner_id'],
                ];

                curl_setopt_array($curl, [
                    CURLOPT_SSL_VERIFYPEER => 0,
                    CURLOPT_POST => 1,
                    CURLOPT_HEADER => 0,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => 'https://team.brightpark.ru/rest/610/g1iski89ajvio040/crm.lead.get.json',
                    CURLOPT_POSTFIELDS => http_build_query($request),
                ]);

                $result = curl_exec($curl);
                curl_close($curl);
                $result = json_decode($result, 1);

                $lead = isset($result['result']) ? $result['result'] : [];


                if (!empty($lead) && !empty($lead['PHONE'][0]['VALUE'])) {
                    // Прикрепление дела
                    $request = [
                        'fields' => [
                            'OWNER_ID' => $cookie['owner_id'], //ID Сущности: лид/контакт/компания
                            'OWNER_TYPE_ID' => $cookie['owner_type_id'], //1 лид, 3 контакт, 4 компания
                            'TYPE_ID' => 2,
                            'COMMUNICATIONS' => [['VALUE' => $lead['PHONE'][0]['VALUE']]],
                            'SUBJECT' => 'Звонок кроту!',
                            // 'START_TIME' => date('Y-m-d H:i:s'),
                            'END_TIME' => date('Y-m-d H:i:s'),
                            'COMPLETED' => 'N',
                            'PRIORITY' => 3,
                            'RESPONSIBLE_ID' => $lead['ASSIGNED_BY_ID'], //ответственный
                            'DESCRIPTION_TYPE' => 1,
                            'DIRECTION' => 2, //Тип звонка: 0 без данных, 1 Входящее, 2 Исходящее
                            'DESCRIPTION' => 'Звонок кроту!<br>Последние просмотренные страницы:<br>'.implode('; ', $cookie['pages'])
                        ],
                    ];

                    $curl = curl_init();
                    curl_setopt_array($curl, [
                        CURLOPT_SSL_VERIFYPEER => 0,
                        CURLOPT_POST => 1,
                        CURLOPT_HEADER => 0,
                        CURLOPT_RETURNTRANSFER => 1,
                        CURLOPT_URL => 'https://team.brightpark.ru/rest/610/g1iski89ajvio040/crm.activity.add.json',
                        CURLOPT_POSTFIELDS => http_build_query($request),
                    ]);
                    curl_exec($curl);
                    curl_close($curl);
                }
            }

            $cookie = base64_encode(json_encode($cookie));
            setcookie($key, $cookie, time() + 60 * 60 * 24 * 365, '/');
        }
    }
}
