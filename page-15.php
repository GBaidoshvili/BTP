<?php
	get_header();
?>
    <main id="main" class="main">

        <!-- ===== PAGE HEADER ===== -->
        <header class="page-header-podcast" style="background-image: url(https://www.wimbledonsound.com/images/SliderImage-Microphone1.jpg)">
          <div class="page-header-inner">
            <div class="container">
			</br>
              <!-- ===== PAGE HEADER CONTENT ===== -->
              <div class="page-header-content text-center">
                <h1><?php the_title(); ?></h1>
              </div>

            </div>
          </div>
        </header>
        <!-- ===== ABOUT US ===== -->
        <section id="about-us" class="section-negative">
          <div class="container">

            <!-- ===== SECTION TITLE ===== -->
            <br>
            <?php
						if (have_posts()):
							 while(have_posts()) : the_post(); 
							?>
							<p>
							<?php the_content(); ?>
							</p>
						<?php
						endwhile;
						endif;
						?>
						<br>
						<br>
			
			
			<div class="row mb-30">

						<!-- ===== TEAM CARD ===== -->
						<?php						
								include("connection.php");
								
								$query = 'SELECT name, title FROM wp_members';
								$result = $conn -> query($query);
											
								mysqli_close($conn);
															
								while($post = mysqli_fetch_array($result))
									{
									echo 
									
											'<div class="col-lg-4 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-12 mb-40">
												<div class="team-card">
													<figure class="team-card-image"><img src="assets/img/team/team-2.jpg" alt="" title=""></figure>
													<div class="team-card-content">
														<h2 class="team-card-title">'. $post['name'].'</h2>
														<p class="team-card-job">'. $post['title'].'</p>
														<p class="team-card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat itaque optio minus perferendis tempora.</p>
														<ul class="team-card-social">
															<li class="social-item"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
															<li class="social-item"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
															<li class="social-item"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
															<li class="social-item"><a href="#" target="_blank"><i class="fa fa-link"></i></a></li>
														</ul>
													</div>
												</div>
											</div>';
									
									
									
									
																}


							?>

          </div>
        </section>

    <?php
		get_footer();
	?>