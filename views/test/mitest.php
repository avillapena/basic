<?php

	use yii\helpers\Url;
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	?>

 <h1><?= $msj ?></h1>
<?php
	// Begin Form
	$form = ActiveForm::begin(['id' => 'active-form',
							'options' => ['class' => 'form-horizontal',
										'enctype' => 'multipart/form-data'
	
],
	
]);

?>

<?php 
	// fields of form
echo $form->field($model,'nombre')->textinput()->hint('Capture su Nombre')->label('Nombre');
echo $form->field($model,'correo')->textinput()->hint('Capture su Correo')->label('Correo');

?>
	
<div class = "form-group">
	<?= Html::submitButton('Enviar',['class'=>'btn btn-primary']) ?>
</div>

	
<?php
// End form
ActiveForm::end();  

?>


