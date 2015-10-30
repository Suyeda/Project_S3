<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wanna Bet? - Template</title>

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
        .customtable{
        	border: 2px dotted silver;
        	height: 250px;
        }
        .center_me{
        	margin: 0 37%;
        }
        .team_title{
        	text-align: center;
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
                    <a class="navbar-brand" href="/bets/logout">Project S3</a>
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
                	<div class="team_title">
                		<h1><?= $current_team['name'] ?></h1>
                	</div>
                <div class = "center_me col-lg-12">
                <img id="teampic" src="/assets/images/portfolio/team<?=$current_team['id']?>.jpg" class="img-responsive" alt="">
            	</div>
                <h2>Recent Games</h2>
                <div id="recentgames">
                    <table class="customtable table table-hover">
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <h2>Roster</h2>
                <div id="roster" class="col-lg-12">
                    <table class="customtable table table-hover">
                        <thead>
                            <tr>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>W/L Ratio</td>
                                <td>Games Played</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($current_roster as $current_player){ ?>
                            <tr>
                                <td><?= $current_player['first_name']?></td>
                                <td><?= $current_player['last_name']?></td>
                                <?php if($current_player['gp'] != 0){ ?>
                                <td><?= $current_player['wins'] / $current_player['gp'] ?></td>
                                <?php }else{ ?>
                                <td>0%</td>
                                <?php } ?>
                                <td><?= $current_player['gp']?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <h2>Stats</h2>
                <div id="stats">
                    <table class="customtable table table-hover">
                        <thead>
                            <tr>
                                <td>Wins</td>
                                <td>Loses</td>
                                <td>W/L Ratio</td>
                                <td>Games Played</td>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                
                <?php if($this->session->userdata('team_id') !== $current_team['id']) { ?>
                <a href="/bets/duel/<?=$current_team['id']?>" class="btn btn-primary" id="challenge-button">Challenge Team</a>
                <?php } ?>
            </div>
                </div>
            </div>
            <div class="row">
                    
            </div>
        </section>
    </body>
</html>