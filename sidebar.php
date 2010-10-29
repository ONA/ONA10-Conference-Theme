		<div id="sidebar" class="grid_4">
		
		
		
			<div class="sponsors container">
				<h3>Sponsors &amp; Exhibitors</h3>
				<a href="http://conference.journalists.org/2010conference/overview/sponsors/"><img src="<?php bloginfo('template_directory'); ?>/style/img/sponsors-right-rail.gif"></a>

			</div>
			<!--/ .sponsors-->

			<?php 
			
			if (is_page_template('page-track.php')) {
				//conditional switcher for track pages 
				include("track-newsroom-posts.php");
			
			
			} else {
				// do nothing //
			}	
			?>
			
			<div class="updates container">
				
				<h3>Updates</h3>

				 <?php global $post; $myposts = get_posts('numberposts=3&category=15'); foreach($myposts as $post) : setup_postdata($post); ?>
			    	<h5 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			    	<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'sandbox' ), the_date( '', '', '', false ), get_the_time() ) ?></abbr></div>
			 	<?php endforeach; ?>
 
 				<p class="more"><a href="http://conference.journalists.org/2010conference/category/announcements/">More updates &#0187;</a></p>

			</div>	
			<!-- /.updates -->
			
			
		<div class="prior container">
			<h3>Prior Coverage</h3>
			<?php
				$args = array(	'showposts' => 5,
								'category_name' => 'newsroom',
						);
				$prior_coverage = new WP_Query( $args );
				if ( $prior_coverage->have_posts() ) :
				while ( $prior_coverage->have_posts() ) : $prior_coverage->the_post();
			?>
				<h5 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
				<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'sandbox' ), the_date( '', '', '', false ), get_the_time() ) ?></abbr></div>
			<?php endwhile; endif; ?>
		
		</div>
			
			
			
					
			
			<div id="primary" class="container">
				<ul class="xoxo">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>

					<li id="categories">
						<h3><?php _e( 'Categories', 'sandbox' ) ?></h3>
						<ul>
		<?php wp_list_categories('title_li=&show_count=0&hierarchical=1') ?> 
		
						</ul>
					</li>
					<!--/ .categories-->
			
					<li id="pages">
						<h3><?php _e( 'Pages', 'sandbox' ) ?></h3>
						<ul>
		<?php wp_list_pages('title_li=&sort_column=menu_order' ) ?>
						</ul>
					</li>
					<!--/ .pages-->

					<li id="archives">
						<h3><?php _e( 'Archives', 'sandbox' ) ?></h3>
						<ul>
		<?php wp_get_archives('type=monthly') ?>
		
						</ul>
					</li>
					<!--/ .archives-->
					
<?php endif; // end primary sidebar widgets  ?>
				</ul>
		</div><!-- #primary .sidebar -->

		<div id="secondary" class="container">
			<ul class="xoxo">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : // begin secondary sidebar widgets ?>
				<li id="search">
					<h3><label for="s"><?php _e( 'Search', 'sandbox' ) ?></label></h3>
					<form id="searchform" class="blog-search" method="get" action="<?php bloginfo('home') ?>">
						<div>
							<input id="s" name="s" type="text" class="text" value="<?php the_search_query() ?>" size="10" tabindex="1" />
							<input type="submit" class="button" value="<?php _e( 'Find', 'sandbox' ) ?>" tabindex="2" />
						</div>
					</form>
				</li>
				<!--/ .search -->
	
	<?php wp_list_bookmarks('title_before=<h3>&title_after=</h3>&show_images=1') ?>
	
				<li id="rss-links">
					<h3><?php _e( 'RSS Feeds', 'sandbox' ) ?></h3>
					<ul>
						<li><a href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" rel="alternate" type="application/rss+xml"><?php _e( 'All posts', 'sandbox' ) ?></a></li>
						<li><a href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" rel="alternate" type="application/rss+xml"><?php _e( 'All comments', 'sandbox' ) ?></a></li>
					</ul>
				</li>
				<!--/ .feeds -->
	
				
				
	<?php endif; // end secondary sidebar widgets  ?>
			</ul>
	</div><!-- #secondary .sidebar -->
			
			
			
			
		</div>
		<!-- /#sidebar -->






	
