<?php
/* Template name: Вакансии */
?>
<?php get_header (); ?>
<?php get_sidebar(); ?> <!-- include sidebar -->
<div class="col-md-9 vacancy-page">
	<!-- all right(from .psd template) content here -->
	<div class="row">
		<div class="col-md-offset-1 col-md-11">
			<section class="vacancy-section">
				<div class="row">
					<div class="col-md-offset-1 col-md-11">
						<div id="screen-1" class="screen-step screen-1 without-btn active">
							<div class="regular-job">
								<h2 class="heading">Обычная работа</h2>
								<p class="sub-head">Для того, кто хочет поработать...</p>
								<button class="btn next-btn bigger-font" data-goto="5">Далее</button>
							</div>
							<div class="dream">
								<h2 class="heading">Осуществление мечты</h2>
								<p class="sub-head">Для того, кто не хочет носить ведра...</p>
								<div class="row">
									<div class="col-md-4">
										<button class="btn next-btn active" data-goto="4">Далее</button>
									</div>
									<div class="col-md-6">
										<button class="btn secondary-btn" data-goto="2">Что значит носить ведра?</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-1 col-md-11">
						<div id="screen-5" class="screen-step">
							<div class="form-vacancy">
								<div class="nav-sub">
									<button id="set-step" class="btn back-btn unvisible" data-backstep="1">Назад</button>
									<button class="btn close-btn" data-formstep="1" data-goto="1">
										<div class="line-wrapper">
												<span class="line-1"></span>
												<span class="line-2"></span>
										</div>
									</button>
								</div>
								<section class="contact-section">
									<h2 class="heading">Готова Вас выслушать</h2>
									<p class="sub-head">Давайте создадим вместе что-то стоящее и красивое</p>
									<div class="form-wrapper">
										<form id="contact-form" class="form" action="contact.php" method="POST" novalidate>
											<div id="form-el-1" class="form-el active">
												<label for="name" class="el-title">Как к Вам обращаться?</label>
												<div class="el-input">
													<input id="name" name="name" type="text" required autocomplete="off" class="text-input" data-validation="length" data-validation-length="min2">
												</div>
												<button class="btn next-btn" data-formstep="2">Далее</button>
											</div>
											<div id="form-el-2" class="form-el">
												<label for="sources" class="el-title">Вакансии</label>
												<div class="el-input">
													<select name="selectProp" id="sources" form="contact-form" class="custom-select sources" placeholder="Работа с векторной графикой">
														<option value="site">Работа с векторной графикой</option>
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
												<label for="message" class="el-title">Ваши навыки и пожелания</label>
												<div class="el-input">
													<textarea name="message" id="message" class="text-textarea" rows="5" form="contact-form" ></textarea>
												</div>
												<button class="btn next-btn" data-formstep="send">Отправить</button>
											</div>
										</form>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-1 col-md-11">
						<div id="contact-success" class="contact-success">
							<div class="popup-image">
								<img src="<?php echo get_template_directory_uri()?>/assets/img/as-2.png" alt="">
							</div>
							<div class="popup-window">
								<div class="popup-content">
									<button class="btn close-btn" data-formstep="1" data-goto="1">
										<div class="line-wrapper">
												<span class="line-1"></span>
												<span class="line-2"></span>
										</div>
									</button>
									<!-- <button class="btn back-btn" data-formstep="1" data-goto="1">Назад</button> -->
									<h2 class="heading">Благодарю!</h2>
									<p class="sub-head">Ваше сообщение успешно отправлено.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div id="screen-2" class="screen-step screen-2">
							<div class="dream">
								<div class="nav-sub">
									<button class="btn back-btn" data-goto="1">Назад</button>
								</div>
								<h2 class="heading">Осуществление мечты</h2>
								<p class="sub-head">Для того, кто не хочет носить ведра...</p>
								<p class="simple-text">Притча о водопроводе - это замечательная иллюстрация двух подходов к осуществлению своих мечт.</p>
								<div class="link-block">
									<button class="btn linkto" data-goto="3"><span>Прочитать притчу</span></button>
									<button class="btn linkto" data-goto="6"><span>Посмотреть видео</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="screen-3" class="screen-step screen-3">
							<div class="info-text">
								<div class="nav-sub">
									<button class="btn back-btn" data-goto="2">Назад</button>
								</div>
								<div id="giveScroll" class="text-content">
									<h2 class="heading">Притча про водопровод</h2>
									<p>Однажды, давным-давно в небольшой итальянской деревушке жили по соседству двоюродные братья Пабло и Бруно, двое честолюбивых молодых парней.</p>
									<p>Они были лучшими друзьями, и большими мечтателями, могли непрерывно говорить о том, как когда-то станут самыми богатыми людьми в деревне. Не знали только, как это произойдет. Оба были быстрыми и готовы были тяжело работать. Все, что требовалось, это удобный случай, чтобы реализовать свои мечты.</p>
									<p>Однажды такой случай представился.</p>
									<p>В деревне решили нанять работников, которые бы носили речную воду и сливали в огромный бак. Работу предложили нашим героям.</p>
									<p>Оба ухватились за два ведра и поспешили в направлении реки. К концу дня бак был полностью наполнен. Староста деревни платил им один грош за каждое ведро воды.</p>
									<p>"Вот и исполнится наша мечта, — крикнул Бруно, — не могу поверить, что мы такие счастливые!" Но Пабло не был так в этом уверен. У него болели плечи, а на руках были мозоли от ношения тяжелых ведер. С нежеланием думал он о завтрашнем дне и о том, что нужно снова носить тяжелые ведра. Пабло поклялся сам себе, что придумает лучший способ доставки воды в деревню.</p>
									<p>"Бруно, у меня идея, — сказал Пабло на следующее утро, когда оба несли свои ведра, направляясь к реке,— вместо ношения этих ведер туда и обратно за гроши, давай проложим водопровод от реки до деревни".</p>
									<p>Бруно неожиданно остановился, как будто его молнией поразило. "Водопровод! Как тебе такое могло прийти в голову? — кричал Бруно, — имеем прекрасную работу, Пабло. Я могу перенести 100 ведер в день. Считая 1 грош за ведро, это 100 грошей в день. Я богат! К концу недели смогу купить себе новую обувь! В конце месяца куплю себе корову. Через шесть месяцев смогу построить себе новый дом. У нас самая лучшая работа в деревне. Мы имеем выходные дни и две недели платного отпуска. Мы обеспечены на всю жизнь. Забудь о своем водопроводе".</p>
									<p>Но Пабло не удалось так просто отговорить. С терпением он объяснил свой план лучшему другу. Пабло теперь уже пол дня носил ведра, а остальное время дня и выходные посвятил строительству своего водопровода. Он понимал, что тяжело будет выкопать ров в твердой, как скала, земле. Ввиду того, что платили ему определенную ставку за ведро, Пабло понимал, что его заработок в начале уменьшится. Давал себе отчет в том, что пройдет год, может быть два, прежде чем его водопровод станет оплачиваемой инвестицией. Но Пабло верил в свои мечты, поэтому принялся за работу.</p>
									<p>Бруно и остальные жители деревни начали над ним насмехаться, называя его "строителем трубопровода". Бруно, который зарабатывал почти в два раза больше Пабло, показывал всем с нескрываемой гордостью свои новые покупки: ослика с новым кожаным седлом, красивую одежду. Бруно построил двухэтажный дом и ел изысканные блюда в ресторане. Жители деревни называли его "господин Бруно" и приветствовали его, когда он угощал их в таверне, смеялись с его шуток.</p>
									<p>Когда Бруно лежал вечерами и в выходные дни в гамаке, Пабло копался в земле, прокладывая трубопровод. Первые несколько месяцев Пабло ничем не мог похвастаться. Работа была тяжелая, даже тяжелее той, которую выполнял Бруно, потому что Пабло работал вечерами и в выходные дни.</p>
									<p>Но он все время себе повторял, что завтрашние мечты создаются благодаря сегодняшним жертвам, копал день за днем, продвигаясь вперед сантиметр за сантиметром.</p>
									<p>"Не спеша, продвигаясь вперед",— повторял себе Пабло, делая замах киркой и вбивая ее в твердую как скала землю. Сантиметры начали превращаться в метры, потом следующие, 10...20... 100...</p>
									<p>"Все, что имеет цену в будущем, в начале очень трудное",— пробормотал, еле передвигая ногами после работы, возвращаясь в свой скромный дом. Мерой его успеха были каждодневные цели, которые он ставил и реализовывал, зная, что через некоторое время результаты значительно превысят те усилия, которые он в данный момент вкладывал.</p>
									<p>"Сконцентрируйся на заслуженной награде", — повторял Пабло, засыпая при отголосках смеха, которые доносились с деревенской таверны.</p>
									<p>"Сконцентрируйся на заслуженной награде"…</p>
									<p>Дни сменялись месяцами. Однажды Пабло обратил внимание, что его трубопровод на половину уже готов, это означает, что сейчас расстояние, которое он должен пройти, чтобы наполнить свои ведра, стало на половину короче! Пабло использовал свое свободное время для строительства трубопровода. День, когда работа должна быть завершена, приближался быстрыми темпами.</p>
									<p>Когда он отдыхал и присматривался как его старый друг, Бруно, носит ведра, Пабло обратил внимание на то, что осанка Бруно изменилась, лицо выражало боль, ходить тот стал медленнее по причине каждодневной рутины. Бруно был зол и подавлен тем, что обречен на ношение ведер до конца своей жизни.</p>
									<p>Бруно начал проводить меньше времени в гамаке, а больше в таверне. Когда его видел владелец таверны, говорил тихим голосом: "Идет Бруно, парень для ведер" и все хохотали, когда местный алкоголик копировал сгорбленную осанку Бруно и его тяжелую походку. Бруно уже никого не угощал и не рассказывал анекдотов. Он довольствовался одиночеством в темном углу, окруженный пустыми бутылками.</p>
									<p>Наконец-то наступил великий день Пабло — строительство водопровода было завершено!</p>
									<p>Жители деревни собрались посмотреть, как вода по трубопроводу наполняет бак.</p>
									<p>После того, как в деревне появились запасы свежей воды, люди с окрестных деревень начали переезжать туда, и таким образом, деревня начала разрастаться и процветать.</p>
									<p>В связи с тем, что трубопровод поставлял в деревню воду, Пабло не носил ее ведрами, это уже было не нужно. Вода текла теперь уже без его участия. Текла, когда он ел, когда спал, в выходные дни, когда развлекался. Чем больше воды натекало в бак, тем больше денег "натекало" в карманы Пабло!</p>
									<p>Пабло, строителя трубопровода, стали называть Пабло Чародей. Политики хвалили его за воображение и умоляли, чтобы выставил свою кандидатуру на местного старосту.</p>
									<p>Пабло понимал, что никакого чуда он не совершил. Это был только первый шаг к реализации большой мечты. Знаете, Пабло имел планы, которые выходили далеко за границу деревни, в которой жил.</p>
									<p>Пабло намеревался строить трубопровод во всем мире!</p>
									<p>Трубопровод исключил Бруно, "парня для ведер", из бизнеса. Пабло очень мучила совесть, когда видел своего старого друга, просящего, чтобы кто-то ему поставил алкогольный напиток, и поэтому он договорился с ним встретиться.</p>
									<p>— Бруно, я пришел к тебе за помощью.<br/>Бруно выпрямил свои плечи и, прищурив свои черные глаза, прорычал:</p>
									<p>— Не насмехайся надо мной.</p>
									<p>— Я не пришел сюда, чтобы хвастаться моим успехом, — сказал Пабло, — я пришел, чтобы предложить тебе хороший бизнес. Два года ушло на строительство моего первого трубопровода, но я многому за это время научился! Знаю, какие орудия труда использовать, где копать, как укладывать трубы. Все это время я делал записи, и мне удалось разработать систему, которая поможет мне построить следующий трубопровод, а потом следующий, и следующий.</p>
									<p>Я сам мог бы проложить один трубопровод в год, но это не было бы самое лучшее использование моего времени. То, что хочу сделать, это научить тебя и других прокладывать трубопровод, а вы, в свою очередь, будете учить других. И те будут учить.</p>
									<p>И в конце, во всех деревнях в этом районе будет трубопровод. А потом каждая деревня в стране будет иметь трубопровод и все деревни во всем мире будут его иметь!</p>
									<p>— Только подумай, — продолжал Пабло, — мы могли бы зарабатывать малый процент от каждого литра воды, который течет по этому трубопроводу. Чем больше воды потечет по трубам, тем больше денег "потечет" в наши карманы. Трубопровод, который я проложил, это не конец моих мечтаний. Это только начало!</p>
									<p>Бруно наконец-то понял эту великую идею. Усмехнулся и протянул руку своему другу. Пожали себе руки и обнялись как друзья, которые не виделись много лет.</p>
									<p>Прошло много лет.</p>
									<p>Пабло и Бруно уже давно на пенсии. Их трубопровод и далее "перекачивает" миллионы долларов в год на их банковские счета. Иногда, где-то проезжая, они видели молодых людей, несущих ведра с водой.</p>
									<p>Наши герои тогда задерживались и рассказывали им свою историю, предлагая помощь в строительстве их собственного трубопровода. Не многим хотелось их слушать и использовать возможность создания своего собственного бизнеса. К сожалению, большинство из тех, кто носил ведра, отвергали идею трубопровода. Пабло и Бруно часто слышали одни и те же отговорки.</p>
									<p>"Нет времени".
										"Мой знакомый мне говорил, что его знакомый имеет знакомого, который пробовал прокладывать трубопровод, и это у него не получилось".
										"Только тот, кто в начале вошел в этот бsзнес, зарабатывает деньги".
										"Всю жизнь носил ведра и не собираюсь что-то менять".
										"Знаю тех, кто потерял все деньги в этом бизнесе. Я не хочу быть обманутым".
									Пабло и Бруно было грустно видеть людей, которым не хватало воображения.</p>
									<p>Но оба смирились с тем, что живут в мире, в котором носятся ведра…</p>
									<p>Только небольшой процент людей осмеливаются мечтать о строительстве собственного водопровода.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div id="screen-6" class="screen-step screen-6">
							<div class="dream">
								<div class="nav-sub">
									<button class="btn back-btn" id="closevideotoo" data-goto="2">Назад</button>
								</div>
								<div class="video-container">
								<div id="youtubevideo"></div>
									<!-- <iframe width="560" height="360" src="https://www.youtube.com/embed/XAeEl0EHCk4" frameborder="0" enablejsapi="1" allowfullscreen id="youtubevideo"></iframe> -->
								</div>
								<div class="btn-wrapper">
									<button class="btn next-btn active" data-goto="4">Подробнее о предложении</button>
								</div>
								<script src="//www.youtube.com/player_api"></script>
								<script>
									      // 2. This code loads the IFrame Player API code asynchronously.
									      var tag = document.createElement('script');

									      tag.src = "https://www.youtube.com/iframe_api";
									      var firstScriptTag = document.getElementsByTagName('script')[0];
									      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

									      // 3. This function creates an <iframe> (and YouTube player)
									      //    after the API code downloads.
									      var player;
									      function onYouTubeIframeAPIReady() {
									        player = new YT.Player('youtubevideo', {
									          width: 560,
									          height: 360,
									          videoId: 'XAeEl0EHCk4',
									          events: {
									            'onReady': onPlayerReady
									          }
									        });
									      }

									function onPlayerReady(event) {
									  
									  var pauseButton = document.getElementById("closevideotoo");
									  pauseButton.addEventListener("click", function() {
									    player.pauseVideo();
									  });
									  
									}
								</script>
							</div>
						</div>
					</div>
				</div>
			<div class="row">
				<div class="col-md-offset-1 col-md-11">
					<div id="screen-4" class="screen-step screen-4">
						<div class="popup-image one">
							<img src="<?php echo get_template_directory_uri()?>/assets/img/as-3.png" alt="">
						</div>
						<div class="popup-image two">
							<img src="<?php echo get_template_directory_uri()?>/assets/img/as-4.png" alt="">
						</div>
						<div class="wrapper-for-center">
						  <div class="countdown-el">
						  	<div class="heading-text">
						  	  <h3>Старт через</h3>
						  	</div>
						  	<div id="time-wrapper">
						  	  <div class="row">
						  	  	
						  	  </div>
						  	</div>
						  </div>
						</div>
						<div class="popup-window two">
							<div class="popup-content">
								<button class="btn close-btn" data-formstep="1" data-goto="1">
									<div class="line-wrapper">
											<span class="line-1"></span>
											<span class="line-2"></span>
									</div>
								</button>
								<!-- <button class="btn back-btn" data-formstep="1" data-goto="1">Назад</button> -->
								<h2 class="heading">Благодарим за интерес!</h2>
								<p class="sub-head">На данное время <br/>проект на стадии открытия</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
</div>
<?php get_footer (); ?>