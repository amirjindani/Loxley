<div class="privileges view">
<h2><?php echo __('Privilege'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($privilege['Privilege']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($privilege['Privilege']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($privilege['Privilege']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($privilege['Privilege']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Privilege'), array('action' => 'edit', $privilege['Privilege']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Privilege'), array('action' => 'delete', $privilege['Privilege']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $privilege['Privilege']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Privileges'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Privilege'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Role Privleges'), array('controller' => 'role_privleges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role Privlege'), array('controller' => 'role_privleges', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Role Privleges'); ?></h3>
	<?php if (!empty($privilege['RolePrivlege'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Privilege Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($privilege['RolePrivlege'] as $rolePrivlege): ?>
		<tr>
			<td><?php echo $rolePrivlege['id']; ?></td>
			<td><?php echo $rolePrivlege['role_id']; ?></td>
			<td><?php echo $rolePrivlege['privilege_id']; ?></td>
			<td><?php echo $rolePrivlege['created']; ?></td>
			<td><?php echo $rolePrivlege['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'role_privleges', 'action' => 'view', $rolePrivlege['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'role_privleges', 'action' => 'edit', $rolePrivlege['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'role_privleges', 'action' => 'delete', $rolePrivlege['id']), array('confirm' => __('Are you sure you want to delete # %s?', $rolePrivlege['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Role Privlege'), array('controller' => 'role_privleges', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
