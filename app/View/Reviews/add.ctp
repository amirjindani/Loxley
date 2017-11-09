<style>
	div.reviews {
		float:none;
		width:100%;
	}
	a.br-active:hover, a br-selected:hover {
		background-color:#4cb750 !important;
	}
</style>
<div class="reviews form">
<?php echo $this->Form->create('Review'); ?>
	<fieldset class="fieldset">
		<legend><?php echo __('Create a Textbook Review'); ?></legend>
	<?php
		echo $this->Form->input('date', array(
			'type' => 'text', 
			'class' => 'datepicker', 
			'default' => $today
		));
//		if(!empty($addedBook)) {
		echo '<div class="input select"><label for="ReviewBookId">Resource Title</label><select id="ReviewBookId" class="select2" name="data[Review][book_id]" required="required">';
		echo '<option value="">Choose a Resource</option>';
		foreach($options as $option) {
			echo '<option value="'.$option['value'].'">'.$option['name'].'</option>';
		}
		echo '</select></div>';
/*		} else { 
		echo '<div class="input select"><label for="ReviewBookId">Resource Title</label><select id="ReviewBookId" class="select2" name="data[Review][book_id]" required="required">';
		echo '<option value="">Choose a Resource</option>';
		foreach($options as $option) {
			echo '<option value="'.$option['Book']['id'].'">'.$option['Book']['book_name'].'</option>';
		}
		echo '</select></div>';
		}*/
		echo '<h4><i>Don\'t see the book you want to review? Add it to our database.</i></h4><div class="actions" style="float:none;background-color:#424242;"><li><a href="/books/add">Add a Book</a></div><br>';
		echo '	<h3>What were your thoughts on this resource?</h3>';
		echo $this->Form->input('notes', array(
			'type' => 'textarea',
			'label' => 'Comments'
		));
		echo '<h3>Choose the type of resource you are reviewing for resource-specific ratings:</h3>';
		echo '<input type="radio" id="software" name="bookType" value="e-learning"><label for="software"><img class="icon icons8-Reading-Ebook-Filled blue" width="35" height="35" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAC7klEQVRoQ+WajW0UMRCFXyqADgIVBCpIqACoAKggUAFQQaACoAKgAkIFQAVJKgAqAH3IlqzL7nrW804Hh6VTTjrbM2/+Z5wDbWc9knQi6U75QOVr+XyQ9NFN9sB84QNJZ5Jude69lPRMEqAsywkEAE9XcvWqAFp57Pp2FxAYOh3k5vWAAK6RcgDBnN4PgqjHHmbNzAHkIuATPZz4zO3epqXfs0AeS3qTYaA5m9JKFshbSYRax3onCcEMrSyQL02eGGKgOUSeuTt6SRbIr1HCM+eG+Rk+WBjZGyCYw5FJK98yZprVyN44uyMZWpJiViMwQTI7TJrXVTapOoA4tJJKhgjRAYR79qJorFY1AsZS+To1UsFgZgDq+Qw+Qe/yVzZWrb8DiA+tbs0z5AnyDszbAFSiLh9JBq388W0AuV+0Qd/OAKJd5yVc2wcQTiDPi93fDMr3R/Gnl8H9i9scQPADmiv+jiz85knxn5Hzf85kgcD8J0lRLcwxinbuZcBkgQxL0H3wvwSCGTGE24xEbuHW+/AdAkEo50Q1QiilP8/6wghofIewbYlalBNoYxcrVI9FNfJCEnliF+tzxJyjQLatEXwBYU0JrP5mMS0cnHyxrdUKdHMy808BQRMwjPnyvV28o9AaWDRC1GJYvYtljVoAcA/jokLZGyA8NzCpsZgWlzinij2+2t9DkTW0qdxKdj1ew4Fpb4jH0KYdAgnPg9cAoc6ibyCC8SBDkrxhknq95mcJtcyU8YtKs0tmDZDNy6iGIeiaxgOCxIsvrl5RIBCgaIR5ymqSFwSRGL6TBdOCgAaJkXESNEiIlup3arbbtqYQhtComW2CmGqdu7PhiEa+z/QhLZhMdVxrqaX+v/t8HQECw3PS5p9j0FimhKkJD5NlJja10NpiUxcB0ntLr3eMljCR84yLCCyzKwKEw3NgQk1PMATNVQ5dENwfBTIHJlTQBYFM9TwhEGuBVDD0BviN9VmggK3PEvgD9y+aUyug39K2jzMj91NKAAAAAElFTkSuQmCC">Software</label>';
		echo '<input type="radio" id="published" name="bookType" value="published"><label for="published"><img class="icon icons8-Book blue" width="35" height="35" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAB40lEQVRIS72VgVHDMAxFfycAJqAbABMAE8AGwAYwATABdALoBNAJ2k5A2QA2KBPAvZyUUxyncaCH73KBWtaTrC9lpH9ao4GcS0m3kj4kLexZlvgYAgLy1OF0ZVDegAmksUpBh5LeSiI3m3UAk/myBARkLml3ACg1XfSBxpYJkC9J53YtJ5L82S8IYLoJhHMyISPWjaTHjFOCwcbBB4nNO3tdoBTiZ1O1pUXnHLUEzvq0INZdoFdJZwVXEsH8jTJ5WFw1WZLtKgd6lnRRAOkzOZWE+siwpbo7a8g+J337V5II2P1NYkabGrLPcdy/NwC/XUt6kFSrbluQaagRIJr1WNKMjGKvDIk8tUXG3grsea0RxRiQp/dXCAqj+Cy/IVdepToGIU3G3ZKqN1+JvF3GnPGeAkijs1wUAvRtP+akzsjhIO/cqKkjNh9xLk7stqqtCNoLqeeukVoC5KHAjYht6PrImpld7QeQK6NOs6BYjBqeOILcTzXb0qABEeGLbdBgRNP6cPXAo8JivRoZ8U86EQAx74gS8KYVe/DIxNWyjwIgXQ6R4U6w9K8l4PQznVVYLqqu6U36QHGUfl9oB6C8uTJq1VDYEFC0dbUBzfVWS2G/BcVzRO995cpqKWwboALl501+ACj5d2q2/jDvAAAAAElFTkSuQmCC">Published Book</label>';
		echo '<input type="radio" id="ebook" name="bookType" value="ebook"><label for="ebook"><img class="icon icons8-Borrow-Book blue" width="35" height="35" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAA/ElEQVRIS+2W7REBMRCGn6sAFaADLagAFaACowIt6IAO6MDoQAlK0AGzNwlxicvHxJ0f8uPmfmz2uffNbm4LXqsLbIAFIO+5ViGJyodaW2CVK7uRxwLdgE4ToHsAxHRAh/v2WYp8G6pWfxUUINoK+W1FjZ3R37pnpZqet17ee2AZcDgSN3fERZW3D/YJkmTdUSmTO1EvueV3wLRGcZQinecCjAGBCeQEjDy2JoEkp8BmwCEAkmRdQD04Q5IVxQLbB53V3HCN/fS6eNfNMASyQqp/TD0z9FT55hT0NgVJQ04A6fJ1bphp3UD1SO5JyKo6sUpgMt9Jt/czeVeCHhcrMxueLQZxAAAAAElFTkSuQmCC">E-Book</label>';
		echo '<div id="description" style="padding-bottom:0px;margin-bottom:0px;">
			<p style="margin-bottom:0px;">
				<b>Please rank the following aspects on a scale of 1-5 stars that you find most valuable and important when searching/adopting for digital content.</b>
			</p>
			<p>
				<i>1 star being the least valuable aspect and 5 stars being the most valuable aspect</i>
			</p>
		</div>';
		echo $this->Form->input('published_content_aligned', array(
			'min' => '1', 
			'max' => '5', 
			'class'=> 'barrating published',
			'type' => 'select',
			'options' => $ratingOptions,
			'label' => 'Textbook content is aligned with your own curriculum.',
			'empty' => 'Choose a rating'
		));
		echo $this->Form->input('published_price', array(
			'min' => '1', 
			'max' => '5', 
			'class'=> 'barrating published',
			'type' => 'select',
			'options' => $ratingOptions,
			'label' => 'Satisfaction with the overall price of the textbook.',
			'empty' => 'Choose a rating'
		));
		echo $this->Form->input('published_content_style', array(
			'min' => '1', 
			'max' => '5', 
			'class'=> 'barrating published',
			'type' => 'select',
			'options' => $ratingOptions,
			'label' => 'Overall content style (how engaging and friendly the text is).',
			'empty' => 'Choose a rating'
		));
		echo $this->Form->input('published_included_tools', array(
			'min' => '1', 
			'max' => '5', 
			'class'=> 'barrating published',
			'type' => 'select',
			'options' => $ratingOptions,
			'label' => 'Digital tools are included (e.g. homework, flashcards, quizzes, software, CD, etc).',
			'empty' => 'Choose a rating'
		));
		echo $this->Form->input('published_practice_questions', array(
			'min' => '1', 
			'max' => '5', 
			'class'=> 'barrating published',
			'type' => 'select',
			'options' => $ratingOptions,
			'label' => 'Amount and quality of practice questions included in the textbook.',
			'empty' => 'Choose a rating'
		));
		echo $this->Form->input('published_up_to_date', array(
			'min' => '1', 
			'max' => '5', 
			'class'=> 'barrating published',
			'type' => 'select',
			'options' => $ratingOptions,
			'label' => 'Most recent and up to date edition of textbook.',
			'empty' => 'Choose a rating'
		));
		echo $this->Form->input('published_provided_through_publisher', array(
			'min' => '1', 
			'max' => '5',
			'class'=> 'barrating published',
			'type' => 'select',
			'options' => $ratingOptions,
			'label' => 'Curriculum is provided through publisher/department based on textbook.',
			'empty' => 'Choose a rating'
		));
		echo $this->Form->input('ebook_functionality', array(
			'min' => '1', 
			'max' => '5', 
			'class'=> 'barrating ebook',
			'type' => 'select',
			'options' => $ratingOptions,
			'label' => 'Overall functionality of platform',
			'empty' => 'Choose a rating'
		));
		echo $this->Form->input('ebook_integration_with_lms', array(
			'min' => '1', 
			'max' => '5', 
			'class'=> 'barrating ebook',
			'type' => 'select',
			'options' => $ratingOptions,
			'label' => 'Integration with your LMS Sytem (Blackboard, Moodle, D2L, Canvas, etc.)',
			'empty' => 'Choose a rating'
		));
		echo $this->Form->input('ebook_support', array(
			'min' => '1', 
			'max' => '5', 
			'label' => '', 
			'class'=> 'barrating ebook',
			'type' => 'select',
			'options' => $ratingOptions,
			'label' => 'Reliability of technical support to troubleshoot any issues.',
			'empty' => 'Choose a rating'
		));
		echo $this->Form->input('ebook_underline', array(
			'min' => '1', 
			'max' => '5', 
			'class'=> 'barrating ebook',
			'type' => 'select',
			'options' => $ratingOptions,
			'label' => 'Ability for students to underline/highlight when they read.',
			'empty' => 'Choose a rating'
		));
		echo $this->Form->input('ebook_practice', array(
			'min' => '1', 
			'max' => '5', 
			'class'=> 'barrating ebook',
			'type' => 'select',
			'options' => $ratingOptions,
			'label' => 'Practice quiz/homework included.',
			'empty' => 'Choose a rating'
		));
		echo $this->Form->input('ebook_gradebook', array(
			'min' => '1', 
			'max' => '5', 
			'class'=> 'barrating ebook',
			'type' => 'select',
			'options' => $ratingOptions,
			'label' => 'Instructor\'s gradebook management through online platform',
			'empty' => 'Choose a rating'
		));
		echo $this->Form->input('ebook_technical_problems', array(
			'min' => '1', 
			'max' => '5', 
			'class'=> 'barrating ebook',
			'type' => 'select',
			'options' => $ratingOptions,
			'label' => 'Minimal technical problems.',
			'empty' => 'Choose a rating'
		));
		echo $this->Form->input('review_type_id', array(
			'default' => $authUser['Role']['id'],
		));
		echo $this->Form->input('active', array(
			'default' => 1,
		));
		echo $this->Form->input('user_id', array(
			'default' => $authUser['id']
		));
		echo $this->Form->input('flag_field');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<!--<div class="actions">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>

		<li><?php // echo $this->Html->link(__('List Reviews'), array('action' => 'index')); ?></li>
		<li><?php // echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Review Types'), array('controller' => 'review_types', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Review Type'), array('controller' => 'review_types', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
