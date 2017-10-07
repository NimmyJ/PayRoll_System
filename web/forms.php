



<?php
include("DBManager.php");

$empObj = new Employee;

$empObj->createConnection();


if (isset($_POST['register'])) {


$empObj->setName($_POST["empName"]);
$empObj->setGender($_POST["checks"]);
$empObj->setEmail($_POST["email"]);
$empObj->setDob($_POST["dob"]);
$empObj->setAddress($_POST["address"]);
$empObj->setCity($_POST["city"]);
$empObj->setProvince($_POST["province"]);
$empObj->setZipcode($_POST["zip"]);
$empObj->setUrl($_POST["url"]);
$empObj->setJoiningDate($_POST["joinDate"]);
$empObj->setBasicpay($_POST["basicpay"]);


$empObj-> insertEmployee();

}

?>


<!DOCTYPE HTML>
<html>
<head>
<title>MoneyFix new employees</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head> 
<body>
 <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        <div class="main-search">
											<form>
											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value=""/>
											</form>
									<div class="close"><img src="images/cross.png" /></div>
								</div>
									<div class="srch"><button></button></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
											<li class="dropdown note dra-down">
													   <div id="dd" class="wrapper-dropdown-3" tabindex="1">
																			<span>Italy</span>
																			<ul class="dropdown">
																				<li><a class="deutsch">France</a></li>
																				<li><a class="english"> Italy</a></li>
																				<li><a class="espana">Brazil</a></li>
																				<li><a class="russian">Usa</a></li>

																			</ul>
																		</div>
																		<script type="text/javascript">
			
																	function DropDown(el) {
																		this.dd = el;
																		this.placeholder = this.dd.children('span');
																		this.opts = this.dd.find('ul.dropdown > li');
																		this.val = '';
																		this.index = -1;
																		this.initEvents();
																	}
																	DropDown.prototype = {
																		initEvents : function() {
																			var obj = this;

																			obj.dd.on('click', function(event){
																				$(this).toggleClass('active');
																				return false;
																			});

																			obj.opts.on('click',function(){
																				var opt = $(this);
																				obj.val = opt.text();
																				obj.index = opt.index();
																				obj.placeholder.text(obj.val);
																			});
																		},
																		getValue : function() {
																			return this.val;
																		},
																		getIndex : function() {
																			return this.index;
																		}
																	}

																	$(function() {

																		var dd = new DropDown( $('#dd') );

																		$(document).click(function() {
																			// all dropdowns
																			$('.wrapper-dropdown-3').removeClass('active');
																		});

																	});

																</script>
										    </li>
									       <li class="dropdown note">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>

												
													<ul class="dropdown-menu two first">
														<li>
															<div class="notification_header">
																<h3>You have 3 new messages  </h3> 
															</div>
														</li>
														<li><a href="#">
														   <div class="user_img"><img src="images/nimmy.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet</p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														 </a></li>
														 <li class="odd"><a href="#">
															<div class="user_img"><img src="images/nimmy.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														  <div class="clearfix"></div>	
														 </a></li>
														<li><a href="#">
														   <div class="user_img"><img src="images/nimmy.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														</a></li>
														<li>
															<div class="notification_bottom">
																<a href="#">See all messages</a>
															</div> 
														</li>
													</ul>
										</li>
										
							<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

									<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 5 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/nimmy.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/nimmy.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/nimmy.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
						<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
										<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 9 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Database update</span><span class="percentage">40%</span>
												<div class="clearfix"></div>	
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>	
											</div>
										   
											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												<div class="clearfix"></div>	
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div> 
										</li>
									</ul>
							</li>		   							   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>

						<!-- //header-ends -->
							<!--//outer-wp-->
								<div class="outter-wp">
											<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="index.html">Home</a></li>
															<li class="active">Forms</li>
														</ol>
											</div>	
											<!--/sub-heard-part-->	
												<!--/forms-->
													<div class="forms-main">
															
																<!--/forms-inner-->
													  				<div class="forms-inner">
																	  <!--/set-1-->
																		<div class="set-1">
																			
																				 <div class="clearfix"> </div>
																			</div>
																			 <!--//set-1-->
																			  <!--/set-2-->
																		<div class="set-1">
																			<div class="graph-2 general">
																				<h3 class="inner-tittle two">Register New Employees  </h3>
																					<div class="grid-1">
																							<div class="form-body">
																									<form class="form-horizontal" action="<?php echo "forms.php"; ?>" method="post">
																									
																										<div class="form-group">
																											<label for="disabledinput" class="col-sm-2 control-label">Employee Name</label>
																											<div class="col-sm-8">
																												<input  type="text" class="form-control1" id="empName" placeholder="Employee Name" name = "empName" required>
																											</div>
																										</div>

																											<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label" >Email Address</label>
																											<div class="col-sm-8">
																												<input type="email" class="form-control1" id="email" placeholder="Email Address" name="email" required>
																											</div>
																											
																										</div>
																								
																										<div class="form-group">
																											<label for="selector1" class="col-sm-2 control-label">Designation</label>
																											<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
																												<option>Manager</option>
																												<option>Architect</option>
																												<option>Tech Lead</option>
																												<option>Sr. Software Engineer</option>
																												<option>Jr. Software Engineer</option>
																												<option>HR Executive</option>
																												<option>Network Admin</option>
																												<option>Security</option>
																												<option>House keeping</option>
																											</select></div>
																										</div>
																					
																										<div class="form-group">
																											<label for="txtarea1" class="col-sm-2 control-label">Address</label>
																											<div class="col-sm-8"><input type="text"  id="txtarea1" cols="50" rows="4" class="form-control1" name="address" required></div>
																										</div>
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label" >City</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="city" placeholder="City" name="city" required>
																											</div>
																											
																										</div>

																											<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label" >Province</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="province" placeholder="Province" name="province" required>
																											</div>
																											
																										</div>

																											<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label" >Zipcode</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="zipcode" placeholder="Zipcode" name="zip" required="">
																											</div>
																											
																										</div>

																											<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label" >URL</label>
																											<div class="col-sm-8">
																												<input type="url" class="form-control1" id="url" placeholder="Website URL" name="url" required="">
																											</div>
																											
																										</div>

																											<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label" >Date of Birth</label>
																											<div class="col-sm-8">
																												<input type="date" class="form-control1" id="dob" placeholder="Date of Birth" name="dob" required>
																											</div>
																											
																										</div>

																											<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label" >Joining Date</label>
																											<div class="col-sm-8">
																												<input type="date" class="form-control1" id="joinDate" placeholder="Joining Date" name="joinDate" required>
																											</div>
																											
																										</div>

																											<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label" >Basic Pay</label>
																											<div class="col-sm-8">
																												<input type="number" class="form-control1" id="basicPay" placeholder="Basic Pay" name="basicpay" required>
																											</div>
																											
																										</div>



																										<div class="form-group">
																											<label for="radio" class="col-sm-2 control-label">Gender</label>
																											<div class="col-sm-8">
																												<div class="radio block">
																													<label><input type="radio" value="male" name="checks"> Male </label>
																												</div>
																												<div class="radio block">
																													<label><input type="radio" checked="" value="female" name="checks"> Female </label>
																												</div>
																										
																											</div>
																										</div>


																										<div class="form-group">
																											<div class="col-sm-8">
																												<input type="submit" lass="form-control1" name="register" value="Register" method="POST">

																											</div>
																										</div>


																										
																									</form>
																							</div>

																					</div>
																				</div>
																			</div>
																			 <!--//set-2-->
																			 <!--/set-3-->
																			
																		   <!--//set-4-->
																		</div>
																	<!--//forms-inner-->
																</div> 
														<!--//forms-->											   
												</div>
											<!--//outer-wp-->
									
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="Home.php"> <span id="logo"> <h1>MoneyFix</h1></span> 
						<!--<img id="logo" src="" alt="Logo"/>--> 
					</a> 
					</header>
				<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="Home.php"><img src="images/nimmy.jpg"></a>
									  <a href="Home.php"><span class=" name-caret">Nimmy Jose</span></a>
									 <p> Administrator in Company</p>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										<li><a href="Home.php"><i class="fa fa-tachometer"></i> <span>Nimmy</span></a></li>
										 
										 <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>List of Employees</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >

												<li id="menu-academico-boletim" ><a href="table.php">List</a></li>
											  </ul>
										 </li>
								<li id="menu-academico" ><a href="#"><i class="lnr lnr-book"></i> <span>Employee Management</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										  <ul id="menu-academico-sub" >
										    <li id="menu-academico-boletim" ><a href="forms.php">Add New</a></li>
										  </ul>
									 </li>
									 
							     
									<li><a href="#"><i class="lnr lnr-chart-bars"></i> <span>Payrolls</span> <span class="fa fa-angle-right" style="float: right"></span></a>
									  <ul>
											<li id="menu-academico-boletim" ><a href="Payslip.php">Pay Slip</a></li>
									</ul>
									</li>
								
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>