<?php
//
///* @var $this \yii\web\View */
///* @var $content string */
//
//use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;
//use app\assets\AppAsset;
//
//AppAsset::register($this);
//?>
<!---->
<!--<!DOCTYPE html>-->
<!--<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--<!--[if (gt IE 9)|!(IE)]><!-->
<!--<html class="noIE" lang="en-US">-->
<!--<!--<![endif]-->
<!--<head>-->
<!--    <title>Avada Plus</title>-->
<!---->
<!--    <!-- meta -->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>-->
<!--    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>-->
<!---->
<!--    <!-- google fonts -->
<!--    <link href='http://fonts.googleapis.com/css?family=Raleway:500,300' rel='stylesheet' type='text/css'>-->
<!--    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans'>-->
<!--    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>-->
<!--    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,bold"/>-->
<!---->
<!--    <!-- css -->
<!--    <link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="assets/css/font-awesome.min.css">-->
<!--    <link rel="stylesheet" href="assets/css/style.css" media="screen"/>-->
<!---->
<!--    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--    <!--[if lt IE 9]>-->
<!--    <script src="assets/js/html5shiv.js"></script>-->
<!--    <script src="assets/js/respond.js"></script>-->
<!--    <![endif]-->
<!---->
<!--    <!--[if IE 8]>-->
<!--    <script src="assets/js/selectivizr.js"></script>-->
<!--    <![endif]-->
<!--</head>-->
<!---->
<!--<body>-->
<?//= $this->render('//main/header'); ?>
<?php //echo $content;  ?>
<?//= $this->render('//main/footer'); ?>

<?php use yii\helpers\Html as Html; ?>
<!doctype html>
<html lang="<?php \Yii::$app->language?>">
<head>
    <meta charset="utf-8" />
    <title><?php echo Html::encode(\Yii::$app->name); ?></title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-inner">
                <a class="brand" href="/"><?php echo Html::encode(\Yii::$app->name); ?></a>
            </div>
        </div>
    </div>
    <div class="content">
        <?php echo $content?>
    </div>
</div>
</body>
</html>