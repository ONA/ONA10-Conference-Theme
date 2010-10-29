		<div class="more-news container">
				<h4 class="kicker">More news</h4>

				 <?php
				 global $post;
				 $myposts = get_posts('numberposts=5&category=10&offset=1');
				 foreach($myposts as $post) :
				   setup_postdata($post);
				 ?>
			 				<div class="more-news-wrapper">					 				
			    		<h5 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			    		<p class="entry-byline">By <?php the_author_posts_link(); ?></p>
			    		</div>
			
			 
			 	<?php endforeach; ?>
 
 				<p class="more"><a href="http://conference.journalists.org/2010conference/category/student-newsroom/">More news &#0187;</a></p>

			</div>	
			<!-- /.more-news -->