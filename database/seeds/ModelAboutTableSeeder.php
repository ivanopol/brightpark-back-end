<?php

use Illuminate\Database\Seeder;

class ModelAboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model_about = [
            // Granta sedan
            [
                'model_id' => 1,
                'type_id' => 1,
                'image' => 'granta-sedan-exterior.jpg',
                'image_mobile' => 'granta-sedan-exterior.png',
                'title' => 'НОВОЕ ПРОЧТЕНИЕ КЛАССИКИ',
                'description' => 'Современный, рациональный, комфортный. Седан со вместительным багажником, который гармонично вписан в стремительную форму кузова. Как тот самый костюм, который подходит к любой фигуре. Как фильм, который видели все: всегда интересный и по-новому актуальный.',
                'type' => 'exterior',
            ],
            [
                'model_id' => 1,
                'type_id' => 1,
                'image' => 'granta-sedan-interior.jpg',
                'image_mobile' => 'granta-sedan-interior.png',
                'title' => 'УЮТ ДЛЯ КАЖДОГО',
                'description' => 'О чем мечтает водитель? Сесть за руль и почувствовать, что автомобиль как будто создан специально для него. Чего ждет пассажир? Удобно устроиться в мягком кресле и расслабиться, глядя в окно. Просторный салон, практичные обивки. Мультимедиа с качественным звуком и информативным экраном. Эффективный кондиционер и прекрасная обзорность. Из множества этих деталей складывается комфорт для каждого как в короткой поездке, так и в длительном путешествии.',
                'type' => 'interior',
            ],
            [
                'model_id' => 1,
                'type_id' => 1,
                'image' => 'granta-sedan-comfort.jpg',
                'image_mobile' => 'granta-sedan-comfort.png',
                'title' => 'КОМФОРТ БЕЗ КОМПРОМИССОВ',
                'description' => 'Привычно, понятно и эргономично — в этом автомобиле чувствуешь себя как дома. Фамильная черта LADA Granta — мягкие, удобные передние сиденья с широким диапазоном продольной регулировки: такой салон с готовностью примет человека любого роста. Каждая кнопка и рукоятка — на своем месте, и все настроено на комфорт и практичность — от хорошо читаемой подсветки приборов до эффективного пакета шумоизоляции. От селектора коробки передач до кнопки открывания багажника.',
                'type' => 'comfort',
            ],
            [
                'model_id' => 1,
                'type_id' => 1,
                'image' => 'granta-sedan-safety.jpg',
                'image_mobile' => 'granta-sedan-safety.png',
                'title' => 'ОСНОВА БЕЗОПАСНОСТИ',
                'description' => 'Автомобиль с хорошей обзорностью и управляемостью по-настоящему раскрывает способности водителя. Помогает ориентироваться на дороге, быстро и эффективно реагировать. И всегда держит наготове невидимые средства защиты: АБС с усилителем экстренного торможения, подушки безопасности, ремни с преднатяжителями, систему оповещения «ЭРА-ГЛОНАСС». Проверять и испытывать их необязательно, но знать о них — нужно.',
                'type' => 'safety',
            ],
            // Granta liftback
            [
                'model_id' => 1,
                'type_id' => 2,
                'image' => 'granta-liftback-exterior.jpg',
                'image_mobile' => 'granta-liftback-exterior.png',
                'title' => 'ЧУВСТВО СТИЛЯ',
                'description' => 'Мы разные. Кто-то ценит вместительные автомобили, кто-то без ума от компактных. Один обожает скорость, а другому нужна хорошая проходимость. Кто-то выбирает практичность, а кто-то предпочитает дизайн с изюминкой. Множество характеров и темпераментов объединяет этот автомобиль — LADA Granta со стильным кузовом лифтбек.',
                'type' => 'exterior',
            ],
            [
                'model_id' => 1,
                'type_id' => 2,
                'image' => 'granta-sedan-interior.jpg',
                'image_mobile' => 'granta-sedan-interior.png',
                'title' => 'ПРОСТОРНО И УДОБНО',
                'description' => 'Ощущение, важное для каждого водителя, — сесть за руль и почувствовать, что интерьер автомобиля спроектирован специально для него. О чем мечтает пассажир? Удобно устроиться в мягком кресле и расслабиться, получая удовольствие от поездки. Просторный автомобиль, стильная отделка и практичные материалы. Мультимедиа с качественным звуком. Комфортный микроклимат и прекрасная обзорность. Из множества этих деталей складывается комфорт для каждого, как в короткой поездке, так и в длительном путешествии.',
                'type' => 'interior',
            ],
            [
                'model_id' => 1,
                'type_id' => 2,
                'image' => 'granta-sedan-comfort.jpg',
                'image_mobile' => 'granta-sedan-comfort.png',
                'title' => 'КОМФОРТ В ЛЮБЫХ УСЛОВИЯХ',
                'description' => 'Granta создана в лучших традициях марки LADA: быть удобной для всех, при любой нагрузке и в любых климатических и дорожных условиях. Энергоемкая подвеска сохраняет комфорт на дороге самого разного качества. Просторный пятиместный салон не только удобен, но и практичен: задний диван складывается в пропорции 2/3.',
                'type' => 'comfort',
            ],
            [
                'model_id' => 1,
                'type_id' => 2,
                'image' => 'granta-liftback-safety.jpg',
                'image_mobile' => 'granta-liftback-safety.png',
                'title' => 'ПОД ЗАЩИТОЙ LADA GRANTA',
                'description' => 'Благодаря проработанной силовой структуре кузова и современным системам безопасности LADA Granta выполняет жесткие требования по защите водителя, пассажиров и пешеходов. Уже в базовой версии LADA Granta оснащается подушкой безопасности водителя, 3-точечными задними ремнями безопасности, сигнализатором незастегнутого ремня безопасности водителя, креплением детских удерживающих устройств (ISOFIX), дневными ходовыми огнями в фарах.',
                'type' => 'safety',
            ],
            // Granta hatchback
            [
                'model_id' => 1,
                'type_id' => 6,
                'image' => 'granta-hatchback-exterior.jpg',
                'image_mobile' => 'granta-hatchback-exterior.png',
                'title' => 'ЭНЕРГИЧНЫЙ ХАРАКТЕР',
                'description' => 'Компакт-кар для ежедневных поездок по городским улицам. Первый автомобиль, благодаря которому влюбляешься в дорогу и движение. Основа болида для любительских гонок. Молодежный, эмоциональный, оптимистичный — иного имиджа у этого автомобиля и быть не может.',
                'type' => 'exterior',
            ],
            [
                'model_id' => 1,
                'type_id' => 6,
                'image' => 'granta-sedan-interior.jpg',
                'image_mobile' => 'granta-sedan-interior.png',
                'title' => 'УСТРАИВАЙТЕСЬ ПОУДОБНЕЙ',
                'description' => 'Просторный салон, современный дизайн и практичные материалы. Мультимедиа с качественным звуком. Комфортный микроклимат и прекрасная обзорность. LADA Granta располагает к себе с первых секунд — в этом особенный талант автомобиля.',
                'type' => 'interior',
            ],
            [
                'model_id' => 1,
                'type_id' => 6,
                'image' => 'granta-sedan-comfort.jpg',
                'image_mobile' => 'granta-sedan-comfort.png',
                'title' => 'СОЧЕТАЯ САМОЕ ЛУЧШЕЕ',
                'description' => 'Компактный внешне, просторный внутри. Быстрый, но экономичный. Способный одинаково успешно ездить в городе, на трассе и по проселку. Красивый и комфортный, недорогой. Кому-то покажется, что автомобиль не может сочетать так много плюсов. Но у нас есть LADA Granta.',
                'type' => 'comfort',
            ],
            [
                'model_id' => 1,
                'type_id' => 6,
                'image' => 'granta-hatchback-safety.jpg',
                'image_mobile' => 'granta-hatchback-safety.png',
                'title' => 'БЕЗОПАСНОСТЬ КАК ОСНОВА АВТОМОБИЛЯ',
                'description' => 'LADA Granta — это безопасность ежедневных поездок и путешествий. Высокая посадка водителя гарантирует отличную обзорность, а прочный каркас кузова и электронные системы безопасности надежно защищают водителя и пассажиров. Высокий уровень активной и пассивной безопасности обеспечивает множество элементов конструкции — от дневных ходовых огней до системы экстренного оповещения «ЭРА-ГЛОНАСС» и фронтальных подушек безопасности.',
                'type' => 'safety',
            ],
            // Granta universal
            [
                'model_id' => 1,
                'type_id' => 3,
                'image' => 'granta-universal-exterior.jpg',
                'image_mobile' => 'granta-universal-exterior.png',
                'title' => 'ДОРОГА, ПОЛНАЯ ОТКРЫТИЙ',
                'description' => 'Поездка за покупками — как увлекательный квест. Перевозка мебели на дачу — как силовая тренировка на свежем воздухе. Путешествие на море — как приключение, к которому долго готовишься, а потом вспоминаешь годами. Вы умеете превращать любое дело в нечто интересное и увлекательное? Если еще нет, этот автомобиль может вам помочь!',
                'type' => 'exterior',
            ],
            [
                'model_id' => 1,
                'type_id' => 3,
                'image' => 'granta-sedan-interior.jpg',
                'image_mobile' => 'granta-sedan-interior.png',
                'title' => 'ВНИМАНИЕ К КАЖДОМУ',
                'description' => 'Чего ожидает водитель? Сесть в автомобиль и ощутить, что интерьер спроектирован специально для него. О чем мечтает пассажир? Об удобстве мягкого кресла и комфортной поездке под приятную музыку. Вместительный автомобиль, продуманное сочетание стиля и практичности. Мультимедиа с качественным звуком. Комфортный микроклимат и прекрасная обзорность. LADA Granta удобна для каждого, как в ежедневных поездах, так и в дальних путешествиях.',
                'type' => 'interior',
            ],
            [
                'model_id' => 1,
                'type_id' => 3,
                'image' => 'granta-sedan-comfort.jpg',
                'image_mobile' => 'granta-sedan-comfort.png',
                'title' => 'ПРИЯТНО НА ВИД И НА ОЩУП',
                'description' => 'LADA Granta дружелюбна к водителю и пассажиру. Посадка в автомобиль удобна благодаря широко раскрывающимся дверям и большим дверным проемам. Комфортные сиденья, достаточный запас пространства над головой — LADA Granta щедро делится чувством уюта. Эргономика водительского места: логичное и понятное расположение органов управления, высокая посадка. А большие зеркала в сочетании с низкой подоконной линией гарантируют отличную обзорность.',
                'type' => 'comfort',
            ],
            [
                'model_id' => 1,
                'type_id' => 3,
                'image' => 'granta-universal-safety.jpg',
                'image_mobile' => 'granta-universal-safety.png',
                'title' => 'БЕЗОПАСНОСТЬ В КАЖДОЙ ДЕТАЛИ',
                'description' => 'Мир скоростей требует повышенного внимания и высокотехнологичных систем безопасности. Поэтому у LADA Granta — проработанная силовая структура кузова и современные решения для защиты водителя и пассажиров: фронтальные подушки безопасности и АБС с усилителем экстренного торможения.',
                'type' => 'safety',
            ],
            // Granta Drive Active
            [
                'model_id' => 1,
                'type_id' => 5,
                'image' => 'granta-drive-active-exterior.jpg',
                'image_mobile' => 'granta-drive-active-exterior.png',
                'title' => 'СТИЛЬ, ДРАЙВ, СКОРОСТЬ',
                'description' => 'Заниженный силуэт, гармоничные пропорции. Комбинация чёрного глянца и полированного металла, рельефная поверхность обвеса и красная линия на бамперах — как магнит для восхищенных взглядов. Именно так выглядит заводской тюнинг, рожденный опытом гонок и работой в аэродинамической трубе.',
                'type' => 'exterior',
            ],
            [
                'model_id' => 1,
                'type_id' => 5,
                'image' => 'granta-drive-active-interior.jpg',
                'image_mobile' => 'granta-drive-active-interior.png',
                'title' => 'СПОРТИВНАЯ АТМОСФЕРА',
                'description' => 'Ладонями, глазами, всем своим существом ощущаешь, что это необычный автомобиль. Контрастная строка и противоскользящие материалы, яркая подсветка и перфорированная кожа, вставки с карбоновой структурой… Множество деталей дерзкого седана заявляют: он настроен на спортивное вождение.',
                'type' => 'interior',
            ],
            [
                'model_id' => 1,
                'type_id' => 5,
                'image' => 'granta-drive-active-comfort.jpg',
                'image_mobile' => 'granta-drive-active-comfort.png',
                'title' => 'НАСТРОЕН НА СПОРТ И НА КОМФОРТ',
                'description' => 'Анатомическое кресло. Черно-красная гамма интерьера. Предвкушение скорости. Поворот ключа зажигания… Разгон, торможение, поворот, снова разгон и бесконечная лента асфальта. Поездка, которую хочется продлить хоть еще немного. Настроить микроклимат в салоне, включить музыку и наслаждаться комфортным и послушным автомобилем.',
                'type' => 'comfort',
            ],
            [
                'model_id' => 1,
                'type_id' => 5,
                'image' => 'granta-drive-active-safety.jpg',

                'image_mobile' => 'granta-drive-active-safety.png',
                'title' => 'НЕВИДИМАЯ ЗАЩИТА',
                'description' => 'Системы безопасности особенно хороши тем, что их не замечаешь. Просто постепенно начинаешь все более уверенно водить. Видеть чуть дальше, реагировать быстрее. Автомобиль как будто повышает квалификацию водителя. А электронные системы безопасности и энергопоглощающие элементы кузова всегда наготове. Хоть и незаметны.',
                'type' => 'safety',
            ],
            // Granta Cross
            [
                'model_id' => 1,
                'type_id' => 4,
                'image' => 'granta-cross-exterior.jpg',
                'image_mobile' => 'granta-cross-exterior.png',
                'title' => 'ВНЕДОРОЖНАЯ ДНК',
                'description' => 'Там, где кончается дорога, начинается настоящая жизнь. Это прекрасно знает автомобиль, заряженный энергией кроссовера. Энергией открывать, достигать, внушать уверенность каждым элементом дизайна. 198 миллиметров клиренса, прочный обвес кузова, рейлинги — это и функционал, и часть внедорожного образа.',
                'type' => 'exterior',
            ],
            [
                'model_id' => 1,
                'type_id' => 4,
                'image' => 'granta-cross-interior.jpg',
                'image_mobile' => 'granta-cross-interior.png',
                'title' => 'ЯРКИЕ МОМЕНТЫ',
                'description' => 'Что вдохновляет и создает настроение? Предвкушение дороги. Музыка, которая проникает прямо в сердце и, конечно, эмоциональный стиль LADA Granta Cross. Цветные и глянцевые вставки в интерьере, оранжевые тона в комбинации приборов, контрастная строчка на сиденьях — несколько акцентов, которые красиво выглядят и настраивают на позитив.',
                'type' => 'interior',
            ],
            [
                'model_id' => 1,
                'type_id' => 4,
                'image' => 'granta-cross-comfort.jpg',
                'image_mobile' => 'granta-cross-comfort.png',
                'title' => 'ПУТЕШЕСТВИЯ С КОМФОРТОМ',
                'description' => 'Просторный салон, удобные сиденья. Энергоемкая подвеска и улучшенная шумоизоляция. С первого взгляда и с первого километра становится ясно — этот автомобиль создан для путешествий в комфортной обстановке. Круиз-контроль, обогрев лобового стекла, легкая тонировка, воздуховоды для ног пассажиров — Granta Cross готова радовать и в ежедневных, и в дальних поездках.',
                'type' => 'comfort',
            ],
            [
                'model_id' => 1,
                'type_id' => 4,
                'image' => 'granta-cross-safety.jpg',
                'image_mobile' => 'granta-cross-safety.png',
                'title' => 'ТЕХНИКА БЕЗОПАСНОСТИ',
                'description' => 'Уверенное движение по шоссе, маневры на грунтовке и в тесноте городских кварталов: отличная обзорность автомобиля дополняется парктроником и камерой заднего вида. А электронные системы и просчитанная силовая схема кузова обеспечивают надёжную защиту водителя и пассажиров.',
                'type' => 'safety',
            ],
            // Vesta Sedan
            [
                'model_id' => 2,
                'type_id' => 1,
                'image' => 'sedan_exterior.jpg',
                'image_mobile' => 'sedan_exterior.png',
                'title' => 'ПРИЯТНО ОГЛЯНУТЬСЯ',
                'description' => 'Со временем привыкаешь к красоте. К идеальным пропорциям, к сбалансированному силуэту. К каждой выверенной и законченной линии. Но LADA Vesta умеет вызывать эмоции снова и снова. Достаточно взглянуть под другим ракурсом. К примеру, через плечо, оставляя свой автомобиль на парковке.',
                'type' => 'exterior',
            ],
            [
                'model_id' => 2,
                'type_id' => 1,
                'image' => 'sedan_interior.jpg',
                'image_mobile' => 'sedan_interior.png',
                'title' => 'ПРОСТРАНСТВО ДЛЯ ВСЕЙ СЕМЬИ',
                'description' => 'У LADA Vesta самый просторный салон в классе. Здесь можно расслабиться после трудного дня, с удовольствием вытягивая ноги. Можно зарядиться энергией, чтобы ворваться в новое утро. Здесь мы делимся событиями прошедшего дня и планируем будущие путешествия. Автомобиль по-настоящему объединяет нас, ведь пространства в салоне предостаточно!',
                'type' => 'interior',
            ],
            [
                'model_id' => 2,
                'type_id' => 1,
                'image' => 'sedan_comfort.jpg',
                'image_mobile' => 'sedan_comfort.png',
                'title' => 'КОМФОРТ КАК ОСНОВА LADA VESTA',
                'description' => 'Каждый может настроить LADA Vesta под себя — для автомобиля предусмотрено много опций. Но есть такие качества, которые не зависят от цены и комплектации. Это продуманная эргономика водительского места, эффективная шумоизоляция и легкость управления.',
                'type' => 'comfort',
            ],
            [
                'model_id' => 2,
                'type_id' => 1,
                'image' => 'sedan_safety.jpg',
                'image_mobile' => 'sedan_safety.png',
                'title' => 'ГЛАВНОЕ РЕШЕНИЕ ПРИНЯТО',
                'description' => 'Скорость — это не только удовольствие от вождения, это ответственность и внимание. На трассе или на улицах города мы ежеминутно делаем множество маленьких, но важных решений. Главное из которых уже принято, когда был выбран безопасный автомобиль.',
                'type' => 'safety',
            ],
            // Vesta SW
            [
                'model_id' => 2,
                'type_id' => 7,
                'image' => 'sw_exterior.jpg',
                'image_mobile' => 'sw_exterior.png',
                'title' => 'СТИЛЬ СЕМЕЙНОГО АВТОМОБИЛЯ',
                'description' => 'К красоте, к идеальным пропорциям и сбалансированному силуэту со временем привыкаешь. Но иногда эмоции вспыхивают с новой силой. Достаточно увидеть автомобиль под иным углом. Издалека. Из окна. На семейной фотографии из путешествия.',
                'type' => 'exterior',
            ],
            [
                'model_id' => 2,
                'type_id' => 7,
                'image' => 'sw_interior.jpg',
                'image_mobile' => 'sw_interior.png',
                'title' => 'ПРОСТРАНСТВО ДЛЯ ВСЕЙ СЕМЬИ',
                'description' => 'У LADA Vesta SW огромный багажник, в которой легко помещаются вещи для всей семьи. А внутри автомобиля уютно, как дома. Здесь можно расслабиться после трудного дня, с удовольствием вытягивая ноги. Можно зарядиться энергией, чтобы ворваться в новое утро. Собравшись вместе в салоне Vesta SW, мы делимся событиями прошедшего дня и планируем будущие путешествия. Автомобиль по-настоящему объединяет нас, ведь пространства в нем предостаточно!',
                'type' => 'interior',
            ],
            [
                'model_id' => 2,
                'type_id' => 7,
                'image' => 'sw_interior.jpg',
                'image_mobile' => 'sw_interior.png',
                'title' => 'КОМФОРТ КАК ОСНОВА LADA VESTA',
                'description' => 'Для LADA Vesta SW предусмотрено множество опций, чтобы каждый мог настроить автомобиль под себя, свои увлечения и образ жизни. Но есть такие качества, которые не зависят от цены и комплектации. Это отличная эргономика водительского места, просторный салон, эффективная шумоизоляция и легкость управления.',
                'type' => 'comfort',
            ],
            [
                'model_id' => 2,
                'type_id' => 7,
                'image' => 'sw_safetly.jpg',
                'image_mobile' => 'sw_safetly.png',
                'title' => 'СЕМЕЙНЫЙ — ЗНАЧИТ БЕЗОПАСНЫЙ',
                'description' => 'Управлять динамичным и послушным автомобилем — настоящее удовольствие. Но скорость — это внимание и ответственность. На трассе или на улицах города мы ежеминутно делаем множество незаметных, но важных решений. Главное из которых уже принято, когда в качестве семейного автомобиля выбран современный и безопасный универсал LADA Vesta SW.',
                'type' => 'safety',
            ],
            // Vesta Cross
            [
                'model_id' => 2,
                'type_id' => 4,
                'image' => 'cross_exterior.jpg',
                'image_mobile' => 'cross_exterior.png',
                'title' => 'ХАРАКТЕР, ВЫРАЖЕННЫЙ В ГРАФИКЕ',
                'description' => 'Стреловидные линии светотехники. Мускулистый рельеф боковин с контрастным обвесом. Классический силуэт седана, высоко стоящего на крупных колесах. Неповторимый образ LADA Vesta Cross, открывающий новые возможности и новую гармонию проходимости и скорости.',
                'type' => 'exterior',
            ],
            [
                'model_id' => 2,
                'type_id' => 4,
                'image' => 'cross_interior.jpg',
                'image_mobile' => 'cross_interior.png',
                'title' => 'ЭНЕРГИЯ ЦВЕТА',
                'description' => 'LADA Vesta Сross — это уникальный и контрастный стиль, который особенно выразителен в салоне. Здесь сочетаются яркие и приглушенные оттенки, глянцевая и рифленая поверхности, ткань и цветные вставки из экокожи. При этом можно выбрать цветовую гамму — для Cross-седана предусмотрены серые или оранжевые акценты.',
                'type' => 'interior',
            ],
            [
                'model_id' => 2,
                'type_id' => 4,
                'image' => 'cross_comfort.jpg',
                'image_mobile' => 'cross_comfort.png',
                'title' => 'КОМФОРТ — БАЗОВЫЙ И ОПЦИОНАЛЬНЫЙ',
                'description' => 'Для LADA Vesta доступно множество опций, которые подчеркивают стиль и повышают комфорт. Автомобиль может подстраиваться под разные вкусы, задачи и потребности, но есть такие характеристики, которые не зависят от цены и комплектации. Это удивительно просторный салон, тщательно выстроенная эргономика водительского места, отличная шумоизоляция и азартная управляемость.',
                'type' => 'comfort',
            ],
            [
                'model_id' => 2,
                'type_id' => 4,
                'image' => 'sw_cross_security.jpg',
                'image_mobile' => 'sw_cross_security.png',
                'title' => 'ПРОАКТИВНАЯ ЗАЩИТА',
                'description' => 'Высокий уровень безопасности — часть философии LADA Vesta. Система контроля устойчивости позволяет уверенно маневрировать на дорогах с любым покрытием. Мощный каркас кузова и фронтальные подушки безопасности — это надежная защита водителя и пассажиров.',
                'type' => 'safety',
            ],
            // Vesta SW Cross
            [
                'model_id' => 2,
                'type_id' => 8,
                'image' => 'sw_cross_exterior.jpg',
                'image_mobile' => 'sw_cross_exterior.png',
                'title' => 'ХАРАКТЕР, ВЫРАЖЕННЫЙ В ГРАФИКЕ',
                'description' => 'Стреловидные линии светотехники. Мускулистый рельеф боковин. Ниспадающая линия крыши. LADA Vesta SW Cross всем доказывает, насколько динамично может выглядеть семейный автомобиль.',
                'type' => 'exterior',
            ],
            [
                'model_id' => 2,
                'type_id' => 8,
                'image' => 'sw_cross_interior.jpg',
                'image_mobile' => 'sw_cross_interior.png',
                'title' => 'ЭНЕРГИЯ ЦВЕТА',
                'description' => 'Контрастный стиль LADA Vesta Сross особенно выразителен в салоне. Здесь сочетаются яркие и приглушенные оттенки, глянцевая и рифленая поверхности, ткань и цветные вставки из экокожи. Можно выбрать цветовую гамму — для Cross-версии предусмотрены серые или оранжевые акценты.',
                'type' => 'interior',
            ],
            [
                'model_id' => 2,
                'type_id' => 8,
                'image' => 'sw_cross_comfort.jpg',
                'image_mobile' => 'sw_cross_comfort.png',
                'title' => 'КОМФОРТ КАК ОСНОВА LADA VESTA',
                'description' => 'Для LADA Vesta доступно множество опций, включая «зимний» пакет и специальное исполнение [BLACK]. Каждый может выбрать автомобиль по вкусу и потребностям, но есть такие характеристики, которые не зависят от цены и комплектации. Эти фирменные качества LADA Vesta — по-настоящему просторный салон, продуманная эргономика водительского места, эффективная шумоизоляция и легкость управления на любой дороге.',
                'type' => 'comfort',
            ],
            [
                'model_id' => 2,
                'type_id' => 8,
                'image' => 'sw_cross_security.jpg',
                'image_mobile' => 'sw_cross_security.png',
                'title' => 'ПРОАКТИВНАЯ ЗАЩИТА',
                'description' => 'Высокий уровень безопасности — часть философии LADA Vesta. Система контроля устойчивости позволяет уверенно маневрировать на дорогах с любым покрытием. Мощный каркас кузова и фронтальные подушки безопасности — это надежная защита водителя и пассажиров.',
                'type' => 'safety',
            ],
            // Vesta SW Cross
            [
                'model_id' => 2,
                'type_id' => 10,
                'image' => 'sport_exterior.jpg',
                'image_mobile' => 'sport_exterior.png',
                'title' => 'ДЕМОНСТРАЦИЯ СИЛЫ',
                'description' => 'Приземистый силуэт. Широкие шины на ажурных дисках. Раздвоенный патрубок выхлопной системы. Рельефный обвес кузова. Каждый элемент автомобиля создан во имя скорости, управляемости, аэродинамики. У каждой линии кузова есть своя функция: улучшать характеристики или подчеркивать спортивный стиль, как это делает красная полоска, окаймляющая автомобиль.',
                'type' => 'exterior',
            ],
            [
                'model_id' => 2,
                'type_id' => 10,
                'image' => 'sport_interior.jpg',
                'image_mobile' => 'sport_interior.png',
                'title' => 'КРАСНОЕ И ЧЕРНОЕ',
                'description' => 'Эмоциональные цвета, сочетание которых создает особенное настроение и ожидание ярких впечатлений. Это ощущается с первых секунд, достаточно сесть в кресло с развитой боковой поддержкой, взяться за руль, обшитый противоскользящей кожей.',
                'type' => 'interior',
            ],
            [
                'model_id' => 2,
                'type_id' => 10,
                'image' => 'sport_comfort.jpg',
                'image_mobile' => 'sport_comfort.png',
                'title' => 'СПОРТ И КОМФОРТ',
                'description' => 'У LADA Vesta Sport не только полный набор опций, но и свои особенные элементы комфорта. Передние кресла с развитым профилем, который удобен для скоростного вождения. Оплетка руля и рычага КП, которая не скользит в руке и позволяет лучше контролировать автомобиль. Каждый оригинальный спортивный элемент — шасси, тормоза, шины, система выпуска — настроен не только на скорость, но и на комфорт в повседневных поездках.',
                'type' => 'comfort',
            ],
            [
                'model_id' => 2,
                'type_id' => 10,
                'image' => 'sport_security.jpg',
                'image_mobile' => 'sport_security.png',
                'title' => 'КОНТРОЛЬ НАД СКОРОСТЬЮ',
                'description' => 'Как настоящий спортсмен, этот автомобиль может двигаться красиво и быстро. Его уверенность — в мощных тормозах и специальных настройках подвески, которая держит дорогу при любом качестве асфальта.',
                'type' => 'safety',
            ],
        ];
        DB::table('model_about')->insert($model_about);
    }
}
