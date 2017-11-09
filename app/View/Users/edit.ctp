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
	<div class="actions" style="background-color:#424242;float:right;">
		<li><?php echo $this->Form->postLink(__('Delete Account'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Are you sure you want to delete your account, %s?', $this->Form->value('User.username')))); ?></li>
	</div>
	<?php echo $this->Form->create('User'); ?>
	<fieldset class="fieldset">
		<legend><?php echo __('Edit Account'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('password', array(
			'disabled' => 'disabled',
		));
		//new password field (and confirmation field) for use in controller function only (does not save to database)
		echo $this->Form->input('new_password', array(
			'type' => 'password',
		));		
		echo $this->Form->input('new_password_confirm', array(
			'type' => 'password',
			'label' => 'Confirm New Password'
		));		
		echo '<div id="new-password" class="actions" style="float:none;background-color:#424242;"><li><a id="edit-password">Edit Password</a></div>';
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		if ($authUser['Role']['name'] == 'Administrator') {
			echo $this->Form->input('role_id');
		}
		if ($authUser['Role']['name'] == 'Administrator' || $authUser['Role']['name'] == 'Professor' || $authUser['Role']['name'] == 'Student') {		
			echo $this->Form->input('school_id', array(
				'empty' => 'Select One',
				'class' => 'select2'
			));
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
			echo '<br>'.$this->Form->input('professor_tenured');
		}
		if ($authUser['Role']['name'] == 'Administrator' || $authUser['Role']['name'] == 'Professor') {
			echo '<div class="input select"><label for="UserBookSubjectId">Select Your Primary Subject</label><select id="UserBookSubjectId" class="select2" name="data[User][book_subject_id]">';
			echo '<option value="">Choose a Subject</option>';
			foreach($options as $option) {
				echo '<option value="'.$option['value'].'">'.$option['name'].'</option>';
			}
			echo '</select></div>';	
		}
		if ($authUser['Role']['name'] == 'Administrator' || $authUser['Role']['name'] == 'Professor') {
			echo '<br>'.$this->Form->input('experience');
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
<script>
	$( 'div:has( > label[for="UserUsername"])' ).removeClass('required');
	$( 'div:has( > label[for="UserPassword"])' ).removeClass('required');
</script>
<script>
	$( document ).ready( function() {
		//Only display password field when edit password button is clicked
		$( 'div.input:has( > label[for="UserPassword"] )' ).hide();
		$( 'div.input:has( > label[for="UserNewPassword"] )' ).hide();
		$( 'div.input:has( > label[for="UserNewPasswordConfirm"] )' ).hide();
		$( 'a#edit-password' ).click( function() {
			$( 'div.input:has( > label[for="UserNewPassword"] )' ).show();
			$( 'div.input:has( > label[for="UserNewPasswordConfirm"] )' ).show();
			$( 'div#new-password' ).hide();
		} );
		//If password fields match, display green notification saying so; if not, display red notification
		$('input').blur(function() {
			var pass = $('input#UserNewPassword').val();
			var repass = $('input#UserNewPasswordConfirm').val();
			if(($('input#UserNewPassword').val().length == 0) || ($('input#UserNewPasswordConfirm').val().length == 0)){
				$( '#not-passwords-match' ).remove();
				$( 'div.input.password:has( > #UserNewPasswordConfirm)' ).append( '<p id="not-passwords-match" style="color:red"> <b style=" color:red;margin-bottom:0px;">&#9888;</b> Passwords Do Not Match</p>' );
			}
			else if (pass != repass) {
				$( '#not-passwords-match' ).remove();
				$( 'div.input.password:has( > #UserNewPasswordConfirm)' ).append( '<p id="not-passwords-match" style="color:red"> <b  style="color:red;margin-bottom:0px;">&#9888;</b> Passwords Do Not Match</p>' );
			}
			else {
				$( '#passwords-match' ).remove();
				$( '#not-passwords-match' ).remove();
				$( 'div.input.password:has( > #UserNewPasswordConfirm)' ).append( '<p id="passwords-match" style="color:green;margin-bottom:0px;">Passwords Match!</p>' );
			}
		});
	} );
</script>
