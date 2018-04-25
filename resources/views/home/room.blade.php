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
                            <a class="logout" onclick="myFunction()">Logout</a>
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
                                    <?php elseif ( $point < 50 ): ?>
                                        <img class="img-circle" src="/img/profpic/pp2.png" />
                                        <div class="rank-label-container">
                                            <span class="label label-default rank-label">meh..</span>
                                        </div>
                                    <?php elseif ( $point < 100 ): ?>
                                        <img class="img-circle" src="/img/profpic/pp3.png" />
                                        <div class="rank-label-container">
                                            <span class="label label-default rank-label">jago</span>
                                        </div>
                                    <?php elseif ( $point < 500 ): ?>
                                        <img class="img-circle" src="/img/profpic/pp4.png" />
                                        <div class="rank-label-container">
                                            <span class="label label-default rank-label">imba</span>
                                        </div>
                                    <?php elseif ( $point < 1000 ): ?>
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
            <?php $roomid = \Session::get('roomid'); ?>
            <?php $email = \Session::get('email'); ?>
            <div class="header-content">
                <div class="header-content-inner">
                    <h1 id="homeHeading">Room {{ $roomid }}</h1>
                    <hr>
                    <p>Game ini didesain sebagai alat bantu bagi mahasiswa Teknik Informatika ITS untuk lebih mengenal warga di lingkungan sekitar</p>
                    <a href="#qmodal1" class="btn btn-primary btn-xl" data-toggle="modal" data-backdrop="static" data-keyboard="false">Start!</a>
                </div>
            </div>
        </header>
        <!-- soal -->

        <form action="{{ route('user.submit') }}" id="myForm" method = "POST">
        {{ csrf_field()}}
            <input type="hidden" id="jawab1" name="jawab1">
            <input type="hidden" id="id1" name="id1">
            <input type="hidden" id="jawab2" name="jawab2">
            <input type="hidden" id="id2" name="id2">
            <input type="hidden" id="jawab3" name="jawab3">
            <input type="hidden" id="id3" name="id3">
            <input type="hidden" id="jawab4" name="jawab4">
            <input type="hidden" id="id4" name="id4">
            <input type="hidden" id="jawab5" name="jawab5">
            <input type="hidden" id="id5" name="id5">
            <input type="hidden" id="jawab6" name="jawab6">
            <input type="hidden" id="id6" name="id6">    
            <input type="hidden" id="jawab7" name="jawab7">
            <input type="hidden" id="id7" name="id7">
            <input type="hidden" id="jawab8" name="jawab8">
            <input type="hidden" id="id8" name="id8">
            <input type="hidden" id="jawab9" name="jawab9">
            <input type="hidden" id="id9" name="id9">
            <input type="hidden" id="jawab10" name="jawab10">
            <input type="hidden" id="id10" name="id10">
            <input type="hidden" id="jawab11" name="jawab11">
            <input type="hidden" id="id11" name="id11">
            <input type="hidden" id="jawab12" name="jawab12">
            <input type="hidden" id="id12" name="id12">
            <input type="hidden" id="jawab13" name="jawab13">
            <input type="hidden" id="id13" name="id13">
            <input type="hidden" id="jawab14" name="jawab14">
            <input type="hidden" id="id14" name="id14">
            <input type="hidden" id="jawab15" name="jawab15">
            <input type="hidden" id="id15" name="id15">
            <input type="hidden" id="email" name="email" value="{{ $email }}">
            <input type="hidden" id="point" name="point" value="{{ $point }}">

            <div class="modal fade" id="qmodal1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" style="padding:40px 50px; background-color: #e0f7fa;">
                            <div class="row">
                                <img src=" {{ $arraypert1[0]["foto"] }} " class="img-responsive center-block" style="width: 300px; height: 350px;">
                            </div>
                            <div class="row">
                                <p>{{ $arraypert1[0]["soal"] }}</p>
                            </div>
                            <div class="row" style="padding-top: 30px;">
                                <div class="col-sm-6">
                                    <a href="#qmodal2" onclick="jawab1('1', '{{ $arraypert1[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert1[0]["pilihan1"] }}</a>
                                    <a href="#qmodal2" onclick="jawab1('2','{{ $arraypert1[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert1[0]["pilihan2"] }}</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#qmodal2" onclick="jawab1('3','{{ $arraypert1[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert1[0]["pilihan3"] }}</a>
                                    <a href="#qmodal2" onclick="jawab1('4','{{ $arraypert1[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert1[0]["pilihan4"] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="qmodal2" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" style="padding:40px 50px; background-color: #e0f7fa;">
                            <div class="row">
                                <img src=" {{ $arraypert2[0]["foto"] }} " class="img-responsive center-block" style="width: 300px; height: 350px;">
                            </div>
                            <div class="row">
                                <p>{{ $arraypert2[0]["soal"] }}</p>
                            </div>
                            <div class="row" style="padding-top: 30px;">
                                <div class="col-sm-6">
                                    <a href="#qmodal3" onclick="jawab2('1','{{ $arraypert2[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert2[0]["pilihan1"] }}</a>
                                    <a href="#qmodal3" onclick="jawab2('2','{{ $arraypert2[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert2[0]["pilihan2"] }}</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#qmodal3" onclick="jawab2('3','{{ $arraypert2[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert2[0]["pilihan3"] }}</a>
                                    <a href="#qmodal3" onclick="jawab2('4','{{ $arraypert2[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert2[0]["pilihan4"] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="qmodal3" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" style="padding:40px 50px; background-color: #e0f7fa;">
                            <div class="row">
                                <img src=" {{ $arraypert3[0]["foto"] }} " class="img-responsive center-block" style="width: 300px; height: 350px;">
                            </div>
                            <div class="row">
                                <p>{{ $arraypert3[0]["soal"] }}</p>
                            </div>
                            <div class="row" style="padding-top: 30px;">
                                <div class="col-sm-6">
                                    <a href="#qmodal4" onclick="jawab3('1','{{ $arraypert3[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert3[0]["pilihan1"] }}</a>
                                    <a href="#qmodal4" onclick="jawab3('2','{{ $arraypert3[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert3[0]["pilihan2"] }}</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#qmodal4" onclick="jawab3('3','{{ $arraypert3[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert3[0]["pilihan3"] }}</a>
                                    <a href="#qmodal4" onclick="jawab3('4','{{ $arraypert3[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert3[0]["pilihan4"] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="qmodal4" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" style="padding:40px 50px; background-color: #e0f7fa;">
                            <div class="row">
                                <img src=" {{ $arraypert4[0]["foto"] }} " class="img-responsive center-block" style="width: 300px; height: 350px;">
                            </div>
                            <div class="row">
                                <p>{{ $arraypert4[0]["soal"] }}</p>
                            </div>
                            <div class="row" style="padding-top: 30px;">
                                <div class="col-sm-6">
                                    <a href="#qmodal5" onclick="jawab4('1','{{ $arraypert4[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert4[0]["pilihan1"] }}</a>
                                    <a href="#qmodal5" onclick="jawab4('2','{{ $arraypert4[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert4[0]["pilihan2"] }}</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#qmodal5" onclick="jawab4('3','{{ $arraypert4[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert4[0]["pilihan3"] }}</a>
                                    <a href="#qmodal5" onclick="jawab4('4','{{ $arraypert4[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert4[0]["pilihan4"] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="qmodal5" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" style="padding:40px 50px; background-color: #e0f7fa;">
                            <div class="row">
                                <img src=" {{ $arraypert5[0]["foto"] }} " class="img-responsive center-block" style="width: 300px; height: 350px;">
                            </div>
                            <div class="row">
                                <p>{{ $arraypert5[0]["soal"] }}</p>
                            </div>
                            <div class="row" style="padding-top: 30px;">
                                <div class="col-sm-6">
                                    <a href="#qmodal6" onclick="jawab5('1','{{ $arraypert5[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert5[0]["pilihan1"] }}</a>
                                    <a href="#qmodal6" onclick="jawab5('2','{{ $arraypert5[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert5[0]["pilihan2"] }}</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#qmodal6" onclick="jawab5('3','{{ $arraypert5[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert5[0]["pilihan3"] }}</a>
                                    <a href="#qmodal6" onclick="jawab5('4','{{ $arraypert5[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert5[0]["pilihan4"] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="qmodal6" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" style="padding:40px 50px; background-color: #e0f7fa;">
                            <div class="row">
                                <img src=" {{ $arraypert6[0]["foto"] }} " class="img-responsive center-block" style="width: 300px; height: 350px;">
                            </div>
                            <div class="row">
                                <p>{{ $arraypert6[0]["soal"] }}</p>
                            </div>
                            <div class="row" style="padding-top: 30px;">
                                <div class="col-sm-6">
                                    <a href="#qmodal7" onclick="jawab6('1','{{ $arraypert6[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert6[0]["pilihan1"] }}</a>
                                    <a href="#qmodal7" onclick="jawab6('2','{{ $arraypert6[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert6[0]["pilihan2"] }}</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#qmodal7" onclick="jawab6('3','{{ $arraypert6[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert6[0]["pilihan3"] }}</a>
                                    <a href="#qmodal7" onclick="jawab6('4','{{ $arraypert6[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert6[0]["pilihan4"] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="qmodal7" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" style="padding:40px 50px; background-color: #e0f7fa;">
                            <div class="row">
                                <img src=" {{ $arraypert7[0]["foto"] }} " class="img-responsive center-block" style="width: 300px; height: 350px;">
                            </div>
                            <div class="row">
                                <p>{{ $arraypert7[0]["soal"] }}</p>
                            </div>
                            <div class="row" style="padding-top: 30px;">
                                <div class="col-sm-6">
                                    <a href="#qmodal8" onclick="jawab7('1','{{ $arraypert7[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert7[0]["pilihan1"] }}</a>
                                    <a href="#qmodal8" onclick="jawab7('2','{{ $arraypert7[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert7[0]["pilihan2"] }}</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#qmodal8" onclick="jawab7('3','{{ $arraypert7[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert7[0]["pilihan3"] }}</a>
                                    <a href="#qmodal8" onclick="jawab7('4','{{ $arraypert7[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert7[0]["pilihan4"] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="qmodal8" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" style="padding:40px 50px; background-color: #e0f7fa;">
                            <div class="row">
                                <img src=" {{ $arraypert8[0]["foto"] }} " class="img-responsive center-block" style="width: 300px; height: 350px;">
                            </div>
                            <div class="row">
                                <p>{{ $arraypert8[0]["soal"] }}</p>
                            </div>
                            <div class="row" style="padding-top: 30px;">
                                <div class="col-sm-6">
                                    <a href="#qmodal9" onclick="jawab8('1','{{ $arraypert8[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert8[0]["pilihan1"] }}</a>
                                    <a href="#qmodal9" onclick="jawab8('2','{{ $arraypert8[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert8[0]["pilihan2"] }}</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#qmodal9" onclick="jawab8('3','{{ $arraypert8[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert8[0]["pilihan3"] }}</a>
                                    <a href="#qmodal9" onclick="jawab8('4','{{ $arraypert8[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert8[0]["pilihan4"] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="qmodal9" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" style="padding:40px 50px; background-color: #e0f7fa;">
                            <div class="row">
                                <img src=" {{ $arraypert9[0]["foto"] }} " class="img-responsive center-block" style="width: 300px; height: 350px;">
                            </div>
                            <div class="row">
                                <p>{{ $arraypert9[0]["soal"] }}</p>
                            </div>
                            <div class="row" style="padding-top: 30px;">
                                <div class="col-sm-6">
                                    <a href="#qmodal10" onclick="jawab9('1','{{ $arraypert9[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert9[0]["pilihan1"] }}</a>
                                    <a href="#qmodal10" onclick="jawab9('2','{{ $arraypert9[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert9[0]["pilihan2"] }}</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#qmodal10" onclick="jawab9('3','{{ $arraypert9[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert9[0]["pilihan3"] }}</a>
                                    <a href="#qmodal10" onclick="jawab9('4','{{ $arraypert9[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert9[0]["pilihan4"] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="qmodal10" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" style="padding:40px 50px; background-color: #e0f7fa;">
                            <div class="row">
                                <img src=" {{ $arraypert10[0]["foto"] }} " class="img-responsive center-block" style="width: 300px; height: 350px;">
                            </div>
                            <div class="row">
                                <p>{{ $arraypert10[0]["soal"] }}</p>
                            </div>
                            <div class="row" style="padding-top: 30px;">
                                <div class="col-sm-6">
                                    <a href="#qmodal11" onclick="jawab10('1','{{ $arraypert10[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert10[0]["pilihan1"] }}</a>
                                    <a href="#qmodal11" onclick="jawab10('2','{{ $arraypert10[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert10[0]["pilihan2"] }}</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#qmodal11" onclick="jawab10('3','{{ $arraypert10[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert10[0]["pilihan3"] }}</a>
                                    <a href="#qmodal11" onclick="jawab10('4','{{ $arraypert10[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert10[0]["pilihan4"] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="qmodal11" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" style="padding:40px 50px; background-color: #e0f7fa;">
                            <div class="row">
                                <img src=" {{ $arraypert11[0]["foto"] }} " class="img-responsive center-block" style="width: 300px; height: 350px;">
                            </div>
                            <div class="row">
                                <p>{{ $arraypert11[0]["soal"] }}</p>
                            </div>
                            <div class="row" style="padding-top: 30px;">
                                <div class="col-sm-6">
                                    <a href="#qmodal12" onclick="jawab11('1','{{ $arraypert11[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert11[0]["pilihan1"] }}</a>
                                    <a href="#qmodal12" onclick="jawab11('2','{{ $arraypert11[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert11[0]["pilihan2"] }}</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#qmodal12" onclick="jawab11('3','{{ $arraypert11[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert11[0]["pilihan3"] }}</a>
                                    <a href="#qmodal12" onclick="jawab11('4','{{ $arraypert11[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert11[0]["pilihan4"] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="qmodal12" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" style="padding:40px 50px; background-color: #e0f7fa;">
                            <div class="row">
                                <img src=" {{ $arraypert12[0]["foto"] }} " class="img-responsive center-block" style="width: 300px; height: 350px;">
                            </div>
                            <div class="row">
                                <p>{{ $arraypert12[0]["soal"] }}</p>
                            </div>
                            <div class="row" style="padding-top: 30px;">
                                <div class="col-sm-6">
                                    <a href="#qmodal13" onclick="jawab12('1','{{ $arraypert12[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert12[0]["pilihan1"] }}</a>
                                    <a href="#qmodal13" onclick="jawab12('2','{{ $arraypert12[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert12[0]["pilihan2"] }}</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#qmodal13" onclick="jawab12('3','{{ $arraypert12[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert12[0]["pilihan3"] }}</a>
                                    <a href="#qmodal13" onclick="jawab12('4','{{ $arraypert12[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert12[0]["pilihan4"] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="qmodal13" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" style="padding:40px 50px; background-color: #e0f7fa;">
                            <div class="row">
                                <img src=" {{ $arraypert13[0]["foto"] }} " class="img-responsive center-block" style="width: 300px; height: 350px;">
                            </div>
                            <div class="row">
                                <p>{{ $arraypert13[0]["soal"] }}</p>
                            </div>
                            <div class="row" style="padding-top: 30px;">
                                <div class="col-sm-6">
                                    <a href="#qmodal14" onclick="jawab13('1','{{ $arraypert13[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert13[0]["pilihan1"] }}</a>
                                    <a href="#qmodal14" onclick="jawab13('2','{{ $arraypert13[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert13[0]["pilihan2"] }}</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#qmodal14" onclick="jawab13('3','{{ $arraypert13[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert13[0]["pilihan3"] }}</a>
                                    <a href="#qmodal14" onclick="jawab13('4','{{ $arraypert13[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert13[0]["pilihan4"] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="qmodal14" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" style="padding:40px 50px; background-color: #e0f7fa;">
                            <div class="row">
                                <img src=" {{ $arraypert14[0]["foto"] }} " class="img-responsive center-block" style="width: 300px; height: 350px;">
                            </div>
                            <div class="row">
                                <p>{{ $arraypert14[0]["soal"] }}</p>
                            </div>
                            <div class="row" style="padding-top: 30px;">
                                <div class="col-sm-6">
                                    <a href="#qmodal15" onclick="jawab14('1','{{ $arraypert14[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert14[0]["pilihan1"] }}</a>
                                    <a href="#qmodal15" onclick="jawab14('2','{{ $arraypert14[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert14[0]["pilihan2"] }}</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#qmodal15" onclick="jawab14('3','{{ $arraypert14[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert14[0]["pilihan3"] }}</a>
                                    <a href="#qmodal15" onclick="jawab14('4','{{ $arraypert14[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-toggle="modal" data-dismiss="modal">{{ $arraypert14[0]["pilihan4"] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="qmodal15" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" style="padding:40px 50px; background-color: #e0f7fa;">
                            <div class="row">
                                <img src=" {{ $arraypert15[0]["foto"] }} " class="img-responsive center-block" style="width: 300px; height: 350px;">
                            </div>
                            <div class="row">
                                <p>{{ $arraypert15[0]["soal"] }}</p>
                            </div>
                            <div class="row" style="padding-top: 30px;">
                                <div class="col-sm-6">
                                    <a type='submit'" onclick="jawab15('1','{{ $arraypert15[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-dismiss="modal">{{ $arraypert15[0]["pilihan1"] }}</a>
                                    <a type='submit' onclick="jawab15('2','{{ $arraypert15[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static" data-dismiss="modal">{{ $arraypert15[0]["pilihan2"] }}</a>
                                </div>
                                <div class="col-sm-6">
                                    <a type='submit' onclick="jawab15('3','{{ $arraypert15[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block">{{ $arraypert15[0]["pilihan3"] }}</a>
                                    <a type='submit' onclick="jawab15('4','{{ $arraypert15[0]["id_pertanyaan"] }}')" class="btn btn-primary btn-block" data-backdrop="static"  data-dismiss="modal">{{ $arraypert15[0]["pilihan4"] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>

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

        <script>
            function myFunction() {
                alert("You cannot Logout! please exit room before loging out");
            }
            function jawab1(jwb,id) { 
                document.getElementById("jawab1").value = jwb;
                document.getElementById("id1").value = id;
            }
            function jawab2(jwb,id) {  
                document.getElementById("jawab2").value = jwb;
                document.getElementById("id2").value = id;
            }
            function jawab3(jwb,id) {  
                document.getElementById("jawab3").value = jwb;
                document.getElementById("id3").value = id;
            }
            function jawab4(jwb,id) {  
                document.getElementById("jawab4").value = jwb;
                document.getElementById("id4").value = id;
            }
            function jawab5(jwb,id) {  
                document.getElementById("jawab5").value = jwb;
                document.getElementById("id5").value = id;
            }
            function jawab6(jwb,id) {  
                document.getElementById("jawab6").value = jwb;
                document.getElementById("id6").value = id;
            }
            function jawab7(jwb,id) {  
                document.getElementById("jawab7").value = jwb;
                document.getElementById("id7").value = id;
            }
            function jawab8(jwb,id) {  
                document.getElementById("jawab8").value = jwb;
                document.getElementById("id8").value = id;
            }
            function jawab9(jwb,id) {  
                document.getElementById("jawab9").value = jwb;
                document.getElementById("id9").value = id;
            }
            function jawab10(jwb,id) {  
                document.getElementById("jawab10").value = jwb;
                document.getElementById("id10").value = id;
            }
            function jawab11(jwb,id) {  
                document.getElementById("jawab11").value = jwb;
                document.getElementById("id11").value = id;
            }
            function jawab12(jwb,id) {  
                document.getElementById("jawab12").value = jwb;
                document.getElementById("id12").value = id;
            }
            function jawab13(jwb,id) {  
                document.getElementById("jawab13").value = jwb;
                document.getElementById("id13").value = id;
            }
            function jawab14(jwb,id) {  
                document.getElementById("jawab14").value = jwb;
                document.getElementById("id14").value = id;
            }
            function jawab15(jwb,id) {  
                document.getElementById("jawab15").value = jwb;
                document.getElementById("id15").value = id;

                document.getElementById("myForm").submit();
            }
            function doSomething() {
                $.get("jawab.php");
                alert("You cannot Logout! please exit room before loging out");
                return false;
            }
        </script>
    </body>

</html>