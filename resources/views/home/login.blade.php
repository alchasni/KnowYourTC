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
    <link rel="stylesheet" href="/css/pp.css">

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
                <a class="navbar-brand page-scroll" href="#page-top">Final Project PWEB</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="logout" href="/">Logout</a>
                    </li>
                    <li>
                        <div class="profile-header-container">
                            <div class="profile-header-img">
                                <?php $point = \Session::get('point'); ?>
                                <?php if ( $point < 1): ?>
                                    <img class="img-circle" src="/img/profpic/pp1.png" />
                                    <div class="rank-label-container">
                                        <span class="label label-default rank-label">newbi</span>
                                    </div>
                                <?php elseif ( $point < 250 ): ?>
                                    <img class="img-circle" src="/img/profpic/pp2.png" />
                                    <div class="rank-label-container">
                                        <span class="label label-default rank-label">meh..</span>
                                    </div>
                                <?php elseif ( $point < 500 ): ?>
                                    <img class="img-circle" src="/img/profpic/pp3.png" />
                                    <div class="rank-label-container">
                                        <span class="label label-default rank-label">jago</span>
                                    </div>
                                <?php elseif ( $point < 1000 ): ?>
                                    <img class="img-circle" src="/img/profpic/pp4.png" />
                                    <div class="rank-label-container">
                                        <span class="label label-default rank-label">imba</span>
                                    </div>
                                <?php elseif ( $point < 5000 ): ?>
                                    <img class="img-circle" src="/img/profpic/pp5.png" />
                                    <div class="rank-label-container">
                                        <span class="label label-default rank-label">DEWA</span>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
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
                <h1 id="homeHeading">WELCOME!</h1>
                <hr>
                <p>Game ini didesain sebagai alat bantu bagi mahasiswa Teknik Informatika ITS untuk lebih mengenal warga di lingkungan sekitar</p>
                <a href="#serverModal" class="btn btn-primary btn-xl page-scroll" data-toggle="modal" >LETS START!</a>

            </div>
        </div>
    </header>
    <?php $email = \Session::get('email'); ?>

    <div class="modal fade" id="serverModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px; font-size: 40px; background-color: #0097a7;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2><span class="glyphicon glyphicon-search"></span> Enter Server</h2>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form" method="POST" action="{{ route('user.join') }}">
                        {{ csrf_field()}}
                    <div class="form-group">
                        <label for="roomid"><span class="glyphicon glyphicon-equalizer"></span> Room Id</label>
                        <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control" id="roomid" name="roomid" placeholder="Enter a Room id" required="required">
                    </div>
                    <div class="form-group">
                        <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email</label>
                        <input type="text" style="cursor: not-allowed" class="form-control" id="email" name="email" value="{{ $email }}" readonly>
                    </div>
                    <button type="submit" class="btn btn-success btn-block btn-larg" style="background-color:#00838f;">Join</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>


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
</body>
