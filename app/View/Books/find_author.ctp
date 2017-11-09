<div id="main" class="wrapper style1">
	<div class="container">
		<header class="major">
		  <h2>Search by Author</h2>
		  <p class="blue">Having trouble finding a textbook? Search by author below.</p>
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
					<legend><?php echo __('Search by Author'); ?></legend>
				<?php
					echo '<div class="input select"><select id="BookAuthor" class="select2" name="data[Book][author]">';
					echo '<option value="">Choose an Author</option>';
					foreach($bookAuthorOptions as $bookAuthorOption) {
						echo '<option value="'.$bookAuthorOption.'">'.$bookAuthorOption.'</option>';
					}
					echo '</select></div>'
				?>
				</fieldset>
				<div class="12u$">
					<ul class="action">
						<li><?php echo $this->Form->end(__('Search'), array('div' => false)); ?></li>
						<li><div><a href="/books/find_author"><input type="reset" value="Reset" /></a></div></li>
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

<!--Select2 Dropdowns function-->
<script type="text/javascript">
	$(document).ready(function() {
		$('.multi-select').select2();
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		for (i = 0; i < 5; i++) { 
			var value = $( 'option' ).text();
			$( 'option' ).val( value );
		}
	});
</script>

