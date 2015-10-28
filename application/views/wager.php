<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wanna Bet? - Wager</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="/assets/stylesheets/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/stylesheets/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

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

        th{
            text-align: left;
        }

        section {
            margin-top: 20px;
        }

        .axn {
            margin: 0px 10px;
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
                <a class="navbar-brand" href="/">Wanna Bet?</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="active">
                        <a href="#">Wagers</a>
                    </li>
                    <li>
                        <a href="/bets/dash">User Dashboard</a>
                    </li>
                    <!-- <li class="page-scroll">
                        <a href="#contact">Profile</a>
                    </li> -->
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
        <div class="container">
            <div id="leaders">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Wagers</h2>
                        <p>Claim your winnings</p>
                    </div>
                </div> <!-- end of row for leaderboards -->
                <div class="row">
                    <form>
                        <div class="radio disabled">
                            <label><input type="radio" name="optradio">Money</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="optradio">Goods</label>
                        </div>
                        <div class="radio ">
                            <label class="radio">
                                  <input type="radio" name="user_choice" value="other">
                                Other: <input type="text" name="other_text" placeholder="i.e. wash my car">
                            </label>
                            <label>
                                <button type="submit" class="btn btn-default">place wager</button>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="assets/javascripts/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/javascripts/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="assets/javascripts/classie.js"></script>
    <script src="assets/javascripts/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/javascripts/jqBootstrapValidation.js"></script>
    <script src="assets/javascripts/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/javascripts/freelancer.js"></script>

</body>

</html>