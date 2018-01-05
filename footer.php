<?php get_footer(); ?>
			<!-- ===== FOOTER CONTENT INFORMATION ===== -->
			<section class="section-positive">
				<div class="container">

					<div id="footermenus" class="row mt-70 mb-30">
						

						<!-- ===== SITEMAP ===== -->
						<div class="footermenucontainer">
							<h2 class="title-separator white">საიტის რუკა</h2>
							<?php
							
							$args = array(
								'theme_location' => 'footer'
							);
							
							wp_nav_menu( $args );
						  ?>
						</div>

						<!-- ===== PODCASTS EPISODES ===== -->
						
						<div class="col-sm-3 mb-40">
						<h2 class="title-separator white">ბოლო ეპიზოდები</h2>
							<ul class="footer-complement">
								<?php
								query_posts('showposts=2');
								if (have_posts()):
									 while(have_posts()) : the_post(); 
									?>
									
										<li>
											<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
											<span><?php echo(get_the_date()) ?></span>
										</li>									
								<?php
								endwhile;
								endif;
								?>
							</ul>
						</div>



						<!-- ===== SOCIAL CONNECTION ===== -->
						<div class="col-sm-3 mb-40">
							<h2 class="title-separator white">სოც. ქსელები</h2>
							<ul class="social-list">
								<li class="social-item"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li class="social-item"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li class="social-item"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
								<li class="social-item"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
								<li class="social-item"><a href="#" target="_blank"><i class="fa fa-soundcloud"></i></a></li>
								<li class="social-item"><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
								<li class="social-item"><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
								<li class="social-item"><a href="#" target="_blank"><i class="fa fa-spotify"></i></a></li>
							</ul>
						</div>

					</div>

				</div>
			</section>

			<!-- ===== FOOTER INFORMATION ===== -->
		<footer>
			<section class="footer-credits">
				<div class="container">

					<div class="row">

						<!-- ===== CREDIT LOGO ===== -->
						<div class="col-sm-6 footer-logo">
							<h2><a href="index.html"><img src="/img/logo.png"></a></h2>
						</div>

						<!-- ===== CREDIT LOGO ===== -->
						<div class="col-sm-6 text-right">
							BTP &nbsp &copy &nbsp 2017
						</div>

					</div>

				</div>
			</section>

		</footer>
		 <?php wp_footer(); ?>
</body>
</html>