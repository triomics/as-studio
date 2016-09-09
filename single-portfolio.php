<?php 
/* Template name: Вакансии */
?>

<?php get_header (); ?>

<?php get_sidebar(); ?> <!-- include sidebar -->

<div class="col-md-9 portfolio-single">

<!-- all right(from .psd template) content here -->

	<div class="row">
		<div class="col-md-12">
			<section class="vacancy-section">
				<?php 
					if ( have_posts() ) :
					while ( have_posts() ) : the_post();    
				?>  
					<div id="screen-1" class="screen-step screen-3 without-btn active">
						<div class="info-text">
							<div class="nav-sub">
								<div class="row">
									<div class="col-md-3 align-left"><button class="btn back-btn" data-goto="3"><?php _e('Отзыв', 'as-studio'); ?></button></div>
									<div class="col-md-6 align-center"><button class="btn cta" data-goto="2"><?php _e('Купить psd макет за 10$', 'as-studio'); ?></button></div>
									<div class="col-md-3 align-right"><a href="/portfolio/" class="btn back-btn"><?php _e('Назад', 'as-studio'); ?></a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-8">
									<div id="giveScroll" class="text-content">
										<h1 class="heading"><?php the_title(); ?></h1>
										<?php the_content(); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="screen-2" class="screen-step screen-2">
						<div class="buy">
							<div class="nav-sub">
								<button class="btn back-btn" data-goto="1"><?php _e('Назад', 'as-studio'); ?></button>
							</div>
							<div class="row">
								<div class="col-md-offset-1 col-md-4">
									<div class="rnd-block">
									</div>
								</div>
								<div class="col-md-7">
									<section class="contact-section">
										<h2 class="heading"><?php _e('Безопасная покупка', 'as-studio'); ?></h2>
										<div class="form-wrapper">
											<form id="contact-form" class="form" action="contact.php" method="POST" novalidate>
												<div id="form-el-1" class="form-el active">
													<p class="sub-head"><?php _e('Введите Ваш e-mail', 'as-studio'); ?></p>
													<label for="email" class="el-title"><?php _e('Ваш email', 'as-studio'); ?></label>
													<div class="el-input">
														<input id="email" name="email" autocomplete="off" type="email" required class="text-input">
													</div>
													<p class="input-caption">На этот адрес будет выслана ссылка на Ваш psd макет</p>
													<button class="btn next-btn" data-formstep="2"><?php _e('Далее', 'as-studio'); ?></button>
												</div>
												<div id="form-el-2" class="form-el">
													<p class="sub-head"><?php _e('Выберите способ оплаты', 'as-studio'); ?></p>
													<button class="btn cta" data-formstep="sendit">Банковская карта</button>
													<button class="btn cta" data-formstep="sendit">Яндекс деньги</button>
													<button class="btn cta" data-formstep="sendit">Webmoney</button>
													<button class="btn cta" data-formstep="sendit">PayPal</button>
												</div>
											</form>
											<div id="contact-success" class="contact-success">
												<p class="sub-head"><?php _e('Спасибо, Ваш psd макет выслан на ', 'as-studio'); ?><span class="mailto">some@mail.com</span></p>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>
					<div id="screen-3" class="screen-step screen-3">
						<div class="buy">
							<div class="nav-sub">
								<button class="btn back-btn" data-goto="1"><?php _e('Назад', 'as-studio'); ?></button>
							</div>
							<div class="testimonial">
								<div class="row">
									<div class="col-md-offset-1 col-md-4">
										<div class="rnd-block">
											<img src="<?php echo get_template_directory_uri()?>/assets/img/photo.jpg" alt="">
										</div>
										<p class="job">Руководитель проекта</p>
										<p class="name">Марина Шамина</p>
									</div>
									<div class="col-md-6">
										<p class="heading">Отзыв</p>
										<p class="sub-head">Спасибо за отличную работу. Страницы, просто огонь!</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
			</section>
		</div>
	</div>

</div>

<?php get_footer (); ?>