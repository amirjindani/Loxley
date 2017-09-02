<style>
	div.form {
		float:none;
		width:100%;
	}
</style>
<!-- Main -->
<section id="five" class="wrapper style2 special fade">
	<div class="container">
		<header>
			<div class="8u 12u$(xsmall)">
				<h2>Log-in &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </h2>
		</header>
	</div>
	<div class="users form">
		<?php echo $this->Flash->render('auth'); ?>
		<?php echo $this->Form->create('User'); ?>
		<fieldset>
			<legend style="color:black;">
				<?php echo __('Please enter your username and password'); ?>
			</legend>
			<div class="row uniform 50%">
				<div class="8u 12u$(xsmall)">
					<?php echo $this->Form->input('username'); ?>
				</div>
				<div class="4u$ 12u$(xsmall)"> </div>
			</div>
			<div class="row uniform 50%">
				<div class="8u 12u$(xsmall)">
					<?php echo $this->Form->input('password'); ?>
				</div>
			</div>
			<br/>
		</fieldset>
		<div class="8u 12u$(xsmall)">
			<?php echo $this->Form->end(__('Login')); ?>
		</div>
		<br/>
	</div>
</section>