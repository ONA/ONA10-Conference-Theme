<?php get_header() ?>

	<div id="content">
		<div class="container_12 clearfix">
		
		<div id="main" class="grid_8">
		
			
			<?php include("live-stream.php"); ?>

		
			<div class="featured-area">
				
				<h4 class="kicker">Latest from the Student Newsroom</h4>
			
				<div class="main-feature grid_4 alpha">
				<?php
					$args = array(	'showposts' => 1,
									'category_name' => 'featured',
							);
					$main_feature = new WP_Query( $args );
					if ( $main_feature->have_posts() ) :
					while ( $main_feature->have_posts() ) : $main_feature->the_post();
	 			?>
	 			
 				<?php postimage('medium'); ?>
    		<h5 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
    		<p class="entry-byline">By <?php 
			if ( function_exists( 'coauthors_posts_links' ) ) {
            	coauthors_posts_links();
            } else {
            	the_author_posts_link();
            }
    		?></p>
    		<div class="entry-excerpt"><?php the_excerpt(); ?></div>
    		
 				<?php endwhile;endif; ?>
 				</div>
 				<!-- /.main-feature -->
 				
 				<div class="secondary-feature grid_4 omega">
 				
				<?php
		 			$args = array(	'showposts' => 3,
									'category_name' => 'featured',
									'offset' => 1
							);
					$secondary_feature = new WP_Query( $args );
					if ( $secondary_feature->have_posts() ) :
					while ( $secondary_feature->have_posts() ) : $secondary_feature->the_post();
	 			?>
	 			
	 			<div class="secondary-feature-wrap">
	 				<?php postimage('thumbnail'); ?>
	    		<h5 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
				<?php if ( $subhead = get_post_meta( get_the_id(), 'subhead', true ) ) : ?>
					<h6 class="entry-subhead"><?php echo $subhead; ?></h6>
				<?php endif; ?>
	    		<p class="entry-byline">By <?php if ( function_exists( 'coauthors_posts_links' ) ) {
					coauthors_posts_links();
            } else {
           		the_author_posts_link();
            }
			?></p>
    		</div>
    		<!-- /.secondary-feature-wrap -->
 				<?php endwhile;endif; ?> 				
 				 				
 				</div>	
 				<!-- /.secondary-feature -->
		
			</div>	
			<!-- /.featured-area-->

			<div class="contact container">
				<h2>Contact</h2>
	
				<dl class="grid_4 alpha">
					<dt class="first">Conference Co-Chairs</dt>
					<dd><a href="mailto:ONA10chairs@journalists.org">Joshua Hatch</a> USA TODAY</dd>
					<dd><a href="mailto:ONA10chairs@journalists.org">Amy Eisman</a> American University</dd>
					
					<dt>Sponsors & Exhibitors</dt>
	
					<dd><a href="mailto:tregan@journalists.org">Tom Regan</a> ONA</dd>
					<dd><a href="mailto:director@journalists.org">Jane McDonnell</a> ONA</dd>
					
					<dt>Programming/Schedule</dt>
					<dd><a href="mailto:ONA10program@journalists.org">Tyson Evans</a> The New York Times, Chair</dd>
					
					<dt>Pre-Conference Workshops</dt>
					<dd><strong>Tiffany Shackelford</strong> Phase2 Technology</dd>
					<dd><strong>Kathryn Corrick</strong> Digital Media Consultant</dd>
				</dl>	
				
				<dl class="grid_4 omega">
					<dt class="first">Student Newsroom</dt>
					<dd><a href="mailto:ONA10newsroom@journalists.org">Sara Kelly</a> National University, Co-Chair</dd>
					<dd><a href="mailto:ONA10newsroom@journalists.org">Lynne Perri</a> American University, Co-Chair</dd>
					
					<dt>Career Summit &amp; Job Fair</dt>
	
					<dd><a href="mailto:ONA10jobfair@journalists.org">Ernest Sotomayor</a> Columbia University, Chair</dd>
					
					<dt>Volunteers</dt>
					<dd><a href="mailto:ONA10volunteers@journalists.org">Laura Cochran</a> Gannett, Co-Chair</dd>
					<dd><a href="mailto:ONA10volunteers@journalists.org">Marcia Parker</a> Patch, Co-Chair</dd>		
				</dl>
				
				<p>Have a question but don't know who to ask? <strong>Email us</strong> at <a href="mailto:ONA10@journalists.org">ONA10@journalists.org</a></p>

			
				<p class="last">Or, if you'd like to mail us something:<br>
				Online News Association<br>
				P.O. Box 65741<br>
				Washington, DC 20035</p>
							
			</div>
			<!--/.contact -->
			
		</div>
		<!-- /#main -->
		
		<?php get_sidebar() ?>
	
		
		</div>
		<!-- /.container_12 -->
	</div>
	<!-- /#content -->


<?php get_footer() ?>