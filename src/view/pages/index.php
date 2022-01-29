  <div class="infinite-scroll">
    <div class="infinite-scroll-1">
      <div class="infinite-scroll-2">
        <h1  class="infinite-scroll-text">The use of Bodoni • The use of Bodoni • The use of Bodoni • The use of Bodoni • The use of Bodoni • The use of Bodoni •The use of Bodoni • The use of Bodoni •</h1>
      </div>
    </div>
  </div>

<section class="content">

  <div class="empty1"></div>
  <div class="empty2"></div>
  <div class="empty3"></div>
  <div class="empty4"></div>

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
        <p class="bodoni-top-element-style-text">ver.3 bold</p>
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

  <div class="widths">
    <p class="width-letter">i</p>
    <p class="width-letter">n</p>
    <p class="width-letter">o</p>
    <p class="width-letter">d</p>
    <p class="width-letter">o</p>
    <p class="width-letter">B</p>
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
        <div class="circle circle1"><p class="circle-text">1</p></div>
        <div class="circle circle2"><p class="circle-text">2</p></div>
        <div class="circle circle3"><p class="circle-text">3</p></div>
        <div class="circle circle4"><p class="circle-text">4</p></div>
        <div class="circle circle5"><p class="circle-text">5</p></div>
    </div>
    <ul class="bodoni-char-list">
      <li class="bodoni-char-list-item"><p class="line-text">1</p><p class="bodoni-list-text">high contrast</p><div class="bodoni-list-line line1"></div></li>
      <li class="bodoni-char-list-item"><p class="line-text">2</p><p class="bodoni-list-text">horizontal stress</p><div class="bodoni-list-line line2"></div></li>
      <li class="bodoni-char-list-item"><p class="line-text">3</p><p class="bodoni-list-text">vertical axis</p><div class="bodoni-list-line line3"></div></li>
      <li class="bodoni-char-list-item"><p class="line-text">4</p><p class="bodoni-list-text">abrupt hairline serif</p><div class="bodoni-list-line line4"></div></li>
      <li class="bodoni-char-list-item"><p class="line-text">5</p><p class="bodoni-list-text">perpendicular nature</p><div class="bodoni-list-line line5"></div></li>
    </ul>
  </div>

  <div class="hover-double">
    <div class="titles">
      <p class="title-1">N.1<br>in<br>elegance</p>
      <p class="title-2">N.1<br>in<br>elegance</p>
    </div>
  </div>

  <div class="quote1">
    <p class="quote-text">Bodoni has been known for having that -very expensive- feel to it.</p>
  </div>

  <div class="bodoni-seen-in">
    <?php foreach($seen_in_imgs as $seen_in_img):?>
      <div class='seen-in-img-container parallax-bg' data-speed="1.5" >
        <?php echo $seen_in_img['path']; ?>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="effect-3d">
    <p class="effect-title">Manuale<br> Tipografico</p>
    <div class="effect-info">
      <ul class="basic-info-category">
          <li>writer:</li>
          <li>published:</li>
          <li>pages:</li>
      </ul>
      <ul class="basic-info-expl">
          <li>Giambattista Bodoni</li>
          <li>1818</li>
          <li>600</li>
      </ul>
    </div>
    <img data-tilt data-base="window" class="foreground-image tilt" src="./assets/3d-foreground.png" alt="3d foreground image" height="50">
  </div>

  <div class="rules-bodoni">
    <p class="arrow">&#9660;</p>
    <p class="rules-title">Rules of the 'Manuale Tipografico'</p>
    <ul class="bodoni-rules">
     <li class="bodoni-rule"><p class="bodoni-rules-title">regularity:</p><p class="bodoni-rules-text">all letters must be constructed on a common base which defines them</p></li>
     <li class="bodoni-rule"><p class="bodoni-rules-title">clarity:</p><p class="bodoni-rules-text">letters must be highly legible</p></li>
     <li class="bodoni-rule"><p class="bodoni-rules-title">good taste:</p><p class="bodoni-rules-text">letters must fulfil their task without excessive affectations</p></li>
     <li class="bodoni-rule"><p class="bodoni-rules-title">beauty:</p><p class="bodoni-rules-text">letters must be created with care and attention necessary without a time limit</p></li>
    </div>
    </ul>

  <div class="biggif"></div>

  <div class="bodoni-variations">
    <?php foreach($var_svgs as $var_svg): ?>
      <div class="bodoni-variations-item parallax-bg" data-speed=".8">
        <?php echo $var_svg['path']; ?>
        <div class="variation-line"></div>
        <?php echo $var_svg['name']; ?>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="gif1"><lottie-player src="./assets/bodoni-double-lottie.json" speed="1" style="width: 100%; height: 100%;" loop  autoplay></lottie-player></div>
  <div class="gif2"><lottie-player src="./assets/bodoni-versions-lottie.json" speed="1" style="width: 100%; height: 100%;" loop  autoplay></lottie-player></div>
  <div class="gif3"><lottie-player src="./assets/bodoni-wriggle-lottie.json" speed="1" style="width: 100%; height: 100%;" loop  autoplay></lottie-player></div>
  <div class="gif4"><lottie-player src="./assets/bodoni-stretch-lottie.json" speed="1" style="width: 100%; height: 100%;" loop  autoplay></lottie-player></div>

  <div class="quote2">
    <p class="quote-text typewriter">Numerous typographers and designers redesigning Bodoni proves how timeless the font really is.</p>
  </div>

  <div class="keys">
    <ul class="keys-letters">
      <li class="key-l">A</li><li class="key-l">B</li><li class="key-l">C</li><li class="key-l">D</li><li class="key-l">E</li><li class="key-l">F</li>
      <li class="key-l">G</li><li class="key-l">H</li><li class="key-l">I</li><li class="key-l">J</li><li class="key-l">K</li><li class="key-l">L</li>
      <li class="key-l">M</li><li class="key-l">N</li><li class="key-l">O</li><li class="key-l">P</li><li class="key-l">Q</li><li class="key-l">R</li>
      <li class="key-l">S</li><li class="key-l">T</li><li class="key-l">U</li><li class="key-l">V</li><li class="key-l">W</li><li class="key-l">X</li>
      <li class="key-l">Y</li><li class="key-l">Z</li>

      <li class="key-l">a</li><li class="key-l">b</li><li class="key-l">c</li><li class="key-l">d</li><li class="key-l">e</li><li class="key-l">f</li>
      <li class="key-l">g</li><li class="key-l">h</li><li class="key-l">i</li><li class="key-l">j</li><li class="key-l">k</li><li class="key-l">l</li>
      <li class="key-l">m</li><li class="key-l">n</li><li class="key-l">o</li><li class="key-l">p</li><li class="key-l">q</li><li class="key-l">r</li>
      <li class="key-l">s</li><li class="key-l">t</li><li class="key-l">u</li><li class="key-l">v</li><li class="key-l">w</li><li class="key-l">x</li>
      <li class="key-l">y</li><li class="key-l">z</li>

      <li class="key-l">æ</li><li class="key-l">ê</li><li class="key-l">œ</li><li class="key-l">î</li><li class="key-l">ë</li><li class="key-l">µ</li>
      <li class="key-l">â</li><li class="key-l">∂</li><li class="key-l">π</li><li class="key-l">È</li><li class="key-l">ƒ</li><li class="key-l">Ò</li>
      <li class="key-l">Ú</li><li class="key-l">Ï</li><li class="key-l">ﬁ</li><li class="key-l">ç</li><li class="key-l">§</li>

      <li class="key-l">1</li><li class="key-l">2</li><li class="key-l">3</li><li class="key-l">4</li><li class="key-l">5</li><li class="key-l">6</li>
      <li class="key-l">7</li><li class="key-l">8</li><li class="key-l">9</li>

      <li class="key-l">!</li><li class="key-l">?</li><li class="key-l">+</li><li class="key-l">-</li><li class="key-l">*</li><li class="key-l">/</li>
      <li class="key-l">=</li><li class="key-l">≈</li><li class="key-l">;</li><li class="key-l">:</li><li class="key-l">@</li><li class="key-l">#</li>
      <li class="key-l">&</li><li class="key-l">(</li><li class="key-l">{</li><li class="key-l">[</li><li class="key-l">%</li>
    </ul>
  </div>

  <div class="layers">
    <p class="layer-hidden">Bodoni</p>
    <p class="layers-text">Bodoni</p>
    <p class="layers-text">Bodoni</p>
    <p class="layers-text">Bodoni</p>
    <p class="layers-text">Bodoni</p>
  </div>

  <div class="bodoni-future">
    <p class="typewriter-text">Bodoni  is without a doubt synonymous with creation and artistic ability and will always be relevant in the world of fonts.</p>
  </div>

</section>

  <div class="infinite-scroll">
    <div class="infinite-scroll-1">
      <div class="infinite-scroll-2">
        <h1  class="infinite-scroll-text">The use of Bodoni • The use of Bodoni • The use of Bodoni • The use of Bodoni • The use of Bodoni • The use of Bodoni • The use of Bodoni • The use of Bodoni •</h1>
      </div>
    </div>
  </div>


