<?php
	use yii\helpers\Url;
	
	$msj = "Hola Putos!!";
	
	$url = Url::to('site/say',['messaje'=>$msj]);
	
	echo "Url: " . $url;
?>