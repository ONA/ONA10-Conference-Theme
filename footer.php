
	<div id="footer">
		<div class="container_12 clearfix">
			<div class="footer-todo grid_4">
				<h5 id="todo">We're excited to see you</h5>
				<p>We really hope you can join us in October. To make sure you're excited, too, we started this list of stuff journalists might like while visiting DC:</p>
				<ul>
					<li>Have a drink at the <a href="http://npc.press.org/">National Press Club</a></li>
					<li>Take a <a href="http://maps.google.com/maps?oe=utf-8&rls=org.mozilla:en-US:official&client=firefox-a&um=1&ie=UTF-8&q=DC+Segway&fb=1&gl=us&hq=Segway&hnear=DC&view=text&ei=YD1NS6nGJdHelAefuIiODQ&sa=X&oi=local_group&ct=more-results&resnum=1&ved=0CBUQtQMwAA">Segway tour</a></li>
					<li>Visit the <a href="http://www.newseum.org/">Newseum</a></li>
				</ul>
			</div><!-- end .footer-todo-->
			
			<div class="footer-twitter grid_4">
				<h5 id="twitter">Follow</h5>
				<p>Follow <a href="http://twitter.com/ona10">@ONA10</a> and use <a href="http://twitter.com/#search?q=%23ONA10">#ONA10</a> as your hashtag.</p>
				<h6>Recently:</h6>
				<div class="twitter-footer">
				<ul>
				
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>

				</ul>
				<?php endif; // end primary sidebar widgets  ?>
				</div>
				
			</div><!-- end .footer-twitter-->
			
			<div class="footer-conferences grid_4">
				<h5 id="conferences">Past conferences</h5>
				<ul>
					<li>2009 <a href="http://conference.journalists.org/2009conference/">San Francisco</a></li>
					<li>2008 <a href="http://conference.journalists.org/2008conference/">Washington, D.C.</a></li>
					<li>2007 <a href="http://conference.journalists.org/2007conference/">Toronto</a></li>
					<li>2006 <a href="http://conference.journalists.org/2006conference/">Washington, D.C.</a></li>
					<li>2005 <a href="http://conference.journalists.org/2005conference/">New York</a></li>
					<li>2004 <a href="http://conference.journalists.org/2004conference/">Hollywood, Calif.</a></li>
				</ul>
			</div><!-- end .footer-conferences-->
			
			<p class="grid_12 agate first">Illustration by <a href="http://httpcolonforwardslashforwardslashwwwdotjenniferdanieldotcom.com/">Jennifer Daniel</a>. Typography generously provided by <a href="http://www.typography.com/">Hoefler &amp; Frere-Jones</a>. Design by <a href="http://www.tysonevans.com/">Tyson Evans</a> and <a href="http://davewrightjr.com/">David Wright Jr</a>.</p>
			
			<p class="grid_12 agate"> &copy; <?php echo date('Y'); ?> <a href="http://www.journalists.org/">Online News Association</a> &middot; All Rights Reserved &middot; P.O. Box 65741 &middot; Washington, DC 20035</p>
		
		</div><!-- end container_12-->
	</div><!-- end #footer -->

</div><!-- #wrapper .hfeed -->

<?php wp_footer(); ?>

<script src="<?php bloginfo('template_directory'); ?>/style/js/hoverIntent.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/style/js/superfish.js" type="text/javascript"></script>

<script type="text/javascript">
// Initialize the dropdown menu
	jQuery(document).ready( function(){
		jQuery('ul.sf-menu').superfish();
	});

</script>

</body>
</html>