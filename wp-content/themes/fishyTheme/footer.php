<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php

$instagramUrl=get_field('instagram_url','option');
$facebookUrl=get_field('facebook_url','option');
$youtubeUrl=get_field('youtube_url','option');

?>
	</div>

		<!-- ====== FOOTER BOC ====== -->
		<footer> 
		    <div class="footer-main">
		    	<div class="container">
		    		<div class="footer-text">
		    			<div class="footer-left">
		    				<p>© <?=date('Y')?>  Fishy. All Rights Reserved.</p>
		    			</div>
		    			<div class="footer-right">
		    				<div class="footer-btn">
								<div class="social-links-wp">
									<div class="social-media">
										<ul class="social-link">
											<li>
												<a href="<?=$facebookUrl?>" class="social-icon">
													<img class="icon-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/social-media/facebook-icon.png" alt="facebook">
													<img class="icon-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/social-media/facebook-icon.png" alt="facebook">  
												</a> 
											</li>
											<li>
												<a href="<?=$instagramUrl?>" class="social-icon">
													<img class="icon-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/social-media/instagram.png" alt="instagram">
													<img class="icon-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/social-media/instagram.png" alt="instagram">  
												</a> 
											</li>
										</ul>
									</div>
								</div>
							</div>
		    			</div>
		    			<div class="footer-right">
		    				<h5>Developed by</h5>
		    				<div class="developed-by-img"><a href="https://www.appgurus.com.au/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/appguruslogo.png" alt="appgurus"></a></div>
		    			</div>

		    		</div>
		    	</div>
		    </div>
		</footer>
		<!-- ====== FOOTER End ====== -->
		<!-- Join our Team Pop-up start -->
		<div class="modal fade join_our_team-pop-up" id="join_our_team-pp">
		  <div class="modal-dialog modal-dialog-centered">
		    <div class="modal-content">
		    	<form  id="joinsageteam" method="post">
			      	<div class="modal-body">
			      		<div class="section-title">
							<h2 class="blue_text ">Join the Fishy Team</h2>
						</div>
				        <div class="form-main">
							<div class="form-main-inner">

								<div class="row">
									<div class="col-lg-6 col-md-12 col-sm-12 col-12">
										<div class="form-group">
											<label class="input-label">First Name</label>
											<div class="form-input">
												<input  type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name" />
											</div>	
										</div>
										<div class="form-group">
											<label class="input-label ">Last Name</label>
											<div class="form-input">
												<input  type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name" />
											</div>	
										</div>
										<div class="form-group">
											<label class="input-label ">Email</label>
											<div class="form-input">
												<input  type="email" name="email" id="email" class="form-control" placeholder="Enter Email" />
											</div>	
										</div>
										<div class="form-group">
											<label class="input-label ">Phone</label>
											<div class="form-input">
												<div class="phone-countrycode">
												<input type="text" maxlength="14" name="phone" id="phone" class="form-control" placeholder="Enter Phone" />
												</div>
											</div>	
										</div>
									</div>
									<div class="col-lg-6 col-md-12 col-sm-12 col-12">
										<div class="form-group">
											<label class="input-label text-lg-end">Role</label>
											<div class="form-input">
												<select name="role" id="role" class="form-control">
						                          	<option value="none" hidden>Select Role</option>
						                        	<option value="Social Media Marketing">Social Media Marketing</option>
						                        	<option value="Designer / Content Creator">Designer / Content Creator</option>
						                        	<option value="PR / Communications">PR / Communications </option> 
						                        	<option value="Sales / Business Development">Sales / Business Development </option>
						                        	<option value="Other">Other</option>
						                      	</select>
												<textarea name="description" id="description" class="form-control" placeholder="Tell us more about why you would like this role"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-btn-main">
								<div class="btn-wp"><button type="button" class="btn btn-border" id="closeBtn" data-bs-dismiss="modal">Cancel</button></div>
								<div class="btn-wp">
									<!-- <input class="btn yellow-btn" type="submit" value="Apply Now"> -->
									<button type="submit" class="btn yellow-btn">Apply Now</button>
								</div>
							</div>
							<div class="form-btn-main">
								<div class="successmessage"></div>
							</div>
						</div>
			      	</div>
			      	
					
		      	</form>
		    </div>
		  </div>
		</div>
		<!-- Join our Team Pop-up End -->

		<!-- Partner Pop-up start -->
		<div class="partner-pop-up modal fade  join_our_team-pop-up" id="partner-pp">
		  <div class="modal-dialog modal-dialog-centered">
		    <div class="modal-content">
		    	<form id="partnerForm" method="post">
			      	<div class="modal-body">
			      		<div class="section-title">
							<h2 class="blue_text ">Become a Partner</h2>
							<p class="black_text font-we-bl">Complete this form if you would like to be affiliated with us. We will feature your logo on our website and app. </p>
						</div>
				        <div class="form-main">
							<div class="form-main-inner">

								<div class="row">
									<div class="col-lg-6 col-md-12 col-sm-12 col-12">
										<div class="form-group">
											<label class="input-label ">Name</label>
											<div class="form-input">
												<input  type="text" name="name" id="name" class="form-control" placeholder="Enter Name" />
											</div>	
										</div>
										<div class="form-group">
											<label class="input-label ">Phone</label>
											<div class="form-input">
												<div class="phone-countrycode">
												<input type="text" maxlength="14" name="phone" id="phonebecome" class="form-control" placeholder="Enter Phone" />
												</div>
											</div>	
										</div>
										
										<div class="form-group">
											<label class="input-label ">Email</label>
											<div class="form-input">
												<input  type="email" name="email" id="email" class="form-control" placeholder="Enter Email" />
											</div>	
										</div>
										<div class="form-group">
											<label class="input-label ">Website</label>
											<div class="form-input">
												<input  type="text" name="website" id="website" class="form-control" placeholder="Website Link" />
											</div>	
										</div>
										
									</div>
									<div class="col-lg-6 col-md-12 col-sm-12 col-12">
										<div class="partner-pop-up-right">
											<div class="form-group">
												<div class="form-input">
													<label class="input-label">Business Name</label>
												</div>
												<div class="form-input">
													<input  type="text" name="business" id="business" class="form-control" placeholder="Enter Business Name" />
												</div>	
											</div>
											<div class="form-group-logo">
							                  <div class="company-logo-main">
							                    <div class="uploadOuter">
							                      <span class="dragBox" >
							                        <div class="dragBox-text">
							                        	
							                          <div class="logo-title">Logo</div>
							                          <div class="uploads-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/upload-icon.png" alt="#"></div>
							                          <div><span class="black_text font-we-bl">Browse</span> or Drag and Drop</div>
							                        </div>
							                        <input type="file" name="uploadFile" onChange="dragNdrop(event)"  ondragover="drag()" ondrop="drop()" id="uploadFile"  />
							                        <input type="hidden" name="fileurl" id="fileurl" value="" />
							                        <div id="preview"></div>
							                      </span>
							                    </div>
							                    
							                  </div>
							                </div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-btn-main">
								<div class="btn-wp"><button type="button" class="btn btn-border" id="closeBtn" data-bs-dismiss="modal">Cancel</button></div>
								<div class="btn-wp">
									<input class="btn yellow-btn" id="closeBtn" type="submit" value="Apply Now">
								</div>
							</div>

							<div class="form-btn-main">
								<div class="form-btn-main">
									<div class="successmessage"></div>
								</div>
							</div>
						</div>
			      	</div>
			      	
					
		      	</form>
		    </div>
		  </div>
		</div>
		<!-- Partner Pop-up End -->

