<?php
	use yii\helpers\Html;
	use yii\helpers\VarDumper;
	use yii\grid\GridView;
	
?>

<?= GridView::widget(['dataProvider' => $provider,]) ?>


IdProgramacion ASC, IdProceso ASC, Anio ASC, Semana ASC