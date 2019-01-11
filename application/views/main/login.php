<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset="utf-8"/>
<title>Crane Your Creative Idea</title>

<link rel="shortcut icon" href="<?php echo base_url('public/images/logo.png') ?>" type="image/x-icon"/>
<link rel="icon" href="<?php echo base_url('public/images/logo.png') ?>" type="image/x-icon"/>
<link href="<?php echo base_url('public/css/bootstrap.css') ?>" rel="stylesheet"/>
<link href="<?php echo base_url('public/css/style.css') ?>" rel="stylesheet"/>
<link href="<?php echo base_url('public/css/login.css') ?>" rel="stylesheet"/>

<link rel='stylesheet' href="<?php echo base_url('public/css/normalize.min.css') ?>"/>
<link rel='stylesheet' href="<?php echo base_url('public/css/font-awesome.min.css') ?>"/>
</head>

<body class="logindesign">

  <?php if (isset($faild)) { ?>
    <p style="text-align: center;"><br /><br /> <!--The login email is already registered/ Email or password is inccoorect echo your error & success messages here -->
        <span class="error-message">
        The email you have entered is already registerd
        
       </span>
    </p>
    <?php } ?>
      <?php if (isset($error)) { ?>
    <p style="text-align: center;"><br /><br /> <!--The login email is already registered/ Email or password is inccoorect echo your error & success messages here -->
        <span class="error-message">
       Email or password is incorrect.
        
       </span>
    </p>
    <?php } ?>
      <?php if (isset($forgeterror)) { ?>
    <p style="text-align: center;"><br /><br /> <!--The login email is already registered/ Email or password is inccoorect echo your error & success messages here -->
        <span class="error-message">
       The email you have entered is not registered.
       </span>
    </p>
    <?php } ?>
          <?php if (isset($successforget)) { ?>
    <p style="text-align: center;"><br /><br /> <!--The login email is already registered/ Email or password is inccoorect echo your error & success messages here -->
        <span class="success-message">
  The new password has been sent.
       </span>
    </p>
    <?php } ?>
      <?php if (isset($sucess)) { ?>
 <!--The login email is already registered/ Email or password is inccoorect echo your error & success messages here -->
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-time"></i> </span>
            <h5 style="text-align: center;">Account activation pending </h5>
          </div>
          <div class="widget-content" style="text-align: center;">
            <div class="error_ex">
              <h3>Thank You!</h3>
              <h4>Your request has been sent to the site content manager</h4>
              <p>An Email will be sent to activate the account</p>
              </div>
          </div>
        </div>

    <?php } ?>
<nav class="main-nav">
    <img src="<?php echo base_url('public/images/logo.png') ?>" class="login-logo" />
    
	<ul>
		<li><a class="signin" href="#0">Log in</a></li>
		<li><a class="signup" href="#0">Sign up</a></li>
	</ul>
</nav>

    <p class="login-p"><a href="<?php echo base_url('') ?>"><i class="fa fa-home"></i>&nbsp; Back to Home</a></p>

