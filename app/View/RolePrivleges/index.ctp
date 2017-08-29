<div class="rolePrivleges index">
	<h2><?php echo __('Role Privleges'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('role_id'); ?></th>
			<th><?php echo $this->Paginator->sort('privilege_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rolePrivleges as $rolePrivlege): ?>
	<tr>
		<td><?php echo h($rolePrivlege['RolePrivlege']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rolePrivlege['Role']['name'], array('controller' => 'roles', 'action' => 'view', $rolePrivlege['Role']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($rolePrivlege['Privilege']['name'], array('controller' => 'privileges', 'action' => 'view', $rolePrivlege['Privilege']['id'])); ?>
		</td>
		<td><?php echo h($rolePrivlege['RolePrivlege']['created']); ?>&nbsp;</td>
		<td><?php echo h($rolePrivlege['RolePrivlege']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rolePrivlege['RolePrivlege']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rolePrivlege['RolePrivlege']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rolePrivlege['RolePrivlege']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $rolePrivlege['RolePrivlege']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p class="paginator">
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Role Privlege'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Privileges'), array('controller' => 'privileges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Privilege'), array('controller' => 'privileges', 'action' => 'add')); ?> </li>
	</ul>
</div>
