<?php
use yii\helpers\Html;
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset = "UTF-8">
 <?= Html::csrfMetaTags() ?>
 <title><?= Html::encode($this->title) ?></title>
 <?php $this->head()?>
</head>
<body>
 <?php $this->beginBody() ?>
 <header>Fimex s.a. de cv</header>
 <?= $content ?>
 <footer>&copy; 2016 By Fimex</footer>
 
 <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>>