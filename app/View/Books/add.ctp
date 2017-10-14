<style>
	div.books {
		float:none;
		width:100%;
	}
</style>
<div class="books form">
<?php echo $this->Form->create('Book'); ?>
	<fieldset class="fieldset">
		<legend><?php echo __('Add Book'); ?></legend>
	<?php
		echo $this->Form->input('book_isbn');
		if(!empty($addedBook)) {
			echo $this->Form->input('book_name', array(
				'required' => 'required',
				'default' => $addedBook
			));
		} else { 
			echo $this->Form->input('book_name', array(
				'required' => 'required'
			));
		}
		echo $this->Form->input('author', array(
			'required' => 'required'
		));
		echo $this->Form->input('book_type_id', array(
			'label' => 'Type of Resource',
			'class' => 'select2'
		));
		echo $this->Form->input('book_subject_id', array(
			'class' => 'select2'
		));
		echo $this->Form->input('active', array('default' => 1));
		echo $this->Form->input('user_id', array('default' => $authUser['id']));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Book Types'), array('controller' => 'book_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Type'), array('controller' => 'book_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Book Subjects'), array('controller' => 'book_subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Subject'), array('controller' => 'book_subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
<script>
	$( 'div.input.checkbox:has( > input#BookActive)' ).css('display','none');
	$( 'div.input:has( > label[for="BookUserId"])' ).css('display','none');
	$( 'div.input:has( > label[for="BookBookName"])' ).addClass('required');
	$( 'div.input:has( > label[for="BookAuthor"])' ).addClass('required');
</script>