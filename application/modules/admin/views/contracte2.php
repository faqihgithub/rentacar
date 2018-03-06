
		<?php echo $form->open(); ?>
			<?php echo $form->messages(); ?>
			<?php echo $form->bs3_text('Nume', 'username'); ?>
			<?php echo $form->bs3_password('Parola', 'password'); ?>
      <select name="">
<?php
foreach($room_type as $each)
{
    ?>
    <option value="<?=$each['rt_name']?>"><?=$each['rt_name']?></option>
    <?php
}
?>
</select>
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
