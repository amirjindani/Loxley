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
		echo $this->Form->input('date', array('type' => 'text', 'class' => 'datepicker'));
		echo $this->Form->input('book_id', array('options' => $books));
		echo $this->Form->input('rating', array('min' => '1', 'max' => '5'));
		echo $this->Form->input('description', array('label' => 'Description of Book'));
		echo $this->Form->input('notes', array('type' => 'textarea'));
		echo $this->Form->input('review_type_id', array('options' => $reviewTypes));
		echo $this->Form->input('active');
		echo $this->Form->input('user_id');
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
</script>
