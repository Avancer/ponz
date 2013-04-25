<h2>Viewing #<?php echo $sample2->id; ?></h2>

<p>
	<strong>Title:</strong>
	<?php echo $sample2->title; ?></p>
<p>
	<strong>Content:</strong>
	<?php echo $sample2->content; ?></p>

<?php echo Html::anchor('sample2/edit/'.$sample2->id, 'Edit'); ?> |
<?php echo Html::anchor('sample2', 'Back'); ?>