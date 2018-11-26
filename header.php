<head>
	<style type="text/css"></style>
</head>
<body>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top bg-dark">
<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<a class="navbar-brand page-scroll" href="https://www.ecell.in" style="padding: 0px;"><img src="images/ecell_logo_b.png" style="margin-top: 0px; height: 100%" alt="E-Cell"></a>
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<li>
			<a class="page-scroll" href="index.php#page-top">Home</a>
			</li>
			<li>
			<a class="page-scroll" href="index.php#about">About</a>
			</li>
			<li>
			<a class="page-scroll" href="index.php#howitworks">How it works</a>
			</li>

			<li>
			<a class="page-scroll" href="projects.php">Projects</a>
			</li>
			
			<li>
			<a class="" data-toggle="modal" href="#modal">Terms And Conditions</a>
			</li>

			<?php if(!isset($_SESSION["roll_number"])){?>
			<li>
			<a class="page-scroll" href="#contac">Contact</a>
			</li>
			<li>
			<a class="page-scroll" href="login.php" style="color: green;">Login</a>
			</li>
			<?php }else{ ?>
				<li>
				<a  href="profile.php">Profile</a>
				</li>
				<li>
			<a class="page-scroll" href="#contact">Contact</a>
			</li>
				<li>
				<a  href="#" id="logout_btn" style="color: green;">Logout</a>
				</li>
			<?php } ?>

			
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>

<div id="modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal. Lots of Terms and conditions.Lots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditionsLots of Terms and conditions</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/contact.js"></script>
<script src="js/countto.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/common.js"></script>
</body>