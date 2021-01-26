<!DOCTYPE html>
<html lang="nl-BE">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Montserrat:wght@800&family=Playfair+Display&display=swap" rel="stylesheet">
<style>@import url("https://use.typekit.net/sgn7opp.css");</style>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.css" integrity="sha512-8M8By+q+SldLyFJbybaHoAPD6g07xyOcscIOQEypDzBS+sTde5d6mlK2ANIZPnSyxZUqJfCNuaIvjBUi8/RS0w==" crossorigin="anonymous" /> -->

    <title>Makerfaire</title>
    <?php echo $css;?>
  </head>
  <body>
    <div class="">
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
      <main class="main_container">
        <?php echo $content; ?>

      </main>
        <nav class="mobile_nav">
          <ul class="mobile_nav_item">
            <div class="mobile_icons">
              <li class="mobile_nav_items"><a class="header_items--link" href="index.php"><img class="nav_icon" src="./assets/img/SVG/home_icon.svg" alt="home_icon"></a></li>
            </div>
            <div class="mobile_icons">
              <li class="mobile_nav_items"><a class="header_items--link" href="index.php?page=about"><img class="nav_icon" src="./assets/img/SVG/about_icon.svg" alt="about_icon"></a></li>
            </div>
            <div class="mobile_icons">
              <li class="mobile_nav_items"><a class="header_items--link" href="index.php?page=shop"><img class="nav_icon" src="./assets/img/SVG/shop_icon.svg" alt="shop_icon"></a></li>
            </div>
            <div class="mobile_icons">
              <li class="mobile_nav_items"><a class="header_items--link" href="index.php?page=tutorial"><img class="nav_icon" src="./assets/img/SVG/tutorial_icon.svg" alt="tutorial_icon"></a></li>
            </div>
          </ul>
      </nav>
    </div> <!-- fixed en block -->
    <?php echo $js; ?>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.js" integrity="sha512-Gx/C4x1qubng2MWpJIxTPuWch9O88dhFFfpIl3WlqH0jPHtCiNdYsmJBFX0q5gIzFHmwkPzzYTlZC/Q7zgbwCw==" crossorigin="anonymous"></script> -->
    <!-- <script type="text/javascript">
	var myFullpage = new fullpage('#fullpage', {
		sectionsColor: ['#f2f2f2', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff']
	});
</script> -->
  </body>
</html>
