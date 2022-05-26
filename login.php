<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="./styles/style.css">
	<style>
		body {
			background-image: url('https://www.irctc.co.in/nget/swach_banner2.391192cab480269195cd.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-color: powderblue;
		}
		button .btn{
			padding: 10px;
			margin: 10px auto;
			font-size: 15px;
			border: none;
			border-radius: 5px;
		}
	</style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="./JS/sweetalert.min.js"></script>
    <script src="./JS/webcam.min.js"></script>
    <script src="./JS/loginmain.js"></script>
</head>
<body>
	<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
			      <li class="nav-item">
			        <a class="nav-link" href="index.php">Book Tickets<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="train_stas.php">Train Schedule</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="pnr.php">PNR Enquiry</a>
			      </li>
			</ul>
			<span class="navbar-text" class="nav-item">
			    <a class="nav-link" href="register.php">Register</a>
			</span>
		</div>
	</nav>
	<div class="header">
		<h2>Login</h2>
	</div>
	<!--Modal-->
    <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Capture Photo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <div id="my_camera" class="d-block mx-auto rounded overflow-hidden"></div>
                    </div>
                    <div id="results" class="d-none"></div>
                    <form method="post" id="photoForm">
                        <input type="hidden" id="photoStore" name="photoStore" value="">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning mx-auto text-white" id="takephoto">Capture Photo</button>
                    <button type="button" class="btn btn-warning mx-auto text-white d-none" id="retakephoto">Retake</button>
                    <button type="submit" class="btn btn-warning mx-auto text-white d-none" id="uploadphoto" form="photoForm">Upload</button>
                </div>
            </div>
        </div>
    </div>
	<form method="post" action="login.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<a href="#" class="btn btn-warning text-white" id="accesscamera" data-toggle="modal" data-target="#photoModal">
            Capture Photo
        	</a>
		<input type="hidden" id="hiddentextbox" name="hiddentextbox" value=""></input>
		<div class="input-group">
			<button type="submit" name="login" class="btn" style="color: white; background: #7FFF00;">  Login  </button>
		</div>
		<p>
			Not yet a member?<a href="register.php">Sign up</a>
		</p>
	</form>
		<?php include('footer.php'); ?>

</body>
</html>