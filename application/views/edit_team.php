<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wanna Bet? - Edit Team</title>

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
            <div div class="row">
                <div class="col-lg-12">
                    <h2>Edit Team</h2>
                </div>
            </div>
            <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form action="#" method="post" id="editTeam" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Team Name</label>
                                    <input type="text" class="form-control" placeholder="Team Name" id="team_name">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <h5>Members</h5>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Nickname</th>
                                                <th>Wins</th>
                                                <th>Games Played</th>
                                                <th>Actions</th>
                                            </tr>               
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="/bets/edit_user">Sean</a></td>
                                                <td>Suyeda</td>
                                                <td>Sonic</td>
                                                <td>70</td>
                                                <td>70</td>
                                                <td><a href="#" alt="remove"><i class="fa fa-times"></i></a></td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg pull-right" style="background-color:#009AC7;">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>