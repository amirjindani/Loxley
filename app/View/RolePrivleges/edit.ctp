<div class="rolePrivleges form">
<?php echo $this->Form->create('RolePrivlege'); ?>
	<fieldset>
		<legend><?php echo __('Edit Role Privlege'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('role_id');
		echo $this->Form->input('privilege_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RolePrivlege.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('RolePrivlege.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Role Privleges'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Privileges'), array('controller' => 'privileges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Privilege'), array('controller' => 'privileges', 'action' => 'add')); ?> </li>
	</ul>
</div>
