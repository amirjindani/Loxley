<div class="privileges form">
<?php echo $this->Form->create('Privilege'); ?>
	<fieldset>
		<legend><?php echo __('Add Privilege'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Privileges'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Role Privleges'), array('controller' => 'role_privleges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role Privlege'), array('controller' => 'role_privleges', 'action' => 'add')); ?> </li>
	</ul>
</div>
