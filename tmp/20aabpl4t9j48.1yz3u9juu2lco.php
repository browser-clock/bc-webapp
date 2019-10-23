<!DOCTYPE html>
<html lang="en">
  <head>
    <title>00:00:00</title>
    <meta charset="utf-8" />
    <meta
      name="description"
      content="See the current time right in you're favourite tool - the browser"
    />
    <link rel="stylesheet" href="./src/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="https://raw.githubusercontent.com/browser-clock/assets/master/logo/v1.0.0/ico/48x48.ico">
  </head>
  <body>
    <?php echo $this->render('utils/github-corner.html.php',NULL,get_defined_vars(),0); ?>
    <?php echo $this->render('widgets/clock-face.html.php',NULL,get_defined_vars(),0); ?>
    <span class="copy">&copy; <a href="mailto:johannes@przymusinski.de">Johannes Stephan Przymusinsk</a>, 2019</span>
  </body>
  <script src="./src/main.js" ></script>
</html>
