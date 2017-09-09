<style>
	div.index {
		float:none;
		width:100%;
	}
	input[value="Search"] {
		width:33%;
	}
	input#BookBookName {
		margin-bottom: 20px;
		width: 33%;
	}
</style><div class="books index">
	<h2><?php echo __('Books'); ?></h2>
	<div>
		<?php echo $this->Form->create('Book', array(
			'url' => array_merge(
					array(
						'action' => 'find'
					),
					$this->params['pass']
				)
			)
		);
		echo $this->Form->input('book_name', array(
				'div' => false
			)
		);
		echo $this->Form->submit(__('Search'), array(
				'div' => false
			)
		);
		echo $this->Form->end(); ?>
	</div>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('book_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('book_name'); ?></th>
			<th><?php echo $this->Paginator->sort('book_isbn'); ?></th>
			<th><?php echo $this->Paginator->sort('book_subject_id'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('author'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($books as $book): ?>
	<tr>
		<td><?php echo h($book['Book']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($book['BookType']['name'], array('controller' => 'book_types', 'action' => 'view', $book['BookType']['id'])); ?>
		</td>
		<td><?php echo h($book['Book']['book_name']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['book_isbn']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($book['BookSubject']['name'], array('controller' => 'book_subjects', 'action' => 'view', $book['BookSubject']['id'])); ?>
		</td>
		<td><?php echo h($book['Book']['active']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($book['User']['id'], array('controller' => 'users', 'action' => 'view', $book['User']['id'])); ?>
		</td>
		<td><?php echo h($book['Book']['author']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['created']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $book['Book']['id'])); ?>
			<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $book['Book']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $book['Book']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $book['Book']['id']))); ?>
			<?php } ?>
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
<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Book Types'), array('controller' => 'book_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Type'), array('controller' => 'book_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Book Subjects'), array('controller' => 'book_subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Subject'), array('controller' => 'book_subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php } ?>