<div class="user-modal">
		<div class="user-modal-container">
			<ul class="switcher">
				<li><a href="#0">Log in</a></li>
				<li><a href="#0">New account</a></li>
			</ul>

			<div id="login">
				<form class="form" action="<?php echo base_url('Accounts/checklogin') ?>" method="post">
                <p>Welcome Back,</p>
					<p class="fieldset">
						<label class="image-replace email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email" name="email" type="email" placeholder="E-mail"/>
					</p>

					<p class="fieldset">
						<label class="image-replace password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" name="password" type="password"  placeholder="Password"/>
						<a href="#0" class="hide-password">Show</a>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Login"/>
					</p>
				</form>
				<p class="form-bottom-message"><a href="#0">Forgot your password?</a></p>
				<!-- <a href="#0" class="close-form">Close</a> -->
			</div>

			<div id="reset-password">
				<form class="form" method="post" action="<?php echo base_url('Maincontroller/checkemail'); ?>">
                <p>Lost your password? Please enter your email address.<br/> You will receive a random password, use and change it later.</p>
					<p class="fieldset">
						<label class="image-replace email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" name="email" placeholder="E-mail"/>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password"/>
					</p>
				</form>

				<p class="form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div>
            
            <div id="signup">
				<form class="form" action="<?php echo base_url('Accounts/checkemail') ?>" method="post">
             
                    <p class="fieldset">
						<label>You Are:</label><br />
						<select class="full-width has-padding has-border" name="type_account" id="soflow2" onchange="showDiv(this)">
                        <option value="Person">Person</option>
                        <option value="Organization">Organization</option>
                        </select>
					</p>
                    
                    <p class="fieldset" id="questionHIDDEN1">
						<label>Are You:</label><br />
						<select class="full-width has-padding has-border" name="register_as" id="register_as" >
                            <option value="Student">Student</option>
                            <option value="Professional">Professional</option>
                            <option value="job seeker">Job Seeker</option>
                            <option value="freelancer">Freelancer</option>
                        </select>
					</p>
                     <p class="fieldset" id="questionHIDDENO1"  style="display: none;"  >
						<label style="    margin-left: 35px;">Are you looking for :</label ><br />
						<select class="full-width has-padding has-border" style="margin-left: 33px;" name="looking">
                            <option value="New investments">New investments</option>
                            <option value="Participate in new projects">Participate in new projects</option>
                            <option value="Innovate new ideas and looking for support">Innovate new ideas and looking for support</option>
                            <option value="Interested to do marketing">Interested to do marketing</option>
                        </select>
					</p>
                       <!--`account_id`, `type_account`, `fname`, `lname`, `dateOfBirth`, `register_as`, `register_date`, `email`, `phone`,
                 `organization`, `activity`, `country`, `contact_number`, `looking`, `password`, `approve`, `block`, `approved_by` -->
                    <p class="fieldset" id="questionHIDDENO3" style="display: none;">
						<label class="image-replace" for="signup-username">Activity </label>
						<input class="full-width has-padding has-border"  id="activity" name="activity" type="text" placeholder="Activity "/>
					</p>
                    	<p class="fieldset" id="questionHIDDENO2" style="display: none;">
						<label class="image-replace" for="signup-username">Name of organization</label>
						<input class="full-width has-padding has-border" type="text" id="organization" name="organization" placeholder="Name Of Organization"/>
					</p>
                       	
                    <p class="fieldset" id="questionHIDDEN3">
						<label class="image-replace" for="signup-username">Last Name</label>
						<input class="full-width has-padding has-border"id="lname" name="lname" type="text" placeholder="Last Name" required=""/>
					</p>
					<p class="fieldset" id="questionHIDDEN2">
						<label class="image-replace" for="signup-username">First Name</label>
						<input class="full-width has-padding has-border" id="fname" name="fname" type="text" placeholder="First Name" required=""/>
					</p>
                    
                    
                    
                    <p class="fieldset" style="width: 100%;">
						<label class="image-replace" for="signup-username">LinkedIn URL</label>
						<input class="full-width has-padding has-border" name="profile_url" type="url" placeholder="LinkedIn URL"/>
					</p>
                       	<p class="fieldset" id="questionHIDDENO4" style="display: none;">
						<label class="image-replace" for="signup-username">Country </label>
						<input class="full-width has-padding has-border" id="country" name="country" type="text" placeholder="Country "/>
					</p>
                    <p class="fieldset" id="questionHIDDEN4">
						<label class="image-replace" for="signup-username">Date of Birth</label>
						<input class="full-width has-padding has-border"  id="dateOfBirth"   name="dateOfBirth" required="" type="text" onfocus="(this.type='date')" placeholder="Date of Birth"/>
					</p>
                       	<p class="fieldset" id="questionHIDDENO5" style="display: none;">
						<label class="image-replace" for="signup-username">Contact Number </label>
						<input class="full-width has-padding has-border" id="contact_number" name="contact_number"  type="text" placeholder="Contact Number " style="margin-left: 33px;"/>
					</p>
                    <p class="fieldset" id="questionHIDDEN5">
						<label class="image-replace" for="signup-username">Mobile Number</label>
						<input style="margin-left: -31px;" name="phone" id="phone" required=""   class="full-width has-padding has-border" type="text" placeholder="Mobile Number"/>
					</p>
                    	<p class="fieldset" >
						<label class="image-replace" for="signup-email" >E-mail</label>
						<input class="full-width has-padding has-border" name="email"  id="email" required=""  type="email" placeholder="E-mail"/>
					</p>
                    
                    <p class="fieldset">
						<label class="image-replace" for="signup-password">Password</label>
						<input class="full-width has-padding has-border"  id="signup-password" required="" name="original_password" type="password"  placeholder="Password">
						<a href="#0" class="hide-password">Show</a>
					</p>

				

					<span class="fieldset" style="float: none;">
						<label for="accept-terms"><input type="checkbox" id="accept-terms" required="" /> I agree to the <a class="accept-terms" href="<?php echo
