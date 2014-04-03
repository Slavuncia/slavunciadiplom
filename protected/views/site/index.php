<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Здарова! <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Мой первый (аегис мне в жопу) сайт!</p>

<p>Бла бла бла</p>
<ul>
	<li>Че то тут: <code><?php echo __FILE__; ?></code></li>
	<li>И тут че то: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>Позвони мне, и не пожалеешь. 069*99*2* </p>
