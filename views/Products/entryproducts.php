<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
?>

<?= Html:: encode($msj); ?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($products, 'productCode') ?>
<?= $form->field($products, 'productName')  ?>
<?= $form->field($products, 'productLine')  ?>

<div class = "form-group">
	
	<?= Html:: submitButton('Guardar', ['class' => 'btn btn-primary']) ?>

</div>

<?php ActiveForm:: end(); ?>

