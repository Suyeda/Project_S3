<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wanna Bet? - Template</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="/assets/stylesheets/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/stylesheets/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/assets/stylesheets/log_reg.css">
    <script src="/assets/javascripts/log_reg.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        h2 {
            text-align: left;
        }

        th {
            text-align: left;
        }

        section {
            margin-top: 20px;
        }

        .sects {
            border: 2px dotted silver;
            border-radius: 5px;
            padding: 10px;
            margin: 20px 0;
        }
    </style>


</head>

    <body id="page-top" class="index">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Project S3</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="hidden">
                            <a href="/"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="/bets/dash">Dashboard</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#teams">Teams</a>
                        </li>
                        <li>
                            <a href="#">Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <section>
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="panel panel-login">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <a href="#" class="active" id="login-form-link">Login</a>
                                        </div>
                                        <div class="col-xs-6">
                                            <a href="#" id="register-form-link">Register</a>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <form id="login-form" action="/bets/sign_in" method="post" role="form" style="display: block;">
                                                <?= $this->session->flashdata('login_error'); ?>
                                                <div class="form-group">
                                                    <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Username" value="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-group text-left">
                                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                                    <label for="remember"> Remember Me</label>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-sm-offset-3">
                                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="text-center">
                                                                <a href="/bets/dash" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <form id="register-form" action="/bets/register" method="post" role="form" style="display: none;">
                                                <p><?= validation_errors() ?></p>
                                                <div class="form-group">
                                                    <input type="text" name="first_name" id="first-name" tabindex="1" class="form-control" placeholder="First Name" value="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="last_name" id="last-name" tabindex="1" class="form-control" placeholder="Last Name" value="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="email" id="email" tabindex="2" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="nickname" id="username" tabindex="2" class="form-control" placeholder="Username">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="pass1" id="pass1" tabindex="2" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="pass2" id="pass2" tabindex="2" class="form-control" placeholder="Password Conformation">
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-sm-offset-3">
                                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                </div>
            </div>
            <div class="row">
                    
            </div>
        </section>
    </body>
</html>