<script>
	//Hide administrative fields
	$( 'div:has( > input#ReviewActive_)' ).hide();
	$( 'div:has( > label[for="ReviewUserId"])' ).hide();
	$( 'div:has( > label[for="ReviewFlagField"])' ).hide();
	$( 'div:has( > label[for="ReviewReviewTypeId"])' ).hide();
	$( 'div:has( > label[for="ReviewDate"])' ).hide();
	//Hide input fields-these are used for saving data, but will not be interacted with by the user
	$( 'div.input:has( select.ebook )' ).hide();
	$( 'div.input:has( select.published )' ).hide();
</script>
<script>
	$( document ).ready( function() {
		//Hide all rating fields by default
		$( 'div#description' ).hide();
		//If published selected, show published rating fields; hide ebook fields
		$( 'input#published').click( function(){
			$( 'div#description' ).show();
			$( 'div.input:has( select.ebook )' ).hide();
			$( 'div.input:has( select.published )' ).show();
			$( 'div.published' ).show();
			$( 'div.ebook' ).show();
		});
		//If ebook or software selected, show those rating fields; hide published fields
		$( 'input#ebook, input#software').click( function(){
			$( 'div#description' ).show();
			$( 'div.input:has( select.ebook )' ).show();
			$( 'div.input:has( select.published )' ).hide();
		});
	} );
</script>
<script type="text/javascript">
$('.barrating').barrating({
	theme: 'bars-movie',
	initialRating: ''
 });
/*$( 'div.br-widget' ).children().click( function() { 
	var value = $( 'a.br-current' ).data( 'rating-value' );
	alert( value );
 } );*/
</script>