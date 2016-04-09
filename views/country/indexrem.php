<?php
	use yii\helpers\Html;
	use yii\widgets\LinkPager;
?>

<h1>Countries</h1>

<ul>
<?php foreach($countries as $contry): ?>

	<li>
		<?= Html::encode("{$contry->Name} ({$contry->Code})") ?>
		<?= $contry->Population ?> 
		
	</li>
 <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination'=> $pagination]) ?>
