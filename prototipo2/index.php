<?php
session_start();
?>

<?php
if($_SESSION["username"]) {
?>

<!DOCTYPE html>
<html lang="en">

  <head>

   <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/images/gym.svg">
    <title>DIGITAL PT</title>
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

    </head>

    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
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

                                                <!-- ***** Menu Start ***** -->




                        <?php 
   
                        if(($_SESSION['level']) == "0") //check if user is a user and display buttons
    {
                          echo  "<ul class=\"nav\">";
                          echo  "<li class=\"scroll-to-section\"><a href=\"sobre_nos.php\">Quem somos</a></li>";
                          echo  "<li class=\"scroll-to-section\"><a href=\"videos.php\">Treinos</a></li>";
                          echo  "<li class=\"scroll-to-section\"><a href=\"360.php\">Zona 360</a></li>";
                          echo  "<li class=\"scroll-to-section\"><a href=\"parceria.php\">Parceiros</a></li>";
                         
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
      echo  "<li class=\"scroll-to-section\"><a href=\"parceria.php\">Parceiros</a></li>";
     
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
    

  }else{ // if user is not logged in then display these buttons
 echo  "<ul class=\"nav\">";
      echo  "<li class=\"scroll-to-section\"><a href=\"sobre_nos.php\">Quem somos</a></li>";
      echo  "<li class=\"scroll-to-section\"><a href=\"videos.php\">Treinos</a></li>";
      echo  "<li class=\"scroll-to-section\"><a href=\"360.php\">Zona 360</a></li>";
      echo  "<li class=\"scroll-to-section\"><a href=\"parceria.php\">Parceiros</a></li>";
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
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/gym-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>work harder, get stronger</h6>
                <h2>No pain,<em>no gain</em></h2>
                <div class="main-button scroll-to-section"></div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Benef&iacute;cios do <em> nosso programa </em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                      
                    </div>
                </div>
               <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Combate o excesso de peso</h4>
                                <p>As atividades f&iacute;sicas s&atilde;o a melhor forma de combater o excesso de peso ou obesidade, al&eacute;m de ajudar a manter a perda de peso.</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>Reduz a press&atilde;o arterial</h4>
                                <p>Alguns estudos mostram que fazer atividades f&iacute;sicas aer&oacutebicas regularmente, ajuda a reduzir a press&atilde;o arterial e a melhorar a circula&ccedil;&atilde;o sangu&iacute;nea.</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="third gym training">
                            </div>
                            <div class="right-content">
                                <h4>Fortalece ossos e articula&ccedil;&otilde;es</h4>
                                <p>As atividades f&iacute;sicas ajudam a fortalecer os ossos e as articula&ccedil;&otilde;es por promover o crescimento &oacute;sseo e aumentar a resist&ecirc;ncia e a densidade dos ossos.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>For&ccedil;a e resist&ecirc;ncia muscular</h4>
                                <p>As atividades f&iacute;sicas de fortalecimento muscular ajudam a aumentar a massa e a resist&ecirc;ncia muscular, pois esses exerc&iacute;cios estimulam a constru&ccedil;&atilde;o e a fun&ccedil;&atilde;o muscular.</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4> Promove a sensa&ccedil;&atilde;o de bem-estar</h4>
                                <p>As atividades f&iacute;sicas estimulam a produ&ccedil;&atilde;o de endorfina, que &eacute; um horm&ocirc;nio produzido no c&eacute;rebro, que tem a&ccedil;&atilde;o analg&eacute;sica no corpo.</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="gym training">
                            </div>
                            <div class="right-content">
                                <h4>Diminui o stress</h4>
                                <p>As atividades f&iacute;sicas ajudam a equilibrar o n&iacute;vel de horm&ocirc;nios do stress, que geralmente s&atilde;o liberados em grandes quantidades no corpo em momentos de stress.</p>
                            </div>                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1" align="center">
                    <div class="cta-content">
                        <h2>Dont <em>think</em>, begin <em>today</em>!</h2>
                        <p>&nbsp;</p>
                        
                        <div class="main-button scroll-to-section"></div>
                    </div>
                    <a class="link-to-book" href="videos.php" align="center">Ver exercicios</a>
                </div>
                
                    
                
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Os nossos <em>treinos</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><img src="assets/images/tabs-first-icon.png" alt="">Treino Outdoor</a></li>
                  <li><a href='#tabs-2'><img src="assets/images/tabs-first-icon.png" alt="">Treino de resist&ecirc;ncia</a></a></li>
                  <li><a href='#tabs-3'><img src="assets/images/tabs-first-icon.png" alt="">Treino de defini&ccedil;&atilde;o</a></a></li>
                  <li><a href='#tabs-4'><img src="assets/images/tabs-first-icon.png" alt="">Treino de mobilidade</a></a></li>
                  <div class="main-rounded-button"></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                  
                  <a href="galeria_de_videos/treino_outdoor.html"><img src="assets/images/training-image-01.jpg" alt="First Class">
                    <h4>Treino outdoor</h4>
                    <p>Este treino consiste num treino de for&ccedil;a, em que o principal objetivo &eacute; aumentar a nossa for&ccedil;a.</p>
                    </a>
                  </article>
                  <article id='tabs-2'>
                    <img src="assets/images/training-image-02.jpg" alt="Second Training">
  		     <a href="galeria de videos/treino_de_resistencia.html"><h4>Treino de resist&ecirc;ncia</h4></a>
                    <p>Este treino consiste num treino de resist&ecirc;ncia, em que o principal objetivo &eacute; aumentar a nossa resist&ecirc;ncia, tanto f&iacute;sica, como muscular.</p>
                    <div class="main-button"></div>
                  </article>
                  <article id='tabs-3'>
                  <img src="assets/images/training-image-03.jpg" alt="Third Class">
                    <a href="galeria de videos/treino_de_definicao.html"><h4>Treino de defini&ccedil;&atilde;o</h4></a>
                    <p>Este treino consiste num treino de defini&eacute;&atilde;o, em que o principal objetivo &eacute; ficar com um corpo "bonito" e definido, com os m&uacute;sculos aparentes.</p>
                    <div class="main-button"></div>
                  </article>
                  <article id='tabs-4'>
                   <img src="assets/images/training-image-04.jpg" alt="Fourth Training">
                     <a href="galeria de videos/treino_de_mobilidade.html"><h4>Treino de mobilidade</h4></a>
                    <p>Este treino consiste num treino de mobilidade, em que o principal objetivo &eacute; aumentar a elastecidade e prevenir dores.</p>
                    <div class="main-button"></div>
                  </article>
                </section>
</div></div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->
    
    <section class="section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3"></div>
            </div>
            <div class="row"></div>
        </div>
    </section>

    <!-- ***** Equipa Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Desenvol<em>vedores</em></h2>
                    <img src="assets/images/line-dec.png" alt=""></div>
                </div>
            </div>
            <div class="row" >
              <div class="col-lg-4" >
                  <div class="trainer-item" >
                        <div class="image-thumb" >
                            <img src="assets/images/fbb01762-8b5f-4546-960a-b4337240ac5e.jpg" alt="RodrigoRocha"style="width:100%">
                        </div>
                        <div class="down-content">
                            <span>Desenvolvedor</span>
                            <h4>Rodrigo Rocha                            </h4>
                            <ul class="social-icons" align="center">
                              <li><a href="https://www.instagram.com/_rocha_05/"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/M3r0cha"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/rodrigo-rocha-67a482216/"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCTsP4uJxliOQYJXQC8HdoqA"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
              <div class="col-lg-4" >
                  <div class="trainer-item" >
                        <div class="image-thumb" >
                            <img src="assets/images/paulo.jpg" alt="RodrigoRocha"style="width:100%" border-radius="5px">
                        </div><br><br><br><br>
                        <div class="down-content">
                            <span>Professor Acompanhante</span>
                            <h4>Paulo Barreira                        </h4>
                            <ul class="social-icons" align="center">
                              <li><a href="https://www.instagram.com/barreira_paulo_rogerio/"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/43df8801-9975-404e-8992-cfd3ff93ec28.jpg"  alt="JoaoVieira" style="width:100%">
                        </div>
                        <div class="down-content">
                            <span>Desenvolvedor</span>
                            <h4>Jo&atilde;o Vieira                            </h4>
                            <ul class="social-icons">
                              <li><a href="https://www.instagram.com/_jp.vieira_/"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/qqlrcenaok2"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Equipa Ends ***** -->
    
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98295.29751878938!2d-8.886546097169393!3d39.655834538023996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2273570f6f1655%3A0x5f11211edf9ebf39!2sBe-Fit%20Leiria!5e0!3m2!1spt-PT!2spt!4v1641898591675!5m2!1spt-PT!2spt>" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="MAILTO:rochagamer771@gmail.com" method="post" enctype="multipart/form-data" name="EmailForm">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Seu Nome*" required>
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email*" required>
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Assunto">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Mensagem" required></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Enviar mensagem</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">Parceiros : Agrupamento Escolas da Batalha e SiteStar</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="index_loggedout.php" class="nav-link px-2 text-muted">Inicio</a></li>
      <li class="nav-item"><a href="parceria_loggedout.php" class="nav-link px-2 text-muted">Parceiros</a></li>
      <li class="nav-item"><a href="#our-classes" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="sobre_nos_loggedout.php" class="nav-link px-2 text-muted">Sobre</a></li>
    </ul>
  </footer>
</div>
    <!-- ***** Footer Ends ***** -->
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>



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

  </body>
</html>