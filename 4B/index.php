<?php
  include 'config.php';

  if (isset($_GET['hal']) && !empty($_GET['hal'])) $hal = $_GET['hal'];
  else $hal = "home"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dumb Library</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <div class="container">
      <section>
        <h1><a href="index.php">Dumb Library</a></h1>
      </section>
      <nav>
        <ul>
          <a href="?hal=add-book">
            <li>Add Book</li>
          </a>
          <a href="?hal=add-writer">
            <li>Add Writer</li>
          </a>
          <a href="?hal=add-category">
            <li>Add Category</li>
          </a>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <div class="container">
      <section>
          <?php include "konten.php"; ?>
      </section>
    </div>
  </main>
  <footer>
    <span>
      Copyright &copy; 2021 DumbLibrary.com Designed By Ikhsan
    </span>
  </footer>
</body>

</html>