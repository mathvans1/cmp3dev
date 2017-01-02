<!-- start node event template -->


<?php $term = menu_get_object('taxonomy_term', 2); ?>

<?php if($term && !path_is_admin(current_path())) : ?>

	<!--less rendered items -->
	<a href="<?php echo $node_url; ?>">
		<h4><?php print $title; ?></h4>
	</a>
	<?php print render($content['body']); ?>
	<!-- end less rendered items -->

<?php else : ?>

	<?php if(node_access('update',$node)){ print '<span style="font-size:12px;">'; print l( t('Edit Page'),'node/'.$node->nid.'/edit' ); print "</span>"; } ?>

	<!-- fully rendered items -->
	<h2><?php print $title; ?></h2>

	<div class="image">
		<?php print render($content['field_main_image']); ?>
	</div>
	<?php print render($content['field_tags']); ?>

	<?php print render($content['field_date']); ?>
	<?php print render($content['field_location']); ?>
	<?php print render($content['body']); ?>
	<?php print render($content['field_agenda']); ?>
	<!-- end fully rendered items -->

<?php endif; ?>

<!-- end node event template -->


