<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cloud Native Threat Report Attacks in the Wild</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="https://www.marketeer.tech/assets/front/images/favicon.png" />
	<!-- cdn -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css.css">
	<link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
</head>

<body>
	<header>
		<div class="container-fluid">
			<a href="">
				<img src="logo.png" alt="logo" width="250" height="80" class="p-2">
			</a>
		</div>
		<div class="container-fluid banner">
			<div class="container banner-text mt-5 pt-5 pl-5">	
				<h2 style="color:#FE455F;"><b>Cloud Native Threat Report </b></h2>
				<h1 class="" style="font-size:42px;" ><b>Attacks in the Wild on <br>Container Infrastructure</b></h1>
			</div>
		</div>
	</header>
	<div class="container-fluid ">
		<div class="row mb-5">	
			<div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
				
				<div class="container p-4">
					<h5 class="mt-4 pl-2 mb-3"><b>Cloud Native Attacks: Growing and Evolving</b></h5>
					<p class="para">
						<img src="book.png" alt="book" class="book-img ">
						The threat landscape for container-based environments has quickly become more dangerous and more varied as attackers use new methods and realize the potential gains from increased cloud native adoption.  Over a six-month period, Aqua observed honeypots being attacked 17,358 times, representing a 26% increase from only six months previously.  
						<br><br>
						The increasing volume of attacks illustrates the evolving nature of threats to container-based environments.  
					</p>
					<p class="para">
						<br>
						This report from Aqua’s Team Nautilus analyzes attacks in the cloud native stack and classifies them into 3 main groups according to their level of sophistication, providing a guide of the analysis as it applies to the MITRE ATT&CK framework. 
					</p>
					<p class="para">
						Key findings from this report include: 
						<ol class="para">
							<li>Bad actors are getting better at hiding their attacks using advanced techniques, such as executing malware straight from memory, packing binaries, and using rootkits. </li>
							<li>Attackers are leveraging privilege-escalation techniques and attempting to escape from within containers to the host machine.</li>
							<li>Adversaries keep searching for new ways to attack cloud native environments. We identified a massive campaign targeting supply chains, the auto-build process of code repositories, registries, and CI service providers. </li>
						</ol>
					</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
				<div class="card bg-light text-dark form-report">
					<div class="card-body ">
						<h3>Download the Report </h3>
						<br><br>
						<form action="action.php" method="post" >
							<input type="hidden" name="filename" value="AquaSecurity_Cloud_Native_Threat_Report_2021.pdf">
							<div class="form-row">
								<div class="col">
									<input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
								</div>
								<div class="col">
									<input type="text" class="form-control" placeholder="Job Title" name="job_title">
								</div>
							</div>
							<div class="form-row mt-4">
								<div class="col">
									<input type="text" class="form-control" id="first_name" placeholder="First Name " name="first_name">
								</div>
								<div class="col">
									<input type="text" class="form-control" placeholder="Last Name" name="last_name">
								</div>
							</div>
							<div class="form-row mt-4">
								<div class="col">
									<input type="text" class="form-control" id="first_name" placeholder="Phone Number " name="phone">
								</div>
								<div class="col">
									<input type="text" class="form-control" placeholder="Company Name" name="company">
								</div>
							</div>
							
							
							<div class="form-row mt-4">
								<div class="col">
									<select class="form-control" name="country">
										<option>Country </option>
										<?php 
										include('countries.php');
										foreach ( $countries as $value )
										{
											?>
											<option value="<?php echo $value; ?>"><?php echo $value; }?></option>
										</select>
									</div>
								</div>

								<div class="form-row mt-4">
									<div class="col">
										<strong><label for="">Are you using any of Aqua's open source projects?</label></strong>
										<select class="form-control" name="using_aqua">
											<option value=" ">Please Select </option>
											<option value="yes">Yes </option>
											<option value="no">No </option>
											<option value="Not Aware ">Not Aware </option>
											<option value="Aware, but not using ">Aware, But not using </option>
										</select>
									</div>
								</div>
								<div class="form-row mt-4">
									<div class="col">
										<label>We do not sell your data. From time to time, you may receive marketing emails and offers from Aqua. For information on how to unsubscribe, our privacy practices, and how we protect and respect your privacy, please review our Privacy Policy.</label>
									</div>
								</div>
								<input type="submit" class=" btn btn-lg float-right " style="background-color: #1804DB; color: white;">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>


</body>
</html>
