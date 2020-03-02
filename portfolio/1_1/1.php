<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Портфолио - Станьково - PBstroy</title>
	<link rel="stylesheet" href="/style.css"> 
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="portfolio-bg-image"></div>
    <?php include '../../header.php'?>
    <div class="container">
        <section id="page-title">
            <div id="union_1">
                <div id="line_1"></div>
                <div id="line_2"></div>
            </div>
            <h1>Станьково</h1>
            <div id="union_2">
                <div id="line_3"></div>
                <div id="line_4"></div>
            </div>
        </section>
        <section class="container">
            <div class="carousel">
                <ul class="carousel-inner">
                    <li class="carousel-item active">
                        <img src="img1.jpg" alt="">
                    </li>
                    <li class="carousel-item">
                        <img src="img2.jpg" alt="">
                    </li>
                    <li class="carousel-item">
                        <img src="img3.jpg" alt="">
                    </li>
                </ul>
                <a href="#" class="carousel-control-prev">
                    <span><i class="fa fa-angle-left fa-3x" aria-hidden="true"></i></span>    
                </a>
                <a href="#" class="carousel-control-next">
                    <span><i class="fa fa-angle-right fa-3x" aria-hidden="true"></i></span>
                </a>
            </div>
        </section>
    </div>
    <?php include '../../footer.php'?>
    <script src="../../myScript.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>