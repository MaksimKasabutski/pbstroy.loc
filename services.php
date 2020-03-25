<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Услуги по выполнению кладочных, кровельных и монолитных работ любой сложности. Строительство домов в Минске и минской области. .
    Заливка фундамента под ключ и другие строительные работы. Многолетний опыт работы. Качество гарантируем!">
    <meta name="robots" content="index, follow"/> 
    <title>Услуги - PBstroy - Строительство домов под ключ</title>
	<link rel="stylesheet" href="/style.css"> 
    <link rel="icon" href="https://pbstroy.by/favicon.ico" type="image/x-icon">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<div class="bg-image services-bg-image"></div>
<?php include 'header.php'?>
<div class="container">
    <section id="page-title">
        <div id="union_1">
            <div id="line_1"></div>
            <div id="line_2"></div>
        </div>
        <h1>Услуги</h1>
        <div id="union_2">
            <div id="line_3"></div>
            <div id="line_4"></div>
        </div>
    </section>
    <section>
        <div class="nav-front-services"></div>
        <ul class="nav-list services-nav-list">
        <li id="nav-list-item-roofservices" class="nav-list-item services-nav-list-item"><a href="/services.php/roof" name="#roof"><p>Кровельные работы</p></a></li>
            <li id="nav-list-item-masonryservices" class="nav-list-item services-nav-list-item"><a href="/services.php/masonry" name="#masonry"><p>Кладочные работы</p></a></li>
            <li id="nav-list-item-baseservices" class="nav-list-item services-nav-list-item"><a href="/services.php/base" name="#base"><p>Фундамент</p></a></li>
            <!--<li id="nav-list-item-other" class="nav-list-item"><p>Прочее</p></li> -->
        </ul>
    </section>
    <section class="section-container">
        <?php 
            $url = $_SERVER['REQUEST_URI'];
            $masonryURL =  substr(stristr($url, 'masonry'), 0, 7);
            $baseURL = substr(stristr($url, 'base'), 0, 4);
            if ($url == '/services.php/roof' || $url == '/services.php') {
                include 'roof.php';
            }
            if ($masonryURL == 'masonry') {
                include 'masonry.php';
            }
            if ($baseURL == 'base') {
                include 'base.php';
            } 
        ?>
    </section>
</div>
<?php include 'footer.php'?>
<script src="/myScript.js"></script>
</body>
</html>