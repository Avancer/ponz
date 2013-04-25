<h2>Listing Sample2s</h2>
<br>
<?php if ($sample2s): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Content</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($sample2s as $sample2): ?>		<tr>

			<td><?php echo $sample2->title; ?></td>
			<td><?php echo $sample2->content; ?></td>
			<td>
				<?php echo Html::anchor('sample2/view/'.$sample2->id, 'View'); ?> |
				<?php echo Html::anchor('sample2/edit/'.$sample2->id, 'Edit'); ?> |
				<?php echo Html::anchor('sample2/delete/'.$sample2->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Sample2s.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('sample2/create', 'Add new Sample2', array('class' => 'btn btn-success')); ?>

</p>
