<?php

get_header();
?>

    <section class="podcast-hero" style="background-image: url(https://www.wimbledonsound.com/images/SliderImage-Microphone1.jpg)">
			<div class="podcast-hero-inner">

				<!-- ===== PODCAST INFO ===== -->
				<div class="container">
					<div class="podcast-hero-content">
						<?php
						query_posts('showposts=1');
						if (have_posts()):
							 while(have_posts()) : the_post(); 
							?>
							
							<span class="podcast-hero-date"><?php echo(get_the_date()) ?></span>
							<h2 class="podcast-hero-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
							<ul class="podcast-hero-meta">
								<li class="item"><a href="#" class="podcast-hero-tag" rel="tag"><?php the_category() ?></a></li>
								<li class="item"><i class="fa fa-clock-o"></i> <?php echo(' '.get_post_meta($post->ID, 'duration', true) . ' საათი') ?></li>
							</ul>
							
						<?php
						 endwhile;
						endif;
						?>
					</div>
				</div>
			</div>
	</section>
	
	<main id="main" class="main">
		
		<!-- ===== PODCAST LIST ===== -->
			<section id="#episodes" class="section-positive">
				<div class="container">

					<!-- ===== SECTION TITLE ===== -->
					<h2 class="title-default">ეპიზოდები</h2>

					<div class="row">

						<!-- ===== PODCAST CARD FULL ===== -->
						
						
						
						<?php
						query_posts('showposts=1');
						if (have_posts()):
							 while(have_posts()) : the_post(); 
							?>
							<div class="col-sm-12 mb-40">
							<div class="podcast-card full">
								<figure class="podcast-image"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a></figure>
								<div class="podcast-content">
									<span class="podcast-date"><?php echo(get_the_date())?></span>
									<h2 class="podcast-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
									<p class="podcast-excerpt"><a href="<?php the_permalink() ?>"><?php the_excerpt() ?></a></p>
									<ul class="podcast-meta">
										<li class="item"><a href="#" class="podcast-tag" rel="tag"><?php the_category() ?></a></li>
										<li class="item"><i class="fa fa-clock-o"></i><?php echo(' '.get_post_meta($post->ID, 'duration', true) . ' საათი') ?></li>
										<li class="item"><a href="<?php the_permalink() ?>" class="podcast-play"><i class="fa fa-play"></i> ყურება</a></li>
									</ul>
								</div>
							</div>
						</div>
							
						<?php
						endwhile;
						endif;
						?>
						
						<!-- ===== PODCAST CARD BOXED ===== -->
						<?php
						query_posts('showposts=5');
						$i = 1;
						if (have_posts()):
							 while(have_posts()) : the_post();
							 if ($i>1):
							?>
								<div class="col-sm-6 mb-40">
								<div class="podcast-card boxed">
								<figure class="podcast-image"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a></figure>
								<div class="podcast-content">
									<span class="podcast-date"><?php echo(get_the_date())?></span>
									<h2 class="podcast-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
									<p class="podcast-excerpt"><a href="<?php the_permalink() ?>"><?php echo(get_the_excerpt()) ?></a></p>
									<ul class="podcast-meta">
										<li class="item"><a href="#" class="podcast-tag" rel="tag"><?php the_category() ?></a></li>
										<li class="item"><i class="fa fa-clock-o"></i> <?php echo(' '.get_post_meta($post->ID, 'duration', true) . ' საათი') ?></li>
										<li class="item"><a href="<?php the_permalink() ?>" class="podcast-play"><i class="fa fa-play"></i> ყურება</a></li>
									</ul>
								</div>
							</div>
						</div>
							<?php
						endif;
						$i ++;
						endwhile;
						endif;
						?>


						<!-- ===== CHECK MORE ===== -->
						<div class="col-sm-12 mb-50">
							<a href="podcasts.html" class="btn btn-primary btn-block btn-lg">სხვა ეპიზოდების ნახვა</a>
						</div>

					</div>

				</div>
			</section>
			
		
	</main>


<?php
get_footer();

?>