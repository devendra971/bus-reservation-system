<?php 

if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}

if(isset($_SESSION['accomodation'])){
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
			 	<center>PASSENGER DETAILS
			 </h2>
				<div class="container-fluid">
				<center>
				<div class="card" style="width: 48rem;">
  <div class="card-body">
   
 

  <div class="container-fluid">
					<form class="form-horizontal" role="form" id="form-pass">
					  <div class="form-group">
					    <label for="">Booked By:</label>
					    <input type="text" class="form-control" id="book-by" placeholder="Enter Name"
					    autofocus="" required="" autocomplete="off">
					  </div>
					  <div class="form-group">
					    <label for="">Contact:</label>
					    <input type="text" class="form-control" id="cont" placeholder="Enter Contact" required="" autocomplete="off">
					  </div>
					  <div class="form-group">
					    <label for="">Address:</label>
					    <input type="text" class="form-control" id="address" placeholder="Enter Address" required="" autocomplete="off">
					  </div>
					<br />
					<?php 
						$tb = $_SESSION['totalPass'];	
					 	$count = 1;
					 	for($i = 0; $i < $tb; $i++){
					?>
					  <div class="panel panel-primary">
					  	<div class="panel-heading">
					  		<h3 class="panel-title">Booked(<?= $count; ?>)</h3>
					  	</div>
					  	<div class="panel-body">
					  		<div class="container-fluid">
					  			<div class="form-group">
								    <label for="">Full Name (<?= $count; ?>):</label>
								    <input type="text" class="form-control" id="fN<?php echo $i; ?>"
								    placeholder="Enter Fullname" required autocomplete="off">
								  </div>

								  <div class="form-group">
								    <label for="">Age: (<?= $count; ?>):</label>
								    <input type="number" class="form-control" id="age<?php echo $i; ?>"
								    placeholder="Enter Age" required autocomplete="off">
								  </div>
								  <div class="form-group">
								    <label for="">Gender: (<?= $count; ?>):</label>
								    <select class="btn btn-default" id="gender<?php echo $i; ?>">
								    	<option value="Male">Male</option>
								    	<option value="Female">Female</option>
								    </select>
								  </div>
					  		</div>
					  	</div>
					  </div>
					<?php
					$count++;
					 	}//end for
					 ?>
					  <button type="submit" class="btn btn-success">NEXT
					  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
					  </button>
					</form>
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




<?php require_once('admin/modal/message.php'); ?>

<script type="text/javascript" src="assets1/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets1/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).on('submit', '#form-pass', function(event) {
		event.preventDefault();
		/* Act on the event */
		var bookBy = $('#book-by').val();
		var cont = $('#cont').val();
		var address = $('#address').val();
		
		var counter = <?= $i; ?>;
		for(var i = 0; i < counter; i++){
			var fN = $('#fN'+i).val();
			var age = $('#age'+i).val();
			var gender = $('#gender'+i).val();
			$.ajax({
					url: 'data/save_booked.php',
					type: 'post',
					dataType: 'json',
					data: {
						bookBy : bookBy,
						cont : cont,
						address : address,
						fN : fN,
						age : age,
						gender : gender
					},
					success: function (data) {
						// console.log(data);
						if(data.valid == true){
							window.location = data.url;
						}
					},
					error: function(){
						// alert('Error: L192+');
					}
				});
		}//end for
		alert('Booked Successfully!');	
	});

</script>


</body>
</html>

<?php
}else{
	echo '<strong>';
	echo 'Page Not Exist';
	echo '</strong>';
}//end if else isset

 ?>









































































