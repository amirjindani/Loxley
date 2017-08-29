<div class="bookTypes view">
<h2><?php echo __('Book Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bookType['BookType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($bookType['BookType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($bookType['BookType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($bookType['BookType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Book Type'), array('action' => 'edit', $bookType['BookType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Book Type'), array('action' => 'delete', $bookType['BookType']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bookType['BookType']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Book Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Books'); ?></h3>
	<?php if (!empty($bookType['Book'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Book Type Id'); ?></th>
		<th><?php echo __('Book Name'); ?></th>
		<th><?php echo __('Book Isbn'); ?></th>
		<th><?php echo __('Book Subject Id'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bookType['Book'] as $book): ?>
		<tr>
			<td><?php echo $book['id']; ?></td>
			<td><?php echo $book['book_type_id']; ?></td>
			<td><?php echo $book['book_name']; ?></td>
			<td><?php echo $book['book_isbn']; ?></td>
			<td><?php echo $book['book_subject_id']; ?></td>
			<td><?php echo $book['active']; ?></td>
			<td><?php echo $book['user_id']; ?></td>
			<td><?php echo $book['created']; ?></td>
			<td><?php echo $book['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'books', 'action' => 'view', $book['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'books', 'action' => 'edit', $book['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'books', 'action' => 'delete', $book['id']), array('confirm' => __('Are you sure you want to delete # %s?', $book['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
