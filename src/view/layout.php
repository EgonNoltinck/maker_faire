<!DOCTYPE html>
<html lang="nl-BE">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Makerfaire">

    <title>Makerfaire - <?php echo $title; ?></title>
    <?php echo $css;?>
  </head>
  <body>
    <div class="container">
      <header class="header">
        <h1>Header</h1>
      </header>
      <main>
        <?php echo $content; ?>
      </main>
    </div>
    <?php echo $js; ?>
  </body>
</html>
