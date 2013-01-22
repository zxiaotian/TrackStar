<?php
$this->breadcrumbs=array(
	'Message'=>array('message/index'),
	'HelloWorld',
);?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>
<p> Hello,world</p>
<p> <?php echo $time; ?></p>
//<a href="/platform/index.php?r=message/saygoodBye">Goodbye!</a>
<p><?php echo CHtml::link('GoodBye',array('/message/saygoodBye')); ?> </p>
