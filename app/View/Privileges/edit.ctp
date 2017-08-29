<div class="privileges form">
<?php echo $this->Form->create('Privilege'); ?>
	<fieldset>
		<legend><?php echo __('Edit Privilege'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Privilege.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Privilege.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Privileges'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Role Privleges'), array('controller' => 'role_privleges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role Privlege'), array('controller' => 'role_privleges', 'action' => 'add')); ?> </li>
	</ul>
</div>
