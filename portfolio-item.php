<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Строительство домов в Минске и минской области. Выполнение кладочных, кровельных и монолитных работ любой сложности.
    Заливка фундамента под ключ и другие строительные работы. Многолетний опыт работы. Качество гарантируем!">
    <meta name="robots" content="index, follow"/> 
    <title><?php $objectname = $_GET['objectname'];
    echo $objectname?> - Портфолио - PBstroy</title>
	<link rel="stylesheet" href="/style.css"> 
    <link rel="icon" href="https://pbstroy.by/favicon.ico" type="image/x-icon">
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
            <h1><?php echo $objectname;?></h1>
            <div id="union_2">
                <div id="line_3"></div>
                <div id="line_4"></div>
            </div>
        </section>
        <section id="carousel">
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
            <div class="carousel-counter">
                <?php 
                echo '<span id="carousel-counter-current">1</span>/'.$count;
                
                ?>
            </div>
        </section>
    </div>
    <?php include 'footer.php'?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="myScript.js"></script>
    <script>
        $(function(){
            var bodyWidth = $('body').width();
            if (bodyWidth<=768) {
                $('.slide').height($('.slide').width()/1.5);
                $('.viewport').width($(".carousel").prop("clientWidth"));
                $('.viewport').height($('.viewport').width()/1.5);
            }
        });
        var slideWidth=$('.slide').css('width').substr(0, 3);
        var slideCount=$('.slidewrapper').children().length;
        var currentSlide = 1;
        $(function(){
            currentSlide = 1;
            $('.slidewrapper').width(slideCount*slideWidth);
            $('#next_slide').click(nextSlideWithCounter);
            $('#prev_slide').click(prevSlideWithCounter);
            $(document).on('keydown', function(event) {
                if(event.which == 39) {
                    nextSlideWithCounter();
                }
            });
            $(document).on('keydown', function(event) {
                if(event.which == 37) {
                    prevSlideWithCounter();
                }
            });
        });
        var nextSlideWithCounter = function(){
                nextSlide();
                if(currentSlide==slideCount) {
                    currentSlide=1;
                    document.getElementById("carousel-counter-current").innerHTML = currentSlide;
                } else {
                    currentSlide++;
                    document.getElementById("carousel-counter-current").innerHTML = currentSlide;
                }
            }
        var prevSlideWithCounter = function(){
                prevSlide();
                if(currentSlide==1) {
                    currentSlide=slideCount;
                    document.getElementById("carousel-counter-current").innerHTML = currentSlide;
                } else {
                    currentSlide--;
                    document.getElementById("carousel-counter-current").innerHTML = currentSlide;
                }
            }

        function nextSlide(){
            var currentSlide=parseInt($('.slidewrapper').data('current'));
            currentSlide++;
            if(currentSlide>=$('.slidewrapper').children().length) {
                $('.slidewrapper').css('left',-(currentSlide-2)*slideWidth);  
                $('.slidewrapper').append($('.slidewrapper').children().first().clone()); 
                $('.slidewrapper').children().first().remove();
                currentSlide--;                    
            }
                $('.slidewrapper').animate({left: -currentSlide*slideWidth},300).data('current',currentSlide);   
        }

        function prevSlide(){
            var currentSlide=parseInt($('.slidewrapper').data('current'));
            currentSlide--;
            if(currentSlide<0)
            {
                $('.slidewrapper').css('left',-(currentSlide+2)*slideWidth);  
                $('.slidewrapper').prepend($('.slidewrapper').children().last().clone()); 
                $('.slidewrapper').children().last().remove();
                currentSlide++;    
            }
            $('.slidewrapper').animate({left: -currentSlide*slideWidth},300).data('current',currentSlide);
            
        }
    </script>
</body>
</html>