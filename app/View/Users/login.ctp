<style>
	div.users {
		float:none;
		width:100%;
		border:0;
	}
	input[value="Login"]:hover {
		background-color:#fff !important;
	}
</style>
<!-- Main -->
<section id="five" class="wrapper style2 special fade">
	<div class="container">
		<header>
			<h2 style="float:left;">Log-in &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </h2>
		</header>
	<div class="users form">
		<?php echo $this->Flash->render('auth'); ?>
		<?php echo $this->Form->create('User'); ?>
		<fieldset>
			<legend style="color:#4cb750;margin-left:10px;">
				<?php echo __('Please enter your username and password'); ?>
			</legend>
			<div class="row uniform 50%">
				<div class="8u 12u$(xsmall)" style="text-align:left;">
					<?php echo $this->Form->input('username'); ?>
				</div>
				<div class="4u$ 12u$(xsmall)"> </div>
			</div>
			<div class="row uniform 50%">
				<div class="8u 12u$(xsmall)" style="text-align:left;">
					<?php echo $this->Form->input('password'); ?>
				</div>
			</div>
			<br/>
		</fieldset>
		<div class="8u 12u$(xsmall)">
			<?php echo $this->Form->end(__('Login')); ?>
			<h4 style="display:inline">Don't have an account yet?</h4>
			<div class="12u$" style="display:inline;">
				<ul class="action" style="display:inherit;">
					<li><a class="button" href="/users/add">Sign Up</a></li>
				</ul>
			</div>
		</div>
		<div class="8u 12u$(xsmall)">
		<h3>Forgot Password?<a href="mailto:loxley.help@gmail.com?subject=Question&" style="font-weight:bold;"> Contact us</a> at loxley.help@gmail.com.</h3>
		</div>
		<br/>
	</div>
</section>