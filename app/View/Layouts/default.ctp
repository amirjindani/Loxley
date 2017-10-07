<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'Loxley' ?> -
		<?php echo $this->fetch('title'); ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php
		echo $this->Html->meta('icon');
		
		//bring in stylesheets
		//first, cakephp styling
		echo $this->Html->css('cake.generic');
		//main css with front end styling
		echo $this->Html->css('main');
		//updates to main stylesheet
		echo $this->Html->css('new');
		echo $this->Html->css('jquery.ui.core.min');
		echo $this->Html->css('jquery.ui.theme.min');
		//select2 stylesheet-for dropdowns
		echo $this->Html->css('select2');
		
		//bring in javascript
		//jquery ui scripts
		echo $this->Html->script('jquery-ui-1.11.2/jquery-ui.min');
		//select2 javascript for dropdowns
		echo $this->Html->script('select2');
		//homepage animations javascript
		echo $this->Html->script('jquery.scrolly.min');
		echo $this->Html->script('jquery.dropotron.min');
		echo $this->Html->script('jquery.scrollex.min');
		echo $this->Html->script('skel.min');
		echo $this->Html->script('util');
		echo $this->Html->script('main');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<!--datetime pickers stylesheets and scripts-->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$( function() {
			$( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val()
		} );
	</script>
</head>
<body>
	<div id="container">
		<div id="content">
			<div id="page-wrapper">
			<!-- Header -->
				<header id="header">
					<a href="/"><img style="height:100%;" src="/img/loxleyCropped.jpg" alt="" /></a>
					<!--Search Textbook Field-->
					<div class="row uniform 50%" style="position: absolute; top:5px; size:45px; left:70px;">
						<div class="8u 12u$(xsmall)">
						<?php echo $this->Form->create('Book', array(
									'url' => '/books/index'
								)
							);
						echo $this->Form->input('book_name', array(
							'div' => false, 
							'class' => 'fit small multi-select', 
							'id' => 'search', 
							'placeholder' => 'Search Title or Keyword', 
							'me' => 'search', 
							'label' => false,
							)
						); ?>
						</div>
						<div class="4u$ 12u$(xsmall)">
						<?php
						echo $this->Form->submit(('&#128269;'), array(
							'div' => false,
							'class' => 'fit medium',
							'escape' => false
							)
						);
						echo $this->Form->end(); ?>
						</div>
					</div>
					<!--End Search Field-->				  
					<nav id="nav">
						<ul>	
						<li><a href="/">Home</a></li>
						<li><a href="/books">Browse Books</a></li>
						<!--Check to see if user is logged in, if not, show sign up and login buttons,
						if so, show user name and logout buttons-->
					<?php if(empty($authUser)) { ?>
							<li><a href="/pages/about-us">About Us</a></li>
							<li><a href="/users/add" class="button special">Sign Up</a></li>
							<li><a href="/users/login" class="button special">Log In </a></li>
					<?php } else { ?>
							<li><a href="/users/view/<?php echo $authUser['id']; ?>">Welcome, <?php echo $authUser['username']; ?></a></li>
							<li><a href="/pages/feedback" class="button special">Submit Feedback </a></li>
							<li><a href="/users/logout" class="button special">Log Out </a></li>
					<?php } ?>
						</ul>
					</nav>
				  </header>

			<!-- Main -->
			<!--Bring in content from cakephp pages-->
				<?php echo $this->Flash->render(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
			<!-- Footer -->
			<footer id="footer" style="clear:both;">
				<ul class="icons">
					<li class="icons"><a href="https://twitter.com/LoxLeyInc" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
					<li class="icons"><a href="/pages/coming_soon" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
					<li class="icons"><a href="mailto:loxley.help@gmail.com?subject=Question&" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>
						<h5>&copy; Loxley 2017. All Rights Reserved.</h5>
					</li>
					<br/>
					<li><a href="/pages/feedback" class=" button special">REPORT A BUG</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				</ul>
			</footer>
		</div>
	</div>
</body>
</html>
