<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./assets/slanted-logo-small.png" >
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <?php echo $css; ?>
    <title>the use of Bodoni</title>
</head>
<body>

    <nav class="navigation">
        <a href="https://www.slanted.de/" target="_blank"><img class="slanted-logo-big" src="assets/slanted-logo.svg" height="32" alt="slanted big logo"></a>
        <div class="line"></div>
        <ul class="nav-list">
            <li><a class="link" href="#origin">ORIGIN</a></li>
            <li><a class="link" href="#use">USE</a></li>
            <li><a class="link" href="#variations">VARIATIONS</a></li>
            <li><a class="link" href="#today">TODAY</a></li>
        </ul>
    </nav>

      <?php echo $content;?>

    <footer class="navigation-footer">
        <a href="https://www.slanted.de/" target="_blank"><img class="slanted-logo-small" src="assets/slanted-logo-small.png" height="93" alt="slanted small logo"></a>
        <ul class="footer-nav">
            <li><a class="footer-nav-item" href="#origin">ORIGIN</a></li>
            <li><a class="footer-nav-item" href="#use">USE</a></li>
            <li><a class="footer-nav-item" href="#variations">VARIATIONS</a></li>
            <li><a class="footer-nav-item" href="#today">TODAY</a></li>
        </ul>
        <a href="https://lhlcmt.com/" target="_blank" class="lhlcmt-mark">made with <img src="assets/heart-icon.svg" height="8" alt="love"> by lhlcmt</a>
    </footer>

  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <?php echo $js; ?>

</body>
</html>
