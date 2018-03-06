<?php echo $form->messages(); ?>

<div class="row">

	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">Informatii despre masina</h3>
			</div>
			<div class="box-body">
				<?php echo $form->open(); ?>

					<?php echo $form->bs3_text('Marca', 'marca'); ?>
					<?php echo $form->bs3_text('Model', 'model'); ?>
					<?php echo $form->bs3_text('An', 'an'); ?>
					<?php
					$carblist = array('benzina' => 'Benzina', 'motorina' => 'Motorina');
					 echo $form->bs3_dropdown('carburant', $carblist, 'carburant'); ?>




					<?php echo $form->bs3_submit(); ?>

				<?php echo $form->close(); ?>
			</div>
		</div>
	</div>

</div>
