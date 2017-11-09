<style>
	div.reviews {
		float:none;
		width:100%;
	}
	a.br-active:hover, a br-selected:hover {
		background-color:#4cb750 !important;
	}
</style>
<div class="reviews form">
<?php echo $this->Form->create('Review'); ?>
	<fieldset class="fieldset">
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
		echo $this->Form->input('notes', array(
			'type' => 'textarea',
			'label' => 'Comments'
		));
		if(!empty($this->request->data['Review']['published_content_aligned'])) {
			echo $this->Form->input('published_content_aligned', array(
				'min' => '1', 
				'max' => '5', 
				'class'=> 'barrating published',
				'type' => 'select',
				'options' => $ratingOptions,
				'label' => 'Textbook content is aligned with your own curriculum.',
				'empty' => 'Choose a rating'
			));
		}
		if(!empty($this->request->data['Review']['published_price'])) {
			echo $this->Form->input('published_price', array(
				'min' => '1', 
				'max' => '5', 
				'class'=> 'barrating published',
				'type' => 'select',
				'options' => $ratingOptions,
				'label' => 'Satisfaction with the overall price of the textbook.',
				'empty' => 'Choose a rating'
			));
		}
		if(!empty($this->request->data['Review']['published_content_style'])) {
			echo $this->Form->input('published_content_style', array(
				'min' => '1', 
				'max' => '5', 
				'class'=> 'barrating published',
				'type' => 'select',
				'options' => $ratingOptions,
				'label' => 'Overall content style (how engaging and friendly the text is).',
				'empty' => 'Choose a rating'
			));
		}
		if(!empty($this->request->data['Review']['published_included_tools'])) {
			echo $this->Form->input('published_included_tools', array(
				'min' => '1', 
				'max' => '5', 
				'class'=> 'barrating published',
				'type' => 'select',
				'options' => $ratingOptions,
				'label' => 'Digital tools are included (e.g. homework, flashcards, quizzes, software, CD, etc).',
				'empty' => 'Choose a rating'
			));
		}
		if(!empty($this->request->data['Review']['published_practice_questions'])) {		
			echo $this->Form->input('published_practice_questions', array(
				'min' => '1', 
				'max' => '5', 
				'class'=> 'barrating published',
				'type' => 'select',
				'options' => $ratingOptions,
				'label' => 'Amount and quality of practice questions included in the textbook.',
				'empty' => 'Choose a rating'
			));
		}
		if(!empty($this->request->data['Review']['published_up_to_date'])) {
			echo $this->Form->input('published_up_to_date', array(
				'min' => '1', 
				'max' => '5', 
				'class'=> 'barrating published',
				'type' => 'select',
				'options' => $ratingOptions,
				'label' => 'Most recent and up to date edition of textbook.',
				'empty' => 'Choose a rating'
			));
		}
		if(!empty($this->request->data['Review']['published_provided_through_publisher'])) {
			echo $this->Form->input('published_provided_through_publisher', array(
				'min' => '1', 
				'max' => '5',
				'class'=> 'barrating published',
				'type' => 'select',
				'options' => $ratingOptions,
				'label' => 'Curriculum is provided through publisher/department based on textbook.',
				'empty' => 'Choose a rating'
			));
		}
		if(!empty($this->request->data['Review']['ebook_functionality'])) {		
			echo $this->Form->input('ebook_functionality', array(
				'min' => '1', 
				'max' => '5', 
				'class'=> 'barrating ebook',
				'type' => 'select',
				'options' => $ratingOptions,
				'label' => 'Overall functionality of platform',
				'empty' => 'Choose a rating'
			));
		}
		if(!empty($this->request->data['Review']['ebook_integration_with_lms'])) {
			echo $this->Form->input('ebook_integration_with_lms', array(
				'min' => '1', 
				'max' => '5', 
				'class'=> 'barrating ebook',
				'type' => 'select',
				'options' => $ratingOptions,
				'label' => 'Integration with your LMS Sytem (Blackboard, Moodle, D2L, Canvas, etc.)',
				'empty' => 'Choose a rating'
			));
		}
		if(!empty($this->request->data['Review']['ebook_support'])) {
			echo $this->Form->input('ebook_support', array(
				'min' => '1', 
				'max' => '5', 
				'label' => '', 
				'class'=> 'barrating ebook',
				'type' => 'select',
				'options' => $ratingOptions,
				'label' => 'Reliability of technical support to troubleshoot any issues.',
				'empty' => 'Choose a rating'
			));
		}
		if(!empty($this->request->data['Review']['ebook_underline'])) {
			echo $this->Form->input('ebook_underline', array(
				'min' => '1', 
				'max' => '5', 
				'class'=> 'barrating ebook',
				'type' => 'select',
				'options' => $ratingOptions,
				'label' => 'Ability for students to underline/highlight when they read.',
				'empty' => 'Choose a rating'
			));
		}
		if(!empty($this->request->data['Review']['ebook_practice'])) {
			echo $this->Form->input('ebook_practice', array(
				'min' => '1', 
				'max' => '5', 
				'class'=> 'barrating ebook',
				'type' => 'select',
				'options' => $ratingOptions,
				'label' => 'Practice quiz/homework included.',
				'empty' => 'Choose a rating'
			));
		}
		if(!empty($this->request->data['Review']['ebook_gradebook'])) {
			echo $this->Form->input('ebook_gradebook', array(
				'min' => '1', 
				'max' => '5', 
				'class'=> 'barrating ebook',
				'type' => 'select',
				'options' => $ratingOptions,
				'label' => 'Instructor\'s gradebook management through online platform',
				'empty' => 'Choose a rating'
			));
		}
		if(!empty($this->request->data['Review']['ebook_technical_problems'])) {
			echo $this->Form->input('ebook_technical_problems', array(
				'min' => '1', 
				'max' => '5', 
				'class'=> 'barrating ebook',
				'type' => 'select',
				'options' => $ratingOptions,
				'label' => 'Minimal technical problems.',
				'empty' => 'Choose a rating'
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
	//Hide administrative fields
	$( 'div:has( > input#ReviewActive_)' ).css('display','none');
	$( 'div:has( > label[for="ReviewUserId"])' ).css('display','none');
	$( 'div:has( > label[for="ReviewFlagField"])' ).css('display','none');
	$( 'div:has( > label[for="ReviewReviewTypeId"])' ).css('display','none');
	$( 'div:has( > label[for="ReviewDate"])' ).css('display','none');
	//Hide input fields-these are used for saving data, but will not be interacted with by the user
//	$( 'div.input.number:has( input.hidden )' ).css( 'display','none' );
</script>
<script>
	$( function() {
		$( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val()
	} );
</script>
<script type="text/javascript">
$('.barrating').barrating({
	theme: 'bars-movie',
	initialRating: ''
 });
</script>
