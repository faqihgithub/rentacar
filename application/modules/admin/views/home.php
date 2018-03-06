<div class="row">

	<div class="col-md-4">
		<?php echo modules::run('adminlte/widget/box_open', 'Shortcuts'); ?>
			<?php echo modules::run('adminlte/widget/app_btn', 'fa fa-user', 'Contul meu', 'panel/account'); ?>
			<?php echo modules::run('adminlte/widget/app_btn', 'fa fa-sign-out', 'Logout', 'panel/logout'); ?>
		<?php echo modules::run('adminlte/widget/box_close'); ?>
	</div>

	<div class="col-md-4">
		<?php echo modules::run('adminlte/widget/info_box', 'yellow', $count['users'], 'Clienti', 'fa fa-users', 'user'); ?>
	</div>

<br style="clear:both;" />

	<div class="col-md-4">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h2>Expira:</h2>
			</div>
			<div class="box-body">
				Rca la <strong>2</strong> masini.<br />
				CASCO la <strong>1</strong> masini.<br />
				Rovinieta la <strong>1</strong> masini.<br />
				Revizia la <strong>4</strong> masini.<br />
				<a href="notificari">Vezi toate notificarile</a>
			</div>
		</div>
	</div>


	<div class="col-md-4">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h2>Masini inchiriata:</h2>
			</div>
			<div class="box-body">
				Azi sunt <strong>2</strong> masini inchiriate.<br />
				<a href="masini">Vezi statusul masinilor</a>
			</div>
		</div>
	</div>

</div>
