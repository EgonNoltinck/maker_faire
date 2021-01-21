<!DOCTYPE html>
<html lang="nl-BE">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Makerfaire - <?php echo $title; ?></title>
    <?php echo $css;?>
  </head>
  <body>
    <div class="container">
      <header class="header">
        <nav class="header_nav">
          <ul class="header_item">
            <li class="header_items"><a class="header_items--link" href="index.php"><img class="logo" src="./assets/img/logo.png" alt="logo"></a></li>
            <li class="header_items"><a class="header_items--link" href="index.php">Home</a></li>
            <li class="header_items"><a class="header_items--link" href="index.php?page=about">Over ons</a></li>
            <li class="header_items"><a class="header_items--link" href="index.php?page=shop">Winkel</a></li>
            <li class="header_items"><a class="header_items--link" href="index.php?page=tutorial">Tutorial</a></li>
          </ul>
        </nav>
      </header>
      <div class="hidden empty"></div>
    </div>
      <main>
        <?php echo $content; ?>
      </main>
    <?php echo $js; ?>
  </body>
</html>