base_url('Maincontroller/TermsAndCondition') ?>">Terms</a></label>
					</span>

					<p class="fieldset" style="float: none;width: 100%;">
						<input class="full-width has-padding" type="submit" value="Create account"/>
					</p>
                    
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div>
            
			<a href="<?php echo base_url('Maincontroller/login') ?>" class="close-form cd-close-form"><img src="<?php echo
    base_url('public/images/icons/close-icon.png') ?>" /></a>
		</div>
	</div>
    												        <script>
         function showDiv(elem) {
    switch (elem.value) {
      
      case 'Person':
       $("#organization").prop("required", false);
      $("#activity").prop("required", false);
      $("#country").prop("required", false);
      $("#contact_number").prop("required", false);
      $("#looking").prop("required", false);
      
        $("#fname").prop("required", true);
      $("#lname").prop("required", true);
      $("#dateOfBirth").prop("required", true);
      $("#register_as").prop("required", true);
      $("#phone").prop("required", true);
        document.getElementById('questionHIDDEN1').style.display = 'block';
      document.getElementById('questionHIDDEN2').style.display = 'block';
    document.getElementById('questionHIDDEN3').style.display = 'block';
    document.getElementById('questionHIDDEN4').style.display = 'block';
     document.getElementById('questionHIDDEN5').style.display = 'block';
    document.getElementById('questionHIDDEN4').style.display = 'block';
     document.getElementById('questionHIDDENO1').style.display = 'none';
   document.getElementById('questionHIDDENO2').style.display = 'none';
    document.getElementById('questionHIDDENO3').style.display = 'none';
    document.getElementById('questionHIDDENO4').style.display = 'none';
      document.getElementById('questionHIDDENO5').style.display = 'none';
        break;
      case 'Organization':
           
      $("#organization").prop("required", true);
      $("#activity").prop("required", true);
      $("#country").prop("required", true);
      $("#contact_number").prop("required", true);
      $("#looking").prop("required", true);
      
         $("#fname").prop("required", false);
      $("#lname").prop("required", false);
      $("#dateOfBirth").prop("required", false);
      $("#register_as").prop("required", false);
      $("#phone").prop("required", false);
    document.getElementById('questionHIDDENO1').style.display = 'block';
       document.getElementById('questionHIDDENO2').style.display = 'block';
          document.getElementById('questionHIDDENO3').style.display = 'block';
             document.getElementById('questionHIDDENO4').style.display = 'block';
               document.getElementById('questionHIDDENO5').style.display = 'block';
        document.getElementById('questionHIDDEN1').style.display = 'none';
            document.getElementById('questionHIDDEN2').style.display = 'none';
                document.getElementById('questionHIDDEN3').style.display = 'none';
                    document.getElementById('questionHIDDEN4').style.display = 'none';
                        document.getElementById('questionHIDDEN5').style.display = 'none';
        break;
    }
  }
 
    </script>
    
    <!--Main Footer-->
    <footer class="main-footer" style="display: none;">
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
        	<div class="auto-container">
            <div class="row clearfix">
                <div class="content-column col-md-6 col-sm-12 col-xs-12 text-left">
            	   <div class="">&copy; <span class="orange">CRANE</span> Copyright 2018 . All right reserved.</div>
                </div>
                
                <div class="content-column col-md-6 col-sm-12 col-xs-12 text-right">
            	   <div class="">
                   <a href="#" style="color:#777;">Terms and Condition</a>
                   <span class="orange">&nbsp;|&nbsp;</span>
                   <a href="#" style="color:#777;">Privacy Policy</a>
                   </div>
                </div>
            </div>
        </div>
        </div>
        
    </footer>
    <!--End Main Footer-->
    
    
<script src='<?php echo base_url('public/js/jquery.min.js') ?>'></script>
<script src="<?php echo base_url('public/js/bootstrap.min.js') ?>"></script>

