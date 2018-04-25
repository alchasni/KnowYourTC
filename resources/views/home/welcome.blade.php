<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome!</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--login-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
	<body id="page-top">
	    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
	        <div class="container-fluid">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
	                </button>
	                <a class="navbar-brand page-scroll" href="#page-top">Final Project</a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav navbar-right">
	                    <li>
	                        <a class="page-scroll" href="#about">About</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="#htp">How to Play</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="#team">Our Team</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="#hs">High-Score</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="#contact">Contact</a>
	                    </li>
	                    <li>
	                        <a class="modal" href="#loginModal" data-toggle="modal">Login?</a>
	                    </li>
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container-fluid -->
	    </nav>
	    <header>
	        <div class="header-content">
	            <div class="header-content-inner">
	                <h1 id="homeHeading">Know Your TC</h1>
	                <hr>
	                <p>Yakin kamu sudah kenal Jurusanmu? Gak malu kalo ditanya jawabnya gak tau?<br>Uji pengetahuanmu di Quiz ini!<br><br>Kalahkan score temanmu, jadi juara satu dan pamerkan namamu di scoreboard supaya seluruh jurusan tau kalau Anda orang yang mengenal jurusanmu</p>
	                <a href="#htp" class="btn btn-primary btn-xl page-scroll">How To Play</a>
	            </div>
	        </div>
	    	<!-- Allert -->
		        <?php $success = \Session::get('success'); ?>
				<?php if ( $success == 0): ?>
					<div style="position: fixed;  width: 100%; padding-left: 35px; padding-right: 35px; padding-top: 90px; z-index: 999;">
						<div class="alert alert-danger alert-dismissable fade in" id="alertLogin" style="margin: 0 auto;">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						    <strong>Warning!</strong> Password atau Email yang anda masukkan salah.
						</div>
					</div>
				<?php endif ?>
				<?php if ( $success == 1): ?>
					<div style="position: fixed;  width: 100%; padding-left: 35px; padding-right: 35px; padding-top: 90px; z-index: 999;">
						<div class="alert alert-success alert-dismissable fade in" id="alertRegister1">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						    <strong>Yay!</strong> Anda berhasil Mendaftar, Silahkan login.
						</div>
					</div>
				<?php endif ?>
				<?php if ( $success == -1): ?>
					<div style="position: fixed;  width: 100%; padding-left: 35px; padding-right: 35px; padding-top: 90px; z-index: 999;">
						<div class="alert alert-warning alert-dismissable fade in" id="alertRegister2">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						    <strong>Warning!</strong> Email yang anda masukan sudah pernah digunakan di akun lain.
						</div>
					</div>
				<?php endif ?>
	    </header>

	    <section class="bg-primary" id="about">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-8 col-lg-offset-2 text-center">
	                    <h2 class="section-heading">About this sites</h2><br>
	                	<img src="/img/home/about.png" style="width: 186px; height: 186px;">
	                    <p class="text-faded"><br>
	                        Web ini dibuat Untuk memenuhi Final Project mata kuliah kami. <br>
	                        Web-based Game ini didesain sebagai alat bantu bagi mahasiswa Teknik Informatika ITS untuk lebih mengenal lingkungan Teknik informatika ITS.<br>
	                        Kami berharap web ini dapat menumbuhkan rasa saling mengenal mahasiswa Teknik Informatika ITS.<br> 
	                    </p>
	                    <!--a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a-->
	                </div>
	            </div>
	        </div>
	    </section>

	    <section class="bg-dark" id="htp">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-8 col-lg-offset-2 text-center">
	                    <h2 class="section-heading">How To Play!</h2><br>
	                	<img src="/img/home/htp.png" style="width: 186px; height: 186px;">
	                    <p class="text-faded"><br>
	                    	Login!<br>
	                    	Join Room!<br>
                    		Jawab 10 pertanyaannya<br>
                    		Kalahkan Score di room itu<br>
                    		Ulangi Step 2-4<br>
                    		Jadilah nomor 1 di scoreboard!!<br>
	                    </p>
	                    <!--a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a-->
	                </div>
	            </div>
	        </div>
	    </section>

	    <section class="bg-primary" id="team">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-8 col-lg-offset-2 text-center">
	                    <h2 class="section-heading">Our Team</h2><br>
	                	<img src="/img/home/we.png" style="width: 186px; height: 186px;">
	                    <p class="text-faded"><br>
	                    	Yustian - 5115100058<br>
	                    	William Budi - 5115100063<br>
	                    	A. Ibnu Malik Al Chasni - 5115100175<br>
	                    </p>
	                    <!--a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a-->
	                </div>
	            </div>
	        </div>
	    </section>
	    <section class="bg-dark" id="hs">
	        <div class="container">
		    	<div >
		            <div class="row">
		                <div class="col-lg-8 col-lg-offset-2 text-center">
		                    <h2 class="section-heading">High Score</h2><br>
			    		<table class="table table-condensed tfix" >
			    		<thead  style="background-color: #00838f;">
			    			<tr>
			    				<td>Nama</td>
			    				<td>Score</td>
			    			</tr>
			    		</thead>
			    		@foreach($usr as $u)
			    			<tr>
			    				<td style="color:white;">{{$u->name}}</td>
			    				<td style="color:white;">{{$u->point}}</td>
			    			</tr>
			    		@endforeach
			    		</table>
			    		</div>
			    	</div>
		    	</div>
	    	</div>
	    </section>
	    <section id="contact">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-8 col-lg-offset-2 text-center">
	                    <h2 class="section-heading">Let's Get In Touch!</h2>
	                    <hr class="primary">
	                    <p>what do you think about our web? Wanna know more? Wanna hire us? Give us a call or send us an email and we will get back to you as soon as possible!<br><br></p>
	                </div>
	                <div class="col-lg-4 col-lg-offset-2 text-center">
	                    <i class="fa fa-phone fa-3x sr-contact"></i>
	                    <p>Chasni : 081334149358<br>Marisa : 081445323999</p>
	                </div>
	                <div class="col-lg-4 text-center">
	                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
	                    <p><a href="mailto:achmad.alchasni1@gmail.com">achmad.alchasni1@gmail.com</a></p>
	                </div>
	            </div>
	        </div>
	    </section>

    <!-- Modal -->
    	<!-- Login Modal -->
        <div class="modal fade" id="loginModal" role="dialog">
		    <div class="modal-dialog">
			    <div class="modal-content">
			    	<div class="modal-header" style="padding:35px 50px; font-size: 40px; background-color: #0097a7;">
			        	<button type="button" class="close" data-dismiss="modal">&times;</button>
			        	<h2><span class="glyphicon glyphicon-lock"></span> Login</h2>
			        </div>
			        <div class="modal-body" style="padding:40px 50px;">
						<form role="form" method="POST" action="{{ route('user.login') }}">
							{{ csrf_field()}}
			            <div class="form-group">
			            	<label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
			            	<input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" required="required">
			            </div>
			            <div class="form-group">
			            	<label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
			            	<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required="required">
			            </div>
			            <button type="submit" class="btn btn-success btn-block btn-larg" style="background-color:#00838f;"><span class="glyphicon glyphicon-off" ></span>Login</button>
			          	</form>
			        </div>
                	<div class="modal-footer">
			        	<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
			        	<p>Not a member? <a href="#registerModal" data-dismiss="modal" data-toggle="modal">Sign Up</a></p>
			        </div>
				</div>
		    </div>
	  	</div>

    	<!-- Register Modal -->
		<div class="modal fade" id="registerModal" role="dialog">
		    <div class="modal-dialog">
			    <div class="modal-content">
			    	<div class="modal-header" style="padding:35px 50px; font-size: 40px;  background-color: #0097a7;">
			        	<button type="button" class="close" data-dismiss="modal">&times;</button>
			        	<h2><span class="glyphicon glyphicon-lock"></span> Register</h2>
			        </div>
			        <div class="modal-body" style="padding:40px 50px;">
						<form role="form" method="POST" action="{{ route('user.register') }}">
							{{ csrf_field()}}
			            <div class="form-group">
			            	<label for="userName"><span class="glyphicon glyphicon-user"></span> User Name</label>
			            	<input type="text" class="form-control" id="username" name="userName" placeholder="Enter your name" required="required">
			            </div>
			            <div class="form-group">
			            	<label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
			            	<input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" required="required">
			            </div>
			            <div class="form-group">
			            	<label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
			            	<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required="required">
			            </div>
			            <div class="checkbox">
			            	<label><input type="checkbox" value="" checked>Remember me</label>
			            </div>
			            <button type="submit" class="btn btn-success btn-block btn-larg"><span class="glyphicon glyphicon-off"></span> Register</button>
			          	</form>
			        </div>

			        <div class="modal-footer">
			        	<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
			        </div>
				</div>
		    </div>
	  	</div>

		<script>
		    $(document).ready(function(){
		        $("#loginModal").modal('show');
		    });
			// $(document).ready(function(){
			// 	$('#the-thing-that-opens-your-alert').click(function () {
			// 		$('#le-alert').addClass('in'); // shows alert with Bootstrap CSS3 implem
			// 	});

			// 	$('.close').click(function () {
			// 		$(this).parent().removeClass('in'); // hides alert with Bootstrap CSS3 implem
			// 	});
			// });
		</script>
	    <!-- jQuery -->
	    <script src="vendor/jquery/jquery.min.js"></script>

	    <!-- Bootstrap Core JavaScript -->
	    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	    <!-- Plugin JavaScript -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
	    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

	    <!-- Theme JavaScript -->
	    <script src="js/creative.min.js"></script>
	</body>
</html>
