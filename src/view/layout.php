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
    <div class="banner" style="display: flex; align-items: center; justify-content: space-between; background: black; color: white; position: fixed; top: 0; left: 0; width: 100%; padding: 0.5em; font-size: 12px; font-family: sans-serif;"><span>This is a fictional project, a student assignment for the Bachelor's degree <a href="https://devine.be" style="color: white;">Devine</a></span><button style="border: 0; padding: 0; background: black; color: white; margin: 0 0.5em; padding: 0 0.5em; cursor: pointer; font-size: 12px; " onclick="(function(btn){btn.parentNode.style.display='none'; localStorage.setItem('hide-devine-student-project-banner', '1'); return false;})(this);return false;">x</button><script>if (localStorage.getItem('hide-devine-student-project-banner') === '1') document.currentScript.parentNode.style.display = 'none';</script></div>

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
    </div>
    <?php echo $js; ?>

  </body>
</html>
