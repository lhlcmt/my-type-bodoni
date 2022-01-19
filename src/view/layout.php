<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php echo $css; ?>
    <title>the use of Bodoni</title>
</head>
<body>
    <nav class="navigation">
        <img class="slanted-logo-big" src="assets/slanted-logo.svg" height="32" alt="slanted big logo">
        <div class="line"></div>
        <ul class="nav-list">
            <li><a class="link" href="#origin">ORIGIN</a></li>
            <li><a class="link" href="#use">USE</a></li>
            <li><a class="link" href="#variations">VARIATIONS</a></li>
            <li><a class="link" href="#today">TODAY</a></li>
        </ul>
    </nav>

      <?php echo $content;?>


    <footer>
        <ul>
            <li><a href="#origin">origin</a></li>
            <li><a href="#use">use</a></li>
            <li><a href="#variations">variations</a></li>
            <li><a href="#today">today</a></li>
        </ul>
        <img src="assets/slanted-logo-small.png" height="70" alt="slanted small logo">
        <p>made with <img src="assets/heart-icon.svg" height="10" alt="love"> by lhlcmt</p>
    </footer>

  <?php echo $js; ?>
</body>
</html>
