

<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title>PENGGAJIAN YAFI</title>

	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
        <link rel="stylesheet" href="stylesheets/login.css" type="text/css" media="screen" title="no title" />
        <style>
      html{
        position: relative;
        min-height: 100%;
      }
      body{
        background: url(images/img/lb4.jpg) no-repeat center fixed;
        -webkit- background-size: cover;
        -moz- background-size: cover;
        -o- background-size: cover;
        background-size: cover;
      }
      body > .container{
        margin-top: 60px;
      }
    </style>
</head>

<body>
	<div class="container">
     <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-primary">
       <div class="panel-heading">
        <!--<h3 class="panel-title"><span class="glyphicon glyphicon-lock"></span> LOGIN APLIKASI</h3> -->
 </div>
      <div class="panel-body">
       <center>
         <img src="images/img/asafatiha.jpeg" class="img-circle" alt="logo" width="100px">
       </center>

<div id="login">
	<h2>SISTEM INFORMASI PENGGAJIAN YAFI</h2> 
	<div id="login_panel">
		<form action="cek_login.php" method="post" accept-charset="utf-8">
			<div class="login_fields">
				<div class="field">
					<label for="username">NIP</label>
					<input type="text" name="nip" value="" id="nip" tabindex="1" placeholder="username" />
				</div>

				<div class="field">
					<label for="password">Password </label>
					<input type="password" name="password" value="" id="password" tabindex="2" placeholder="password" />
				</div>
			</div> <!-- .login_fields -->
			<div class="login_actions">
				<button type="submit" class="btn btn-primary" tabindex="3">Login</button>
			</div>
		</form>
	</div> <!-- #login_panel -->
</div> <!-- #login -->
</div>
</div>
</div>
</div>

<script src="javascripts/all.js"></script>
</body>
</html>