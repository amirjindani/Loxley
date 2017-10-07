<div class="users form" style="float:none;width:100%;">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<div style="padding-top:20px;padding-left:20px;"><legend style="float:left;"><?php echo __('Create an Account'); ?></legend>
		<a href="/pages/about-us"><h4 style="font-style:italic;margin-left:40px;display:inline;">Why Create an Account?</h4></a><div>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('email', array(
			'required' => 'required'
		));
		echo $this->Form->input('password');
		echo $this->Form->input('role_id', array(
			'options' => $roles,
			'default' => '4'
		));
		echo $this->Form->input('first_name', array(
			'required' => 'required'
		));
		echo $this->Form->input('last_name', array(
			'required' => 'required'
		));
		echo $this->Form->input('accepted_terms', array(
			'type' =>'checkbox', 
			'label'=>__('I agree to the <a href="/pages/tos">Terms and Conditions</a>', true),
			'hiddenField' => false,
			'value' => '0'
		));
		//Following are items to be used/referenced later
//		echo $this->Form->input('school_id');
//		echo $this->Form->input('student_major');
//		echo $this->Form->input('student_graduation_date', array('type' => 'text', 'class' => 'datepicker'));
//		echo $this->Form->input('publisher_id');
//		if ($authUser['Role']['name'] == 'Administrator') {
//			echo $this->Form->input('publisher_rating');
//			echo $this->Form->input('professor_rating');
//		echo $this->Form->input('professor_tenured');
//		echo $this->Form->input('notes');
//		echo $this->Form->input('password_reset_token');
//		echo $this->Form->input('password_reset_token_date');
	?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	<a href="/users/login"><h4 style="font-style:italic;text-align:center;">Already have an account?</h4></a>
</div>
<!--Following are items to be used/referenced later
<div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
	<ul>
		<li><?php //echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php //echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Publishers'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Publisher'), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>-->

<script>
	$( document ).ready( function() {
		$( 'div:has( > label[for="UserEmail"])' ).addClass( 'required' );
		$( 'div:has( > label[for="UserFirstName"])' ).addClass( 'required' );
		$( 'div:has( > label[for="UserLastName"])' ).addClass( 'required' );
		$( 'input[value="Submit"]' ).prop('disabled', true);
		$( 'input#UserAcceptedTerms' ).change( function() {
			if( $('input#UserAcceptedTerms').is(':checked') ) {
				$( 'input[value="Submit"]' ).prop('disabled', false);				
			} else {
				$( 'input[value="Submit"]' ).prop('disabled', true);
			}
		} )
	} )
</script>