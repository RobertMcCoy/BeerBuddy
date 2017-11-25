<?php 

  session_start();

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <link rel="page icon" href="../res/img/beer.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>View Recent Deals</title>

    <!-- boostrap css -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/readable/bootstrap.min.css" rel="stylesheet">
    <!-- custom styles -->
    <link href="../res/styles/navigation_header.css" rel="stylesheet">

  </head>

  <body>
  
    <!-- top navigation bar -->
    <?php if (isset($_SESSION["authenticated"])): ?>
      <?php $page='post'; include('navigation_header_user.php'); ?>
    <?php else: ?>
      <?php $page='post'; include('navigation_header.php'); ?>
    <?php endif ?>

    <!-- page contents -->
    <div class="container-fluid">

      <!-- recent deals content -->
      <div class="container-fluid">
        
        <h1>Recent Deals</h1>
        <p>this is where deals at a specific location will appear.</p>
        <p>in a feed like format?</p>
        <div id="recentDealsFeed">
        </div>

      </div>

    </div>

    <!-- footer -->
    <?php $page='view'; include('footer.php'); ?>

    <!-- jQuery core js -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- bootstrap core js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- feed js -->
    <script type="text/javascript" src="/src/js/view_recent.js"></script>

  </body>

</html>
