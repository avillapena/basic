<?php
	 use yii\helpers\Html;
	 use yii\helpers\Url;
?>

<?= Html::encode($messaje)?>

<br/>

<?php
	
	$msj = "Hola Putos!!";
	
	$url = Url::to('site/say',['messaje' => 'holaWorld']);
	
	echo "Url: " . $url;
?>