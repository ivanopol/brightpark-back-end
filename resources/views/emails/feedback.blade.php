<body>
<p><?php echo ($caption) ? "Форма &laquo;" . $caption . "&raquo;" : ''; ?></p>
<ul>
    <li>Имя: <?php echo $name; ?></li>
    <li>Телефон: <?php echo $phone; ?></li>
    @if($date)
        <li>Дата: {{$date}} <?php echo ($time) ? ", " . $time : ""; ?></li>
    @endif
    @if($gift)
        <li>Подарок: {{$gift}}</li>
    @endif
    @if($car)
        <li>Автомобиль: {{$car}}</li>
    @endif
    <li>Город: <?php echo $city; ?></li>
    <li><a href="<?php echo $url; ?>"><?php echo $url; ?></a></li>
    @if($gift)
        <li>Подарок: {{$gift}}</li>
    @endif
    <li>Комментарий: <?php echo $comment; ?></li>
</ul>
</body>
