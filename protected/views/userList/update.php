<?php
$this->breadcrumbs=array(
	'User Lists'=>array('index'),
	$model->userId=>array('view','id'=>$model->userId),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserList', 'url'=>array('index')),
	array('label'=>'Create UserList', 'url'=>array('create')),
	array('label'=>'View UserList', 'url'=>array('view', 'id'=>$model->userId)),
	array('label'=>'Manage UserList', 'url'=>array('admin')),
);
?>

<h1>Update UserList <?php echo $model->userId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>