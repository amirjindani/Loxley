<div id="main" class="wrapper style1">
	<div class="container">
		<header class="major">
		  <h2>Search by Publisher</h2>
		  <p>Having trouble finding a textbook? Search by publisher.</p>
		</header>

		<!-- Form -->
		<section>
			<div class="bookSubjects" style="width:50%; float:left;"> 
			<!--Begin Search Form-->
			<?php echo $this->Form->create('Book', array(
				'url' => array_merge(
						array(
							'action' => 'index'
						),
						$this->params['pass']
					)
				)
			); ?>
				<fieldset>
					<legend><?php echo __('Search by Publisher'); ?></legend>
				<?php
					echo $this->Form->input('publisher_id', array(
						'options' => $publisherOptions, 
						'label' => false, 
						'empty' => 'Choose a Publisher or Publishers',
					));
				?>
				</fieldset>
				<div class="12u$">
					<ul class="action">
						<li><?php echo $this->Form->end(__('Search'), array('div' => false)); ?></li>
						<li><div><a href="/books/find_book"><input type="reset" value="Reset" /></a></div></li>
					</ul>
				</div>
			<!--End Search Form-->
			</div>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<span class="image" style="border-radius:100%;">
				<img src="/img/loxleyCropped.jpg" alt="" />
			</span>			
		</section>
	</div>
</div>
			</div>
		</div>
		
