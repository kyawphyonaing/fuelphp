<h2>Viewing <span class='muted'>#<?php echo $sample2->id; ?></span></h2>

<p>
	<strong>Tiltle:</strong>
	<?php echo $sample2->tiltle; ?></p>
<p>
	<strong>Content:</strong>
	<?php echo $sample2->content; ?></p>

<?php echo Html::anchor('sample2/edit/'.$sample2->id, 'Edit'); ?> |
<?php echo Html::anchor('sample2', 'Back'); ?>