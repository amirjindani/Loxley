<style>
	div.reviews {
		float:none;
		width:100%;
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
		echo '<input type="radio" id="software" name="bookType" value="e-learning"><label for="software"><img class="icon icons8-Reading-Ebook-Filled" width="35" height="35" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAC7klEQVRoQ+WajW0UMRCFXyqADgIVBCpIqACoAKggUAFQQaACoAKgAkIFQAVJKgAqAH3IlqzL7nrW804Hh6VTTjrbM2/+Z5wDbWc9knQi6U75QOVr+XyQ9NFN9sB84QNJZ5Jude69lPRMEqAsywkEAE9XcvWqAFp57Pp2FxAYOh3k5vWAAK6RcgDBnN4PgqjHHmbNzAHkIuATPZz4zO3epqXfs0AeS3qTYaA5m9JKFshbSYRax3onCcEMrSyQL02eGGKgOUSeuTt6SRbIr1HCM+eG+Rk+WBjZGyCYw5FJK98yZprVyN44uyMZWpJiViMwQTI7TJrXVTapOoA4tJJKhgjRAYR79qJorFY1AsZS+To1UsFgZgDq+Qw+Qe/yVzZWrb8DiA+tbs0z5AnyDszbAFSiLh9JBq388W0AuV+0Qd/OAKJd5yVc2wcQTiDPi93fDMr3R/Gnl8H9i9scQPADmiv+jiz85knxn5Hzf85kgcD8J0lRLcwxinbuZcBkgQxL0H3wvwSCGTGE24xEbuHW+/AdAkEo50Q1QiilP8/6wghofIewbYlalBNoYxcrVI9FNfJCEnliF+tzxJyjQLatEXwBYU0JrP5mMS0cnHyxrdUKdHMy808BQRMwjPnyvV28o9AaWDRC1GJYvYtljVoAcA/jokLZGyA8NzCpsZgWlzinij2+2t9DkTW0qdxKdj1ew4Fpb4jH0KYdAgnPg9cAoc6ibyCC8SBDkrxhknq95mcJtcyU8YtKs0tmDZDNy6iGIeiaxgOCxIsvrl5RIBCgaIR5ymqSFwSRGL6TBdOCgAaJkXESNEiIlup3arbbtqYQhtComW2CmGqdu7PhiEa+z/QhLZhMdVxrqaX+v/t8HQECw3PS5p9j0FimhKkJD5NlJja10NpiUxcB0ntLr3eMljCR84yLCCyzKwKEw3NgQk1PMATNVQ5dENwfBTIHJlTQBYFM9TwhEGuBVDD0BviN9VmggK3PEvgD9y+aUyug39K2jzMj91NKAAAAAElFTkSuQmCC">Software</label>';
		echo '<input type="radio" id="published" name="bookType" value="published"><label for="published"><img class="icon icons8-Book" width="35" height="35" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAB40lEQVRIS72VgVHDMAxFfycAJqAbABMAE8AGwAYwATABdALoBNAJ2k5A2QA2KBPAvZyUUxyncaCH73KBWtaTrC9lpH9ao4GcS0m3kj4kLexZlvgYAgLy1OF0ZVDegAmksUpBh5LeSiI3m3UAk/myBARkLml3ACg1XfSBxpYJkC9J53YtJ5L82S8IYLoJhHMyISPWjaTHjFOCwcbBB4nNO3tdoBTiZ1O1pUXnHLUEzvq0INZdoFdJZwVXEsH8jTJ5WFw1WZLtKgd6lnRRAOkzOZWE+siwpbo7a8g+J337V5II2P1NYkabGrLPcdy/NwC/XUt6kFSrbluQaagRIJr1WNKMjGKvDIk8tUXG3grsea0RxRiQp/dXCAqj+Cy/IVdepToGIU3G3ZKqN1+JvF3GnPGeAkijs1wUAvRtP+akzsjhIO/cqKkjNh9xLk7stqqtCNoLqeeukVoC5KHAjYht6PrImpld7QeQK6NOs6BYjBqeOILcTzXb0qABEeGLbdBgRNP6cPXAo8JivRoZ8U86EQAx74gS8KYVe/DIxNWyjwIgXQ6R4U6w9K8l4PQznVVYLqqu6U36QHGUfl9oB6C8uTJq1VDYEFC0dbUBzfVWS2G/BcVzRO995cpqKWwboALl501+ACj5d2q2/jDvAAAAAElFTkSuQmCC">Published Book</label>';
		echo '<input type="radio" id="ebook" name="bookType" value="ebook"><label for="ebook"><img class="icon icons8-Borrow-Book" width="35" height="35" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAA/ElEQVRIS+2W7REBMRCGn6sAFaADLagAFaACowIt6IAO6MDoQAlK0AGzNwlxicvHxJ0f8uPmfmz2uffNbm4LXqsLbIAFIO+5ViGJyodaW2CVK7uRxwLdgE4ToHsAxHRAh/v2WYp8G6pWfxUUINoK+W1FjZ3R37pnpZqet17ee2AZcDgSN3fERZW3D/YJkmTdUSmTO1EvueV3wLRGcZQinecCjAGBCeQEjDy2JoEkp8BmwCEAkmRdQD04Q5IVxQLbB53V3HCN/fS6eNfNMASyQqp/TD0z9FT55hT0NgVJQ04A6fJ1bphp3UD1SO5JyKo6sUpgMt9Jt/czeVeCHhcrMxueLQZxAAAAAElFTkSuQmCC">E-Book</label>';
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
			'label' => 'Textbook content is aligned with your own curriculum.', 
			'class'=> 'published'
		));
