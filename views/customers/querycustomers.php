<?php
	use yii\helpers\Html;
	use yii\grid\GridView;
	use yii\helpers\Json;
?>
<br />
<h2>The controller Id is: <?= $this->context->id ?></h2>


<?= GridView::widget(['dataProvider' => $provider,]) ?>

 
