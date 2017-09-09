<style>
	div.view {
		float:none;
		width:100%;
	}
</style>
<div class="books view">
<h2><?php echo __('Book'); ?></h2>
	<dl>
		<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
		<dt class="profile"><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($book['Book']['id']); ?>
			&nbsp;
		</dd>
		<br>
		<?php } ?>
		<dt class="profile"><?php echo __('Book Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['BookType']['name'], array('controller' => 'book_types', 'action' => 'view', $book['BookType']['id'])); ?>
			&nbsp;
		</dd>
		<br>
		<dt class="profile"><?php echo __('Book Name'); ?></dt>
		<dd>
			<?php echo h($book['Book']['book_name']); ?>
			&nbsp;
		</dd>
		<br>
		<dt class="profile"><?php echo __('Book ISBN'); ?></dt>
		<dd>
			<?php echo h($book['Book']['book_isbn']); ?>
			&nbsp;
		</dd>
		<br>
		<dt class="profile"><?php echo __('Book Subject'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['BookSubject']['name'], array('controller' => 'book_subjects', 'action' => 'view', $book['BookSubject']['id'])); ?>
			&nbsp;
		</dd>
		<br>
		<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
		<dt class="profile"><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($book['Book']['active']); ?>
			&nbsp;
		</dd>
		<br>
		<dt class="profile"><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['User']['id'], array('controller' => 'users', 'action' => 'view', $book['User']['id'])); ?>
			&nbsp;
		</dd>
		<br>
		<?php } ?>
		<dt class="profile"><?php echo __('Book Author'); ?></dt>
		<dd>
			<?php echo h($book['Book']['author']); ?>
			&nbsp;
		</dd>
		<br>
		<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
		<dt class="profile"><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($book['Book']['created']); ?>
			&nbsp;
		</dd>
		<br>
		<dt class="profile"><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($book['Book']['modified']); ?>
			&nbsp;
		</dd>
		<?php } ?>
	</dl>
</div>
<!--<div class="actions">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>
		<li><?php // echo $this->Html->link(__('Edit Book'), array('action' => 'edit', $book['Book']['id'])); ?> </li>
		<li><?php // echo $this->Form->postLink(__('Delete Book'), array('action' => 'delete', $book['Book']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $book['Book']['id']))); ?> </li>
		<li><?php // echo $this->Html->link(__('List Books'), array('action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Book'), array('action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Book Types'), array('controller' => 'book_types', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Book Type'), array('controller' => 'book_types', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Book Subjects'), array('controller' => 'book_subjects', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Book Subject'), array('controller' => 'book_subjects', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
<div class="related">
	<h3><?php echo __('Related Reviews'); ?></h3>
	<?php if (!empty($book['Review'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Review Type Id'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Flag Field'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($book['Review'] as $review): ?>
		<tr>
			<td><?php echo $review['id']; ?></td>
			<td><?php echo $review['book_id']; ?></td>
			<td><?php echo $review['description']; ?></td>
			<td><?php echo $review['date']; ?></td>
			<td><?php echo $review['notes']; ?></td>
			<td><?php echo $review['review_type_id']; ?></td>
			<td><?php echo $review['rating']; ?></td>
			<td><?php echo $review['active']; ?></td>
			<td><?php echo $review['user_id']; ?></td>
			<td><?php echo $review['flag_field']; ?></td>
			<td><?php echo $review['created']; ?></td>
			<td><?php echo $review['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reviews', 'action' => 'view', $review['id'])); ?>
				<?php if ($authUser['id'] == $review['user_id']) { ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reviews', 'action' => 'edit', $review['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reviews', 'action' => 'delete', $review['id']), array('confirm' => __('Are you sure you want to delete # %s?', $review['id']))); ?>
				<?php } ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
