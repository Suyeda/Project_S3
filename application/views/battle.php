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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

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
    <script>
      $(document).ready(function(){

        console.log('test');
        $('#middle_button').click(function(){
          $.get('/bets/quotes', function(res) {
            console.log(res);
            var htmlStr = "";
              htmlStr += "<p class='small'>" + res['quote'] + "</h5>";
              htmlStr += "<p class='smaller'>-" + res['author'] + "</p>";
              htmlStr += "</div>";
            $('#quote').html(htmlStr);
          }, 'json');
        });

        $('#myModal').on('shown.bs.modal', function () {
           $('#myInput').focus();
        })

      });
    </script>
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

        .vs {
            width: 70%;
            margin: 0 auto;
        }

        .prizes {
            margin: 0 auto;
            margin-left: 12%;
            
        }

        .go_mid{
            text-align: center;
        }

        form{
            width: 45%;
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
                    <h2>Battle Arena</h2>
                </div>
            </div>
                <div class="col-lg-12">                      
                  <p>Two groups enter, only one leaves. This is the ultimate bloodsport, ladies and gentleman. Teams from all walks of life--bred for the rigors of war but seeking riches and recognition--end up here.</p>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                      <table class="table team">
                        <thead>
                          <tr>
                            <th>Team: <?= $my_team[0]['name'] ?> | W/GP: 40/42</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          <?php foreach ($my_team as $teammate) { ?>
                            <tr class="info">      
                                
                            <td><?= $teammate['nickname'] ?></td>
                            <td>Rank: 1</td>
                            </tr>
                            <?php } ?>
                          
                        </tbody>
                      </table>
                    </div>

                    <div class="col-lg-2">
                      <img src="/assets/images/portfolio/versus.png" class="img-responsive vs">
                    </div>

                    <div class="col-lg-5">
                      <table class="table team">

                        <thead>
                          <tr>
                            <th>Team: <?= $enemy_team[0]['name'] ?> | W/GP: 19/30</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($enemy_team as $enemy) { ?>
                            <tr class="info">      
                                
                            <td><?= $enemy['nickname'] ?></td>
                            <td>Rank: 1</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                      </table>
                    </div>
                </div> <!-- END OF MIDDLE ROW -->
            </div>
            <div class="row prizes">
                <div class="col-lg-12">
                    <div class="col-lg-6 prizes">
                        <table class="table reward span5 prizes">
                          <thead>
                            <tr>
                              <th class="center-text">Prize Pool</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="success">
                              <td>Cash</td>
                              <td class="text-right"><?=$wager_info['cash']?></td>
                            </tr>
                            <tr class="success">
                              <td>Card Value</td>
                              <td class="text-right"><?=$wager_info['goods']?></td>
                            </tr>
                            <tr class="success">
                              <td>Other</td>
                              <td class="text-right"><?=$wager_info['other']?></td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <div class="go_mid">
          <button id="middle_button" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            Enter Results
          </button>
        </div>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><div id="quote"></div></h4>
        </div>
        <div class="modal-body">
          <div class="container">

      
      <h2>Results of the Match</h2>
      <form id="record_score" role="form" action="/bets/submit_match" method="post">
        <div class="form-group">
          <label for="win_team_name">Winning Team</label>
            <select class="form-control" name="winner" required>
                <option value=""></option>
                <option value="<?= $enemy_team[0]['id'] ?>"><?= $enemy_team[0]['name'] ?></option>
                <option value="<?= $my_team[0]['id'] ?>"><?= $my_team[0]['name'] ?></option>
            </select>
        </div>
         <div class="form-group">
          <label for="win_team_score">Winning Team's Score</label>
          <input type="text" class="form-control" id="win_team_pts" placeholder="Winning Team's Score" name="winner_score" required>
        </div>
        <div class="form-group">
          <label for="lost_team_game">Losing Team</label>
            <select class="form-control" name="loser" required>
                <option value=""></option>
                <option value="<?= $enemy_team[0]['id'] ?>"><?= $enemy_team[0]['name'] ?></option>
                <option value="<?= $my_team[0]['id'] ?>"><?= $my_team[0]['name'] ?></option>
            </select>
        </div>
         <div class="form-group">
          <label for="win_team_name">Losing Team's Score</label>
          <input type="text" class="form-control" id="lose_team_pts" placeholder="Losing Team's Score" name="loser_score" required>
        </div>
        <input type="hidden" name="cash" value="<?=$wager_info['cash']?>">
        <input type="hidden" name="goods" value="<?=$wager_info['goods']?>">
        <input type="hidden" name="other" value="<?=$wager_info['other']?>">
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit Results</button>
        </div>
        </form>
      </div>
    </div>
  </div>
    </body>
</html>