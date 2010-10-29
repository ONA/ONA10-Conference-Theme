<?php get_header() ?>

	<div id="content">
		<div class="container_12 clearfix">
	
		<div id="main" class="grid_8">



<?php the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><?php the_title() ?></h2>
				<div class="entry-content">
<?php the_content() ?>

<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>

<?php edit_post_link( __( 'Edit', 'sandbox' ), '<span class="edit-link">', '</span>' ) ?>

				</div>
			</div><!-- .post -->

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>




		</div>
		<!-- /#main -->
		
		<?php get_sidebar() ?>
	
		
		</div>
		<!-- /.container_12 -->
	</div>
	<!-- /#content -->


<?php get_footer() ?>