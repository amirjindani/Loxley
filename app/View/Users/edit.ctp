<style>
	div.form {
		float:none;
		width:100%;
	}
	div.submit {
		margin-top: 10px;
	}
</style>
<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<div class="actions" style="background-color:#a2b3bc;float:right;">
		<li><?php echo $this->Form->postLink(__('Delete Account'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Are you sure you want to delete your account, %s?', $this->Form->value('User.username')))); ?></li>
	</div>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
//			echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		if ($authUser['Role']['name'] == 'Administrator') {
			echo $this->Form->input('role_id');
		}
		if ($authUser['Role']['name'] == 'Administrator' || $authUser['Role']['name'] == 'Professor' || $authUser['Role']['name'] == 'Student') {		
			echo $this->Form->input('school_id');
		}
		if ($authUser['Role']['name'] == 'Administrator' || $authUser['Role']['name'] == 'Student') {
			echo $this->Form->input('student_major');
			echo $this->Form->input('student_graduation_date', array('type' => 'text', 'class' => 'datepicker'));
		}
		if ($authUser['Role']['name'] == 'Administrator' || $authUser['Role']['name'] == 'Publisher') {
			echo $this->Form->input('publisher_id');
		}
		if ($authUser['Role']['name'] == 'Administrator' || $authUser['Role']['name'] == 'Administrator') {
			echo $this->Form->input('publisher_rating');
			echo $this->Form->input('professor_rating');
		}
		if ($authUser['Role']['name'] == 'Administrator' || $authUser['Role']['name'] == 'Professor') {
			echo $this->Form->input('professor_tenured');
		}
		echo $this->Form->input('notes');
//		echo $this->Form->input('password_reset_token');
//		echo $this->Form->input('password_reset_token_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit Changes')); ?>
</div>
<!--<div class="actions">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>
		<li><?php // echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
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
