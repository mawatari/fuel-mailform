<h2>Listing Forms</h2>
<br>
<?php if ($forms): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Comment</th>
			<th>Ip address</th>
			<th>User agent</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($forms as $form): ?>		<tr>

			<td><?php echo $form->name; ?></td>
			<td><?php echo $form->email; ?></td>
			<td><?php echo $form->comment; ?></td>
			<td><?php echo $form->ip_address; ?></td>
			<td><?php echo $form->user_agent; ?></td>
			<td>
				<?php echo Html::anchor('admin/form/view/'.$form->id, 'View'); ?> |
				<?php echo Html::anchor('admin/form/edit/'.$form->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/form/delete/'.$form->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Forms.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/form/create', 'Add new Form', array('class' => 'btn btn-success')); ?>

</p>
