<?php get_header(); ?>
    <main id="main" class="main">

        <!-- ===== PAGE HEADER ===== -->
        <header class="page-header-podcast" style="background-image: url(https://www.wimbledonsound.com/images/SliderImage-Microphone1.jpg)">
          <div class="page-header-inner">
            <div class="container">

              <!-- ===== PAGE HEADER CONTENT ===== -->
              <div class="page-header-content text-center">
                <h1>კონტაქტი</h1>
              </div>

            </div>
          </div>
        </header>

        <section class="section-negative">
  				<div class="container">

  					<!-- ===== PAGE CONTENT ===== -->
  					<div class="page-content">

  						<!-- ===== PAGE TITLE & DESCRIPTION ===== -->
  						<div class="row">
  							<div class="col-md-8 col-md-offset-2 text-center">
  								<h2 class="title-default mb-10">დაგვიკავშირდით</h2>
  								<p class="page-description mb-70">ქვემოთ მოცემული ველების საშუალებით შეგიძლიათ მისწეროთ BTP-ს ჯგუფს. ჩვენ აუცილებლად გავითვალისწინებთ თქვენს რეჩევებს და შენიშვნებს.</p>
  							</div>
  						</div>
						

  						<!-- ===== FORM CONTACT ===== -->
  						<div class="row">
						
  							<div class="col-md-8 col-md-offset-2">
							
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
  							</div>
  						</div>
  					</div>

  				</div>
  			</section>

<?php get_footer(); ?>