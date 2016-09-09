<?php 
/* Template name: Контакти */

get_header (); ?>

<?php get_sidebar(); ?> <!-- include sidebar -->

<div class="col-md-9 page-contacts">

<!-- all right(from .psd template) content here -->

	<div class="row">
		<div class="col-md-offset-2 col-md-10">
			<section class="contact-section">
				<h2 class="heading">Готова Вас выслушать</h2>
				<p class="sub-head">Давайте создадим вместе что-то стоящее и красивое</p>
				<div class="form-wrapper">
					<form id="contact-form" class="form" action="contact.php" method="POST" novalidate>
						<div id="form-el-1" class="form-el active">
							<label for="name" class="el-title">Как к Вам обращаться?</label>
							<div class="el-input">
								<input id="name" name="name" type="text" autocomplete="off" class="text-input" data-validation="length required" data-validation-length="min2">
							</div>
							<button class="btn next-btn" data-formstep="2">Далее</button>
						</div>
						<div id="form-el-2" class="form-el">
							<label for="sources" class="el-title">Что бы Вы хотели?</label>
							<div class="el-input">
								<select name="selectProp" id="sources" form="contact-form" class="custom-select sources" placeholder="Сайт">
									<option value="site">Сайт</option>
									<option value="design">Дизайн</option>
								</select>
							</div>
							<button class="btn next-btn" data-formstep="3">Далее</button>
						</div>
						<div id="form-el-3" class="form-el">
							<label for="email" class="el-title">Ваш email</label>
							<div class="el-input">
								<input id="email" name="email" autocomplete="off" type="email" required class="text-input" data-validation="email">
							</div>
							<button class="btn next-btn" data-formstep="4">Далее</button>
						</div>
						<div id="form-el-4" class="form-el">
							<label for="message" class="el-title">Сообщение</label>
							<div class="el-input">
								<textarea name="message" id="message" class="text-textarea" rows="5" form="contact-form" ></textarea>
							</div>
							<button class="btn next-btn" data-formstep="send">Отправить</button>
						</div>
					</form>
				</div>

				<div id="contact-success" class="contact-success">
					<div class="popup-image">
						<img src="<?php echo get_template_directory_uri()?>/assets/img/as-2.png" alt="">
					</div>
					<div class="popup-window">
						<div class="popup-content">
							<!-- <button class="btn close-btn" data-formstep="1">
								<div class="line-wrapper">
									<span class="line-1"></span>
									<span class="line-2"></span>
								</div>
							</button>  -->
							<button class="btn back-btn" data-formstep="1">Назад</button>
							<h2 class="heading">Благодарю!</h2>
							<p class="sub-head">Ваше сообщение успешно отправлено.</p>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>

<?php get_footer (); ?>