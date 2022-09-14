<?php

include "script.php";
$result = mysqli_query($link, "SELECT * FROM `cancell`");
$view = mysqli_fetch_assoc($result);

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title>LIGHTHOUSE</title>
	
	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Плагины JavaScript -->
	<script src="js/jquery.easing.min.js"></script>
	<!-- Ручные скрипты JavaScript -->
	<script src="js/basicelement.js"></script>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Ручной CSS -->
    <link href="css/basicelement.css" rel="stylesheet">
    <!-- Шрифты -->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	
</head>

<body data-spy="scroll" data-target=".navbar">

<!-- Шапка -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header nav">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-lg fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#intro">
				<!-- <img src="img/beacon.png" alt="logo"> -->
                <i class="fa fa-male"></i>  <span class="light">Light</span>HOUSE
            </a>
        </div>

        <!-- Кнопки навигации -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a class="page-scroll" href="#About">О нас</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Главная -->
<header class="intro" id="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading">Lighthouse</h1>
                    <p class="intro-text">Фан-клуб стабильности. <br>Будь в курсе отменнённых игр и региональных блокировок ! 
					</p>
					<a href="#myTable" class="btn btn-default btn-lg">Демоверсия</a>
					<a href="#contact" class="btn btn-default btn-lg">Подписаться</a>
					<p class="nav"><a href="#myTable" class=" btn btn-down page-scroll"><i class="fa fa-angle-down animated"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</header>



<!-- Описание -->
<section id="About" class="content-section text-center">
    <div class="overlay">
        <div class="about-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>О нас</h2>
                    <p>Сайт создан в развлекательных целях и выступает как "база данных", демонстрирующая издателей/разработчиков игр решивших уйти с российского рынка со своими проектами.</p>
                    
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Таблица -->
<section id="myTable" class="content-section text-center">
    <div class="overlay">
        <div class="myTable-section">
            <div class="container">
                <div class="col-lg col-lg-offset">
				<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Введите название игры..." title="Type in a name">
                    <table>
		<thead>
			<tr>
				<th>Региональная блокировка:</th>
				<th>Разработчик/Издатель:</th>
				<th>Дата:</th>
				<th>Комментарий:</th>
				<th>Франшизы:</th>
			</tr>
		</thead>
		<tbody>
					<tr>
			 <?php foreach ($result as $datas){ ?>
			 <td> <?php echo $datas['status']; ?> </td>
			 <td> <?php echo $datas['title_company']; ?> </td>
			 <td> <?php echo $datas['date']; ?> </td>
			 <td> <?php echo $datas['comment']; ?> </td>
			 <td> <?php echo $datas['franchise']; ?> </td> 
			  </tr>
			<?php } ?>
		</tbody>
	</table>
	

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Рассылка -->
<section class=" content-section text-center" id="contact">
      <div class="overlay">
        <div class="contact-section">
          <div class="container">
            <!-- Заголовок -->
            <h2>Подпишись, чтобы узнавать новости первым</h2>
            <!-- Содержание -->
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2">
			  
                <form class="subscribe-form form-inline" action="" id="form" onsubmit="sConsole(event)">
                  <input type="email" id="MailPlank" placeholder="Введите адрес почты">
                  <button id="submit" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal" type="submit">Подписаться</button> 
				  
				  <div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
					  <div class="modal-content" id="ModalWindow">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">Подтверждение почты</h4>
						</div>
						<div class="modal-body">
						  <p>Данные сохранены.</p>
						</div>
						<div class="modal-footer">
						  <button type="submit" class="btn btn-default" data-dismiss="modal">ОК</button>
						</div>
					  </div>
					</div>
				  </div>
                </form>
                <section class="subscribe-description">
                  <p>(кнопка скоро заработает корректно)</p>
                </section>
              </div> 
            </div> 
          </div> 
        </div> 
      </div> 
 </section> 

<footer>
    <div class="container text-center">
        <p>&copy; Продам гараж<br>
            </p>
    </div>
</footer>

<!-- AJAX запрос -->
<script>
        $(document).ready(function() {
 
            $("#submit").click(function() {
 
                var email = $("#MailPlank").val();
 
                if(email=='') {
                    alert("Заполните поле.");
                    return false;
                }
 
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: {
                        MailPlank: email
                    },
                    cache: false,
                    success: function(data) {
                        alert(data);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });
                 
            });
 
        });
</script>
</body>
</html>

