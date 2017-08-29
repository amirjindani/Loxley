<div class="rolePrivleges view">
<h2><?php echo __('Role Privlege'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rolePrivlege['RolePrivlege']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rolePrivlege['Role']['name'], array('controller' => 'roles', 'action' => 'view', $rolePrivlege['Role']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Privilege'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rolePrivlege['Privilege']['name'], array('controller' => 'privileges', 'action' => 'view', $rolePrivlege['Privilege']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($rolePrivlege['RolePrivlege']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($rolePrivlege['RolePrivlege']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Role Privlege'), array('action' => 'edit', $rolePrivlege['RolePrivlege']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Role Privlege'), array('action' => 'delete', $rolePrivlege['RolePrivlege']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $rolePrivlege['RolePrivlege']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Role Privleges'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role Privlege'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Privileges'), array('controller' => 'privileges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Privilege'), array('controller' => 'privileges', 'action' => 'add')); ?> </li>
	</ul>
</div>
