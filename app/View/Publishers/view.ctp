<div class="publishers view">
<h2><?php echo __('Publisher'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($publisher['Publisher']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($publisher['Publisher']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($publisher['Publisher']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($publisher['Publisher']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Publisher'), array('action' => 'edit', $publisher['Publisher']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Publisher'), array('action' => 'delete', $publisher['Publisher']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $publisher['Publisher']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Publishers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publisher'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($publisher['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('School Id'); ?></th>
		<th><?php echo __('Student Major'); ?></th>
		<th><?php echo __('Student Graduation Date'); ?></th>
		<th><?php echo __('Publisher Id'); ?></th>
		<th><?php echo __('Publisher Rating'); ?></th>
		<th><?php echo __('Professor Rating'); ?></th>
		<th><?php echo __('Professor Tenured'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Password Reset Token'); ?></th>
		<th><?php echo __('Password Reset Token Date'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($publisher['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['role_id']; ?></td>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td><?php echo $user['school_id']; ?></td>
			<td><?php echo $user['student_major']; ?></td>
			<td><?php echo $user['student_graduation_date']; ?></td>
			<td><?php echo $user['publisher_id']; ?></td>
			<td><?php echo $user['publisher_rating']; ?></td>
			<td><?php echo $user['professor_rating']; ?></td>
			<td><?php echo $user['professor_tenured']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['notes']; ?></td>
			<td><?php echo $user['password_reset_token']; ?></td>
			<td><?php echo $user['password_reset_token_date']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
