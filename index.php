<!DOCTYPE html>
<?php
	include("php/conexao.php"); 

	
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catálogo de serviços</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/responsive-slider.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet">	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
	

    	<img src="img/logo.jpg" hspace="90px" vspace="35px" width="20%" ></a>

    	<n class="catalog">CATÁLOGO DE SERVIÇOS</n>


    	<div class="container">
			<div class="row">
				<nav class="navbar navbar-inverse custom" role="navigation">
					<div class="container-fluid">

						<div class="login">
							<form name="loginform" action="php/userauthen.php" method="POST" accept-charset="utf-8" class="form-login">
							
								<h3 class="form-login-heading">Entre com suas credenciais</h3>

								<label for="inputMatr">Matricula</label>
								<p><input type="" id="inputMatr" name="matr" class="form-control" placeholder="Matricula"  required autofocus></p>
								<label for="inputEmail" placeholder="E-mail" type="text" name="login">Email Corporativo</label>
								<p><input value="" type="text" id="inputEmail" name="login" class="form-control" placeholder="Email"></p>
								<label for="inputSenha" type="password"></label>
								<p><input id="inputSenha" name="senha" type="password" placeholder="Senha" class="form-control"></p>
								<a href="">Esqueceu sua senha?</a>

								
								<input type="submit" value="Entrar" />

							</form>
							
							<p class="text-center text-danger">
								<?php if(isset($_SESSION['loginErro'])){
									echo $_SESSION['loginErro'];
									unset ($_SESSION['loginErro']);
									}
									
								?>
							</p>
						</div>
							<div class="navbar-brand" >
			
								
							</div>
						</div>
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								
								<li role="presentation" class="active"><a href="index.html">Home</a></li>
								<li role="presentation"><a href="blog.html">blog</a></li>
								<li role="presentation"><a href="portfolio.html">Portfolio</a></li>
								<li role="presentation"><a href="contacts.html">Contato</a></li>						
							</ul>
						</div>
						
				</nav>
			</div>
		</div>
	</header>
	
	<!-- Responsive slider - START -->
	<div class="slider">
	<div class="container">
		<div class="row">
			<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
				<div class="slides" data-group="slides">
					<ul>
						<li>
							<div class="slide-body" data-group="slide">
								<img src="img/2a.jpg" alt="">
								<div class="caption header" data-animate="slideAppearUpToDown" data-delay="500" data-length="300">
									<button class="btn btn-primary"><h2> Nós somos designers criativos</h2></button>
									<div class="caption-sub" data-animate="slideAppearDownToUp" data-delay="1200" data-length="300"><button class="btn btn-primary"><h4><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit sit amet.</span></h4></button></div>
									<div class="caption-sub" data-animate="slideAppearLeftToRight" data-delay="900" data-length="300"><button class="btn btn-primary"><h3>With one to one swipe movement!</h3></button></div>
								</div>
							</div>
						</li>
						<li>
							<div class="slide-body" data-group="slide">
								<img src="img/1.jpg" alt="">
								<div class="caption header" data-animate="slideAppearDownToUp" data-delay="500" data-length="300">
									<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off"><h2>creative design Responsive slider</h2></button>
									<div class="caption-sub" data-animate="slideAppearUpToDown" data-delay="800" data-length="300"><button class="btn btn-primary"><h4><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit sit amet. </span></h4></button></div>
									<div class="caption-sub" data-animate="slideAppearRightToLeft" data-delay="1200" data-length="300"><button class="btn btn-primary"><h3>Clean and Flat</h3></button></div>
								</div>
							</div>
						</li>
						<li>
							<div class="slide-body" data-group="slide">
								<img src="img/10.jpg" alt="">
								<div class="caption header" data-animate="slideAppearUpToDown" data-delay="500" data-length="300">
								  <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off"><h2>creative design Custom animations</h2></button>
								  <div class="caption-sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"><button class="btn btn-primary"><h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit sit amet.</h4></button></div>
								  <div class="caption-sub" data-animate="slideAppearDownToUp" data-delay="1200" data-length="300"><button class="btn btn-primary"><h3><span>New style Slides!</span></h3></button></div>
						
								</div>
							</div>
						</li>
				
					</ul>
				</div>
		   
				<a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
				<a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>		
			</div>
		</div>
	</div>
	</div>
    <!-- Responsive slider - END -->
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="contents">
					<h2>Serviços de TI por categoria</h2>
					<p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.</p>
				</div>
			</div>
		</div>
	</div>
	

	
	<div class="container">
		<div class="row">
			<div class="recent">
				<button class="btn-primarys"><h3>Meus trabalhos recentes</h3></button>
				<hr>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="content">
				<div class="col-md-4">
					<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
						<div class="align-center">
							<h4>Fully responsive</h4>					
							<div class="icon">
								<i class="fa fa-desktop fa-3x"></i>
							</div>
							<p>
							 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a> <i class="fa fa-long-arrow-right"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.8s">
						<div class="align-center">
							<h4>Modern Design</h4>					
							<div class="icon">
								<i class="fa fa-cloud fa-3x"></i>

							</div>
							<p>
							 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a> <i class="fa fa-long-arrow-right"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="wow flipInY" data-wow-offset="0" data-wow-delay="1.2s">
						<div class="align-center">
							<h4>Hight Quality</h4>					
							<div class="icon">
								<i class="fa fa-location-arrow fa-3x"></i>

							</div>
							<p>
							 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a> <i class="fa fa-long-arrow-right"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="container">
		<div class="row">
			<div class="box">
				
				<div class="col-md-6">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
						<div class="align-center">
							<h4>Quick Support</h4>					
							<div class="icon">
								<i class="fa fa-heart-o fa-3x"></i>

							</div>
							<p>
							 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a> <i class="fa fa-long-arrow-right"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
						<div class="align-center">
							<h4>Easy Customize</h4>					
							<div class="icon">
								<i class="fa fa-laptop fa-3x"></i>

							</div>
							<p>
							 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a> <i class="fa fa-long-arrow-right"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!--about-->
	
		<div class="container">
			<div class="about">			
					<div class="row">
						<div class="recent">
							<button class="btn-primarys"><h3>Sobre nós</h3></button>
							<hr>
						</div>
					</div>				
				<div class="row">			
					<div class="row-slider">
						<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
							<div class="col-lg-6 mar-bot30">
								<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
									<div class="slides" data-group="slides">
										<ul> 	    		
											<div class="slide-bodys" data-group="slide">
												<li><img alt="" class="img-responsive" src="img/3.jpg" width="100%" height="450"/></li>
												<li><img alt="" class="img-responsive" src="img/4.jpg" width="100%" height="450"/></li>
												<li><img alt="" class="img-responsive" src="img/5.jpg" width="100%" height="450"/></li>
											</div>
										</ul>
											
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
								<div class="thumnails">
									<h4>Voluptatem accusantium doloremque</h4>													
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
									sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
									magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
									quis nostrud exerci tation ullamcorper suscipit 
									lobortis nisl ut aliquip ex ea commodo consequat.</p>								
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
									sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
									magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
									quis nostrud exerci tation ullamcorper suscipit 
									lobortis nisl ut aliquip ex ea commodo consequat.</p>
									
									<div class="ficon">
										<a href="" alt="">Learn more</a> <i class="fa fa-long-arrow-right"></i>
									</div>
								</div>
							</div>
						</div>					
					</div>	
				</div>					
			</div>			
		</div>
	
	<!--/about-->
	
	
	<div class="container">
		<div class="row">
			<div class="recent">
				<button class="btn-primarys"><h3>Nosso Time</h3></button>
				<hr>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="content">
				<div class="col-md-4">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="align-center">
							<h4>Alexandra</h4>	
							<div class="icon">
								<i class="fa fa-tasks fa-3x"></i>
							</div>
							<img src="img/team/3.jpg" alt="" class="img-responsive">
							<p>
							 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a><i class="fa fa-long-arrow-right"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="wow fadeInUp" data-wow-delay="0.4s">
						<div class="align-center">
							<h4>John Doe</h4>					
							<div class="icon">
								<i class="fa fa-files-o fa-3x"></i>
							</div>
							<img src="img/13.jpg" alt="" class="img-responsive">
							<p>
							 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a> <i class="fa fa-long-arrow-right"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="wow fadeInUp" data-wow-delay="0.6s">
						<div class="align-center">
							<h4>Kelly Hidayah</h4>					
							<div class="icon">
								<i class="fa fa-location-arrow fa-3x"></i>
							</div>
							<img src="img/team/members3.jpg" alt="" class="img-responsive">
							<p>
							 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a> <i class="fa fa-long-arrow-right"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<hr>
		</div>
	</div>
	
	<!--start footer-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="widget">
						<h5 class="widgetheading">Venha nos visitar</h5>
						<address>
						<strong>Arsha company Inc</strong><br>
						 Modernbuilding suite V124, AB 01<br>
						 Someplace 16425 Earth
						</address>
						<p>
							<i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
							<i class="icon-envelope-alt"></i> email@domainname.com
						</p>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="widget">
						<h5 class="widgetheading">Pages</h5>
						<ul class="link-list">
							<li><a href="#">Press release</a></li>
							<li><a href="#">Terms and conditions</a></li>
							<li><a href="#">Privacy policy</a></li>
							<li><a href="#">Career center</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="widget">
						<h5 class="widgetheading">Útimos Posts</h5>
						<ul class="link-list">
							<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
							<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
							<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="widget">
						<h5 class="widgetheading">Flickr photostream</h5>
						<div class="flickr_badge">
							<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
						</div>
						<div class="clear">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<hr>
			</div>
		</div>
		
		<div id="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="copyright">
							<p>
								<span>&copy; Elias Araújo 2017 All right reserved. </span>
							</p>
                            <!-- 
                                All links in the footer should remain intact. 
                                Licenseing information is available at: http://bootstraptaste.com/license/
                                You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Arsha
                            -->
						</div>
					</div>
					<div class="col-lg-6">
						<ul class="social-network">
							<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--end footer-->
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/responsive-slider.js"></script>
	<script src="js/wow.min.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
  </body>
</html>