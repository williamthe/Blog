<?php
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Create',
);

/* $this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
); */
?>

<h1>New Post</h1>
<br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>