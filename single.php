<?php get_header(); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ka_GE/sdk.js#xfbml=1&version=v2.11&appId=312197589285463';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



    <main id="main" class="main">

  			<!-- ===== PAGE HEADER ===== -->
  			<header class="page-header-podcast" style="background-image: url(https://www.wimbledonsound.com/images/SliderImage-Microphone1.jpg)">
  				<div class="page-header-inner">
  					<div class="container">
  						<!-- ===== PAGE HEADER CONTENT ===== -->
  						<div class="page-header-content text-center">
  							<h2><?php the_title(); ?></h2>
  							<p><?php the_excerpt(); ?></p>
  						</div>

  					</div>
  				</div>
  			</header>

  			<!-- ===== PODCAST PLAYER ===== -->
			<?php 
				$videolink = get_the_post_video_url( $post_id );
				$videolink = preg_replace('/watch\?v=/','embed/',$videolink);
			?>
          <iframe width="1280" height="720" style="margin: auto;width: 100%;" src="<?php echo($videolink);?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>

  			<!-- ===== PODCAST META ===== -->
  			<div class="podcast-meta-element">
  				<span class="podcast-meta-item"><i class="fa fa-calendar"></i><?php echo(get_the_date()); ?></span>
  				<span class="podcast-meta-item"><i class="fa fa-clock-o"></i><?php echo(' '.get_post_meta($post->ID, 'duration', true) . ' საათი') ?></span>
  				<a class="podcast-meta-item" href="#"><i class="fa fa-tag"></i><?php 
				 $category = get_the_category();
				 echo $category[0]->name;
				?></a>
  				<a class="podcast-meta-item" href="#"><i class="fa fa-download"></i> გადმოწერა (MP3)</a>
  			</div>



  			<!-- ===== SINGLE PAGE CONTENT ===== -->
  			<div class="section-negative">
  				<div class="container">

  					<div class="row mb-50">

  						<!-- ===== PODCAST TEXT CONTENT ===== -->
  						<div class="col-md-8 mb-50">
<br>
  							<!-- ===== PAGE MAIN CONTENT ===== -->
  							<div class="page-content">
							
								<?php 
								while(have_posts()) : the_post(); 
								the_content(); 
								endwhile
								?>
  							</div>

  							<!-- ===== HR ===== -->
  							<hr>
							<div class="fb-comments" data-href="http://localhost/stuff/wordpress/?p=<?php echo($post->ID)?>" data-width="750" data-numposts="10"></div>

							
							<div class="fb-share-button" data-href="http://localhost/stuff/wordpress/?p=<?php echo($post->ID)?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" 
							href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>

  						</div>

  					</div>

  				</div>
  			</div>

  		</main>

<?php get_footer(); ?>