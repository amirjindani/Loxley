<div class="reviews index">
	<h2><?php echo __('Reviews'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('book_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th><?php echo $this->Paginator->sort('review_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rating'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('flag_field'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($reviews as $review): ?>
	<tr>
		<td><?php echo h($review['Review']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($review['Book']['id'], array('controller' => 'books', 'action' => 'view', $review['Book']['id'])); ?>
		</td>
		<td><?php echo h($review['Review']['description']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['date']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['notes']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($review['ReviewType']['name'], array('controller' => 'review_types', 'action' => 'view', $review['ReviewType']['id'])); ?>
		</td>
		<td><?php echo h($review['Review']['rating']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['active']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($review['User']['id'], array('controller' => 'users', 'action' => 'view', $review['User']['id'])); ?>
		</td>
		<td><?php echo h($review['Review']['flag_field']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['created']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $review['Review']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $review['Review']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $review['Review']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $review['Review']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Review'), array('action' => 'add')); ?></li>
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
