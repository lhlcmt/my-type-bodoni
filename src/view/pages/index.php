  <div class="infinite-scroll">
    <div class="infinite-scroll-1">
      <div class="infinite-scroll-2">
        <h1  class="infinite-scroll-text">The use of Bodoni • The use of Bodoni • The use of Bodoni • The use of Bodoni •</h1>
      </div>
    </div>
  </div>

<section class="content">

  <div class="bodoni-top">
    <div class="bodoni-top-element">
      <p class="bodoni-top-element-title title1">Bodoni</p>
      <div class="bodoni-top-element-style">
        <div class="bodoni-top-line"></div>
        <p class="bodoni-top-element-style-text">ver.1 light</p>
      </div>
    </div>
    <div class="bodoni-top-element">
      <p class="bodoni-top-element-title title2">Bodoni</p>
      <div class="bodoni-top-element-style">
        <div class="bodoni-top-line"></div>
        <p class="bodoni-top-element-style-text">ver.2 regular oblique</p>
      </div>
    </div>
    <div class="bodoni-top-element">
      <p class="bodoni-top-element-title title3">Bodoni</p>
      <div class="bodoni-top-element-style">
        <div class="bodoni-top-line"></div>
        <p class="bodoni-top-element-style-text">ver.1 medium</p>
      </div>
    </div>
  </div>

  <div class="issue">
    <p class="issue-number">issue 39</p>
    <img class="issue-barcode" src="./assets/barcode-bodoni.png" alt="barcode bodoni" height="49">
  </div>

  <div class="basic-info">
    <div class="basic-info-text">
      <ul class="basic-info-category">
          <li>inventor:</li>
          <li>birthdate:</li>
          <li>classification:</li>
      </ul>
      <ul class="basic-info-expl">
          <li>Giambattista Bodoni</li>
          <li>1798</li>
          <li>Didone</li>
      </ul>
    </div>
  </div>

  <?php foreach($main_texts as $main_text): ?>
      <?php echo $main_text['title']; ?>
      <div class="main-content-div"><?php echo $main_text['text']; ?></div>
    </div>
  <?php endforeach; ?>

  <div class="bodoni-characteristics">
    <div class="bodoni-char-top">
      <div class="bodoni-char-line"></div>
      <p class="bodoni-char-top-text">The anatomy of bodoni</p>
    </div>
    <div class="map-anatomy">
      <img class="anatomy-img" src="./assets/typographical.png" alt="typographical image" width="200">
      <div class="circle circle1"></div>
      <div class="circle circle2"></div>
      <div class="circle circle3"></div>
      <div class="circle circle4"></div>
      <div class="circle circle5"></div>
    </div>
    <ul class="bodoni-char-list">
      <li class="bodoni-char-list-item"><p class="bodoni-list-text">high contrast</p><div style="opacity:0%" class="bodoni-list-line line1"></div></li>
      <li class="bodoni-char-list-item"><p class="bodoni-list-text">horizontal stress</p><div  style="opacity:0%"class="bodoni-list-line line2"></div></li>
      <li class="bodoni-char-list-item"><p class="bodoni-list-text">vertical axis</p><div style="opacity:0%" class="bodoni-list-line line3"></div></li>
      <li class="bodoni-char-list-item"><p class="bodoni-list-text">abrupt hairline serif</p><div style="opacity:0%" class="bodoni-list-line line4"></div></li>
      <li class="bodoni-char-list-item"><p class="bodoni-list-text">perpendicular nature</p><div style="opacity:0%" class="bodoni-list-line line5"></div></li>
    </ul>
  </div>

    <div class="quote1">
    <p class="quote-text">Bodoni has been known for having that -very expensive- feel to it.</p>
  </div>

  <div class="bodoni-seen-in">
    <?php foreach($seen_in_imgs as $seen_in_img):?>
      <div class='seen-in-img-container parallax-bg' data-speed="1.7" >
        <?php echo $seen_in_img['path']; ?>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="bodoni-variations">
    <?php foreach($var_svgs as $var_svg): ?>
      <div class="bodoni-variations-item parallax-bg" data-speed=".8">
        <?php echo $var_svg['path']; ?>
        <div class="variation-line"></div>
        <?php echo $var_svg['name']; ?>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="gif1"><lottie-player src="./assets/bodoni-stretch-lottie.json" speed="1"  style="width: 100%; height: 100%;" hover loop  autoplay></lottie-player></div>
  <div class="gif2"><lottie-player src="./assets/bodoni-versions-lottie.json"  speed="1"  style="width: 100%; height: 100%;" hover loop  autoplay></lottie-player></div>
  <div class="gif3"><lottie-player src="./assets/bodoni-wriggle-lottie.json" speed="1"  style="width: 100%; height: 100%;" hover loop  autoplay></lottie-player></div>
  <div class="gif4"></div>

  <div class="quote2">
    <p class="quote-text typewriter">Numerous typographers and designers redesigning Bodoni proves how timeless the font really is.</p>
  </div>

</section>

  <div class="infinite-scroll">
    <div class="infinite-scroll-1">
      <div class="infinite-scroll-2">
        <h1  class="infinite-scroll-text">The use of Bodoni • The use of Bodoni • The use of Bodoni • The use of Bodoni •</h1>
      </div>
    </div>
  </div>


