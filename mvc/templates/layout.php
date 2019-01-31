<!-- templates/layout.php -->
<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="http://www.benchlamp.co.uk/mvc/templates/style.css">
    </head>
    <body>
	  <script src="https://code.jquery.com/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
	  <div class="container">
          <a href="/mvc/index">
	  <div class="jumbotron">
		    <h1>Benchmark</h1>
		      <hr />
		    <h4>Investigate. Participate.</h4>
	  </div> <!-- /jumbotron -->
          </a>

<?php if ($_SESSION["userName"] == "") {
        echo "<h5 class='login-details'>Not logged in.</h5>
         <a href='/mvc/login'><p>Please sign in to vote or create</p></a>";
} else {
    echo "<h5 class='login-details'>logged in as " . $_SESSION["userName"] . "</h5>";
echo '<a href="/mvc/logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a>';
}
?>     


	 	<hr />

         <?= $content ?> 

	  </div> <!-- /container-->
    </body>
</html>
