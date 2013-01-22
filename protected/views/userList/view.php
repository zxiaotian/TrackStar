<?php
$this->breadcrumbs=array(
	'User Lists'=>array('index'),
	$model->userId,
);

$this->menu=array(
	array('label'=>'List UserList', 'url'=>array('index')),
	array('label'=>'Create UserList', 'url'=>array('create')),
	array('label'=>'Update UserList', 'url'=>array('update', 'id'=>$model->userId)),
	array('label'=>'Delete UserList', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->userId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserList', 'url'=>array('admin')),
);
?>

<h1>View UserList #<?php echo $model->userId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'userId',
		'UserName',
	),
)); ?>
