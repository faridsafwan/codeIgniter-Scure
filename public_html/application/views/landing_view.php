<!DOCTYPE HTML>

<html>
	<? include("header_landing.php");?>
	<link rel="stylesheet" type="text/css" href="Flat-UI-master/css/flat-ui.css">

  <!--<div class="hero-unit" style="height:1000px; background-image:url(../../img/sfbridge.jpg); background-repeat:no-repeat; background-attachment:fixed; ">
   -->


<body>
<!--
<section data-type="background" style="margin-top:0px; background-color:rgba(255,255,255,0.9); width:100%; background-attachment:fixed;background-size:cover;">
	

	<section style="background-color:rgba(255,255,255,0.7); height:50px; width:100%; ">
		 <div style=" margin-left:10%; padding-top:90px;">

</div>
	


	</section>

</section>-->


<section data-type="background" style="margin-top:0px; background-image:url('../../img/bg5.jpg'); width:100%; background-attachment:fixed;background-size:cover;">
	

	<section style="background-color:rgba(0,0,0,0.7); height:600px; width:100%; padding-top:30px;">
		 <div style=" margin-left:10%; padding-top:90px;">
		  
		  <h1 style="margin-top:0px; color:#FFFFFF; font-family: 'Source Sans Pro', sans-serif; font-size:65px; font-weight:200; display:none;" id="hero_title" >Security made simple.</h1>
		  <br><br>
		  <p style=" color:white;width: 45%; font-family:'Source Sans Pro',sans-serif;  display:none;" id="product_desc">
		  	We're working on the simplest way to help you keep an eye on things at home.  
		  </p>
		  <p style="color:white; font-family:'Source Sans Pro',sans-serif; display:none;" id="hero_paragraph">Sign up below and you'll be the first to know when Scure becomes available!</p>
		  </p>
		  <br>
		  
		  <?php echo form_open('reserve');?>	
		  <input class ="span2" style="font-family:'Source Sans Pro',sans-serif; font-size:18px; height:29px; width:320px; display:none;" placeholder="Enter E-mail" id="reserve_email" name="reserve_email"/>
		  <button class="btn btn-danger" style="display:none;"type="submit" id="reserve_submit" style="margin-left:10px;">Reserve</button>
		  <?php echo form_close(); ?>
</div>
	


	</section>

</section>


		
 


<section data-type="background" style="background-color:white; width:100%; background-attachment:fixed;background-size:cover;">
	

	<section style="background-color:white; height:600px; width:100%; padding-top:50px;">
		

		  <div  style="margin-left:10%; font-family:'Source Sans Pro',sans-serif;">
		  		<h1 style="color:black; font-family: 'Source Sans Pro', sans-serif; font-size:65px; font-weight:200;">Keep tabs at home</h1>
	
				 <p style="margin-top:75px; color:gray; line-height:34px;font-size:18px; width:600px;">
				  Retrieve live data of conditions at home from anywhere in the world. Receive notifications anytime something out-of-the-ordinary occurs.			  
				  Investigate by taking a snapshot or pinging one of your friends in the area. 

				</p>
		 </div>
	</section>
</section>

<section data-type="background" style="background-image:url('../../img/bg9.jpg'); width:100%; background-attachment:fixed;background-size:cover;">
	<section style="background-color:rgba(0,0,0,0.7); height:600px; width:100%; padding-top:50px; font-family: 'Source Sans Pro', sans-serif;">
		<div id="section1_container" style="margin-right:10%; float:right;">
		  <h1 style="color:white; font-family: 'Source Sans Pro', sans-serif; font-size:65px; font-weight:200;">A Smarter System</h1>
		 		<p style="margin-top:75px; color:white; line-height:34px;font-size:18px; width:600px;">
		 			Scure will learn and adapt to your activity patterns and automatically arm/disarm itself based on your location.
		 			Set rules and visit schedules for different users. 
				</p>
		 </div>
	


	</section>

</section>



<?/**d

<!--
		<section id="club" data-type="background" data-speed="10" style="background-color:#ecf0f1; background-attachment:fixed; height:800px;">
			<div align="center" style="margin-top:-29px;">
				<div class="row-fluid">
						<div class="span6" style="margin-top:60px; margin-left:0px;"><br>
							<h1 style="width:80%;  text-align:right;color:#EEEEE; font-family: 'Source Sans Pro', sans-serif; font-size:35px; font-weight:600;" id="hero_title">Monitor from your smartphone</h1>
							 <p id="paragraph" style=" font-family: 'Source Sans Pro', sans-serif; width:80%; padding:5px;line-height:46px;margin-top:70px;font-size:24px;color:gray; text-align:right; font-weight:200;">
									

									Know what's happening at home, at all times.<br>
									Arm &amp; Disarm your device remotely.  <br>

							<br><br>
							<br>
							</p>
							</div>	
							


							<div class="span6" style="margin-top:60px;">
								
								<img src="img/Android_Profile.png" style="height:600px;"> 

							</div>	


						</div>
						</div>
		</section> -->
		
		<!--
		<section id="dinner" data-type="background" data-speed="10" style="margin-top:0px; background-color:#ecf0f1; background-attachment:fixed;">
			<div align="center" style="margin-top:-29px;">
					<div class="row-fluid">
							<div class="span4" style=""><br><br>
							
							<h1 style="width:80%;font-size:35px; color:#2ecc71; font-family: 'Source Sans Pro', sans-serif; font-weight:600;text-align:left;">Recent Updates</h1>
							<p id="paragraph" style=" font-family: 'Source Sans Pro', sans-serif; width:80%; padding:5px;line-height:46px;margin-top:30px; font-size:24px; color:#FFFFF; text-align:left; font-weight:200;">
								Link up with some trusted friends to help you keep an eye on things swhen you are not around. <br><br> 
			
								
								<br><br>
								<br>
								</p>
							</div>	

							
							<div class="span4" style=""><br><br>
							
							<h1 style="width:80%;font-size:35px; color:#EEEEE; font-family: 'Source Sans Pro', sans-serif; font-weight:600;text-align:left;">Call for Backup</h1>
							<p id="paragraph" style=" font-family: 'Source Sans Pro', sans-serif; width:80%; padding:5px;line-height:46px;margin-top:30px;font-size:24px;color:gray; text-align:left; font-weight:200;">
								Link up with some trusted friends to help you keep an eye on things when you are not around. <br><br> 
			
								
								<br><br>
								<br>
								</p>
							</div>	



							<div class="span4" style=""><br><br>
							
							<h1 style="width:80%;font-size:35px; color:#EEEEE; font-family: 'Source Sans Pro', sans-serif; font-weight:600;text-align:left;">Contact Us</h1>
							<p id="paragraph" style=" font-family: 'Source Sans Pro', sans-serif; width:80%; padding:5px;line-height:46px;margin-top:30px;font-size:24px;color:gray; text-align:left; font-weight:200;">
								We dont bite.  Send us and e-mail! <br><br> 
			
								
								<br><br>
								<br>
								</p>
							</div>	



						</div>
						</div>
		</section> 	
		-->
		

**/

?>



	
</body>

</html>


