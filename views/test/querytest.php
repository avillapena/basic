<?php
 use yii\helpers\Html;
 use yii\helpers\Json;
 
		$rows = count($datos);
		
		
		echo Html::encode($msj);
		if ($rows > 0) {
			
			echo '{"records":';
 			 
			echo Json::encode($datos);
			
			echo '}';
		}
	
?>	
										