<div class="updates container">
	<h3>Related Posts from the Student Newsroom</h3>
				
	<?php
	// Shows the proper loop depending on track generate info appropriate to the page being displayed
	
	//change to track category 1
	if (in_category('10')) {
	        // Shows posts from Student Newsroom and track Abe 
	        
	        global $post; 
	        $myposts = get_posts('numberposts=5&category=11');
	        foreach($myposts as $post) : setup_postdata($post);
		        echo '<h5 class="entry-title">';
		        echo '<a href="' ;
		        the_permalink();
		        echo '">';
		        the_title();
		        echo '</a></h5>'; 
	        endforeach;
	
	//change to track category 2        
	} elseif (in_category('10')) {
	
	      	// Shows posts from Student Newsroom and track Thomas 
	        global $post; 
	        $myposts = get_posts('numberposts=5&category=12');
	        foreach($myposts as $post) : setup_postdata($post);
		        echo '<h5 class="entry-title">';
		        echo '<a href="' ;
		        the_permalink();
		        echo '">';
		        the_title();
		        echo '</a></h5>'; 
	        endforeach;
	 
	//change to track category 3  
	} elseif (in_category('10')) {
	
	      	// Shows posts from Student Newsroom and track George 
	        global $post; 
	        $myposts = get_posts('numberposts=5&category=13');
	        foreach($myposts as $post) : setup_postdata($post);
		        echo '<h5 class="entry-title">';
		        echo '<a href="' ;
		        the_permalink();
		        echo '">';
		        the_title();
		        echo '</a></h5>'; 
	        endforeach;
	 
	//change to track category 3 	      
	} elseif (in_category('10')) {
	
	      	// Shows posts from Student Newsroom and track Teddy 
	        global $post; 
	        $myposts = get_posts('numberposts=5&category=14');
	        foreach($myposts as $post) : setup_postdata($post);
		        echo '<h5 class="entry-title">';
		        echo '<a href="' ;
		        the_permalink();
		        echo '">';
		        the_title();
		        echo '</a></h5>'; 
	        endforeach;        
	        
	} else {
	      // catch-all for other pages
	      echo "<p>There aren't any posts in this category. Check back soon.</p>";
	}
	
	?>
</div>	