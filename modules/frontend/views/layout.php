<?php
use \yii\helpers\Html;
?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= Html::csrfMetaTags() ?>
    <title>Hello, <?= \Yii::$app->user->isGuest ? 'budy' : \Yii::$app->user->identity->getUsername(); ?></title>
</head>
<body>
<?= $content ?>
</body>
</html>