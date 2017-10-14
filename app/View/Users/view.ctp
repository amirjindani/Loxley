<style>
	div.view {
		float:none;
		width:100%;
	}
</style>
<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<div class="actions" style="background-color:#424242;float:right;">
		<li><?php echo $this->Html->link(__('Edit Your Account'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Account'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete your account, %s?', $user['User']['username']))); ?> </li>		
		<li><?php echo $this->Html->link(__('Create a Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</div>
	<dl>
		<!--<dt><?php //echo __('Id'); ?></dt>
		<dd>
			<?php //echo h($user['User']['id']); ?>
			&nbsp;
		</dd>-->
		<dt class="profile"><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<br>
		<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
		<dt class="profile"><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<br>
		<?php } ?>
		<dt class="profile"><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['Role']['name']); ?>
			&nbsp;
		</dd>
		<br>
		<dt class="profile"><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['first_name']); ?>
			&nbsp;
		</dd>
		<br>
		<dt class="profile"><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
		<br>
		<dt class="profile"><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<br>
		<?php if ($authUser['Role']['name'] == 'Administrator' || $authUser['Role']['name'] == 'Professor' || $authUser['Role']['name'] == 'Student') {	?>
		<dt class="profile"><?php echo __('School'); ?></dt>
		<dd>
			<?php echo h($user['School']['name']); ?>
			&nbsp;
		</dd>
		<br>
		<?php } ?>
		<?php if ($authUser['Role']['name'] == 'Administrator' || $authUser['Role']['name'] == 'Student') {	?>
		<dt class="profile"><?php echo __('Student Major'); ?></dt>
		<dd>
			<?php echo h($user['User']['student_major']); ?>
			&nbsp;
		</dd>
		<br>
		<dt class="profile"><?php echo __('Student Graduation Date'); ?></dt>
		<dd>
			<?php echo h($user['User']['student_graduation_date']); ?>
			&nbsp;
		</dd>
		<br>
		<br>
		<?php } ?>
		<?php if ($authUser['Role']['name'] == 'Administrator' || $authUser['Role']['name'] == 'Publisher') {	?>
		<dt class="profile"><?php echo __('Publisher'); ?></dt>
		<dd>
			<?php echo h($user['Publisher']['name']); ?>
			&nbsp;
		</dd>
		<br>
		<?php } ?>
		<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
		<dt class="profile"><?php echo __('Publisher Rating'); ?></dt>
		<dd>
			<?php echo h($user['User']['publisher_rating']); ?>
			&nbsp;
		</dd>
		<br>
		<?php } ?>
		<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
		<dt class="profile"><?php echo __('Professor Rating'); ?></dt>
		<dd>
			<?php echo h($user['User']['professor_rating']); ?>
			&nbsp;
		</dd>
		<br>
		<?php } ?>
		<?php if ($authUser['Role']['name'] == 'Administrator' || $authUser['Role']['name'] == 'Professor') {	?>
		<dt class="profile"><?php echo __('Professor Tenured'); ?></dt>
		<dd>
			<?php echo h($user['User']['professor_tenured']); ?>
			&nbsp;
		</dd>
		<br>
		<?php } ?>
		<dt class="profile"><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($user['User']['notes']); ?>
			&nbsp;
		</dd>
		<!--<dt><?php //echo __('Password Reset Token'); ?></dt>
		<dd>
			<?php //echo h($user['User']['password_reset_token']); ?>
			&nbsp;
		</dd>
		<dt><?php //echo __('Password Reset Token Date'); ?></dt>
		<dd>
			<?php //echo h($user['User']['password_reset_token_date']); ?>
			&nbsp;
		</dd>
		<dt><?php //echo __('Created'); ?></dt>
		<dd>
			<?php //echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php //echo __('Modified'); ?></dt>
		<dd>
			<?php //echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>-->
	</dl>
</div>
<!--<div class="actions">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>
		<li><?php // echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Publishers'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Publisher'), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
<div class="related">
	<h3><?php echo __('Related Books'); ?></h3>
	<?php if (!empty($user['Book'])): ?>
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
	<?php foreach ($user['Book'] as $book): ?>
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
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($user['Comment'])): ?>
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
	<?php foreach ($user['Comment'] as $comment): ?>
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
			<li><?php echo $this->Html->link(__('Leave a Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<?php } ?>
<div class="related">
	<h3><?php echo __('Related Reviews'); ?></h3>
	<?php if (!empty($user['Review'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
			<th><?php echo __('Id'); ?></th>
		<?php } ?>
		<th><?php echo __('Book'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
			<th><?php echo __('Review Type'); ?></th>
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
	<?php foreach ($user['Review'] as $review):	?>
		<tr>
			<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
				<td><?php echo $review['id']; ?></td>
			<?php } ?>
			<td><?php
			foreach($user['Book'] as $book) {
				if($book['id'] == $review['book_id']) {
					echo $book['book_name']; 
				}
			}	?></td>
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
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reviews', 'action' => 'edit', $review['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reviews', 'action' => 'delete', $review['id']), array('confirm' => __('Are you sure you want to delete this review?', $review['id']))); ?>
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
