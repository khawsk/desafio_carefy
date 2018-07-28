<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://i0.wp.com/nexocs.com/wp-content/uploads/2016/08/ico-medicina-do-trabalho@2x.png?fit=630%2C540">
    <title> Login - medCad</title>
    
    <!--
            BOOTSRAP & JS
    >
    </!-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="<?= base_url('assets/css/login.css') ?>" rel="stylesheet" type="text/css">
    

    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Bem vindo ao medCad!!</h2>
                <form class="login-form" role="form" method="post" action="<?php echo base_url('index.php/login/logar') ?>">
                    <div class="form-group">
                       <label for="InputEmail" class="text-uppercase">Email</label>
                        <input type="email" class="form-control" placeholder="Digite seu Email" required autofocus name="usuario">

                    </div>
                    <div class="form-group">
                        <label for="InputPassword1" class="text-uppercase">Senha</label>
                        <input type="password" class="form-control" placeholder="Digite sua senha" required name="senha">
                    </div>


                    <div class="form-check">
                        <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Remember Me</small>
    </label>
                        <button type="submit" class="btn btn-login float-right">Submit</button>
                    </div>
                    <? if (isset($erro)): ?>
                        <div class="alert alert-danger" role="alert" style="margin-top: 10px;">
                            <?= $erro; ?>
                        </div>
                        <? endif; ?>
                </form>
            </div>
            <div class="col-md-8 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="http://www.carefy.com.br/public/landing/images/banner/bg.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>This</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>This is Heaven</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>This is Heaven</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</body>

</html>