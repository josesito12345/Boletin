<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <link href="styles.css?v=<?php echo(rand()); ?>" rel="stylesheet" type="text/css"/>  
    <script type="text/javascript" src="../js/script.js?v=<?php echo(rand()); ?>"></script>
  </head>
  <body>
      <?php
      session_start();
      echo "Rol de Usuario: ".$_SESSION['rol'];
      // put your code here
      ?>
    <header>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a>
            <ul>
              <li><a href="#">Our Team</a></li>
              <li><a href="#">Our Story</a></li>
            </ul>
          </li>
          <li><a href="#">Services</a>
            <ul>
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Graphic Design</a></li>
              <li><a href="#">SEO</a></li>
            </ul>
          </li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </header>
  </body>
</html>
