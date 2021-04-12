<?php

use Illuminate\Database\Seeder;

class StocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stocks = [
            [
                'title' => 'ДОРОГО ВЫКУПИМ ВАШ АВТО',
                'text' => '
                <p>При покупке автомобиля LADA в&nbsp;нашем салоне&nbsp;&mdash; воспользуйтесь услугой обмена автомобиля. Пока вы&nbsp;пьете ароматный чай&nbsp;&mdash; ваш автомобиль уже оценят. Специалисты Брайт парка осмотрят и&nbsp;оценят ваш автомобиль буквально за&nbsp;15&nbsp;минут и&nbsp;предложат цену релевантную средней стоимости вашего автомобиля на&nbsp;рынке. Брайт парк является федеральной сетью, поэтому в&nbsp;ряде случаев возможна оценка выше рыночной.</p>
                <p>Программа обмена в&nbsp;Брайт&nbsp;парке&nbsp;&mdash; это максимально удобный и&nbsp;быстрый способ обменять подержанный автомобиль на&nbsp;новый. Вам не&nbsp;нужно задумываться о&nbsp;реализации автомобиля, никаких классифайдов, звонков перекупов и&nbsp;других не&nbsp;известных вам людей. Реализацию вашего авто возьмут на&nbsp;себя специалисты дилерского центра Брайт Парк. Кроме того, участники программы обмена получают преимущество в&nbsp;виде выгоды на&nbsp;покупку нового автомобиля.</p>
                <p>Перечень документов покупателя:</p>
                <ul>
                    <li>Паспорт гражданина&nbsp;РФ, владельца автомобиля.</li>
                    <li>Оригинал ПТС, подтверждающий срок владения автомобилем (не&nbsp;менее 6&nbsp;месяцев).</li>
                    <li>Оригинал &laquo;Свидетельства о&nbsp;регистрации транспортного средства&raquo;.</li>
                    <li>Копия паспорта транспортного средства&nbsp;БУ автомобиля с&nbsp;записью о&nbsp;переходе права собственности покупателю.</li>
                    <li>Документ выдан органами ГИБДД о&nbsp;регистрации&nbsp;БУ автомобиля за&nbsp;данным потребителем (КУТС либо справка, либо копия ПТС заверенная оригинальной печатью уполномоченного органа ГИБДД, либо копия ПТС заверенная нотариально).</li>
                </ul>
                <p>Перечень документов, которые должен предоставить Вам дилер:</p>
                <ul>
                    <li>Договор купли-продажи.</li>
                    <li>Акт приема-передачи.</li>
                </ul>
                <p>Подробности предложения уточняйте по&nbsp;телефону: +7 (342) 225-10-28.</p>
                ',
                'text_short' => 'При покупке автомобиля LADA в&nbsp;нашем салоне&nbsp;&mdash; воспользуйтесь услугой обмена автомобиля. Пока вы&nbsp;пьете ароматный чай&nbsp;&mdash; ваш автомобиль уже оценят. Специалисты Брайт парка осмотрят и&nbsp;оценят ваш автомобиль буквально за&nbsp;15&nbsp;минут и&nbsp;предложат цену релевантную средней стоимости вашего автомобиля на&nbsp;рынке.',
                'preview' => '/images/stocks/stock_01.jpg',
                'slug' => 'dorogo-vykupim-vash-avto',
                'city_id' => 0,
                'sort' => 1,
            ],
            [
                'title' => 'ГАРАНТИРУЕМ ПОДАРОК ПРИ ПОКУПКЕ LADA GRANTA',
                'text' => '
                <p>При покупке LADA Granta в январе предлагаем большой выбор подарков и выгодные условия! Узнайте о возможных подарках, позвонив по телефону: подменный номер.</p>
                <p>Так же вы можете воспользоваться другими нашими предложениями:</p>
                <ul>
                <li>новогодняя рассрочка;</li>
                <li>кредит без первого взноса;</li>
                <li>кредит со ставкой от 3,6% годовых;</li>
                <li>увеличенная оценка вашего авто;</li>
                <li>КАСКО в подарок!</li>
                </ul>
                <p>Получите специальную выгоду, позвонив по телефону: <span class="callibri_tel">+7 (342) 225-10-28.</span></p>
                <p>* Предложение ограничено и не является публичной офертой.  Подробности и сроки акции уточняйте по телефону: <span class="callibri_tel">+7 (342) 225-10-28.</span></p>
                ',
                'text_short' => 'При покупке LADA Granta в&nbsp;кредит в&nbsp;январе дарим вам шины в&nbsp;подарок! Прекрасное дополнение к&nbsp;совершенной покупке.',
                'preview' => '/images/stocks/stock_01.jpg',
                'slug' => 'garantiruem-podarok-pri-pokupke-lada-granta',
                'city_id' => 0,
                'sort' => 1,
            ],
            [
                'title' => 'КРЕДИТ В БРАЙТ ПАРКЕ Весенняя рассрочка + Первый взнос 0%',
                'text' => '
                    <p>В Брайт парке ВЕСНА! Порадуйте себя новым автомобилем на комфортных для вас условиях! Новая LADA может</p>
                    <p>Распространяется на&nbsp;все новые автомобили LADA.</p>
                    <p>Срок рассрочки от&nbsp;36&nbsp;месяцев.</p>
                    <p>Доступно без первого взноса.</p>
                    <p>* Рассрочка предоставляется ПАО &laquo;Совкомбанк&raquo;.</p>
                ',
                'text_short' => 'В Брайт парке ВЕСНА! Порадуйте себя новым автомобилем на комфортных для вас условиях! Новая LADA может',
                'preview' => '/images/stocks/stock_03.jpg',
                'slug' => 'kredit-v-brajt-parke-vesennyaya-rassrochka-pervyj-vznos-0',
                'city_id' => 0,
                'sort' => 3,
            ],
            [
                'title' => 'WOW ТРЕЙД-ИН доплатим 40 000 Р к вашей цене',
                'text' => '<p>Программа обмена в&nbsp;Брайт парке&nbsp;&mdash; это максимально удобный и&nbsp;быстрый способ обменять подержанный автомобиль на&nbsp;новый. Вам не&nbsp;нужно задумываться о&nbsp;реализации автомобиля, никаких классифайдов, звонков перекупов и&nbsp;других не&nbsp;известных вам людей. Реализацию вашего авто возьмут на&nbsp;себя специалисты дилерского центра Брайт Парк. Кроме того, участники программы обмена в&nbsp;Брайт парке получают преимущество в&nbsp;виде выгоды на&nbsp;покупку нового автомобиля в&nbsp;размере 40&nbsp;000&nbsp;рублей.</p>
                           <p>Перечень документов покупателя:</p>
                           <ul>
                                <li>Паспорт гражданина РФ, владельца автомобиля.</li>
                                <li>Оригинал ПТС, подтверждающий срок владения автомобилем (не менее 6 месяцев).</li>
                                <li>Оригинал «Свидетельства о регистрации транспортного средства».</li>
                                <li>Копия паспорта транспортного средства БУ автомобиля с записью о переходе права собственности покупателю.</li>
                                <li>Документ выдан органами ГИБДД о регистрации БУ автомобиля за данным потребителем (КУТС либо справка, либо копия ПТС заверенная оригинальной печатью уполномоченного органа ГИБДД, либо копия ПТС заверенная нотариально).</li>
                            </ul>
                            <p>Перечень документов, которые должен предоставить Вам дилер:</p>
                            <ul>
                                <li>Договор купли-продажи.</li>
                                <li>Акт приема-передачи.</li>
                            </ul>
                            <p>Подробности, сроки и&nbsp;условия уточняйте по&nbsp;телефону: +7 (342) 225-10-28.</p>
                ',
                'text_short' => 'Программа обмена в&nbsp;Брайт парке&nbsp;&mdash; это максимально удобный и&nbsp;быстрый способ обменять подержанный автомобиль на&nbsp;новый. Вам не&nbsp;нужно задумываться о&nbsp;реализации автомобиля, никаких классифайдов, звонков перекупов и&nbsp;других не&nbsp;известных вам людей. Реализацию вашего авто возьмут на&nbsp;себя специалисты дилерского центра Брайт Парк. Кроме того, участники программы обмена в&nbsp;Брайт парке получают преимущество в&nbsp;виде выгоды на&nbsp;покупку нового автомобиля в&nbsp;размере 40&nbsp;000&nbsp;рублей.',
                'preview' => '/images/stocks/stock_04.jpg',
                'slug' => 'wow-trejd-in-doplatim-40-000-r-k-vashej-cene',
                'city_id' => 0,
                'sort' => 4,
            ],
            [
                'title' => 'ГОСПРОГРАММА-2021 СНОВА В БРАЙТ ПАРКЕ!',
                'text' => '<p>Максимально выгодные предложения на покупку LADA в Брайт парке. Вы можете приобрести автомобиль по доступной цене, воспользовавшись специальной программой Брайт парка и получить выгоду до 10%.</p>
                           <ul>
                <li>новогодняя рассрочка;</li>
                <li>кредит без первого взноса;</li>
                <li>кредит со ставкой от 3,6% годовых;</li>
                <li>увеличенная оценка вашего авто;</li>
                <li>КАСКО в подарок!</li>
                </ul>
                <p>Получите специальную выгоду, позвонив по телефону: <span class="callibri_tel">+7 (342) 225-10-28.</span></p>
                <p>* Предложение ограничено и не является публичной офертой.  Подробности и сроки акции уточняйте по телефону: <span class="callibri_tel">+7 (342) 225-10-28.</span></p>
                         ',
                'text_short' => 'Максимально выгодные предложения на&nbsp;покупку LADA. Вы&nbsp;можете приобрести автомобиль по&nbsp;доступной цене, суммируя акции по&nbsp;специальным программам.',
                'preview' => '/images/stocks/rasshirennye_usloviya_programmy_gosudarstvennoj_podderzhki.jpg',
                'slug' => 'gosprogramma-brajt-parka-skidka-10-vsem',
                'city_id' => 0,
                'sort' => 6,
            ],
            [
                'title' => '<strike>МОЖНО</strike> НУЖНО УСПЕТЬ ДО ПОВЫШЕНИЯ ЦЕН',
                'text' => '<p>Успевайте приобрести автомобиль марки LADA в автосалоне Брайт Парк в январе!<br>
                LADA повысит цены на автомобили в 2021 году во всех дилерских центрах.<br>
                Повышение цен коснется всех моделей LADA за&nbsp;исключением внедорожника LADA Niva. Успевайте забронировать автомобиль по&nbsp;ценам декабря. Отмена брони бесплатная.
                </p>
                <p>Подробности предложения уточняйте по&nbsp;телефону: <span class="callibri_tel">+7 (342) 225-10-28.</span></p>
                ',
                'text_short' => 'Успевайте приобрести автомобиль марки LADA в&nbsp;автосалоне Брайт&nbsp;Парк в&nbsp;январе! LADA повышает цены на&nbsp;автомобили в&nbsp;декабре 2020 года во&nbsp;всех дилерских центрах.',
                'preview' => '/images/main/tablet/nuzhno-uspet-do-povysheniya-cen.jpg',
                'slug' => 'nuzhno-uspet-do-povysheniya-cen',
                'city_id' => 0,
                'sort' => 10,
            ],
            [
                'title' => 'СПЕЦИАЛЬНЫЕ ЦЕНЫ КАЖДЫЙ ДЕНЬ',
                'text' => '<p>Брайт Парк в январе приготовил новые цены и выгоды! Каждый день предлагаем специальные условия на новые автомобили LADA!</p>
                <p>Воспользуйтесь нашими предложениями:</p>
                <ul>
                <li>возобновленная госпрограмма "Первый/Семейный 2021";</li>
                <li>новогодняя рассрочка;</li>
                <li>кредит без первого взноса;</li>
                <li>кредит со ставкой от 3,6% годовых;</li>
                <li>увеличенная оценка вашего авто;</li>
                <li>КАСКО в подарок!</li>
                </ul>
                <p>Получите специальную выгоду, позвонив по телефону: <span class="callibri_tel">+7 (342) 225-10-28.</span></p>
                <p>* Предложение ограничено и не является публичной офертой.  Подробности и сроки акции уточняйте по телефону: <span class="callibri_tel">+7 (342) 225-10-28.</span></p>
                ',
                'text_short' => 'В последние дни декабря - в Брайт парке очень выгодные условия на покупку новой LADA. Сделайте себе подарок к Новому Году и воспользуйтесь нашими предложениями.',
                'preview' => '/images/main/tablet/black-friday.jpg',
                'slug' => 'predlozhenie-goda-v-brayt-parke',
                'city_id' => 0,
                'sort' => 11,
            ],
            [
                'title' => 'LADA Granta 0% первоначальный взнос',
                'text' => '
                    <p>Наш дилерский центр предлагает услугу автокредитования. У Брайт Парка 18 банков-партнёров, которые предлагают разнообразные кредитные программы, в том числе и без первоначального взноса.</p>
                    <p>Также у вас есть возможность подать заявку на кредит онлайн прямо на нашем сайте.</p>
                    <p>Для подачи заявки на кредит вам понадобятся всего лишь два документа:</p>
                    <ul>
                        <li>паспорт РФ</li>
                        <li>второй документ на выбор (водительское удостоверение, СНИЛС, заграничный паспорт)</li>
                        <li>второй документ на выбор (водительское удостоверение, СНИЛС, заграничный паспорт)</li>
                    </ul>
                ',
                'text_short' => 'Наш дилерский центр предлагает услугу автокредитования. У Брайт Парка 18 банков-партнёров, которые предлагают разнообразные кредитные программы, в том числе и без первоначального взноса.',
                'preview' => '/images/stocks/stock_03.jpg',
                'slug' => 'lada-granta-0-pervonachalnyj-vznos',
                'city_id' => 0,
                'sort' => 3,
            ],
            [
                'title' => 'Доплата 40 000 рублей при обмене на LADA Granta',
                'text' => '
                <p>Воспользуйтесь возможностью обменять свой автомобиль с дополнительной выгодой - 40 000 рублей.</p>
                <p>Обменять свой автомобиль в Брайт Парке - это удобно. Вам не нужно задумываться о реализации автомобиля, эту задачу на себя возьмут специалисты дилерского центра. Кроме того, участники программы обмена получают преимущество в виде выгоды на покупку нового автомобиля.</p>
                <p>Также у вас есть уникальная возможность оценки вашего автомобиля онлайн по фото и видео вашего автомобиля.</p>
                <p>Перечень документов покупателя:</p>
                <ul>
                    <li>Паспорт гражданина РФ, владельца автомобиля.</li>
                    <li>Оригинал ПТС, подтверждающий срок владения автомобилем (не менее 6 месяцев).</li>
                    <li>Оригинал «Свидетельства о регистрации транспортного средства».</li>
                    <li>Копия паспорта транспортного средства БУ автомобиля с записью о переходе права собственности покупателю.</li>
                    <li>Документ выдан органами ГИБДД о регистрации БУ автомобиля за данным потребителем (КУТС либо справка, либо копия ПТС заверенная оригинальной печатью уполномоченного органа ГИБДД, либо копия ПТС заверенная нотариально).</li>
                </ul>
                ',
                'text_short' => 'Воспользуйтесь возможностью обменять свой автомобиль с дополнительной выгодой - 40 000 рублей.',
                'preview' => '/images/stocks/stock_01.jpg',
                'slug' => 'doplata-40-000-rublej-pri-obmene-na-lada-granta',
                'city_id' => 0,
                'sort' => 1,
            ],
            [
                'title' => 'Розыгрыш Телевизора',
                'text' => '<p>Условия маркетинговой акции &laquo;Розыгрыш телевизора&raquo; (далее&nbsp;&mdash; Акция)</p>
                <p>Кто может участвовать в&nbsp;Акции</p>
                <ul>
                    <li>Участниками Акции являются физические лица, покупатели ООО «Одас» (далее — Участники), заключившие договор купли-продажи в отношении нового автомобиля LADA c ООО «Одас» (далее —Продавец).</li>
                </ul>
                <p>Как участвовать в&nbsp;Акции</p>
                <ol>Заключите договор купли-продажи в отношении нового автомобиля LADA с Продавцом в период с 1 по 25 января 2020 года.</ol>
                <p>Выбор победителя и&nbsp;получение приза</p>
                <ol>
                    <li>До 25 января 2021 года с помощью генератора случайных чисел (randstuff.ru/NUMBER) Продавец определит Победителя и опубликует результаты Акции на сайте https://brightpark.ru
Победитель и Призер получат Приз — Телевизор LED черный (диагональ экрана не менее 28 дюймов).</li>
                <p>Для передачи Приза Продавец свяжется с победителем в течение 30 рабочих дней с момента объявления Победителя или Призера.</p>
                <p>Период проведения настоящей Акции: с 1 по 25 января 2021 года включительно.</p>
                <p>В Акции можно принять участие только один раз, независимо от количества приобретенных автомобилей.</p>
                <p>Продавец при выдаче Приза выступает налоговым агентом и исполняет обязанность по правильному и своевременному исчислению, удержанию налога на доходы физических лиц и перечислению налога в бюджетную систему РФ.</p>
                </ol>
                <p>Заключительные положения</p>
                <ul>
                    <li>Продавец не&nbsp;несет ответственности за&nbsp;неисполнение либо ненадлежащее исполнение своих обязательств перед Участниками настоящей Акции вследствие сбоев в&nbsp;телекоммуникационных и&nbsp;энергетических сетях, действий вредоносных программ, недобросовестных действий третьих лиц.</li>
                    <li>Все вопросы по&nbsp;проведению настоящей Акции необходимо адресовать Продавцу по&nbsp;адресу: 614077, г. Пермь, ул. Пушкарская, д.&nbsp;138</li>
                    <li>Настоящая Акция является публичной. Продавец вправе вносить изменения в&nbsp;условия Акции, путем размещения актуальной версии условий Акции на&nbsp;сайте Продавца <a href="https://brightpark.ru">https://brightpark.ru/</a></li>
                    <li>Принимая участия в&nbsp;настоящей Акции все Участники, ставшие Победителями или Призерами соглашаются, что Продавец вправе использовать их&nbsp;персональные данные, фото, видеоизображения, аудиозаписи и&nbsp;ссылки на&nbsp;Посты в&nbsp;целях размещения этой информации в&nbsp;соцсетях, в&nbsp;сети Интернет, на&nbsp;своем web-сайте, а&nbsp;также для информирования третьих лиц о&nbsp;том, что данный Участник выиграл приз. Использование фото и&nbsp;видеоизображений Победителя с&nbsp;точки зрения считается позированием за&nbsp;плату с&nbsp;точки зрения ст.152.1&nbsp;ГКРФ и&nbsp;не&nbsp;требует дополнительного согласия гражданина и&nbsp;выплаты дополнительного вознаграждения.</li>
                    <li>Данная акция не&nbsp;является лотереей или азартной игрой, основанной на&nbsp;риске и&nbsp;не&nbsp;требует внесения платы за&nbsp;участие. Победитель определяется с&nbsp;помощью математического алгоритма, без применения какого-либо лотерейного оборудования. Акция направлена на&nbsp;стимулирование продаж автомобилей LADA, продаваемых ООО &laquo;Одас&raquo;.</li>
                </ul>
                <p>Организатор Акции</p>
                <p>Общество с&nbsp;ограниченной ответственностью &laquo;Одас&raquo; (614077, г. Пермь, ул. Пушкарская, д.&nbsp;138)
                </p>
                ',
                'text_short' => 'Условия маркетинговой акции &laquo;Розыгрыш телевизора&raquo; (далее&nbsp;&mdash; Акция)',
                'preview' => '/images/stocks/brajt_park_rabotaet_onlajn.jpg',
                'slug' => 'rozygrysh-televizora',
                'city_id' => 0,
                'sort' => 9,
            ],
            [
                'title' => 'Подарки на все времена!',
                'text' => '<p>Новая LADA у&nbsp;официального дилера Брайт Парк от&nbsp;495&nbsp;900&nbsp;рублей, с&nbsp;выгодой до&nbsp;138&nbsp;000&nbsp;рублей, и&nbsp;кредит c&nbsp;отсрочкой по&nbsp;платежу на&nbsp;3&nbsp;месяца. КАСКО и&nbsp;зимние шины в&nbsp;подарок!</p>
                            <p>Все это возможно в&nbsp;Брайт Парке</p>
                           <p>Получите подарки и&nbsp;специальную выгоду, позвонив по&nbsp;телефону: <span class="callibri_tel">+7 (342) 225 09 21</span></p>
                            <p>* Предложение ограничено и&nbsp;не&nbsp;является публичной офертой. Подробности и&nbsp;сроки акции уточняйте по&nbsp;телефону: <span class="callibri_tel">+7 (342) 225 09 21</span></p>
                ',
                'text_short' => 'Новая LADA у&nbsp;официального дилера Брайт Парк от&nbsp;495&nbsp;900&nbsp;рублей, с&nbsp;выгодой до&nbsp;138&nbsp;000&nbsp;рублей, и&nbsp;кредит c&nbsp;отсрочкой по&nbsp;платежу на&nbsp;3&nbsp;месяца. КАСКО и&nbsp;зимние шины в&nbsp;подарок!',
                'preview' => '/images/stocks/podarki-na-vse-vremena.jpg',
                'slug' => 'podarki-na-vse-vremena',
                'city_id' => 0,
                'sort' => 12,
            ],
            [
                'title' => 'Новая LADA без переплаты!',
                'text' => '<p>Рассрочка без %-ов!</p>
                            <p>Все это возможно в&nbsp;Брайт Парке</p>
                           <p>Ставка&nbsp;0% по&nbsp;кредиту сроком на&nbsp;6&nbsp;лет!<br>
Представляем вам рассрочку сроком на&nbsp;6&nbsp;лет, без первоначального взноса, всего по&nbsp;двум документам!</p>
                            <p>Получите специальную выгоду, позвонив по телефону: <span class="callibri_tel">+7 (342) 225 09 03</span></p>
                            <p>* Предложение ограничено и&nbsp;не&nbsp;является публичной офертой. Подробности и&nbsp;сроки акции уточняйте по&nbsp;телефону: <span class="callibri_tel">+7 (342) 225 09 03</span></p>
                ',
                'text_short' => 'Представляем вам рассрочку сроком на&nbsp;6&nbsp;лет, без первоначального взноса, всего по&nbsp;двум документам!',
                'preview' => '/images/stocks/novaya-lada-bez-pereplaty.jpg',
                'slug' => 'novaya-lada-bez-pereplaty',
                'city_id' => 0,
                'sort' => 13,
            ],
            [
                'title' => 'Платим платежи за вас!',
                'text' => '<p>Каждый 12-платеж в&nbsp;подарок!</p>
                            <p>Оплата производится вами в&nbsp;течении 11&nbsp;месяцев, а&nbsp;12&nbsp;месяц за&nbsp;вас платит наш дилерский центр.<br>
Мы&nbsp;даем вам возможность оформить кредит на&nbsp;новый автомобиль:</p>
                            <ul>
                                <li>без ПВ,</li>
                                <li>без справок и&nbsp;доходов,</li>
                                <li>всего по&nbsp;двум документам,</li>
                                <li>с&nbsp;индвидуальным процентом и&nbsp;ежемесячным платежом,</li>
                                <li>с&nbsp;подарками и&nbsp;бонусами от&nbsp;Брайт Парка,</li>
                                <li>с&nbsp;большим выбором кредитных программ.</li>
                            </ul>
                            <p>Получите специальную выгоду, позвонив по&nbsp;телефону: <span class="callibri_tel">+7 (342) 225 09 03</span></p>
                ',
                'text_short' => 'Платим платежи за&nbsp;вас! Каждый 12-платеж в&nbsp;подарок! Оплата производится вами в&nbsp;течении 11&nbsp;месяцев, а&nbsp;12&nbsp;месяц за&nbsp;вас платит наш дилерский центр.',
                'preview' => '/images/stocks/platim-platezhi-za-vas.jpg',
                'slug' => 'platim-platezhi-za-vas',
                'city_id' => 0,
                'sort' => 14,
            ],
            [
                'title' => 'Новый XRAY от 679 900 рублей!',
                'text' => '<p>Покупайте новый автомобиль у&nbsp;официального дилера от&nbsp;679&nbsp;900&nbsp;рублей + КАСКО + Подарок.</p>
                            <p>Получите подарки и специальную выгоду, позвонив по&nbsp;телефону:&nbsp;<span class="callibri_tel">+7 (342) 225 09 03</span></p>
                            <p>* Предложение ограничено и не является публичной офертой. Подробности и сроки акции уточняйте по&nbsp;телефону:&nbsp;<span class="callibri_tel">+7 (342) 225 09 03</span></p>
                ',
                'text_short' => 'Покупайте новый автомобиль у официального дилера от 679 900 рублей + КАСКО + Подарок.',
                'preview' => '/images/stocks/novyj-xray-ot-679-900-rublej.jpg',
                'slug' => 'novyj-xray-ot-679-900-rublej',
                'city_id' => 0,
                'sort' => 15,
            ],
            [
                'title' => 'Особые условия для пенсионеров',
                'text' => '<p>Пенсионный плюс! Если вы&nbsp;пенсионер и&nbsp;решили приобрести LADA&nbsp;&mdash; в&nbsp;Брайт Парке вы&nbsp;в&nbsp;плюсе!</p>
                            <p>Предоставив пенсионное удостоверение, вы&nbsp;можете получить специальную выгоду при покупке автомобиля.</p>
                            <p>Все выгоды носят индивидуальный характер. Вы&nbsp;так&nbsp;же можете воспользоваться предложением по&nbsp;обмену и&nbsp;кредиту.</p>
                ',
                'text_short' => 'Предоставив пенсионное удостоверение, вы&nbsp;можете получить специальную выгоду при покупке автомобиля.',
                'preview' => '/images/stocks/osobye-usloviya-dlya-pensionerov.jpg',
                'slug' => 'osobye-usloviya-dlya-pensionerov',
                'city_id' => 0,
                'sort' => 16,
            ],
            [
                'title' => 'Ликвидация склада 2021',
                'text' => '<p>Последние авто по&nbsp;ценам 2020. Распродаем автомобили 2020 года с&nbsp;дополнительными выгодами и&nbsp;подарками!</p>
                            <p>Получите подарки и&nbsp;специальную выгоду, позвонив по&nbsp;телефону: <span class="callibri_tel">+7&nbsp;(342)&nbsp;225&nbsp;09&nbsp;07</span></p>
                            <p>* Предложение ограничено и&nbsp;не&nbsp;является публичной офертой. Подробности и&nbsp;сроки акции уточняйте по&nbsp;телефону: <span class="callibri_tel">+7&nbsp;(342)&nbsp;225&nbsp;09&nbsp;07</span></p>
                ',
                'text_short' => 'Последние авто по&nbsp;ценам 2020. Распродаем автомобили 2020 года с&nbsp;дополнительными выгодами и&nbsp;подарками!',
                'preview' => '/images/stocks/likvidaciya-sklada-2021.jpg',
                'slug' => 'likvidaciya-sklada-2021',
                'city_id' => 0,
                'sort' => 17,
            ],
            [
                'title' => 'Первый автомобиль',
                'text' => '<p>Первый авто? Открой мир LADA вместе с&nbsp;Брайт Парком</p>
                            <p>Рассматриваешь покупку первого авто? Получи специальную выгоду при покупке LADA в&nbsp;Брайт Парке</p>
                            <p>Новая LADA от&nbsp;2&nbsp;700&nbsp;руб.&nbsp;/ мес.</p>
                            <p>* Предложение ограничено и&nbsp;не&nbsp;является публичной офертой. Подробности и&nbsp;сроки акции уточняйте по&nbsp;телефону: <span class="callibri_tel">+7&nbsp;(342)&nbsp;225&nbsp;09&nbsp;03</span></p>
                ',
                'text_short' => 'Первый авто? Открой мир LADA вместе с&nbsp;Брайт Парком! Получи специальную выгоду при покупке LADA в&nbsp;Брайт Парке',
                'preview' => '/images/stocks/pervyj-avtomobil.jpg',
                'slug' => 'pervyj-avtomobil',
                'city_id' => 0,
                'sort' => 18,
            ],
            [
                'title' => 'Формула кредита в Брайт Парке',
                'text' => '<p>Новая формула: 0% + 0% + подарки</p>
                            <p>В Брайт парке максимально интересные условия при покупке новой LADA в кредит:</p>
                            <ul>
                                <li>Рассрочка, 0%.</li>
                                <li>Первоначальный взнос, 0%.</li>
                                <li>Платежи в&nbsp;подарок.</li>
                                <li>Срок кредита&nbsp;&mdash; до&nbsp;6&nbsp;лет.</li>
                                <li>КАСКО в&nbsp;подарок.</li>
                            </ul>
                            <p>Получите индивидуальную выгоду, позвонив по&nbsp;телефону: <span class="callibri_tel">+7&nbsp;(342)&nbsp;225&nbsp;09&nbsp;03</span></p>
                            <p>* Предложение ограничено и&nbsp;не&nbsp;является публичной офертой. Подробности и&nbsp;сроки акции уточняйте по&nbsp;телефону: <span class="callibri_tel">+7&nbsp;(342)&nbsp;225&nbsp;09&nbsp;03</span></p>
                ',
                'text_short' => 'Новая формула: 0% + 0% + подарки. В Брайт парке максимально интересные условия при покупке новой LADA в кредит',
                'preview' => '/images/stocks/formula-kredita-v-brajt-parke.jpg',
                'slug' => 'formula-kredita-v-brajt-parke',
                'city_id' => 0,
                'sort' => 19,
            ],
            [
                'title' => 'Новая GRANTA от&nbsp;495&nbsp;900&nbsp;рублей!',
                'text' => '<p>Покупайте новый автомобиль у&nbsp;официального дилера от&nbsp;495&nbsp;900 рублей + КАСКО + Подарок.</p>
                            <p>Получите подарки и&nbsp;специальную выгоду, позвонив по&nbsp;телефону: <span class="callibri_tel">+7&nbsp;(342)&nbsp;225&nbsp;09&nbsp;03</span></p>
                            <p>* Предложение ограничено и&nbsp;не&nbsp;является публичной офертой. Подробности и&nbsp;сроки акции уточняйте по&nbsp;телефону: <span class="callibri_tel">+7&nbsp;(342)&nbsp;225&nbsp;09&nbsp;03</span></p>
                ',
                'text_short' => 'Покупайте новый автомобиль у&nbsp;официального дилера от&nbsp;495&nbsp;900&nbsp;рублей.',
                'preview' => '/images/stocks/novaya-granta-ot-495-900-rublej.jpg',
                'slug' => 'novaya-granta-ot-495-900-rublej',
                'city_id' => 0,
                'sort' => 20,
            ],
            [
                'title' => 'Держим &minus;15% на&nbsp;LADA!',
                'text' => '<p>Выгода апреля на&nbsp;новую LADA в&nbsp;Брайт Парке!</p>
                            <p>Дарим выгоду до&nbsp;15&nbsp;% на&nbsp;покупку нового автомобиля LADA у&nbsp;официального дилера Брайт Парк.</p>
                            <p>Получите специальную выгоду, позвонив по&nbsp;телефону: <span class="callibri_tel">+7&nbsp;(342)&nbsp;225&nbsp;06&nbsp;34</span></p>
                            <p>* Предложение ограничено и&nbsp;не&nbsp;является публичной офертой. Подробности и&nbsp;сроки акции уточняйте по&nbsp;телефону: <span class="callibri_tel">+7&nbsp;(342)&nbsp;225&nbsp;06&nbsp;34</span></p>
                ',
                'text_short' => 'Дарим выгоду до&nbsp;15&nbsp;% на&nbsp;покупку нового автомобиля LADA у&nbsp;официального дилера Брайт Парк.',
                'preview' => '/images/stocks/derzhim-minus-15-na-nbsp-lada.jpg',
                'slug' => 'derzhim-minus-15-na-nbsp-lada',
                'city_id' => 0,
                'sort' => 21,
            ],
            [
                'title' => 'ВЕСЕННЯЯ КОЛЛЕКЦИЯ ПОДАРКОВ!',
                'text' => '<p>Весенние подарки!</p>
                            <p>Приобретая новую LADA весной в&nbsp;Брайт Парке вы&nbsp;получаете очень выгодное предложение:</p>
                            <ul>
                                <li>Выгода на&nbsp;покупку LADA до&nbsp;15%.</li>
                                <li>3&nbsp;платежа по&nbsp;кредиту в&nbsp;подарок.</li>
                                <li>Бесплатное сервисное обслуживание на&nbsp;2&nbsp;года.</li>
                            </ul>
                            <p>Узнайте подробности акции, позвонив по&nbsp;телефону: <span class="callibri_tel">+7&nbsp;(342)&nbsp;225&nbsp;09&nbsp;20</span></p>
                ',
                'text_short' => 'Приобретая новую LADA весной в&nbsp;Брайт Парке вы&nbsp;получаете очень выгодное предложение.',
                'preview' => '/images/stocks/vesennyaya-kollekciya-podarkov.jpg',
                'slug' => 'vesennyaya-kollekciya-podarkov',
                'city_id' => 0,
                'sort' => 22,
            ],
            [
                'title' => 'Новая Vesta от&nbsp;713&nbsp;900&nbsp;рублей!',
                'text' => '<p>Новая Vesta от&nbsp;713&nbsp;900 рублей + КАСКО + Подарок!</p>
                            <p>Покупайте новый автомобиль у&nbsp;официального дилера от&nbsp;713&nbsp;900&nbsp;рублей.</p>
                            <p>Получите подарки и&nbsp;специальную выгоду, позвонив по&nbsp;телефону: <span class="callibri_tel">+7&nbsp;(342)&nbsp;225&nbsp;09&nbsp;20</span></p>
                            <p>* Предложение ограничено и&nbsp;не&nbsp;является публичной офертой. Подробности и&nbsp;сроки акции уточняйте по&nbsp;телефону: <span class="callibri_tel">+7&nbsp;(342)&nbsp;225&nbsp;09&nbsp;20</span></p>
                ',
                'text_short' => 'Покупайте новый автомобиль у&nbsp;официального дилера от&nbsp;713&nbsp;900&nbsp;рублей.',
                'preview' => '/images/stocks/novaya-vesta-ot-713-900-rublej.jpg',
                'slug' => 'novaya-vesta-ot-713-900-rublej',
                'city_id' => 0,
                'sort' => 23,
            ],
        ];

        DB::table('stocks')->insert($stocks);
    }
}
