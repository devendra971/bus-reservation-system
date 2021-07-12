<?php 

if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}

if(isset($_SESSION['tracker'])){
?>








































<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=no">
    <title> Bus Booking System</title>

    <link rel="shortcut icon" href="assets1/images/fav.jpg">
    <link rel="stylesheet" href="assets1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets1/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets1/css/animate.css">
    <link rel="stylesheet" href="assets1/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets1/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets1/css/style.css" />
</head>

<body>

    <!--####################### Header Starts Here ###################-->
    <header class="container-fluid">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="cont-det">
						<li>+6260231830</li>
                            <li>hariomacharya051999@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-md-6 d-none d-lg-block">
					<ul class="social-link">
                            <li><a href=""><i class="fab fa-github"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                            <li> <a href=""><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li> <a href=""><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 logo">
                        <a href="index.html">
						<img src="buslogo.png" alt="">
                        </a>
                        
                        <a data-toggle="collapse" data-target="#nav-head" href="#nav-head" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div class="col-md-9 ">
                        <div class="contact d-none d-md-block">
                            <ul>
                                <li>
                                    <div class="cont-ro">
                                        <div class="ico">
                                            <i class="fas fa-phone-volume"></i>
                                        </div>
										<div class="det">
                                            <p>Contact Us</p>
                                            <b>+6260231830</b>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="cont-ro">
                                        <div class="ico">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <div class="det">
										<p>Contact Us</p>
                                            <b>+7000131684</b>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="cont-ro">
									<button class="btn btn-danger"onClick="location='reserved.php'">Book Now</button>                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="nav-head" class="nav-part d-none d-md-block">
                            <ul>
							<li><a href="index.php">Home</a></li>
                                <li><a href="index.php#s"> Services</a></li>
                                <li><a href="index.php#au">About Us</a></li>
                                <li><a href="reserved.php">Book</a></li>
                                <li><a href="admin/">Admin Login</a></li>
                                <li><a href="index.php#c">Testimonials
</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

     <!--  ************************* Page Title Starts Here ************************** -->
 
	 <div class="container my-5">
    <section id="steps">
        <div class="text-center mb-5">
           
            <h2 class="font-weight-bold display-4 ">How It <span style=" color: #9B5DE5">Works?</span></h2>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="bg-light position-relative px-3 my-5">
                    <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                         style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
						1
                    </div>
                    <div class="px-3 text-center pb-3">
                        <h4>SCHEDULE OF TRAVEL </h4>
                    
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bg-light position-relative px-3 my-5">
                    <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                         style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
						2
                    </div>
                    <div class="px-3 text-center pb-3">
                        <h4>ACCOMODATION TYPE</h4>

                            
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bg-light position-relative px-3 my-5">
                    <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                         style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
						3
                    </div>
                    <div class="px-3 text-center pb-3">
                        <h4>PASSENGER DETAILS </h4>
                       
                    </div>
                </div>
            </div>

			<div class="col-md-3">
                <div class="bg-light position-relative px-3 my-5">
                    <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                         style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
						 4
                    </div>
                    <div class="px-3 text-center pb-3">
                        <h4>PAYMENT DETAILS  </h4>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    





<div class="col-md-12">
                <div class="bg-light position-relative px-3 my-5">
                    <div class="font-weight-bold circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto position-relative border border-white"
                         style="width: 60px;height: 60px;top: -30px;border-width: 4px !important; background-color: #9B5DE5">
						1
                    </div>
                   
					<div class="container-fluid">
	
	<div class="col-md-12" >
		<div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center>PAYMENT DETAILS 
			 </h2>
				<div class="container-fluid">
				<center>
				<div class="card" style="width: 48rem;">
  <div class="card-body">
   
 

  <div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center>PAYMENT INFO</center>
			 </h2>
			 <br />
			 <div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title"><center>DEPARTURE</center></h3>
			 	</div>
			 	<div class="panel-body">
			 		<strong>
			 			<i>Medallion Transport, M/V Lady of All Nations</i>
			 			<h3>
			 			<?php require_once('data/depart_from_to.php'); 
			 				echo $origin['origin_desc'];
			 			?>
			 			 - 
			 			 <?= $dest['dest_destination']; ?>
			 			 </h3>
			 			<p>Departure Date: <?= $_SESSION['departure_date']; ?> @9:00AM</p>
			 		</strong>
			 			<i>Estimated Arrival Time: The Next Day @3:00PM</i><br />
			 			<strong>
			 				<?php require_once('data/get_accomodation.php'); 
			 					echo $accomodation['acc_type'];
			 				?>
			 			</strong>
			 	</div>
			 </div>

			 <div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title">CONTACT INFO</h3>
			 	</div>
			 	<div class="panel-body">
			 	<?php require_once('data/getBooked.php'); ?>
			 	<strong>Book By:</strong> <?= ucwords($bookByInfo['book_by']);  ?><br /> 
			 	<strong>Contact #:</strong> <?= $bookByInfo['book_contact']; ?><br />
			 	<strong>Address:</strong> <?= $bookByInfo['book_address']; ?><br />
			 	</div>
			 </div>
				<div class="container-fluid">
				<strong>
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				PASSENGERS</strong>
					<table id="myTable-party" class="table table-bordered table-hover" cellspacing="0" width="100%">
							<thead>
							    <tr>
							        <th>
							        	<center>
							       			Name
							        	</center> 
							        </th>
							        <th>
							        	<center>
							        		Age
							        	</center>
						        	</th>
							        <th>
							        	<center>
							        		Gender
							        	</center>
						        	</th>
						        	 <th>
							        	<center>
							        		Departure Price
							        	</center>
						        	</th>
							    </tr>
							</thead>
						    <tbody>
						    <?php
						    	require_once('data/getBooked.php');
						    	$totalPayment = 0;
						    	$tracker = '';
						     foreach($bookPass as $bp): 
						    	$name = $bp['book_name'];
						    	$name = ucwords($name);
						    	$price = $bp['acc_price'];
						    	$totalPayment += $price;
						    	$tracker = $bp['book_tracker'];
						    ?>
						    	<tr align="center">
						    		<td><?= $name; ?></td>
						    		<td><?= $bp['book_age']; ?></td>
						    		<td><?= $bp['book_gender']; ?></td>
						    		<td><?= $price; ?></td>
						    	</tr>
						    <?php endforeach; ?>
						    	<tr>
						    		<td></td>
						    		<td></td>
						    		<td align="right"><strong>TOTAL:</strong></td>
						    		<td align="center"><strong><?= $totalPayment; ?></strong></td>
						    	</tr>
						    </tbody>
						    <strong>- Booked ID: <?= $tracker; ?></strong>
						   </table>
						   <center>
							   <a href="index.php" class="btn btn-success">Return Home
								   <span class="glyphicon glyphicon-backward" aria-hidden="true"></span>
							   </a>
						   </center>
				</div>
			</div>
		</div>








					</div>
</div>
				</center>
				</div>
				</center>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>
                </div>
            </div>








    <!--####################### footer Starts Here ###################-->
    <footer>
        <div class="inner">
            <div class="container">
                <center> <h1>BOOK YOUR TICKETS NOW <h1></center>
            </div>
        </div>
    </footer>
    <div class="copy">
        <div class="container">
        BUS TICKET REVERVATION SYSTEM

            <span>
                <a href=""><i class="fab fa-github"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href=""><i class="fab fa-pinterest-p"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
            </span>
        </div>

    </div>


<script src="assets1/js/jquery-3.2.1.min.js"></script>
<script src="assets1/js/popper.min.js"></script>
<script src="assets1/js/bootstrap.min.js"></script>
<script src="assets1/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets1/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets1/js/script.js"></script>


<script type="text/javascript" src="assets1/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets1/js/bootstrap.min.js"></script>


<script type="text/javascript">
	$(document).on('submit', '#form-acc', function(event) {
		event.preventDefault();
		/* Act on the event */
		var acc = $('input[name="acc"]:checked').val();
		var totalPass = $('input[name="totalPass"]').val();

		if(acc == null){
			alert('Please Select Accomodation!');
		}else{
			// console.log(acc);
			if(totalPass.length == 0){
				alert('Please Enter Number of Passenger!');
			}else{
				$.ajax({
						url: 'data/session_accomodation.php',
						type: 'post',
						dataType: 'json',
						data: {
							acc : acc,
							tp : totalPass
						},
						success: function (data) {
							console.log(data.slot);
							// 	window.location = "passenger.php";
							if(data.slot >= 0){
								window.location = "passenger.php";
							}else{
								alert('Not Enough Slot!');
							}
						},
						error: function(){
							alert('Error: L175+');
						}
					});
			}//end totalPass
		}//end acc == null
	});

</script>
<script type="text/javascript" src="assets1/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets1/js/bootstrap.min.js"></script>

</body>



<?php
}else{
	echo '<strong>';
	echo 'Page Not Exist';
	echo '</strong>';
}//end if else isset

 ?>
</html>




































































