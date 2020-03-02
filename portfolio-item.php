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
    <div class="bg-image portfolio-bg-image portfolio-page-bg-image"></div>
    <?php include 'header.php';
    $objectname = $_GET['objectname'];
    $folder = $_GET['foldername'];
    $path_to_files = $_SERVER['DOCUMENT_ROOT'].$folder;
    $count = (count(glob($path_to_files."/*.jpg")));
    ?>
    <div class="container">
        <section id="page-title">
            <div id="union_1">
                <div id="line_1"></div>
                <div id="line_2"></div>
            </div>
            <h1 style="font-size: 36px;"><?php echo $objectname;?></h1>
            <div id="union_2">
                <div id="line_3"></div>
                <div id="line_4"></div>
            </div>
        </section>
        <section class="container">
        <?php 
        ?>
            <div class="viewport">
                <ul class="slidewrapper" data-current=0>
                    <?php
                    for ($i=0; $i<$count; $i++) {
                        echo '<li class="slide">
                            <img src="'.$folder.'/'.$i.'.jpg" alt="">
                        </li>';
                    }
                    ?>
                </ul>
                <a href='javascript: void(0)' id='prev_slide' class='carousel-control-prev'>
                    <span><i class="fa fa-angle-left fa-3x" aria-hidden="true"></i></span>    
                </a>
                <a href='javascript: void(0)' id='next_slide' class='carousel-control-next'>
                    <span><i class="fa fa-angle-right fa-3x" aria-hidden="true"></i></span>
                </a>
            </div>
        </section>
    </div>
    <?php include 'footer.php'?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="myScript.js"></script>
    
</body>
</html>