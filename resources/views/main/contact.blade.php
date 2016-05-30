@extends('layouts.main')
    @section('content')
    	<div class="container" id="desktop-wrapper">
			<div class="row">
				<div class="col-md-12 main-content">
					<div class="page-header">
						<h2 class="page-title">Contact Us</h2>
						<h4 class="page-description">Our commitment to you goes beyond developing the best diesel fueled vehicles and engines. Got a question, comment, or suggestion? Let us know and we'll be there to help.</h4>
					</div>
					<div class="row contact-body">
						<div class="col-md-4 nopadding">
							<div id="contact-details-body">
								<h2>CSK Trading Corporation</h2>
								<div class="contact-address">
									<p>J De Vera Street</p>
									<p>North Reclamation Area</p>
									<p>Cebu City Philippines, 6000</p>
								</div>
								<div class="contact-number">
									<h4>LANDLINE:</h4>
									<p>(049) 541-0224</p>
									<h4>SUN</h4>
									<p>(049) 541-0224</p>
									<h4>GLOBE</h4>
									<p>(632) 757-6070</p>
								</div>
								<div class="contact-email">
									<h4>EMAIL ADDRESS:</h4>
									<p>csk_cebu@yahoo.com</p>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div id="contact-form-body">
								<h3>SEND US A MESSAGE:</h3>
				 				<p style="color: red;"></p> 					
				 				<form method="post" class="form-container" id="submitContact">
							<div class="contact-form">
								<span>Name</span>
								<input type="text" name="namePHP" class="FullName textbox" />
								<div class="error-message-2 error-message-FullName"></div>
							</div>
							<div class="contact-form">
								<span>Email Address</span>
								<input type="text" name="emailPHP" class="Email textbox" />
								<div class="error-message-2 error-message-Email"></div>
							</div>
							<div class="contact-form">
								<span>Subject</span>
								<input type="text" name="subjectPHP" class="ContactSubject textbox" />
								<div class="error-message-2 error-message-Subject"></div>
							</div>
							<div class="contact-form message">
								<span>Message</span>
								<textarea class="ContactMessage message" name="msgPHP" rows="4" cols="50"></textarea>
								<div class="error-message-2 error-message-ContactMessage"></div>
							</div>
							<div class="all-fields pull-right"><span>All fields are mandatory.</span></div>
							<button type="submit" name="submitPHP" class="submit" id="messageSubmit">SEND MESSAGE</button>
							</form>
							<!-- <form style="float:left;margin-top: 0px;margin-right: 0px;width: 100%;line-height: 1.3;" method="post" id="capptcha1">
								<div class="error-message " id="error-message-recap"></div>
								<div class="g-recaptcha" data-sitekey="6LdQABUTAAAAAG3UIPteknKKnL5fqJif6mY1Tz30" style="width: 300px; margin: 0 auto; padding-bottom: 15px;"></div>
								
							</form> -->
							</div>
						</div>
					</div>
				</div><!--/col-md-12-->
			</div><!--/row-->
		</div><!--/container-->

		 <script type="text/javascript">
		 var RecaptchaOptions = {
		    theme : 'white'
		 };
		 </script>

		<script type="text/javascript">
			$('#messageSubmit').click(function() {
		 	//alert('okay');
		    $(".error").remove();
		    var hasError = false;
		    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		    var emailaddressVal = $(".Email").val();
			var name = $(".FullName").val();
			var Category = $(".Category").val();

			var PrefferedDealer = $('.PrefferedDealer').val();
			var ContactSubject = $(".ContactSubject").val();
			var ContactMessage = $('.ContactMessage').val();
			$(".error-message-2").html('');
			$(".textbox").removeAttr('style');


			if (name == '') {
		      $(".error-message-FullName").html('Please enter your name.');
		      $(".FullName").css('border','1px solid red');
		      hasError = true;
		    }

		     if(emailaddressVal == '') {
		      $(".error-message-Email").html('Please enter your email address.');
		     	$(".Email").css('border','1px solid red');
		      hasError = true;
		    }

		    else if(!emailReg.test(emailaddressVal)) {
		      $(".error-message-Email").html('Please enter a valid email address.');
		      $(".Email").css('border','1px solid red');
		      hasError = true;
		    }


			  if(Category == '') {
		      $(".error-message-Category").html('Please enter your Category.');
		      $(".Category").css('border','1px solid red');
		      hasError = true;
		    }


		 	 if(PrefferedDealer == '') {
		      $(".error-message-Dealer").html('Please enter your Preffered Dealer.');
		      $(".PrefferedDealer").css('border','1px solid red');
		      hasError = true;
		    }

		    if(ContactSubject == '') {
		      $(".error-message-Subject").html('Please enter your Subject.');
		      $(".ContactSubject").css('border','1px solid red');
		      hasError = true;
		    }

		    if(ContactMessage == '') {
		      $(".error-message-ContactMessage").html('Please enter your Message.');
		      $(".ContactMessage").css('border','1px solid red');
		      hasError = true;
		    }

		     if(hasError == true) {

		     	return false;
		     }

		    else {

			   $.ajax({type:'POST', url: 'verifyContact.php',
				data:$('#capptcha1').serialize(),

				success:
				function(response) {
				eval( response );

				}});
				return false;

			}

		    });
			</script>
	@endsection