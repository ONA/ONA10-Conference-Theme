<?php get_header() ?>

	<div id="content">
		<div class="container_12 clearfix">
		
		<div id="main" class="grid_8">
		
			<div class="registration container grid_8 alpha omega">
				<h2>Registration</h2>
				<p><strong>Note: As of October 22:</strong> Registration is still open for some Pre-Conference Workshops, the Career Summit & Job Fair and the Online Journalism Awards Banquet. Join us for what has become a great big meetup with ahead-of-the-curve training and presentations, discussions with industry leaders and unparalleled networking. <a href="http://conference.journalists.org/2010conference/2010/05/05/the-digital-evolution-continues-at-ona10/">Learn more</a>.</p>
				<p class="more"><a href="http://conference.journalists.org/2010conference/registration/">Register Now &#0187;</a></p>

			</div>	
			<!-- /.registration -->
			
			<div class="updates container grid_8 alpha omega">
				<h2>Latest Updates</h2>
				
					

	

 <?php
 global $post;
 $myposts = get_posts('numberposts=5&category=4');
 foreach($myposts as $post) :
   setup_postdata($post);
 ?>
    		<h5 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
    		<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'sandbox' ), the_date( '', '', '', false ), get_the_time() ) ?></abbr></div>
 
 <?php endforeach; ?>
 
 					<p class="more"><a href="http://conference.journalists.org/2010conference/category/headlines/">More updates &#0187;</a></p>





					

			</div>	
			<!-- /.updates -->
			
			
		
			<div class="speakers container grid_4 alpha">
				<h2>Speakers</h2>
				<p>From major media companies to startups, we have an impressive list of
speakers and presenters.  Legal experts, independent journalists,
designers and developers--they're all at ONA10.</p>				
				<p class="more"><a href="http://conference.journalists.org/2010conference/speakers">Check out the list &#0187;</a></p>
			</div>
			<!--/.session -->
			<div class="career-summit container grid_4 omega">
				<h2>Career Summit & Job Fair</h2>
				<p>ONA10's Career Summit & Job Fair is the place where journalists with cutting-edge digital media and technology skills can meet recruiters looking to hire them.</p>
				<p class="more"><a href="http://conference.journalists.org/2010conference/career-summit-job-fair/">Learn more &#0187;</a></p>
			</div>
			<!-- /.career-summit -->
			
			<!--div class="student-newsroom container grid_8 alpha omega">
				<h2>Student Newsroom</h2>
				<p>Applications are now open for the ONA10 Student Newsroom, a unique opportunity to cover the intersection of journalism and technology under the guidance of professional mentors. Approximately 20 positions are available. A wait list will be maintained. Application deadline is Midnight PT, April 16.</p>
				<p class="more"><a href="http://conference.journalists.org/2010conference/ona10-student-newsroom-applications/">Apply Now &#0187;</a></p>

			</div-->	
			<!-- /.student-newsroom -->
			
			<div class="dates container grid_4 alpha">
				<h2>Important Dates</h2>
				<ul>
	
					<li>
						<div class="dateblock">
							<span class="month">Oct</span>
							<span class="date">28</span>
						</div>
						<strong>ONA10 Career Summit &amp; Job Fair</strong>
						<p><a href="http://conference.journalists.org/2010conference/registration/">Register now &#0187;</a></p>	
					</li>
					<li>
						<div class="dateblock">
							<span class="month">Oct</span>
							<span class="date">28</span>
						</div>
						<strong>ONA10 Pre-Conference Workshops</strong>
						<p><a href="http://conference.journalists.org/2010conference/registration/" title="Registration &#8211; ONA10 » 2010 Online News Association Conference, Washington, DC">Register now &#0187;</a></p>
					</li>
					<li>
						<div class="dateblock">
							<span class="month">Oct</span>
							<span class="date">28</span>
						</div>
						<strong>Opening Night Reception</strong>
						<p>&nbsp;</p>
					</li>				
					<li>
						<div class="dateblock">
							<span class="month">Oct</span>
							<span class="date small">29-30</span>
						</div>
						<strong>ONA 10 General Sessions</strong>
						<p><em>Sold Out</em></p>	
					</li>
					<li>
						<div class="dateblock">
							<span class="month">Oct</span>
							<span class="date">30</span>
						</div>
						<strong>Online Journalism Awards Banquet</strong>
						<p><a href="http://journalists.org/event/ona10_awards">Buy Tickets Now &#0187;</a></p>
					</li>
				</ul>
			</div>
			<!-- /.dates -->
			
			<div class="hotel container grid_4 omega">
				<h2>Hotel Reservations</h2>
				
				<img src="/2010conference/wp-content/themes/ONA10-redux/style/img/img-marriott.jpg" width="300" height="217">
				
				<p class="intro">The 2010 ONA Conference and Online Journalism Awards Banquet will be hosted at the:</p>
			
				<h3>Marriott Renaissance Washington, DC Hotel</h3>
				<p>999 Ninth Street NW<br/>
				Washington, DC 20001</p>
				<p>Phone: 202-898-9000<br/>
				Fax: 202-289-0947</p>

				<h5>Sold Out</h5>			
				
			</div>
			<!--/.hotel -->
			
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