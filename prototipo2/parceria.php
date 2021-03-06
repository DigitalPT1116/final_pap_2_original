<?php
session_start();
?>

<?php
if($_SESSION["username"]) {
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>DIGITAL PT</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./estilo2.css">

<link rel="icon" href="assets/images/gym.svg">

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

<link rel="stylesheet" href="assets/css/template-para-360.css">

</head>
<body>

	<!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">

                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo" align="left">DIGITAL<em> PT</em> 
                            <img src="assets/images/gym.svg" width="50" height=50" alt="" />
                        </a>
                        
                        <!-- ***** Logo End ***** -->
                        

                        <!-- ******************** -->


                        <!-- ***** Menu Start ***** -->
                      <?php 
   
                      if(($_SESSION['level']) == "0") //check if user is a user and display buttons
  {

                        echo  "<ul class=\"nav\">";
                        echo  "<li class=\"scroll-to-section\"><a href=\"sobre_nos.php\">Quem somos</a></li>";
                        echo  "<li class=\"scroll-to-section\"><a href=\"videos.php\">Treinos</a></li>";
                        echo  "<li class=\"scroll-to-section\"><a href=\"360.php\">Zona 360</a></li>";
                        echo  "<li class=\"scroll-to-section\"><a class=\"active\" href=\"parceria.php\">Parceiros</a></li>";
                        
                        echo "<div class=\"dropdown\">";
                        echo "<button class=\"dropbtn\">";
                        echo $_SESSION["username"];
                        echo "</button>";
                        echo " <div class=\"dropdown-content\">";
                        echo " <a href=\"personal_info/personal_info.php\">Conta</a>";
                        echo "  <a href=\"#\">Planos</a>";
                        ##echo " <a href=\"admin\login.php\">Admin</a>";
                        echo " <a href=\"../login_novo/logout.php\">Logout</a>";
                        echo " </div>";
                        echo " </div>";
                        echo "</ul>"; 
  }

      elseif(isset($_SESSION['level']) == 1) //check if user is an admin and display buttons
  { 

                        echo  "<ul class=\"nav\">";
                        echo  "<li class=\"scroll-to-section\"><a href=\"sobre_nos.php\">Quem somos</a></li>";
                        echo  "<li class=\"scroll-to-section\"><a href=\"videos.php\">Treinos</a></li>";
                        echo  "<li class=\"scroll-to-section\"><a href=\"360.php\">Zona 360</a></li>";
                        echo  "<li class=\"scroll-to-section\"><a class=\"active\" href=\"parceria.php\">Parceiros</a></li>";

                        echo "<div class=\"dropdown\">";
                        echo "<button class=\"dropbtn\">";
                        echo $_SESSION["username"];
                        echo "</button>";
                        echo " <div class=\"dropdown-content\">";
                        echo " <a href=\"personal_info/personal_info.php\">Conta</a>";
                        echo "  <a href=\"#\">Brevemente</a>";
                        echo " <a href=\"admin\login.php\">Admin</a>";
                        echo " <a href=\"../login_novo/logout.php\">Logout</a>";
                        echo " </div>";
                        echo " </div>";
                        echo "</ul>"; 
  }


  }    else{ // if user is not logged in then display these buttons


                        echo  "<ul class=\"nav\">";
                        echo  "<li class=\"scroll-to-section\"><a href=\"sobre_nos.php\">Quem somos</a></li>";
                        echo  "<li class=\"scroll-to-section\"><a href=\"videos.php\">Treinos</a></li>";
                        echo  "<li class=\"scroll-to-section\"><a href=\"360.php\">Zona 360</a></li>";
                        echo  "<li class=\"scroll-to-section\"><a class=\"active\" href=\"parceria.php\">Parceiros</a></li>";
                        echo "</ul>"; 
  } ?>

      <!--  <li class="scroll-to-section"><a href="#" class="active">P??gina Inicial</a></li>
      echo "$_SESSION[\"username\"])";-->
        <!--<li class="main-button"><a href="login_psi/login.php"></a></li>
        <?php
           #else echo "<h1>Please login first .</h1>";
       ?> -->
     <!--  <div class="dropdown">
           
           <button class="dropbtn"><?php echo $_SESSION["username"]; ?></button>
           <div class="dropdown-content">
           <a href="personal_info/personal_info.php">Conta</a>
           <a href="#">Planos</a>
           <a href="admin\login.php">Admin</a>
           <a href="../login_novo/logout.php">Logout</a>
           </div>
           </div>-->
         
   <a class='menu-trigger'>
       <span>Menu</span>
   </a>
   
   <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header><br><br><br><br>

    <!-- ***** Header Area End ***** -->


<!-- partial:index.partial.html -->
<div class="container">
	<article class="post"><br>
		<img width="660" height="478" src="unnamed.png" class="post-image" alt="post-image">
		<section class="post-content">
			<time class="post-date">1 de dezembro 2021</time>
			<h1 class="post-title">SiteStar 9</h1>
			<p class="post-abstract">Uma iniciativa nacional que desafia a comunidade educativa ?? cria????o de espa??os digitais criativos e inovadores com conte??dos em portugu??s, que utilizem o dom??nio.pt, durante o ano letivo de 2021/2022. </p>
			<div class="post-link-c">
				<a href="https://erte.dge.mec.pt/noticias/9a-edicao-do-sitestarpt" class="post-link">Saber mais</a>
			</div>
		</section>

	</article>
	<article class="post"><br>
		<img width="660" height="478" src="Batalha.png" class="post-image" alt="post-image">
		<section class="post-content">
			<time class="post-date">10 de dezembro 2021</time>
			<h1 class="post-title">Municipio da batalha</h1>
			<p class="post-abstract">A Batalha foi palco de grandes momentos hist??ricos, desde a presen??a romana at?? ??s lutas decisivas pela independ??ncia, deixando um incontorn??vel patrim??nio cultural. </p>
			<div class="post-link-c">
				<a href="https://www.cm-batalha.pt/" class="post-link">Saber mais</a>
			</div>
		</section>

	</article>

    <article class="post"><br>
		<img width="660" height="478" src="befit.png" class="post-image" alt="post-image">
		<section class="post-content">
			<time class="post-date">24 de dezembro 2021</time>
			<h1 class="post-title">befit</h1>
			<p class="post-abstract">O befit ?? um excelente gin??sio, espa??o de muscula????o e peso livre com equipamento ??nico e de ??ltima gera????o </p>
			<div class="post-link-c">
				<a href="https://be-fit.pt/befit/leiria" class="post-link">Saber mais</a>
			</div>
		</section>

	</article>

    <article class="post"><br>
		<img width="660" height="478" src="escolabatalha.png" class="post-image" alt="post-image">
		<section class="post-content">
			<time class="post-date">7 de dezembro 2021</time>
			<h1 class="post-title">Agrupamento de Escolas da Batalha</h1>
			<p class="post-abstract">Agrupamento de Escolas da Batalha. Oferta formativa de qualidade desde o Pr??-escolar ao Ensino Secund??rio. Cursos Profissionais inovadores. </p>
			<div class="post-link-c">
				<a href="http://agbatalha.pt/" class="post-link">Saber mais</a>
			</div>
		</section>

	</article>
	
</div>
<!-- partial -->
  
</body>

<style>
.dropbtn {
  background-color: #ed563b;
  color: white;
  padding: 11px 17px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  line-height: 20px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #ed563b;
}
</style>
</html>
