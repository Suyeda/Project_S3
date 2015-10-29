<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wanna Bet? - Dashboard</title>

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
                        <a href="#leaders">Leaderboard</a>
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
        <div class="container">
            <div class="row">

                <div class="col-lg-12 sects">
                    <h2>Your Profile</h2>    
                    <table>
                        <tr>
                            <td>Nickname: </td>
                            <td><?= $this->session->userdata['nickname'] ?></td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td> <a href="mailto:email@address.com"></a><?= $this->session->userdata['user_email'] ?></td>
                        </tr>
                        <tr>
                            <td>Wins: </td>
                            <td><?= $this->session->userdata['wins'] ?></td>
                        </tr>
                        <tr>
                            <td>Games Played: </td>
                            <td><?= $this->session->userdata['gamesplayed'] ?></td>
                        </tr>

                    </table>
                </div>
            </div>
            <div id="leaders">
                <div class="row">
                    <div class="col-lg-12 sects">
                        <h2>User Leaderboard</h2>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Nickname</th>
                                    <th>Wins</th>
                                    <th>Games Played</th>
                                    <th>Status</th>
                                </tr>               
                            </thead>
                            <tbody>
                                <?php foreach($all_users as $user) {    ?>
                                <tr>
                                    <td>1</td>
                                    <td><?= $user['first_name'] ?></td>
                                    <td><?= $user['last_name'] ?></td>
                                    <td><?= $user['nickname'] ?></td>
                                    <td><?= $user['wins'] ?></td>
                                    <td><?= $user['gp'] ?></td>
                                    <td><?= $user['status'] ?></td>
                                </tr>
                                <?php } ?>                             
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end of row for leaderboards -->
            </div>

            <div id="teamscores">
                <div class="row">
                    <div class="col-lg-12 sects">
                        <h2>Team Leaderboard</h2>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Team Name</th>
                                    <th>Wins</th>
                                    <th>Games Played</th>
                                    <th># of Members</th>
                                </tr>                   
                            </thead>
                            <tbody> 
                                <?php foreach ($all_teams as $team) { ?>                               
                                <tr>
                                    <td>1</td>
                                    <td><?= $team['name'] ?></td>
                                    <td><?= $team['team_wins'] ?></td>
                                    <td><?= $team['team_gp'] ?></td>
                                    <td>4</td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end of row for team leaderboard -->
            </div>

            <div id="teams">
                <div class="row">
                    <div class="col-lg-12 sects">
                        <h2>Teams</h2>
                        <br>
                        <div class="row teams">
                            <div class="col-sm-4 portfolio-item">
                                <a href="/bets/edit_team" class="portfolio-link">
                                    <h4>Legendary Leviathans</h4>
                                    <img src="/assets/images/portfolio/team1.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 portfolio-item">
                                <a href="/bets/team_profile/2" class="portfolio-link">
                                    <h4>Boundless Ambition</h4>
                                    <img src="/assets/images/portfolio/team2.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 portfolio-item">
                                <a href="/bets/team_profile/3" class="portfolio-link">
                                    <h4>Hand of God</h4>
                                    <img src="/assets/images/portfolio/team3.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                        </div>
                        <br>
                        <div class="row teams">
                            <div class="col-sm-4 portfolio-item">
                                <a href="/bets/team_profile/4" class="portfolio-link">
                                    <h4>Journey's End</h4>
                                    <img src="/assets/images/portfolio/team4.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 portfolio-item">
                                <a href="/bets/team_profile/5" class="portfolio-link">
                                    <h4>Betrayers of Humanity</h4>
                                    <img src="/assets/images/portfolio/team5.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 portfolio-item">
                                <a href="/bets/team_profile/6" class="portfolio-link">
                                    <h4>Sinister's Revenge</h4>
                                    <img src="/assets/images/portfolio/team6.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of row for teams -->
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