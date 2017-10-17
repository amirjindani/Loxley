<style>
	div.index {
		float:none;
		width:100%;
	}
	input[value="Search"] {
		width:33%;
	}
	input#BookBookName {
		margin-bottom: 20px;
		width: 33%;
	}
</style>
<div class="books index">
	<h2><?php echo __('Browse Books'); ?></h2>
	<!--Search Field-->
	<div>
		<?php echo $this->Form->create('Book', array(
			'url' => array_merge(
					array(
						'action' => 'index'
					),
					$this->params['pass']
				)
			)
		); ?>
		<span style="float:left;margin-right:20px;"><h3>Search by Title or Keyword:</h3></span>
		<span style="float:left;">
		<?php
		echo $this->Form->input('book_name', array(
				'div' => false,
				'label' => false,
				'style' => 'width:100%'
			)
		);
		?>
		</span>
		<div>
		<span style="width:10%;float:left;margin-right:20px;"><h3>Filter by:</h3></span>
		<span style="width:20%;float:left;margin-right:20px;">
		<?php
		echo $this->Form->input('book_subject_id', array(
			'options' => $bookSubjectOptions, 
			'div' => false, 
			'label' => false, 
			'empty' => 'Subject',
			'class' => 'select2'
		)); ?>
		</span>
		<span style="width:20%;float:left;margin-right:20px;">
		<?php
		echo $this->Form->input('school_id', array(
			'options' => $schoolOptions, 
			'div' => false,
			'label' => false, 
			'empty' => 'School',
			'class' => 'select2'
		)); ?>
		</span>
		<span style="width:20%;float:left;margin-right:20px;">
		<?php
		echo $this->Form->input('publisher_id', array(
			'options' => $publisherOptions, 
			'div' => false, 
			'label' => false, 
			'empty' => 'Publisher',
			'class' => 'select2'
		)); ?>
		</span>
		<span style="width:20%;float:left;">
		<?php
		echo '<select id="BookAuthor" class="select2" name="data[Book][Author]">';
		echo '<option value="">Choose an Author</option>';
		foreach($bookAuthorOptions as $bookAuthorOption) {
			echo '<option value="'.$bookAuthorOption.'">'.$bookAuthorOption.'</option>';
		}
		echo '</select>'
		?>
		</span>
		</div>
		<?php
		echo $this->Form->submit(__('Search'), array(
				'div' => false,
				'style' => 'float:right; margin-top:30px;margin-bottom:30px;'
			)
		);
		echo $this->Form->end(); ?>
	</div>
	<!--End Search Field-->
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
		<?php } ?>
		<th><?php echo $this->Paginator->sort('book_type_id'); ?></th>
		<th><?php echo $this->Paginator->sort('book_name'); ?></th>
		<th><?php echo $this->Paginator->sort('book_isbn'); ?></th>
		<th><?php echo $this->Paginator->sort('book_subject_id'); ?></th>
		<!--<th><?php echo 'Book Rating'; ?></th>-->
		<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
		<?php } ?>
		<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
		<?php } ?>
		<th><?php echo $this->Paginator->sort('author'); ?></th>
		<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
		<?php } ?>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody> 
	<?php 
	if(!empty($books)) {
		foreach ($books as $book):
		?>
		<tr>
			<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
			<td><?php echo h($book['Book']['id']); ?>&nbsp;</td>
			<?php } ?>
			<td>
				<?php echo h($book['BookType']['name']); ?>
			</td>
			<td><?php echo h($book['Book']['book_name']); ?>&nbsp;</td>
			<td><?php echo h($book['Book']['book_isbn']); ?>&nbsp;</td>
			<td>
				<?php echo h($book['BookSubject']['name']); ?>
			</td>
			<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
				<td><?php echo h($book['Book']['active']); ?>&nbsp;</td>
			<?php } ?>
			<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
			<td>
				<?php echo h($book['User']['id']); ?>
			</td>
			<?php } ?>
			<td><?php echo h($book['Book']['author']); ?>&nbsp;</td>
			<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
				<td><?php echo h($book['Book']['created']); ?>&nbsp;</td>
				<td><?php echo h($book['Book']['modified']); ?>&nbsp;</td>
			<?php } ?>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $book['Book']['id'])); ?>
				<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $book['Book']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $book['Book']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $book['Book']['id']))); ?>
				<?php } ?>
			</td>
		</tr>
	<?php endforeach; 
	} else { ?>
		<tr><h3>Sorry, no results were found for that search</h3></tr>
	<?php } ?>
	</tbody>
	</table>
	<p class="paginator">
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}. <br>Showing {:current} books out of a total of {:count}, showing books {:start} through {:end}.')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<?php if ($authUser['Role']['name'] == 'Administrator') {	?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Book Types'), array('controller' => 'book_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Type'), array('controller' => 'book_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Book Subjects'), array('controller' => 'book_subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Subject'), array('controller' => 'book_subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php } ?>