<?php wp_footer(); ?>
<script type="text/javascript">

//"use strict";

function dragNdrop(event) {
    var fileName = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("preview");
    var previewImg = document.createElement("img");
    previewImg.setAttribute("src", fileName);
    previewImg.className = "preview-img"
    preview.innerHTML = "";
    preview.appendChild(previewImg);
    preview.className = 'preview-main';
}

function drag() {
    document.getElementById('uploadFile').parentNode.className = 'draging dragBox';
}

function drop() {
    document.getElementById('uploadFile').parentNode.className = 'dragBox';
}


// Form Validation
</script>
<!-- Show Country Code -->
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
  var inputField = document.getElementById('phone');
  var defaultCountryCode = '+61 '; // Change this to your desired default country code

  // Set the initial value of the input field to start with the country code
  inputField.value = defaultCountryCode;

  // Listen for input in the phone input field
  inputField.addEventListener('input', function () {
    var inputValue = inputField.value;
    var countryCodeLength = defaultCountryCode.length;

    // If the input value is less than the length of the country code,
    // reset it to just the country code.
    if (inputValue.length < countryCodeLength) {
      inputField.value = defaultCountryCode;
      inputField.setSelectionRange(countryCodeLength, countryCodeLength);
    } else if (!inputValue.startsWith(defaultCountryCode)) {
      // Check if the input starts with the country code and correct if not
      var correctedInput = inputValue.slice(inputValue.lastIndexOf('+61 '));
      inputField.value = correctedInput.length > 0 ? correctedInput : defaultCountryCode;
      inputField.setSelectionRange(countryCodeLength, countryCodeLength);
    }
  });
});
</script>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
  var inputField = document.getElementById('phonebecome');
  var defaultCountryCode = '+61 '; // Change this to your desired default country code

  // Set the initial value of the input field to start with the country code
  inputField.value = defaultCountryCode;

  // Listen for input in the phone input field
  inputField.addEventListener('input', function () {
    var inputValue = inputField.value;
    var countryCodeLength = defaultCountryCode.length;

    // If the input value is less than the length of the country code,
    // reset it to just the country code.
    if (inputValue.length < countryCodeLength) {
      inputField.value = defaultCountryCode;
      inputField.setSelectionRange(countryCodeLength, countryCodeLength);
    } else if (!inputValue.startsWith(defaultCountryCode)) {
      // Check if the input starts with the country code and correct if not
      var correctedInput = inputValue.slice(inputValue.lastIndexOf('+61 '));
      inputField.value = correctedInput.length > 0 ? correctedInput : defaultCountryCode;
      inputField.setSelectionRange(countryCodeLength, countryCodeLength);
    }
  });
});
</script>
</body>
</html>
