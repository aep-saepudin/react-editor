<!DOCTYPE html>
<html lang="en">
<head>

	<!-- SITE TITTLE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web Builder Template</title>

	<!-- PLUGINS CSS STYLE -->
	<link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="plugins/selectbox/select_option1.css" rel="stylesheet">
	<link href="plugins/slick/slick.css" rel="stylesheet" media="screen">
	<link href="plugins/slick/slick-theme.css" rel="stylesheet" media="screen">
	<link href="plugins/prismjs/prism.css" rel="stylesheet">
	<link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css" />
	<link href="plugins/selectbox/select_option1.css" rel="stylesheet">
	<link href="plugins/thin-line-icons/css/thin-line-icons.css" rel="stylesheet">
	<link href="plugins/isotope/isotope.min.css" rel="stylesheet">
	<link href="plugins/animate.css" rel="stylesheet">
	<link href="plugins/datepicker/datepicker.min.css" rel="stylesheet">


	<!-- GOOGLE FONT -->

	<!-- CUSTOM CSS -->
	<link href="css/style.css" rel="stylesheet">


	<!-- FAVICON -->
	<link href="img/favicon.png" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body id="body" class="page-contactus boxed-menu">
	<div class="mobile-sticky-header-overlay"></div>
	<!-- TOPBAR -->
	<!-- <div class="topbar">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<div class="topbar-content">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<a href="tel:+62 22 20525693">+62 22 20525693</a>
					</div>
					<div class="topbar-content">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<a href="mailto:info@example.com ">info@example.com</a>
					</div>
					<div class="topbar-content">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<p>Bandung, Indonesia</p>
					</div>
				</div>
			</div>
		</div>
	</div> --><!-- TOPBAR ENDS-->
	<!-- HEADER -->
	<!--header id="pageTop" class="header"-->
	<!-- NAVBAR -->
	<header>
		<div class="navbar navbar-toggleable-sm main-nav bg-dark-navy" style="max-width: 100%">
			<nav class="container qw-section" id="nav-container">
				<button class="navbar-toggler navbar-toggler-right">
					<span class="burger-menu icon-toggle"><i class="fa fa-bars"></i></span>
				</button>
				<a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>

				<div class="navbar-collapse">
					<ul class="navbar-nav ml-auto qw-list-item">
						<li class="nav-item">
							<a class="nav-link" href="index.html"><span class="sr-only">(current)</span>Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="profile.html"><span class="sr-only"></span>Profile</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html"><span class="sr-only"></span>Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="product.html"><span class="sr-only"></span>Product</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="gallery.html"><span class="sr-only"></span>Gallery</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="bonus.html"><span class="sr-only"></span>Bonus</a>
						</li>
						<li class="nav-item qw-list-default">
							<a class="nav-link" href="gallery.html"><span class="sr-only"></span>Default</a>
						</li>
						<li class="nav-item dropdown drop_single ">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="javascript:void(0)" data-account>Account <b class="caret"></b></a>
							<ul class="dropdown-menu dd_first">
								<li><a href="sign-up.html">Sign Up</a></li>
								<li><a href="login.html">Login</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown drop_single ">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="javascript:void(0)" data-login>My Account</a>
							<ul class="dropdown-menu dd_first">
								<li><a href="account.html">My Account</a></li>
								<li><a href="change-pass.html">Change Password</a></li>
								<li><a href="address-book.html">Address Book</a></li>
								<li><a href="view-cart.html">List Cart</a></li>
								<li><a href="whistlist.html">Whist List</a></li>
								<li><a href="order-history.html">Order History</a></li>
								<li><a href="rewards-point.html">Rewards Points</a></li>
								<li><a href="transactions.html">Transaction</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>
						<!-- header search -->
						<li class="nav-item">
							<a href="#" class="btn-search nav-link"><i class="fa fa-search"></i></a>
							<form  class="search_form">
								<input type="text" name="search" placeholder="Search anything..">
								<button class="btn btn-primary btn-small" type="submit">Search</button>
							</form>
						</li>
					</ul>
				</div>
				<!-- header search ends-->
			</nav><!-- NAVBAR ENDS-->
		</div>
	</header>
	<!--/header-->

