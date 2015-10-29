<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wanna Bet?</title>
    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="/assets/stylesheets/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/assets/stylesheets/freelancer.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
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
      img{
        width: 10%;
        height: 10%;
        margin-top: -10.5%;
      }
      form{
        width: 45%;
      }
      .go_mid{
        text-align: center;
      }
      .container{
        margin-bottom: 2.5%;
      }
      .team{
        width: 33.5%;
        margin: 0 5%;
        display: inline-block;
      }
      .center_table{
        width: 35%;
        margin: 0 auto;
        float: none !important;
      }
      .small{
        font-size: 15px;
      }
      .smaller{
        font-size: 11px;
      }
    </style>
</head>
<body>
  <digit v class="container">
    <h2>Battle Arena</h2>
    <p>Two groups enter, only one leaves. This is the ultimate bloodsport, ladies and gentleman. Teams from all walks of life--bred for the rigors of war but seeking riches and recognition--end up here.</p>            
    <table class="table team">
      <thead>
        <tr>
          <th>Team: Legendary Leviathans | W/GP: 40/42</th>
        </tr>
      </thead>
      <tbody>
        <tr class="info">
          <td>Seanster</td>
          <td>Rank: 1</td>
        </tr>
        <tr class="info">
          <td>Rictor</td>
          <td>Rank: 2</td>
        </tr>
        <tr class="info">
          <td>Even Stephen</td>
          <td>Rank: 3</td>
        </tr>
      </tbody>
    </table>
    <img src="/assets/images/portfolio/versus.png">
    <table class="table team">
      <thead>
        <tr>
          <th>Team: Betrayers of Humanity | W/GP: 19/30</th>
        </tr>
      </thead>
      <tbody>
        <tr class="info">
          <td>Hitler</td>
          <td>Rank: 5</td>
        </tr>
        <tr class="info">
          <td>Mussolini</td>
          <td>Rank: 9</td>
        </tr>
        <tr class="info">
          <td>Genghis Khan</td>
          <td>Rank: 6</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="center_table">
    <table class="table reward span5 center-table" align="center">
      <thead>
        <tr>
          <th class="center-text">Prize Pool</th>
        </tr>
      </thead>
      <tbody>
        <tr class="success">
          <td>Money</td>
          <td class="text-right">$10</td>
        </tr>
        <tr class="success">
          <td>Goods</td>
          <td class="text-right">Chipotle: Chicken Bowl</td>
        </tr>
        <tr class="success">
          <td>Other</td>
          <td class="text-right">Dare</td>
        </tr>
      </tbody>
    </table>
  </div>

<div class="go_mid">
  <button id = "middle_button" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
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
      <form id="record_score" role="form">
        <div class="form-group">
          <label for="win_team_name">Winning Team</label>
          <input type="text" class="form-control" id="win_team" placeholder="Winning Team Name">
        </div>
         <div class="form-group">
          <label for="win_team_score">Winning Team's Score</label>
          <input type="text" class="form-control" id="win_team_pts" placeholder="Winning Team's Score">
        </div>
        <div class="form-group">
          <label for="lost_team_game">Losing Team</label>
          <input type="text" class="form-control" id="lose_team" placeholder="Losing Team Name">
        </div>
         <div class="form-group">
          <label for="win_team_name">Losing Team's Score</label>
          <input type="text" class="form-control" id="lose_team_pts" placeholder="Losing Team's Score">
        </div>
      </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit Results</button>
        </div>
      </div>
    </div>
  </div>

</body>

</html>