<div class="container">
	<div class="page-nav clearfix">
	</div>
	<div class="page-header clearfix">
		<h1 class="text-right">Sign up</h1>
	</div>
	<div class="page-body clearfix">	
		<div class="signupWrap col-xs-12 col-md-8 clearfix">
		<?php if (isset($messageName)) { echo $messageName; } ?>
		<?php if (isset($messageEmail)) { echo $messageEmail; } ?>
		<p class="alert alert-warning messageName" style="display:none;">Warning Message</p>
		<p class="alert alert-warning messageEmail" style="display:none;">Warning Message</p>
			<div class="signupleft col-xs-6">
			<form action="<?php echo site_url('/signup/'); ?>" method="post" role="form" id="signup_form">
			<fieldset>
				<div class="form-group">
					<label for="display_name">Display Name <span class="spinnerLoaderName" style="display:none;"><img src="/assets/images/loader.gif" alt="Spinner"></span></label>
					<?php echo form_error('display_name'); ?>
					<input type="text" name="display_name" class="form-control" id="display_name" placeholder="Display Name" value="<?php echo set_value('display_name'); ?>" title="Your Display Name is required." data-h5-errorid="invalid-display_name" required />
					<div id="invalid-display_name" class="ui-state-error message" style="display:none;"></div>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<?php echo form_error('password'); ?>
					<input type="password" name="password" class="form-control" id="password" placeholder="Password" title="A Password is required." data-h5-errorid="invalid-password" required />
					<div id="invalid-password" class="ui-state-error message" style="display:none;"></div>
				</div>
				<div class="form-group">
					<label for="email_address">Email Address<span class="spinnerLoaderEmail" style="display:none;"><img src="/assets/images/loader.gif" alt="Spinner"></span></label>
					<?php echo form_error('email_address'); ?>
					<input type="email" name="email_address" class="form-control h5-email" id="email_address" placeholder="Email Address" value="<?php echo set_value('email_address'); ?>" title="An Email Address is required." data-h5-errorid="invalid-email_address" required />
					<div id="invalid-email_address" class="ui-state-error message" style="display:none;"></div>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="terms"> I agree to the <a href="/terms" title="Terms & Services">Terms & Services</a>.
					</label>
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Signup</button>
				<p class="help-block"><a href="/login" title="Log in">Log in?</a></p>
			</fieldset>
			</form>
			</div>
			<div class="signupRight col-xs-6">
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
			</div>
		</div>
	</div>
</div>