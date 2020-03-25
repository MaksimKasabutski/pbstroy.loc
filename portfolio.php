<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Каталог выполненных строительных работ. Строительство домов в Минске и минской области. Выполнение кладочных, кровельных и монолитных работ любой сложности.
    Заливка фундамента под ключ и другие строительные работы. Многолетний опыт работы. Качество гарантируем!">
    <meta name="robots" content="index, follow"/> 
    <title>Портфолио - PBstroy - Строительство домов под ключ</title>
	<link rel="stylesheet" href="/style.css"> 
    <link rel="icon" href="https://pbstroy.by/favicon.ico" type="image/x-icon">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="bg-image portfolio-bg-image"></div>
    <?php include 'header.php'?>
    <div class="container">   
        <section id="page-title">
            <div id="union_1">
                <div id="line_1"></div>
                <div id="line_2"></div>
            </div>
            <h1>Портфолио</h1>
            <div id="union_2">
                <div id="line_3"></div>
                <div id="line_4"></div>
            </div>
        </section>
        <section id="nav-list">
            <div class="nav-front-L"></div>
            <div class="nav-front-M"></div>
            <ul class="nav-list">
                <li id="nav-list-item-all" class="nav-list-item"><p id="nav-list-item-p-all">Все категории</p></li>
                <li id="nav-list-item-roof" class="nav-list-item"><p id="nav-list-item-p-roof">Кровельные работы</p></li>
                <li id="nav-list-item-masonry" class="nav-list-item"><p id="nav-list-item-p-masonry">Кладочные работы</p></li>
                <li id="nav-list-item-base" class="nav-list-item"><p id="nav-list-item-p-base">Фундамент</p></li>
            </ul>
        </section>
        <section class="section-container">
                <?php
                $pre_path_to_folders = $_SERVER['DOCUMENT_ROOT']."/images/portfolio/"; //Путь до папки
                $pre_dir_list = scandir($pre_path_to_folders);
                arsort($pre_dir_list);
                foreach($pre_dir_list as $pre_folder_name) {
                    if ($pre_folder_name!='.' AND $pre_folder_name!='..') {
                        if (is_dir($pre_path_to_folders."/".$pre_folder_name)) {
                            $category_title = '';
                            if ($pre_folder_name == 'roofing') {
                                $category_title = 'Кровельные работы';
                            } elseif ($pre_folder_name == 'masonry') {
                                $category_title = 'Кладочные работы';
                            } else {
                                $category_title = 'Фундамент';
                            }
                            echo '
                                <div id="'.$pre_folder_name.'" style="display: block">
                                <h3>'.$category_title.'</h3>';
                            $path_to_folders = $_SERVER['DOCUMENT_ROOT']."/images/portfolio/".$pre_folder_name; //Путь до папки
                            $dir_list = scandir($path_to_folders);
                            foreach($dir_list as $folder_name)
                            {
                                if ($folder_name!='.' AND $folder_name!='..')
                                {
                                    if (is_dir($path_to_folders."/".$folder_name))
                                    {
                                        $path_to_files = '/images/portfolio/'.$pre_folder_name.'/'.$folder_name;
                                        echo '
                                        <a href="/portfolio-item.php?foldername='.$path_to_files.'&objectname='.$folder_name.'" class="portfolio-item">
                                            <img src="'.$path_to_files.'/0.jpg" alt="">
                                            <div class="portfolio-item-name">
                                                <p>'.$folder_name.'</p>
                                            </div>
                                        </a>
                                        ';
                                    }
                                }
                            }
                            echo '</div>';
                        }
                    }
                }
                ?>
        </section>
    </div> 
    <?php include 'footer.php'?>
    <script src="/myScript.js"></script>
</body>
</html>