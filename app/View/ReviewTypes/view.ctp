<div class="reviewTypes view">
<h2><?php echo __('Review Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reviewType['ReviewType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($reviewType['ReviewType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($reviewType['ReviewType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($reviewType['ReviewType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Review Type'), array('action' => 'edit', $reviewType['ReviewType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Review Type'), array('action' => 'delete', $reviewType['ReviewType']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $reviewType['ReviewType']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Review Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Reviews'); ?></h3>
	<?php if (!empty($reviewType['Review'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Notes'); ?></th>
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
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($reviewType['Review'] as $review): ?>
		<tr>
			<td><?php echo $review['id']; ?></td>
			<td><?php echo $review['book_id']; ?></td>
			<td><?php echo $review['description']; ?></td>
			<td><?php echo $review['date']; ?></td>
			<td><?php echo $review['notes']; ?></td>
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
			<td><?php echo $review['ebook_technical_problems']; ?></td>			<td><?php echo $review['active']; ?></td>
			<td><?php echo $review['user_id']; ?></td>
			<td><?php echo $review['flag_field']; ?></td>
			<td><?php echo $review['created']; ?></td>
			<td><?php echo $review['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reviews', 'action' => 'view', $review['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reviews', 'action' => 'edit', $review['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reviews', 'action' => 'delete', $review['id']), array('confirm' => __('Are you sure you want to delete # %s?', $review['id']))); ?>
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
