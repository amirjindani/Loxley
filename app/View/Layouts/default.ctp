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
		<?php echo 'Loxley' ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		
		echo $this->Html->meta('icon');

		echo $this->Html->css('main');
		echo $this->Html->css('new');
		echo $this->Html->css('jquery.ui.core.min');
		echo $this->Html->css('jquery.ui.theme.min');
		
		echo $this->Html->script('jquery-ui-1.11.2/jquery-ui.min.js');
		echo $this->Html->script('jquery.scrolly.min.js');
		echo $this->Html->script('jquery.dropotron.min.js');
		echo $this->Html->script('jquery.scrollex.min.js');
		echo $this->Html->script('skel.min.js');
		echo $this->Html->script('util.js');
		echo $this->Html->script('main.js');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<!--<link rel="stylesheet" href="css/main.css" />-->
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<!--<link href="css/new.css" rel="stylesheet" type="text/css">-->
	<!--<link href="js/jquery.ui.core.min.css" rel="stylesheet" type="text/css">-->
	<!--<link href="js/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">-->
    <!--<script src="js/jquery-1.11.1.min.js"></script>-->
</head>
<body>
	<div id="container">
		<div id="header">
			<!--<h1><?php //echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>-->
		</div>
		<div id="content">
			<div id="page-wrapper">

			<!-- Header -->
				  <header id="header">
				  
					  

				  
				  <div class="row uniform 50%" style="position: absolute; top:5px; size:45px">
				  
				  
				  
										<div class="8u 12u$(xsmall)"><input type="text" class="fit small" id="search" placeholder="Search Textbook" me="search" /></div>
												<div class="4u$ 12u$(xsmall)"><input type="submit" value="&#128269" class="fit medium" /></div>
					</div>
				  
				  
					  <h1 id="logo" name="logo">
					  <label for="search">
					  </h1>
					  
					  <nav id="nav">
						<ul>
						
						
						<li><a href="/pages/home">Home</a></li>
					  
						
						<li><a href="/pages/signup_page" class="button special">Sign Up</a></li>
						<li><a href="/pages/login_page" class="button special">Log In </a></li>
						
						
						</ul>
					  </nav>
				  </header>

	<!-- Main -->
			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<!-- Footer -->
		<footer id="footer">
			<ul class="icons">
					<li class="icons"><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
					<li class="icons"><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
					<li class="icons"><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
					<li class="icons"><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
					<li class="icons"><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
					<li class="icons"><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
			</ul>
			<ul class="copyright">
			<li>
			  <h5>&copy; Loxley 2017. All Rights Reserved.</h5>
			</li>
			<br/>
			<br/>
			<br/>
			
			<li><a href="ReportBug.html" class=" button special">REPORT A BUG</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			
			</ul>

		</footer>
		</div>
<!--		<div id="footer">
			<?php /*echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);*/
			?>
			<p>
				<?php //echo $cakeVersion; ?>
			</p>
		</div>-->
	</div>
	<?php //echo $this->element('sql_dump'); ?>
	
	<script src="assets/js/main.js"></script>
</body>
</html>
