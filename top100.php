<?php

  require_once("config.php");
  require_once("variables.php");
  require_once("functions.php");
  require_once("factionScores.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PvPstats, see who is winning!">
    <meta name="author" content="ShinDarth">

    <title><?= $server_name ?> PvP统计</title>

    <link href="css/bootstrap-cyborg.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/top100-style.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php require_once("navbar.php"); ?>

    <div class="container">

      <div class="main-title">
        <p class="text-center h3"><?= $server_name ?> PvP 统计</p>
        <div id="logo">
          <img id="logo_img" class="img-responsive" alt="PvPstats logo" src="<?= $server_logo ?>">
        </div>
      </div>

      <div class="row text-center">
        <div id="stats_info">
          <span>在战场中取得胜利次数最大的前100名玩家和公会，开始于 <span style="color: orange;"><strong><?= $online_from ?></strong></span>。</span><br>
          <span style="color: #888">公会胜利次数是指每个公会成员胜利次数之和。</span>
        </div>
        <div class="col-sm-8" style="padding: 0 10px;">
          <p class="h3">前100名玩家</p>
          <div class="top100 table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">角色</th>
                  <th class="text-center">&#9679;</th>
                  <th class="text-center">等级</th>
                  <th class="text-center">公会</th>
                  <th class="text-center">胜利</th>
                </tr>
              </thead>
              <tbody>
                <?php getTop100Players() ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="col-sm-4" style="padding: 0 10px;">
          <p class="h3">前100名公会</p>
          <div class="top100 table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">公会</th>
                  <th class="text-center">胜利</th>
                </tr>
              </thead>
              <tbody>
                <?php getGuildsScores("", "", "", true) ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div id="footer">
        <hr>
        <?php /* I worked hard to make PvPstats open and free for everyone. Please, do not remove the credits. */ ?>
        <p class="h5 text-center">&#9679;&nbsp;<a target="_blank" href="https://github.com/ShinDarth/PvPstats"><strong>PvPstats</strong></a> for <a  target="_blank" href="<?= $server_url ?>"><?= $server_name ?></a> is free software coded by <a target="_blank" href="http://shinworld.altervista.org/"><strong>ShinDarth</strong></a>&nbsp;&#9679;</p>
        <p class="text-center" style="margin-top: 20px"><iframe src="http://ghbtns.com/github-btn.html?user=ShinDarth&repo=PvPstats&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>&nbsp;<iframe src="http://ghbtns.com/github-btn.html?user=ShinDarth&repo=PvPstats&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="95" height="20"></iframe>&nbsp;<iframe src="http://ghbtns.com/github-btn.html?user=ShinDarth&type=follow&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="165" height="20"></iframe></p>
      </div>

    </div><!-- /.container -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#top100').addClass("active");
      });
    </script>
  </body>
</html>

<?php $db->close(); ?>
