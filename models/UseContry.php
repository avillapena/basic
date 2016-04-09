<?php use app\models\Contry;

	$countries = Contry::find()->orderBy('name')->all();
	
	$country = Contry::findOne('US');


?>