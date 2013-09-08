<div class="container">
	<div class="page-nav clearfix">
	</div>
	<div class="page-header clearfix">
		<h1 class="text-right">Log in</h1>
	</div>
	<div class="page-body clearfix">	
		<div class="loginWrap col-xs-12 col-md-8 clearfix">
		<?php if (isset($messageEmail)) { echo $messageEmail; } ?>
		<?php if (isset($messagePassword)) { echo $messagePassword; } ?>
			<div class="loginleft col-xs-6">
			<form action="<?php echo site_url('/login/'); ?>" method="post" role="form" id="login_form">
			<fieldset>
				<div class="form-group">
					<label for="email_address">Email Address</label>
					<?php echo form_error('email_address'); ?>
					<input type="email" name="email_address" class="form-control h5-email" id="email_address" placeholder="Email Address" value="<?php echo set_value('email_address'); ?>" title="An Email Address is required." data-h5-errorid="invalid-email_address" required />
					<div id="invalid-email_address" class="ui-state-error message" style="display:none;"></div>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<?php echo form_error('password'); ?>
					<input type="password" name="password" class="form-control" id="password" placeholder="Password" title="A Password is required." data-h5-errorid="invalid-password" required />
					<div id="invalid-password" class="ui-state-error message" style="display:none;"></div>
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Log in</button>
				<p class="help-block"><a href="/signup" title="Signup">Signup?</a></p>
			</fieldset>
			</form>
			</div>
			<div class="loginRight col-xs-6">
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
			</div>
		</div>
	</div>
</div>