<div class="login-box">

	<div class="login-logo"><b><?php echo $site_name; ?></b></div>

	<div class="login-box-body">
		<h1 class="login-box-msg">Bine ai venit!</h1>
		<?php echo $form->open(); ?>
			<?php echo $form->messages(); ?>
			<?php echo $form->bs3_text('Nume', 'username'); ?>
			<?php echo $form->bs3_password('Parola', 'password'); ?>
			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox">
						<label><input type="checkbox" name="remember">Retine parola</label>
					</div>
				</div>
				<div class="col-xs-4">
					<?php echo $form->bs3_submit('Login', 'btn btn-primary btn-block btn-flat redbut'); ?>
				</div>
			</div>
		<?php echo $form->close(); ?>
	</div>

</div>
