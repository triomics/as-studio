<?php get_header (); ?>

<?php get_sidebar(); ?> <!-- include sidebar -->

<div class="col-md-9">

<!-- all right(from .psd template) content here -->
<div id="frontpage-carousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <ul id="front-1" class="parallax-item cta-left">
        <li class="layer" data-depth="0.20"><img src="wp-content/themes/as-studio/assets/img/2.png"></li>
        <li class="layer" data-depth="0.30">
          <div class="cta-block">
            <p>Разработка<br> сайтов</p>
            <button class="btn cta"><a href="#">Заказать</a></button>
          </div>
        </li>
      </ul>
    </div>
    <div class="item">
      <ul id="front-2" class="parallax-item cta-right">
        <li class="layer" data-depth="0.20"><img src="wp-content/themes/as-studio/assets/img/2.png"></li>
        <li class="layer" data-depth="0.30">
          <div class="cta-block">
            <p>Разработка<br> сайтов</p>
            <button class="btn cta"><a href="#">Заказать</a></button>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#frontpage-carousel" role="button" data-slide="prev">
    <span class="as-arow-left" aria-hidden="true"></span>
  </a>
  <a class="right carousel-control" href="#frontpage-carousel" role="button" data-slide="next">
    <span class="as-arow-right" aria-hidden="true"></span>
  </a>
</div>
</div>

<?php get_footer (); ?>