<?php
	use yii\helpers\Html;
	use yii\helpers\Json;
	use yii\widgets\LinkPager;
?>

	
<?php foreach ($products as $model) {?>	 
	
<?= Html::encode($model->productCode) ?>
<br/>
<?php } //echo Json::encode($products); ?>
 
 
<?= LinkPager::widget(['pagination' => $pags,]) ?>
