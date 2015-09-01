<?php use yii\helpers\Html; ?>
<div class="pull-right btn-group">
    <?php echo Html::a('Update', array('main/update', 'id' => $post->id), array('class' => 'btn btn-primary')); ?>
    <?php echo Html::a('Delete', array('main/delete', 'id' => $post->id), array('class' => 'btn btn-danger')); ?>
</div>

<h1><?php echo $post->title; ?></h1>
<p><?php echo $post->content; ?></p>
<hr/>
<time>Created On: <?php echo $post->created; ?></time><br/>
<time>Updated On: <?php echo $post->updated; ?></time>