//		echo'<div class="rating published"><span id="5" data-value="5">&#9734;</span><span id="4" data-value="4">&#9734;</span><span id="3" data-value="3">&#9734;</span><span id="2" data-value="2">&#9734;</span><span id="1" data-value="1">&#9734;</span></div>';
		echo $this->Form->input('published_price', array(
			'min' => '1', 
			'max' => '5', 
			'label' => 'Satisfaction with the overall price of the textbook', 
			'class'=> 'published'
		));
		echo $this->Form->input('published_content_style', array(
			'min' => '1', 
			'max' => '5', 
			'label' => 'Overall content style (how engaging and friendly the text is)', 
			'class'=> 'published'
		));
		echo $this->Form->input('published_included_tools', array(
			'min' => '1', 
			'max' => '5', 
			'label' => 'Digital tools are included (e.g. homework, flashcards, quizzes, software, CD, etc)', 
			'class'=> 'published'
		));
		echo $this->Form->input('published_practice_questions', array(
			'min' => '1', 
			'max' => '5', 
			'label' => 'Amount and quality of practice questions included in the textbook', 
			'class'=> 'published'
		));
		echo $this->Form->input('published_up_to_date', array(
			'min' => '1', 
			'max' => '5', 
			'label' => 'Most recent and up to date edition of textbook', 
			'class'=> 'published'
		));
		echo $this->Form->input('published_provided_through_publisher', array(
			'min' => '1', 
			'max' => '5',
			'label' => 'Curriculum is provided through publisher/department based on textbook.', 
			'class'=> 'published'
		));
		echo $this->Form->input('ebook_functionality', array(
			'min' => '1', 
			'max' => '5', 
			'label' => 'Overall functionality of platform', 
			'class'=> 'ebook'
		));
		echo $this->Form->input('ebook_integration_with_lms', array(
			'min' => '1', 
			'max' => '5', 
			'label' => 'Integration with your LMS Sytem (Blackboard, Moodle, D2L, Canvas, etc.)', 
			'class'=> 'ebook'
		));
		echo $this->Form->input('ebook_support', array(
			'min' => '1', 
			'max' => '5', 
			'label' => 'Reliability of technical support to troubleshoot any issues', 
			'class'=> 'ebook'
		));
		echo $this->Form->input('ebook_underline', array(
			'min' => '1', 
			'max' => '5', 
			'label' => 'Ability for students to underline/highlight when they read', 
			'class'=> 'ebook'
		));
		echo $this->Form->input('ebook_practice', array(
			'min' => '1', 
			'max' => '5', 
			'label' => 'Practice quiz/homework included', 
			'class'=> 'ebook'
		));
		echo $this->Form->input('ebook_gradebook', array(
			'min' => '1', 
			'max' => '5', 
			'label' => 'Instructor\'s gradebook management through online platform', 
			'class'=> 'ebook'
		));
		echo $this->Form->input('ebook_technical_problems', array(
			'min' => '1', 
			'max' => '5', 
			'label' => 'Minimal technical problems', 
			'class'=> 'ebook'
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
	$( 'div:has( > input#ReviewActive_)' ).css('display','none');
	$( 'div:has( > label[for="ReviewUserId"])' ).css('display','none');
	$( 'div:has( > label[for="ReviewFlagField"])' ).css('display','none');
	$( 'div:has( > label[for="ReviewReviewTypeId"])' ).css('display','none');
	$( 'div:has( > label[for="ReviewDate"])' ).css('display','none');
	$( 'div.published' ).css( 'display','none' );
	$( 'div#description' ).css( 'display','none' );
</script>
<script>
	$( document ).ready( function() {
		$( 'div:has( > label[for="ReviewPublishedContentAligned"])' ).css('display','none');
		$( 'div:has( > label[for="ReviewPublishedPrice"])' ).css('display','none');
		$( 'div:has( > label[for="ReviewPublishedContentStyle"])' ).css('display','none');
		$( 'div:has( > label[for="ReviewPublishedIncludedTools"])' ).css('display','none');
		$( 'div:has( > label[for="ReviewPublishedPracticeQuestions"])' ).css('display','none');
		$( 'div:has( > label[for="ReviewPublishedUpToDate"])' ).css('display','none');
		$( 'div:has( > label[for="ReviewPublishedProvidedThroughPublisher"])' ).css('display','none');
		$( 'div:has( > label[for="ReviewEbookFunctionality"])' ).css('display','none');
		$( 'div:has( > label[for="ReviewEbookIntegrationWithLms"])' ).css('display','none');
		$( 'div:has( > label[for="ReviewEbookSupport"])' ).css('display','none');
		$( 'div:has( > label[for="ReviewEbookUnderline"])' ).css('display','none');
		$( 'div:has( > label[for="ReviewEbookPractice"])' ).css('display','none');
		$( 'div:has( > label[for="ReviewEbookGradebook"])' ).css('display','none');
		$( 'div:has( > label[for="ReviewEbookTechnicalProblems"])' ).css('display','none');
		$( 'input#published').click( function(){
			$( 'div#description' ).css( 'display','' );
			$( 'div:has( > label[for="ReviewPublishedContentAligned"])' ).css('display','');
			$( 'div.published' ).css( 'display','' );
			$( 'div:has( > label[for="ReviewPublishedPrice"])' ).css('display','');
			$( 'div:has( > label[for="ReviewPublishedContentStyle"])' ).css('display','');
			$( 'div:has( > label[for="ReviewPublishedIncludedTools"])' ).css('display','');
			$( 'div:has( > label[for="ReviewPublishedPracticeQuestions"])' ).css('display','');
			$( 'div:has( > label[for="ReviewPublishedUpToDate"])' ).css('display','');
			$( 'div:has( > label[for="ReviewPublishedProvidedThroughPublisher"])' ).css('display','');
			$( 'div:has( > label[for="ReviewEbookFunctionality"])' ).css('display','none');
			$( 'div:has( > label[for="ReviewEbookIntegrationWithLms"])' ).css('display','none');
			$( 'div:has( > label[for="ReviewEbookSupport"])' ).css('display','none');
			$( 'div:has( > label[for="ReviewEbookUnderline"])' ).css('display','none');
			$( 'div:has( > label[for="ReviewEbookPractice"])' ).css('display','none');
			$( 'div:has( > label[for="ReviewEbookGradebook"])' ).css('display','none');
			$( 'div:has( > label[for="ReviewEbookTechnicalProblems"])' ).css('display','none');
		});
		$( 'input#ebook, input#software').click( function(){
			$( 'div#description' ).css( 'display','' );
			$( 'div:has( > label[for="ReviewEbookFunctionality"])' ).css('display','');
			$( 'div:has( > label[for="ReviewEbookIntegrationWithLms"])' ).css('display','');
			$( 'div:has( > label[for="ReviewEbookSupport"])' ).css('display','');
			$( 'div:has( > label[for="ReviewEbookUnderline"])' ).css('display','');
			$( 'div:has( > label[for="ReviewEbookPractice"])' ).css('display','');
			$( 'div:has( > label[for="ReviewEbookGradebook"])' ).css('display','');
			$( 'div:has( > label[for="ReviewEbookTechnicalProblems"])' ).css('display','');
			$( 'div:has( > label[for="ReviewPublishedContentAligned"])' ).css('display','none');
			$( 'div:has( > label[for="ReviewPublishedPrice"])' ).css('display','none');
			$( 'div:has( > label[for="ReviewPublishedContentStyle"])' ).css('display','none');
			$( 'div:has( > label[for="ReviewPublishedIncludedTools"])' ).css('display','none');
			$( 'div:has( > label[for="ReviewPublishedPracticeQuestions"])' ).css('display','none');
			$( 'div:has( > label[for="ReviewPublishedUpToDate"])' ).css('display','none');
			$( 'div:has( > label[for="ReviewPublishedProvidedThroughPublisher"])' ).css('display','none');
		});
	} );
</script>
<script>
	$( document ).ready( function() {
		$( 'span#4' ).click( function() {
			$( 'span#1:before' ).css('content','"\2605"','position','absolute');
			$( 'span#2:before' ).css('content','"\2605"','position','absolute');
			$( 'span#3:before' ).css('content','"\2605"','position','absolute');
			$( 'span#4:before' ).css('content','"\2605"','position','absolute');
			var value = $( 'span#4' ).data( 'value' );
			alert( value );
			$( 'input#ReviewPublishedContentAligned' ).text( value );
		} );
	} );
</script>