<script >jQuery(document).ready(function ($) {
  var $form_modal = $('.user-modal'),
  $form_login = $form_modal.find('#login'),
  $form_signup = $form_modal.find('#signup'),
  $form_forgot_password = $form_modal.find('#reset-password'),
  $form_modal_tab = $('.switcher'),
  $tab_login = $form_modal_tab.children('li').eq(0).children('a'),
  $tab_signup = $form_modal_tab.children('li').eq(1).children('a'),
  $forgot_password_link = $form_login.find('.form-bottom-message a'),
  $back_to_login_link = $form_forgot_password.find('.form-bottom-message a'),
  $main_nav = $('.main-nav');

  //open modal
  $main_nav.on('click', function (event) {

    if ($(event.target).is($main_nav)) {
      // on mobile open the submenu
      $(this).children('ul').toggleClass('is-visible');
    } else {
      // on mobile close submenu
      $main_nav.children('ul').removeClass('is-visible');
      //show modal layer
      $form_modal.addClass('is-visible');
      //show the selected form
      $(event.target).is('.signup') ? signup_selected() : login_selected();
    }

  });

  //close modal
  $('.user-modal').on('click', function (event) {
    if ($(event.target).is($form_modal) || $(event.target).is('.close-form')) {
      $form_modal.removeClass('is-visible');
    }
  });
  //close modal when clicking the esc keyboard button
  $(document).keyup(function (event) {
    if (event.which == '27') {
      $form_modal.removeClass('is-visible');
    }
  });

  //switch from a tab to another
  $form_modal_tab.on('click', function (event) {
    event.preventDefault();
    $(event.target).is($tab_login) ? login_selected() : signup_selected();
  });

  //hide or show password
  $('.hide-password').on('click', function () {
    var $this = $(this),
    $password_field = $this.prev('input');

    'password' == $password_field.attr('type') ? $password_field.attr('type', 'text') : $password_field.attr('type', 'password');
    'Show' == $this.text() ? $this.text('Hide') : $this.text('Show');
    //focus and move cursor to the end of input field
    $password_field.putCursorAtEnd();
  });

  //show forgot-password form 
  $forgot_password_link.on('click', function (event) {
    event.preventDefault();
    forgot_password_selected();
  });

  //back to login from the forgot-password form
  $back_to_login_link.on('click', function (event) {
    event.preventDefault();
    login_selected();
  });

  function login_selected() {
    $form_login.addClass('is-selected');
    $form_signup.removeClass('is-selected');
    $form_forgot_password.removeClass('is-selected');
    $tab_login.addClass('selected');
    $tab_signup.removeClass('selected');
  }

  function signup_selected() {
    $form_login.removeClass('is-selected');
    $form_signup.addClass('is-selected');
    $form_forgot_password.removeClass('is-selected');
    $tab_login.removeClass('selected');
    $tab_signup.addClass('selected');
  }

  function forgot_password_selected() {
    $form_login.removeClass('is-selected');
    $form_signup.removeClass('is-selected');
    $form_forgot_password.addClass('is-selected');
  }




  //IE9 placeholder fallback
  //credits http://www.hagenburger.net/BLOG/HTML5-Input-Placeholder-Fix-With-jQuery.html
  if (!Modernizr.input.placeholder) {
    $('[placeholder]').focus(function () {
      var input = $(this);
      if (input.val() == input.attr('placeholder')) {
        input.val('');
      }
    }).blur(function () {
      var input = $(this);
      if (input.val() == '' || input.val() == input.attr('placeholder')) {
        input.val(input.attr('placeholder'));
      }
    }).blur();
    $('[placeholder]').parents('form').submit(function () {
      $(this).find('[placeholder]').each(function () {
        var input = $(this);
        if (input.val() == input.attr('placeholder')) {
          input.val('');
        }
      });
    });
  }

});


//credits https://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
jQuery.fn.putCursorAtEnd = function () {
  return this.each(function () {
    // If this function exists...
    if (this.setSelectionRange) {
      // ... then use it (Doesn't work in IE)
      // Double the length because Opera is inconsistent about whether a carriage return is one character or two. Sigh.
      var len = $(this).val().length * 2;
      this.setSelectionRange(len, len);
    } else {
      // ... otherwise replace the contents with itself
      // (Doesn't work in Google Chrome)
      $(this).val($(this).val());
    }
  });
};
//# sourceURL=pen.js
</script>

</body>
</html>