<div class="main-wrapper pages">
	<!-- BREDCRUMB -->
	<section class="bredcrumb" id="bredcrumb">
		<div class="bg-image text-center" style="background-image: url('img/1920x500.jpg');">
			<h1>Detail Transaction</h1>
			<ul>
				<li>Home</li>
				<li><a href="javascript:void(0)">Detail Transaction</a></li>
			</ul>
		</div>
	</section>

	<!-- CONTACT US -->
	<section class="contactus" id="contactus" style="margin-bottom: 50px">
		<?php
        $data = file_get_contents("scid.txt");
        $data = json_decode($data, true);

        //update status
        $link = mysqli_connect("localhost", "buildweb_".$data['db']['dbuser'], $data['db']['dbpass'], "buildweb_".$data['db']['dbname']);
        $order = mysqli_query($link,"SELECT * FROM qw_order WHERE order_id='".$_POST['order_number']."'");
        while ($row = $order->fetch_array()){
        
        $sql_update1 = "UPDATE qw_doku SET statustype='".$_POST['msg']."',response_code='".$_POST['responsecode']."',approvalcode='".$_POST['approvalcode']."',trxstatus = 'Success',session_id='".$_POST['session_id']."',verifyid='".$_POST['verify_id']."',verifyscore='".$_POST['verify_score']."',verifystatus='".$_POST['verify_status']."' WHERE transidmerchant ='".$_POST['order_number']."'";
        $sql_update1 = mysqli_query($link,$sql_update1);
        $sql_update2 =  "UPDATE qw_order set order_status_id = 17 WHERE order_id='".$_POST['order_number']."'";
        $sql_update2 = mysqli_query($link,$sql_update2);
        ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Contact Form Starts-->
						<!-- section title -->
						<div class="sectionTitle">
							<h2>Detail Transaction</h2>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm temp</p>
						</div>
						<!-- section title ends -->
						<div class="row" style="top: 50%; left: 50%;" id="add">
                		</div>
                		<div class="alert alert-success" style="text-align: center;">
                    <h4><strong>Success!</strong> Order successful.</h4>
                </div>
                <table class="display blueTable" border="1" width="100%">
                    <thead>
                        <tr><th colspan="2">Order Details</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>No Invoice : <?php echo $row["invoice_prefix"].$row["invoice_no"]; ?></td>
                            <td>Date Added : <?php echo $row["date_added"]; ?></td>
                        </tr>
                        <tr>
                            <td>Order ID : #<?php echo $row["date_added"]; ?></td>
                            <td>Payment Method : <?php echo $row["payment_method"]; ?></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table class="display blueTable" border="1" width="100%">
                    <thead>
                        <tr>
                            <th align="center">No</th>
                            <th align="center">Product Name</th>
                            <th align="center">Model</th>
                            <th align="center">Quantity</th>
                            <th align="center">Price</th>
                            <th align="center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $product = mysqli_query($link,"SELECT * FROM qw_order_product WHERE order_id='".$_POST['order_number']."'");
                        $i=1;
                        while ($r = $product->fetch_array()){
                        ?>
                        <tr>
                            <td align="center"><?php echo $i; ?></td>
                            <td><?php echo $r["name"]; ?></td>
                            <td align="center"><?php echo $r["model"]; ?></td>
                            <td align="center"><?php echo $r["quantity"]; ?></td>
                            <td align="right">Rp <?php echo number_format($r["price"],0,",","."); ?></td>
                            <td align="right">Rp <?php echo number_format($r["total"],0,",","."); ?></td>
                        </tr>
                        <?php $i++;}
                        $total_product = mysqli_query($link,"SELECT * FROM qw_order_total WHERE order_id='".$_POST['order_number']."'");
                        while ($d = $total_product->fetch_array()){
                        ?> 
                        <tr>
                            <td colspan=5 style="text-align:right"><?php echo $d["title"]; ?></td>
                            <td style="text-align:right">Rp <?php echo number_format($d["value"],0,",","."); ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <br><br>
				</div>
			</div>
		</div>
		<?php } ?>
	</section>

	<!-- FOOTER -->
	<footer class="footer footer-classic bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="footer-text">
						<a href="#"><img class="footer-logo" src="img/logo.png" alt="footer logo"></a>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation.
						</p>
						<div class="social-icons">
							<a href="#" class="btn btn-social btn-social-o twitter">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#" class="btn btn-social btn-social-o linkedin">
								<i class="fa fa-linkedin"></i>
							</a>
							<a href="#" class="btn btn-social btn-social-o facebook">
								<i class="fa fa-facebook-f"></i>
							</a>
							<a href="#" class="btn btn-social btn-social-o skype">
								<i class="fa fa-skype"></i>
							</a>
							<a href="#" class="btn btn-social btn-social-o pinterest">
								<i class="fa fa-pinterest-p"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-2">
					<div class="links">
						<h3>Links</h3>
						<ul class="">
							<li><a href="#">Home</a></li>
							<li><a href="#">Profile</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Product</a></li>
							<li><a href="#">Gallery</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="location">
						<h3>Location</h3>
						<ul>
							<li>Excepteur sint occaecat cupidat non proident sunt.</li>
							<li><i class="fa fa-home"></i> Jl. Coblong Timur,</li>
							<li><i class="fa fa-phone"></i> <a href="tel:+62 22 20525693">+62 22 20525693</a></li>
							<li><i class="fa fa-envelope"></i> <a href="mailto.html"> info@example.com </a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="instagram">
						<h3>Gallery</h3>
						<ul class="row instagram-image qw-list-item">
							<li class="col-xs-4 col-4"><a href="#"><img src="img/gallery/image-1.jpg" alt="insta"></a></li>
							<li class="col-xs-4 col-4"><a href="#"><img src="img/gallery/image-2.jpg" alt="insta"></a></li>
							<li class="col-xs-4 col-4"><a href="#"><img src="img/gallery/image-3.jpg" alt="insta"></a></li>
							<li class="col-xs-4 col-4"><a href="#"><img src="img/gallery/image-4.jpg" alt="insta"></a></li>
							<li class="col-xs-4 col-4"><a href="#"><img src="img/gallery/image-5.jpg" alt="insta"></a></li>
							<li class="col-xs-4 col-4"><a href="#"><img src="img/gallery/image-6.jpg" alt="insta"></a></li>
							<li class="col-xs-4 col-4 qw-list-default"><a href="#"><img src="img/gallery/image-7.jpg" alt="insta"></a></li>
						</ul>
					</div>
				</div>

				<!-- COPY RIGHT -->
			</div>
			<div class="copyright">
				<hr>
				<div class="row">
					<div class="col-sm-6 offset-sm-3">
						<div class="copyRight_text text-center">
							<p> &copy; 2017 Copyright Web Builder.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>


<!-- JAVASCRIPTS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbo8AqPhlblo2nbndho2I8zLzr0o9Qs28"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery/jquery-migrate-3.0.0.min.js"></script>
<script src="plugins/bootstrap/js/tether.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="plugins/slick/slick.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="plugins/circle-progress/jquery.appear.js"></script>
<script src="plugins/isotope/isotope.min.js"></script>
<script src="plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="plugins/counterUp/jquery.counterup.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.js"></script>
<script src="plugins/velocity/velocity.min.js"></script>
<script src="plugins/datepicker/bootstrap-datepicker.min.js"></script>
<script src="plugins/syotimer/jquery.syotimer.min.js"></script>
<script src="js/custom.js"></script>

	<script>
    $(document).ready(function(){
        jQuery.get('scid.txt', function(value) {
            var obj = JSON.parse(value);
            $.post('getdata.php',function(customer_id){
                if(customer_id){
                    $.post("https://build.web.id/api/customers/getCustomerdatabyId/",{
                        "client_id": obj.cid,
                        "service_id": obj.layanan_id,
                        "customer_id": customer_id
                    },function(data){
                        firstname = data.data.firstname;
                        lastname = data.data.lastname;
                        $('[data-login]').html(firstname+' <b class="caret"></b>')
                        $('[data-account]').hide()
                    }); 
                }else{
                    $('[data-login]').hide()
                    $('[data-account]').show()
                }
            });
        });
    });
    </script>
    
</body>

</html>