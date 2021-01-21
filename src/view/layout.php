<!DOCTYPE html>
<html lang="nl-BE">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.css" integrity="sha512-8M8By+q+SldLyFJbybaHoAPD6g07xyOcscIOQEypDzBS+sTde5d6mlK2ANIZPnSyxZUqJfCNuaIvjBUi8/RS0w==" crossorigin="anonymous" />

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.js" integrity="sha512-Gx/C4x1qubng2MWpJIxTPuWch9O88dhFFfpIl3WlqH0jPHtCiNdYsmJBFX0q5gIzFHmwkPzzYTlZC/Q7zgbwCw==" crossorigin="anonymous"></script>
    <script type="text/javascript">
	var myFullpage = new fullpage('#fullpage', {
		sectionsColor: ['#f2f2f2', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff']
	});
</script>
  </body>
</html>
