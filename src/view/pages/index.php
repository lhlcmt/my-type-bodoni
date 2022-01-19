<section class="content">
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
</section>
