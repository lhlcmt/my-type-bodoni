<section class="content">

  <div class="infinite-scroll">
    <div class="infinite-scroll-1">
      <div class="infinite-scroll-2">
        <h1  class="infinite-scroll-text">The use of Bodoni • The use of Bodoni • The use of Bodoni • The use of Bodoni •</h1>
      </div>
    </div>
  </div>

  <div>
      <ul>
          <li>inventor:</li>
          <li>birthdate:</li>
          <li>classification:</li>
      </ul>
      <ul>
          <li>Giambattista Bodoni</li>
          <li>1798</li>
          <li>Didone</li>
      </ul>
  </div>

  <?php foreach($main_texts as $main_text): ?>
      <?php echo $main_text['title']; ?>
      <p><?php echo $main_text['text']; ?></p>
  <?php endforeach; ?>

  <ul class="bodoni-variations">
    <?php foreach($var_svgs as $var_svg): ?>
      <li class="bodoni-variations-item">
        <?php echo $var_svg['path']; ?>
        <div class="variation-line"></div>
        <?php echo $var_svg['name']; ?>
      <li>
    <?php endforeach; ?>
  </ul>

<div class="infinite-scroll">
    <div class="infinite-scroll-1">
      <div class="infinite-scroll-2">
        <h1  class="infinite-scroll-text">The use of Bodoni • The use of Bodoni • The use of Bodoni • The use of Bodoni •</h1>
      </div>
    </div>
  </div>

</section>
