<div class="reviews view">
<h2><?php echo __('Review'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($review['Review']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($review['Book']['id'], array('controller' => 'books', 'action' => 'view', $review['Book']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($review['Review']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($review['Review']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($review['Review']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Review Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($review['ReviewType']['name'], array('controller' => 'review_types', 'action' => 'view', $review['ReviewType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rating'); ?></dt>
		<dd>
			<?php echo h($review['Review']['rating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($review['Review']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($review['User']['id'], array('controller' => 'users', 'action' => 'view', $review['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag Field'); ?></dt>
		<dd>
			<?php echo h($review['Review']['flag_field']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($review['Review']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($review['Review']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Review'), array('action' => 'edit', $review['Review']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Review'), array('action' => 'delete', $review['Review']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $review['Review']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Review Types'), array('controller' => 'review_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review Type'), array('controller' => 'review_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($review['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Review Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Flagged'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Replied'); ?></th>
		<th><?php echo __('Replied Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($review['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id']; ?></td>
			<td><?php echo $comment['review_id']; ?></td>
			<td><?php echo $comment['comment']; ?></td>
			<td><?php echo $comment['title']; ?></td>
			<td><?php echo $comment['user_id']; ?></td>
			<td><?php echo $comment['flagged']; ?></td>
			<td><?php echo $comment['date']; ?></td>
			<td><?php echo $comment['replied']; ?></td>
			<td><?php echo $comment['replied_id']; ?></td>
			<td><?php echo $comment['created']; ?></td>
			<td><?php echo $comment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), array('confirm' => __('Are you sure you want to delete # %s?', $comment['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
