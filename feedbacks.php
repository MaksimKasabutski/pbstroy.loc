<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отзывы - PBstroy - Строительство домов под ключ</title>
	<link rel="stylesheet" href="/style.css"> 
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <?php 
    $host = 'localhost';
    $user = 'root';
    $password = '1234';
    $db_name = 'pbstroy';

    $link = mysqli_connect($host, $user, $password, $db_name);
    mysqli_query($link, "SET NAMES 'utf8'");

    if (isset($_GET['page'])){
		$page = $_GET['page'];
	}else $page = 1;
	$count_of_feedbacks_on_page = 10; 
	$feedback_number = ($page * $count_of_feedbacks_on_page) - $count_of_feedbacks_on_page; //с какой записи нам выводить
	

    $all_feedbacks_query = "SELECT * FROM `feedbacks` ORDER BY ID DESC LIMIT $feedback_number, $count_of_feedbacks_on_page ";
    $result = mysqli_query($link, $all_feedbacks_query) or die( mysqli_error($link) );
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	
	$pagination_query = "SELECT COUNT(*) FROM `feedbacks`";
	$res = mysqli_query($link, $pagination_query) or die( mysqli_error($link) );
	$total_array = mysqli_fetch_row($res);
	$total_count_of_feedbacks = $total_array[0]; 

	$str_pag = ceil($total_count_of_feedbacks / $count_of_feedbacks_on_page);

    $result = '';
    foreach ($data as $elem) {     
        $result .= '
        <div class="feedback-item">
            <div class="feedback-title">
                <div class="feedback-task">'.$elem['task'].'</div>
                <div class="feedback-owner">'.$elem['owner'].'
                    <div class="feedback-owner-date">'.
                    date("d.m.Y", strtotime($elem['date'])).'
                    </div>
                </div>
            </div>
            <div class="feedback-data">
                <div class="feedback-data-top-frame"></div>
                <div class="feedback-data-left-frame"></div>
                <div class="feedback-data-text">
                    <p>'.$elem['text'].'</p>';
        if (!empty($elem['conclusion'])) {
            $result .= '
                    <p class="feedback-data-conclusion">Общие выводы</p>
                    <p>'.$elem['conclusion'].'</p>
                </div>
            </div>
        </div>';
        } else {
            $result .= '</div>
                </div>
            </div>
        </div>';
        }
    }
    ?>
<div class="bg-image price-bg-image"></div>
<?php include 'header.php'?>
<div class="container">
    <section id="page-title" class="price-page-title">
        <div id="union_1">
            <div id="line_1"></div>
            <div id="line_2"></div>
        </div>
        <h1>Отзывы</h1>
        <div id="union_2">
            <div id="line_3"></div>
            <div id="line_4"></div>
        </div>
    </section>
    <section id="feedbacks">
       <?php echo $result; ?>
    </section>
    
        <?php 
        if ($str_pag>1) {
            echo "<section id='pagination'>
                    <div class='pagination-field'>";
            if (($j=$page-1)>0) {
            echo "
                    <div class='pagination-button pagination-next-prev-button'>
                        <a href=feedbacks.php?page=".$j.">Пред.</a>
                    </div>";
            };
            for ($i = 1; $i <= $str_pag; $i++) {
                if ($i==$page) {
                    echo "
                    <div class='pagination-buttons active'>
                        <a href=feedbacks.php?page=".$i."> ".$i." </a>
                    </div>";
                } else {
                echo "
                <div class='pagination-buttons'>
                    <a href=feedbacks.php?page=".$i."> ".$i." </a>
                </div>";
                }
            }
            if (($j=$page+1)<=$str_pag) {
            echo "
                    <div class='pagination-button pagination-next-prev-button'>
                        <a href=feedbacks.php?page=".$j.">След.</a>
                    </div>"; 
            }
            echo "</div></section>";
        }
        ?>
</div>
<?php include 'footer.php'?>
<script src="/myScript.js"></script>
</body>
</html>