<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PBstroy - строительство домов под ключ</title>
	<link rel="stylesheet" href="/style.css"> 
    <link rel="shortcut icon" href="#" type="image/png">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <script src="/jquery-3.2.1.min.js"></script>
    <script src="/myScript.js"></script>
</head>
<body>
    <div id="bg-image"><img src="/images/mainpage.png" alt=""></div>
    <?php include 'header.php'?>
    <div class="main-content container">
        <div id="head-text">
            <div id="union_1">
                <div id="line_1"></div>
                <div id="line_2"></div>
            </div>
            <h2>Построим Вашу мечту!</h2>
            <div id="union_2">
                <div id="line_3"></div>
                <div id="line_4"></div>
            </div>
            <p>Строительство домов и коттеджей под ключ</p>
        </div>
        
        <div id="main-page-portfolio">
            <p id="main-page-portfolio-title">Наши работы</p>
            <div id="home">
                <div id="home-image-frame"></div>
                <div class="home-image-main">
                    <img src="/images/port1/port1_1.jpg" class="active">
                    <img src="/images/port1/port1_2.jpg">
                    <img src="/images/port1/port1_3.jpg">
                    <img src="/images/port1/port1_4.jpg">
                </div>
                <div id="home-image-small-container">
                    <div class="home-image-small">
                        <a href="/images/port1/port1_1.jpg" class="show-image"><img src="/images/port1/port1_1.jpg" alt=""></a>
                        <a href="/images/port1/port1_2.jpg" class="show-image"><img src="/images/port1/port1_2.jpg" alt=""></a>
                        <a href="/images/port1/port1_3.jpg" class="show-image"><img src="/images/port1/port1_3.jpg" alt=""></a>
                        <a href="/images/port1/port1_4.jpg" class="show-image"><img src="/images/port1/port1_4.jpg" alt=""></a>
                    </div>
                </div>  
            <h2></h2>
            <p></p>
            <button id="more-photo"></button>
            </div>
        </div>
        <div id="mouse-scroll-down">
            <div id="mouse-scroll-down-rectangle">
                <div id="mouse-scroll-down-ellipse"></div>
            </div>
            <div class="mouse-scroll-down-line"><i class="fa fa-angle-down fa-lg" aria-hidden="true"></i></div>   
        </div>
    </div>
</body>
</html>