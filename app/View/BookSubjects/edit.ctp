<div class="bookSubjects form">
<?php echo $this->Form->create('BookSubject'); ?>
	<fieldset>
		<legend><?php echo __('Edit Book Subject'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BookSubject.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('BookSubject.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Book Subjects'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
