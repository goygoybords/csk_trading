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
				 			<form method="post" action = "{{ route('main:postContact') }}" class="form-container" id="submitContact">
				 				{{ csrf_field() }}
								<div class="contact-form">
									<span>Name</span>
									<input type="text" name="contact_name" class="FullName textbox" />
									<div class="error-message-2 error-message-FullName">   
										@if ($errors->has('contact_name'))
                                                <p> <strong>{{ $errors->first('contact_name') }}</strong></p>
                                            @endif
                                        </div>
								</div>
								<div class="contact-form">
									<span>Email Address</span>
									<input type="text" name="email" class="Email textbox" />
									<div class="error-message-2 error-message-Email"></div>
								</div>
								<div class="contact-form">
									<span>Subject</span>
									<input type="text" name="subject" class="ContactSubject textbox" />
									<div class="error-message-2 error-message-Subject"></div>
								</div>
								<div class="contact-form message">
									<span>Message</span>
									<textarea class="ContactMessage message" name="message" rows="4" cols="50"></textarea>
									<div class="error-message-2 error-message-ContactMessage"></div>
								</div>
								<div class="all-fields pull-right"><span>All fields are mandatory.</span></div>
								<button type="submit" name="submitPHP" class="submit" id="messageSubmit">SEND MESSAGE</button>
							</form>
							</div>
						</div>
					</div>
				</div><!--/col-md-12-->
			</div><!--/row-->
		</div><!--/container-->
	@endsection