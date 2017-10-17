<style>
	div.view {
		float:none;
		width:100%;
	}
	.profile {
		float:none;
	}
</style>
<div class="reviews view">
<h2><?php echo 'Review of '.$review['Book']['book_name'].'<br><h3>by '.$review['User']['username'].'</h3>'; ?></h2>
	<?php if ($authUser['id'] == $review['User']['id']) { ?>
	<div class="actions" style="background-color:#424242;float:right;">
		<li><?php echo $this->Html->link(__('Edit Review'), array('action' => 'edit', $review['Review']['id'])); ?> </li>
	</div>
	<?php } ?>
	<dl style="width:100%;">
		<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
		<br>
		<dt class="profile"><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($review['Review']['id']); ?>
			&nbsp;
		</dd>
		<?php } ?>
		<br>
		<dt class="profile"><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($review['Review']['date']); ?>
			&nbsp;
		</dd>
		<br>
		<dt class="profile"><?php echo __('Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($review['Book']['book_name'], array('controller' => 'books', 'action' => 'view', $review['Book']['id'])); ?>
			&nbsp;
		</dd>
		<br>
		<dt class="profile"><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($review['Review']['notes']); ?>
			&nbsp;
		</dd>
		<br>
		<dt class="profile"><?php echo __('Review Type'); ?></dt>
		<dd>
			<?php echo h($review['ReviewType']['name']); ?>
			&nbsp;
		</dd>
		<br>
		<?php
		if(!empty($review['Review']['published_average_rating'])) { ?>		
			<dt id="published-average" class="profile"><?php echo __('Overall Score'); ?></dt>
			<dd>
				<?php echo h($review['Review']['published_average_rating']); ?>
				&nbsp;
			</dd>
			<br>
		<?php }
		if(!empty($review['Review']['published_content_aligned'])) { ?>
			<dt class="profile"><?php echo __('Textbook content is aligned with your own curriculum.'); ?></dt>
			<dd>
				<?php echo h($review['Review']['published_content_aligned']); ?>
				&nbsp;
			</dd>
			<br>
		<?php } 
		if(!empty($review['Review']['published_price'])) { ?>
			<dt class="profile"><?php echo __('Satisfaction with the overall price of the textbook'); ?></dt>
			<dd>
				<?php echo h($review['Review']['published_price']); ?>
				&nbsp;
			</dd>
			<br>
		<?php }
		if(!empty($review['Review']['published_content_style'])) { ?>		
			<dt class="profile"><?php echo __('Overall content style (how engaging and friendly the text is)'); ?></dt>
			<dd>
				<?php echo h($review['Review']['published_content_style']); ?>
				&nbsp;
			</dd>
			<br>
		<?php }
		if(!empty($review['Review']['published_included_tools'])) { ?>
			<dt class="profile"><?php echo __('Digital tools are included (e.g. homework, flashcards, quizzes, software, CD, etc)'); ?></dt>
			<dd>
				<?php echo h($review['Review']['published_included_tools']); ?>
				&nbsp;
			</dd>
			<br>
		<?php }	
		if(!empty($review['Review']['published_practice_questions'])) { ?>
			<dt class="profile"><?php echo __('Amount and quality of practice questions included in the textbook'); ?></dt>
			<dd>
				<?php echo h($review['Review']['published_practice_questions']); ?>
				&nbsp;
			</dd>
			<br>
		<?php }
		if(!empty($review['Review']['published_up_to_date'])) { ?>
			<dt class="profile"><?php echo __('Most recent and up to date edition'); ?></dt>
			<dd>
				<?php echo h($review['Review']['published_up_to_date']); ?>
				&nbsp;
			</dd>
			<br>
		<?php }
		if(!empty($review['Review']['published_provided_through_publisher'])) { ?>
			<dt class="profile"><?php echo __('Curriculum is provided through publisher/department based on textbook'); ?></dt>
			<dd>
				<?php echo h($review['Review']['published_provided_through_publisher']); ?>
				&nbsp;
			</dd>
			<br>
		<?php }
		if(!empty($review['Review']['average_ebook_rating'])) { ?>		
			<dt class="profile"><?php echo __('Overall Score'); ?></dt>
			<dd>
				<?php echo h($review['Review']['average_ebook_rating']); ?>
				&nbsp;
			</dd>
			<br>
		<?php }
		if(!empty($review['Review']['ebook_functionality'])) {	?>
			<dt class="profile"><?php echo __('Overall functionality of platform'); ?></dt>
			<dd>
				<?php echo h($review['Review']['ebook_functionality']); ?>
				&nbsp;
			</dd>
			<br>
		<?php }
		if(!empty($review['Review']['ebook_integration_with_lms'])) { ?>
			<dt class="profile"><?php echo __('Integration with your LMS Sytem (Blackboard, Moodle, D2L, Canvas, etc.)'); ?></dt>
			<dd>
				<?php echo h($review['Review']['ebook_integration_with_lms']); ?>
				&nbsp;
			</dd>
			<br>
		<?php }
		if(!empty($review['Review']['ebook_support'])) { ?>
			<dt class="profile"><?php echo __('Reliability of technical support to troubleshoot any issue'); ?></dt>
			<dd>
				<?php echo h($review['Review']['ebook_support']); ?>
				&nbsp;
			</dd>
			<br>
		<?php }
		if(!empty($review['Review']['ebook_underline'])) { ?>
			<dt class="profile"><?php echo __('Ability for students to underline/highlight when they read'); ?></dt>
			<dd>
				<?php echo h($review['Review']['ebook_underline']); ?>
				&nbsp;
			</dd>
			<br>
		<?php }
		if(!empty($review['Review']['ebook_practice'])) { ?>
			<dt class="profile"><?php echo __('Practice quiz/homework included'); ?></dt>
			<dd>
				<?php echo h($review['Review']['ebook_practice']); ?>
				&nbsp;
			</dd>
			<br>
		<?php }
		if(!empty($review['Review']['ebook_gradebook'])) { ?>		
			<dt class="profile"><?php echo __('Instructor\'s gradebook management through online platform'); ?></dt>
			<dd>
				<?php echo h($review['Review']['ebook_gradebook']); ?>
				&nbsp;
			</dd>
			<br>
		<?php }
		if(!empty($review['Review']['ebook_technical_problems'])) { ?>		
			<dt class="profile"><?php echo __('Minimal technical problems'); ?></dt>
			<dd>
				<?php echo h($review['Review']['ebook_technical_problems']); ?>
				&nbsp;
			</dd>
			<br>
		<?php } 
		if ($authUser['Role']['name'] == 'Administrator') {	?>
		<br>
		<dt class="profile"><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($review['Review']['active']); ?>
			&nbsp;
		</dd>
		<br>
		<dt class="profile"><?php echo __('User'); ?></dt>
		<dd>
			<?php echo h($review['User']['username']); ?>
			&nbsp;
		</dd>
		<br>
		<dt class="profile"><?php echo __('Flag Field'); ?></dt>
		<dd>
			<?php echo h($review['Review']['flag_field']); ?>
			&nbsp;
		</dd>
		<br>
		<dt class="profile"><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($review['Review']['created']); ?>
			&nbsp;
		</dd>
		<br>
		<dt class="profile"><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($review['Review']['modified']); ?>
			&nbsp;
		</dd>
		<?php } ?>
	</dl>
</div>
<!--<div class="actions">
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
</div>-->
<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
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
<?php } ?>
<div class="related">
	<?php if (!empty($review['User'])): ?>
	<h3><?php echo __('Reviewer'); ?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Username'); ?></th>
