<style>
	div.reviews {
		float:none;
		width:100%;
	}
</style>
<div class="reviews form">
<?php echo $this->Form->create('Review'); ?>
	<fieldset>
		<legend><?php echo __('Edit a Textbook Review'); ?></legend>
	<?php
		echo $this->Form->input('date', array(
			'type' => 'text', 
			'class' => 'datepicker', 
		));
		echo $this->Form->input('book_id', array(
			'options' => $books,
			'label' => 'Resource Title'
		));
		echo '<h3>What were your thoughts on this resource?</h3>';
		echo $this->Form->input('description', array(
			'label' => 'Description of Book'
		));
		echo $this->Form->input('notes', array(
			'type' => 'textarea'
		));
		if(!empty($this->request->data['Review']['published_content_aligned'])) {
			echo $this->Form->input('published_content_aligned', array(
				'min' => '1', 
				'max' => '5', 
				'label' => 'Textbook content is aligned with your own curriculum.', 
				'class'=> 'published'
			));
		}
		if(!empty($this->request->data['Review']['published_price'])) {
			echo $this->Form->input('published_price', array(
				'min' => '1', 
				'max' => '5', 
				'label' => 'Overall price of textbook', 
				'class'=> 'published'
			));
		}
		if(!empty($this->request->data['Review']['published_content_style'])) {
			echo $this->Form->input('published_content_style', array(
				'min' => '1', 
				'max' => '5', 
				'label' => 'Overall content style', 
				'class'=> 'published'
			));
		}
		if(!empty($this->request->data['Review']['published_included_tools'])) {
			echo $this->Form->input('published_included_tools', array(
				'min' => '1', 
				'max' => '5', 
				'label' => 'Digital tools are included (e.g. homework, flashcards, quizzes, software, CD, etc.)', 
				'class'=> 'published'
			));
		}
		if(!empty($this->request->data['Review']['published_practice_questions'])) {		
			echo $this->Form->input('published_practice_questions', array(
				'min' => '1', 
				'max' => '5', 
				'label' => 'Amount and quality of practice questions included in the textbook', 
				'class'=> 'published'
			));
		}
		if(!empty($this->request->data['Review']['published_up_to_date'])) {
			echo $this->Form->input('published_up_to_date', array(
				'min' => '1', 
				'max' => '5', 
				'label' => 'Most recent and up to date edition', 
				'class'=> 'published'
			));
		}
		if(!empty($this->request->data['Review']['published_provided_through_publisher'])) {
			echo $this->Form->input('published_provided_through_publisher', array(
				'min' => '1', 
				'max' => '5',
				'label' => 'Curriculum is provided through publisher/department based on textbook', 
				'class'=> 'published'
			));
		}
		if(!empty($this->request->data['Review']['ebook_functionality'])) {		
			echo $this->Form->input('ebook_functionality', array(
				'min' => '1', 
				'max' => '5', 
				'label' => 'Functionality of platform', 
				'class'=> 'ebook'
			));
		}
		if(!empty($this->request->data['Review']['ebook_integration_with_lms'])) {
			echo $this->Form->input('ebook_integration_with_lms', array(
				'min' => '1', 
				'max' => '5', 
				'label' => 'Integration with your LMS Sytem (Blackboard, Moodle, D2L, Canvas, etc.)', 
				'class'=> 'ebook'
			));
		}
		if(!empty($this->request->data['Review']['ebook_support'])) {
			echo $this->Form->input('ebook_support', array(
				'min' => '1', 
				'max' => '5', 
				'label' => 'Reliability of technical support to troubleshoot any issue', 
				'class'=> 'ebook'
			));
		}
		if(!empty($this->request->data['Review']['ebook_underline'])) {
			echo $this->Form->input('ebook_underline', array(
				'min' => '1', 
				'max' => '5', 
				'label' => 'Ability for students to underline/highlight when they read', 
				'class'=> 'ebook'
			));
		}
		if(!empty($this->request->data['Review']['ebook_practice'])) {
			echo $this->Form->input('ebook_practice', array(
				'min' => '1', 
				'max' => '5', 
				'label' => 'Practice quiz/homework included', 
				'class'=> 'ebook'
			));
		}
		if(!empty($this->request->data['Review']['ebook_gradebook'])) {
			echo $this->Form->input('ebook_gradebook', array(
				'min' => '1', 
				'max' => '5', 
				'label' => 'Instructor\'s gradebook management through online platform', 
				'class'=> 'ebook'
			));
		}
		if(!empty($this->request->data['Review']['ebook_technical_problems'])) {
			echo $this->Form->input('ebook_technical_problems', array(
				'min' => '1', 
				'max' => '5', 
				'label' => 'Minimal technical problems', 
				'class'=> 'ebook'
			));
		}
		echo $this->Form->input('review_type_id', array(
			'default' => $authUser['Role']['id'],
		));
		echo $this->Form->input('active', array(
			'default' => 1,
		));
		echo $this->Form->input('user_id', array(
			'default' => $authUser['id']
		));
		if ($authUser['Role']['name'] == 'Administrator') {
			echo $this->Form->input('flag_field');
		}
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<!--<div class="actions">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>

		<li><?php // echo $this->Html->link(__('List Reviews'), array('action' => 'index')); ?></li>
		<li><?php // echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Review Types'), array('controller' => 'review_types', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Review Type'), array('controller' => 'review_types', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
<script>
	$( 'div:has( > input#ReviewActive_)' ).css('display','none');
	$( 'div:has( > label[for="ReviewUserId"])' ).css('display','none');
	$( 'div:has( > label[for="ReviewFlagField"])' ).css('display','none');
	$( 'div:has( > label[for="ReviewReviewTypeId"])' ).css('display','none');
</script>
