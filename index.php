<?php include("includes/connection.php");?>
<?php include("includes/functions.php");?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Как сделать правильный выбор?</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
	<div class="line"></div>
	<div class="main-content container">
		<section class="row">
			<div class="col-lg-4 offset-lg-8">
			<form class="search-form" action="#" method="post">
				<input type="text" name="search" placeholder="Поиск">
				<span>
					<button type="submit">
						<i class="fas fa-search">
						</i>
					</button>
				</span>
			</form>
		</div>
		</section>
			<header class="row"> 
			<div class="navigation col-lg-3">
				<div class="logo">
					<img src="images/choice_logo.png" width="250"> 
				</div>
				
				<?php   
				if(isset($_GET['subj'])){
					$sel_subject = htmlspecialchars($_GET['subj']);
					$sel_page = null;
				}elseif(isset($_GET['page'])){
					$sel_page = htmlspecialchars($_GET['page']);
					$sel_subject = null;	
				}else{
					$sel_subject = null;
					$sel_page = null;
				}
				?>
				
				<?php echo "Subject is ".$sel_subject;?>
				<?php echo "Page id is ".$sel_page;?>

				<nav>
					<ul>
						<li><a href="index.php">Главная</a></li>
						<?php
						// start subject loop

						
				/*		$subjects_result = get_all_subjects();
						//print subjects menu
						
						while ($subject = $subjects_result -> fetch()) {
							echo '<li ';
							if ($sel_subject == $subject['id']){
								echo ' class="selected" ';
							}
							echo '><a href="index.php?subj='
							.urlencode($subject['id']).'">'.
							$subject['name'] . '</a>'; 	
							echo '<ul>';
									
						
							$pages_result = get_all_pages();
									
									
							
							//print pages menu
							
									while ($page = $pages_result -> fetch()) {
									echo '<li ';
										if($sel_page == $page['id']){
											echo ' class = "selected" ';
										}
									echo '><a href="index.php?page='.
									urlencode($page['id']).'">'. 
									$page['name'] . '</a></li>';
									}										
								echo '</ul>';
							//finish pages loop
							echo '</li>';
							
							} */

// end subject loop
						
						// HOMEWORK menu through FOREACH
						$subjects_result = get_all_subjects();
						foreach ($subjects_result as $subject){
							echo '<li ';
							if ($sel_subject == $subject['id']){
								echo ' class="selected" ';
							}
							echo '><a href="index.php?subj='
							.urlencode($subject['id']).'">'.
							$subject['name'] . '</a>'; 	
							echo '<ul>';
							
							$pages_result = get_all_pages($subject['id']);
							foreach($pages_result as $page){
								echo '<li ';
										if($sel_page == $page['id']){
											echo ' class = "selected" ';
										}
									echo '><a href="index.php?page='.
									urlencode($page['id']).'">'. 
									$page['name'] . '</a></li>';
							}
							
							echo '</ul>';
							//finish pages loop
							echo '</li>';
						}
							
						?>
<!--
						<li><a href="#">Главная</a></li>
						<li><a href="#">Персонажи</a>
							<ul>
								<li><a href="#">Давид</a></li>
								<li><a href="#">Вирсавия</a></li>
								<li><a href="#">Урия</a></li>
								<li><a href="#">Нафан</a></li>
							</ul>
						</li>
						<li><a href="#">Советы</a></li>
						<li><a href="#">Решение</a></li>
						<li><a href="#">Вопросы-Ответы</a></li>
						<li><a href="#">Статья</a></li>
						<li><a href="#">Публикации</a></li>
						<li><a href="#">Войти</a></li>-->
						<li><a href="login.php">Войти</a></li>
					</ul>
				</nav>
			</div>
			<div class="slider col-lg-9">
				<ul>
					<li><img src="images/promo01.jpg" alt=""></li>
				</ul>
			</div>
		</header>
		<!-- end of header section -->
		<div class="content">
			<section class="row">
				<div class="posts col-lg-4">
					<h2>О нас</h2>
					<p>Мы являемся организацией, которая преподает компьютерное обучение для всех категорий населения. Также мы стараемся передать всем нашим участникам не только технические знания, но и моральные ценности для развития позитивной стороны нашего общества.</p>
				</div>
				<div class="posts col-lg-4">
					<h2>Что мы делаем</h2>
					<p>В данный момент мы занимаемся разработкой веб-приложения (сайта), который будет помогать всем посетителям совершить правильный выбор, о котором впоследствии этот человек не будет сожалеть.</p>
				</div>
				<div class="posts col-lg-4">
					<h2>Контакты</h2>
					<p>Вы можете связаться с нами по данным, которые указаны ниже:</p>
					<address>
						Наш адрес: Кишинев, ул. Василе Александри 133<br>
						E-mail: scriptehinfo@gmail.com<br>
						Телефон: 79156655<br>
					</address>
				</div>
				<!-- end of content section  -->
			</section>
			<section class="row">
				<div class="portfolio col-lg-12">
					<h3>Последние работы</h3>
					<a href="#">Сайт</a>
					<a href="#">Публикации</a>
					<a href="#">Фото</a>
					<div class="portfolio-icons">
						<ul class="row">
							<li class="col"><a href="#"><img src="images/thumb_1.jpg" alt=""></a></li>
							<li class="col"><a href="#"><img src="images/thumb_2.jpg" alt=""></a></li>
							<li class="col"><a href="#"><img src="images/thumb_3.jpg" alt=""></a></li>
							<li class="col"><a href="#"><img src="images/thumb_4.jpg" alt=""></a></li>
							<li class="col"><a href="#"><img src="images/thumb_1.jpg" alt=""></a></li>
							<li class="col"><a href="#"><img src="images/thumb_2.jpg" alt=""></a></li>
							<li class="col"><a href="#"><img src="images/thumb_3.jpg" alt=""></a></li>
							<li class="col"><a href="#"><img src="images/thumb_4.jpg" alt=""></a></li>
						</ul>
					</div>
				</div>
				<!-- end of portfolio section  -->
			</section>
		</div>
	</div>
	<!-- End of main content -->
	<footer class="container-fluid">
		<section class="main-content">
			<section class="row">
				<div class="copyright col-lg-3">
					2019 &copy; ScripTehInfo
				</div>
				<div class="social col-lg-3 offset-lg-6">
					<a href="#"><img src="images/facebook.png" alt=""></a>
					<a href="#"><img src="images/twitter.png" alt=""></a>
					<a href="#"><img src="images/rss.png" alt=""></a>
					<a href="#"><img src="images/linkedin.png" alt=""></a>
					<a href="#"><img src="images/youtube.png" alt=""></a>
				</div>
			</section>	
		</section>	
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>