<!--		<th><?php //echo __('Role'); ?></th>
		<th><?php //echo __('School'); ?></th>-->
		<th><?php echo __('Tenured?'); ?></th>
		<th><?php echo __('Subject'); ?></th>
		<th><?php echo __('Experience'); ?></th>
<!--		<th class="actions"><?php echo __('Actions'); ?></th>-->
	</tr>
		<tr>
			<td><?php echo $review['User']['username']; ?></td>
<!--			<td><?php //echo $review['User']['role_id']; ?></td>
			<td><?php //echo $review['User']['school_id']; ?></td>-->
			<td><?php if($review['User']['professor_tenured'] == '1') {
				echo 'Yes';
			} else {
				echo 'No';
			}				
			?></td>
			<td><?php echo $review['User']['book_subject_id']; ?></td>
			<td><?php echo $review['User']['experience']; ?></td>
<!--			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $review['User']['id'])); ?>
			</td>-->
		</tr>
	</table>
<?php endif; ?>

<script>
//TO DO: use html to insert stars for number
$( document ).ready( function() {
	var n = $( 'dt#published-average + dd' ).val();
	$( 'dt#published-average + dd' ).css( 'display','none' );
	for(var i = 0; i < n; i++){
		$( 'dt#published-average' ).append( '<span>&#9733;</span>' );
	}
} );
</script>
