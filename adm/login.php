<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Berlim | Login</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="favicon2.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="dist/css/theme.css">
        <script src="src/js/vendor/modernizr-2.8.3.min.js"></script>
        <style type="text/css">
            .logo{
                width:100%;
                text-align: center;
                margin-bottom: 80px;
            }

        </style>

    
    </head>
    
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image: url('img/auth/login-bg.jpg')">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div class="logo">
                                <a href="login.php"><img src="src/img/logo2.svg" alt=""></a>
                            </div>
                            
                            <form id="form-login" method="POST">
                                <div class="form-group">
                                    <input type="text" id="txtEmail" class="form-control" placeholder="Informe seu email" >
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="txtSenha" class="form-control" placeholder="Digite sua senha">
                                    <i class="ik ik-lock"></i>
                                </div>
                                <div class="row">
                                    <div class="col text-left">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                            <span class="custom-control-label">&nbsp;Lembre de mim</span>
                                        </label>
                                    </div>
                                    <div class="col text-right">
                                        <a href="forgot-password.html">Esqueceu a senha ?</a>
                                    </div>
                                </div>
                                <div class="sign-btn text-center">
                                    <button type="submit" class="btn btn-theme">Entrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="../src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="plugins/screenfull/dist/screenfull.js"></script>
        <script src="dist/js/theme.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="src/js/login.js"></script>
       
       
    </body>
</html>
