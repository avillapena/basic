<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h2><?= $msj ?></h2>
<?php
  $form = ActiveForm::begin(['action'=>['employees/update-tab']]);

	foreach ($employees as $index => $employee) {
		echo $form->field($employee,"[$index]lastName")->label($employee->employeeNumber);
		
	} 
?>

<div class = "form-group">
	
	<?= Html:: submitButton('Guardar Cambios', ['class' => 'btn btn-primary']);?>

</div>

<?php ActiveForm::end(); ?> 


?>