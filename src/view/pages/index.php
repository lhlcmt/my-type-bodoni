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
    <img class="basic-info-img" src="./assets/portrait-giambattista.gif" alt="giambattista gif" width="100%">
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
      <p class="main-text-expl"><?php echo $main_text['text']; ?></p>
    </div>
  <?php endforeach; ?>

  <div class="bodoni-variations">
    <?php foreach($var_svgs as $var_svg): ?>
      <div class="bodoni-variations-item">
        <?php echo $var_svg['path']; ?>
        <div class="variation-line"></div>
        <?php echo $var_svg['name']; ?>
    </div>
    <?php endforeach; ?>
  </div>

</section>

  <div class="infinite-scroll">
    <div class="infinite-scroll-1">
      <div class="infinite-scroll-2">
        <h1  class="infinite-scroll-text">The use of Bodoni • The use of Bodoni • The use of Bodoni • The use of Bodoni •</h1>
      </div>
    </div>
  </div>
