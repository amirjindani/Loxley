<div id="main" class="wrapper style1">
	<div class="container">
		<header class="major">
		  <h2>Find a School</h2>
		  <p>Having trouble finding a School? Check the list below.</p>
		</header>

		<!-- Text-->
		<!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<span class="image">
			<img src="img/loxley.jpg" alt="" />
		</span>
		<br/>
		<br/>
		<br/>
		<br/>-->

		<!-- Form -->
		<section>
			<div class="bookSubjects">
			<?php echo $this->Form->create('School'); ?>
				<fieldset>
					<legend><?php echo __('Search by School'); ?></legend>
				<?php
					//currently, this functionality only displays a list of the current book subjects
					//later, we will want to add in the ability to search books by subject, and should bring this in on this page
					echo $this->Form->input('name', array('type' => 'select', 'options' => $schoolOptions, 'label' => false));
				?>
				</fieldset>
				<div class="12u$">
					<ul class="action">
						<li><a class="button" href="/pages/coming_soon">Search</a></li>
						<li><input type="reset" value="Reset" /></li>
					</ul>
				</div>
			<?php //echo $this->Form->end(__('Submit')); ?>
			</div>
		</section>
	</div>
</div>