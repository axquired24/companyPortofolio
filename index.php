<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Company Profile / Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../bs3_dist/css/bootstrap.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <style>
	/* Move down content because we have a fixed navbar that is 50px tall */
	div.jumbotron{
		background: url("img/bg_jumbotron.jpg") center no-repeat;
	}
	body {
	  padding-top: 50px;
	  padding-bottom: 20px;
	  background-color: #FCFCFC;
	}
	div.bullet{
		height:300px;
		width:300px;
		position:static;
		border-radius:100%;
	}
	</style>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<?php include"inc/core/nav.php"; ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hei, Welcome! <?php $d=$b; ?></h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a href="?ur=static_page/profile" class="btn btn-primary btn-lg" role="button">See our profile &raquo;</a></p>
      </div>
    </div>

    <div class="container">
		<?php 
			$ur= $_GET[ur];
			if(isset($ur)){
				include"inc/".$ur.".php";
			}else{
				include"inc/static_page/home.php";
			}
		?>	  
		<hr>
      <footer>
        <p>&copy; 2014 Company Name on <a href="#">www.companyname.com</a></p>
      </footer>
    </div> <!-- /container -->


	<!-- JQuery and Bootstrap js -->
	<script src="../bs3_dist/js/jquery.js"></script>
	<script src="../bs3_dist/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$("a").tooltip({placement:"bottom"});
		$("abbr").tooltip({placement:"bottom"});
		$("img").tooltip({placement:"top"});
		$(".tip-bottom").tooltip({placement:"bottom"});
	</script>
  </body>
</html>
