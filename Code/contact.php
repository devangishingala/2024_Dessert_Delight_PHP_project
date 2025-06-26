
	<!--header start-->
			<?php
	include("header.php");
	?>
	<!--header end-->
	<!--Contact Start-->
		<div class="container-fluid py-5"style="background-color: #050505;color: #fcfafa;">
        <div class="container py-2">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Contact Us For Any Query</h1>
                </div>
            </div>
            <div class="row justify-content-center" style="border: 5px dashed rgb(74, 204, 255); border-radius: 10px;">
                <div class="col-lg-9">
                    <div class="contact-form bg-dark rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate" class="error">
                            <div class="form-row">
                                <div class="col-sm-6 control-group error">
                                    <input type="text" class="form-control p-2" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" aria-invalid="true" style="border: 2px dashed rgb(74, 204, 255);" >
                                    <p class="help-block text-danger"><ul role="alert"><li>Please enter your name</li></ul></p>
                                </div>
                                <div class="col-sm-6 control-group error">
                                    <input type="email" class="form-control p-2" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" aria-invalid="true" style="border: 2px dashed rgb(74, 204, 255);">
                                    <p class="help-block text-danger"><ul role="alert"><li>Please enter your email</li></ul></p>
                                </div>
                            </div>
                            <div class="control-group error">
                                <input type="text" class="form-control p-2" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" aria-invalid="true" style="border: 2px dashed rgb(74, 204, 255);">
                                <p class="help-block text-danger"><ul role="alert"><li>Please enter a subject</li></ul></p>
                            </div>
                            <div class="control-group error">
                                <textarea class="form-control p-2" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message" aria-invalid="true" style="border: 2px dashed rgb(74, 204, 255);"></textarea>
                                <p class="help-block text-danger"><ul role="alert"><li>Please enter your message</li></ul></p>
                            </div>
                            <div>
                            	<div class="d-grid gap-2">
								  <button class="btn btn-primary " type="button" style="display: block; border-radius: 50px;">Send Message</button>
								</div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--Contact End-->
	
	<!--footer Start-->
	<?php
	include("footer.php");
	?>
	<!--Footer end-->
