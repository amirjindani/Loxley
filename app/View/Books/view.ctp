<style>
	div.view {
		float:none;
		width:100%;
		min-height:initial;
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
			<?php echo h($book['BookType']['name']); ?>
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
			<?php echo h($book['BookSubject']['name']); ?>
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
			<?php echo h($book['User']['id']); ?>
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
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
			<th><?php echo __('Review Type Id'); ?></th>
			<th><?php echo __('Textbook content is aligned with your own curriculum.'); ?></th>
			<th><?php echo __('Overall price of textbook'); ?></th>
			<th><?php echo __('Overall content style'); ?></th>
			<th><?php echo __('Digital tools are included (e.g. homework, flashcards, quizzes, software, CD, etc.)'); ?></th>
			<th><?php echo __('Amount and quality of practice questions included in the textbook'); ?></th>
			<th><?php echo __('Most recent and up to date edition'); ?></th>
			<th><?php echo __('Curriculum is provided through publisher/department based on textbook'); ?></th>
			<th><?php echo __('Functionality of platform'); ?></th>
			<th><?php echo __('Integration with your LMS Sytem (Blackboard, Moodle, D2L, Canvas, etc.)'); ?></th>
			<th><?php echo __('Reliability of technical support to troubleshoot any issue'); ?></th>
			<th><?php echo __('Ability for students to underline/highlight when they read'); ?></th>
			<th><?php echo __('Practice quiz/homework included'); ?></th>
			<th><?php echo __('Instructor\'s gradebook management through online platform'); ?></th>
			<th><?php echo __('Minimal technical problems'); ?></th>
			<th><?php echo __('Active'); ?></th>
			<th><?php echo __('User Id'); ?></th>
			<th><?php echo __('Flag Field'); ?></th>
			<th><?php echo __('Created'); ?></th>
			<th><?php echo __('Modified'); ?></th>
		<?php } ?>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($book['Review'] as $review): ?>
		<tr>
			<td><?php echo $review['date']; ?></td>
			<td><?php echo $review['notes']; ?></td>
			<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
				<td><?php echo $review['review_type_id']; ?></td>
				<td><?php echo $review['published_content_aligned']; ?></td>
				<td><?php echo $review['published_price']; ?></td>
				<td><?php echo $review['published_content_style']; ?></td>
				<td><?php echo $review['published_included_tools']; ?></td>
				<td><?php echo $review['published_practice_questions']; ?></td>
				<td><?php echo $review['published_up_to_date']; ?></td>
				<td><?php echo $review['published_provided_through_publisher']; ?></td>
				<td><?php echo $review['ebook_functionality']; ?></td>
				<td><?php echo $review['ebook_integration_with_lms']; ?></td>
				<td><?php echo $review['ebook_support']; ?></td>
				<td><?php echo $review['ebook_underline']; ?></td>
				<td><?php echo $review['ebook_practice']; ?></td>
				<td><?php echo $review['ebook_gradebook']; ?></td>
				<td><?php echo $review['ebook_technical_problems']; ?></td>
				<td><?php echo $review['active']; ?></td>
				<td><?php echo $review['user_id']; ?></td>
				<td><?php echo $review['flag_field']; ?></td>
				<td><?php echo $review['created']; ?></td>
				<td><?php echo $review['modified']; ?></td>
			<?php } ?>
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
			<li><?php echo $this->Html->link(__('Create a Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
