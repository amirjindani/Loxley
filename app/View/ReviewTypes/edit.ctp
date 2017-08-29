<div class="reviewTypes form">
<?php echo $this->Form->create('ReviewType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Review Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ReviewType.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ReviewType.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Review Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
