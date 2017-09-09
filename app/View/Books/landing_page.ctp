<div class="container-fluid">
<!--	        <!-- Brand and toggle get grouped for better mobile display 
<div class="navbar-header"> </div>
<br /> 
<br /> 
<!-- Collect the nav links, forms, and other content for toggling 
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> </div>-->
<form method="post" action="#" class="container 100%">

			
		  
		<br/>  <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSearch by category</h3>
		  
		 <ul class="action">
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li><a href="/booksubjects/find" class=" button special">FIND SUBJECT</a></li>
					<li><a href="/books/find_author" class=" button special">FIND AUTHOR</a></li>
					<li><a href="/schools/find" class=" button special">FIND SCHOOL</a></li>
					<li><a href="/books/finds" class=" button special">FIND TEXTBOOK</a></li>
				
  </ul>
		  
</form>
<!-- /.navbar-collapse -->

</div>
<!-- /.container-fluid -->
<!-- Banner -->
<section id="banner">
		<div class="content" style="padding-top:20px;">
		  <header class="align-left" style="float:left;">
			<h2>Meet Loxley </h2>
			  <br/>
			<h1>Loxley is commited to an open dialogue around the publishing industry and the content provided to students.</h1>
			<h1>Built with Professors in mind, we're creating a community conducive to rating and </h1>
			<h1>recommending textbooks you're already familiar with, and to finding superior content to provide </h1>
			<h1>your students with the most understanding of the subject.</h1>
		  </header>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="image"><img src="img/loxley.jpg" alt="" /></span>
		</div>
		
</section>
<div class="books index" style="float:none;width:100%;">
	<h2><?php echo __('Browse Top Rated'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
<!--			<th><?php// echo $this->Paginator->sort('id'); ?></th>-->
			<th><?php echo $this->Paginator->sort('book_type_id','Book Type'); ?></th>
			<th><?php echo $this->Paginator->sort('book_name'); ?></th>
			<th><?php echo $this->Paginator->sort('book_isbn','Book ISBN'); ?></th>
			<th><?php echo $this->Paginator->sort('book_subject_id'); ?></th>
			<th><?php // echo $this->Paginator->sort('active'); ?></th>
			<th><?php // echo $this->Paginator->sort('user_id'); ?></th>
<!--			<th><?php // echo $this->Paginator->sort('created'); ?></th>-->
<!--			<th><?php // echo $this->Paginator->sort('modified'); ?></th>-->
<!--			<th class="actions"><?php // echo __('Actions'); ?></th>-->
	</tr>
	</thead>
	<tbody>
	<?php foreach ($books as $book): ?>
	<tr>
		<td><?php echo h($book['Book']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($book['BookType']['name'], array('controller' => 'book_types', 'action' => 'view', $book['BookType']['id'])); ?>
		</td>
		<td><?php echo h($book['Book']['book_name']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['book_isbn']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($book['BookSubject']['name'], array('controller' => 'book_subjects', 'action' => 'view', $book['BookSubject']['id'])); ?>
		</td>
<!--		<td><?php // echo h($book['Book']['active']); ?>&nbsp;</td>
		<td>
			<?php // echo $this->Html->link($book['User']['id'], array('controller' => 'users', 'action' => 'view', $book['User']['id'])); ?>
		</td>
		<td><?php // echo h($book['Book']['created']); ?>&nbsp;</td>
		<td><?php // echo h($book['Book']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $book['Book']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $book['Book']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $book['Book']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $book['Book']['id']))); ?>
		</td>-->
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p class="paginator">
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
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