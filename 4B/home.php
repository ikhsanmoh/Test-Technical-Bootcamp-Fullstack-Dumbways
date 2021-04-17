<?php
  $query = mysqli_query($db, "SELECT a.id AS book_id, a.name AS book_name, a.publication_year, a.img, b.id AS cat_id, b.name as cat_name, c.id AS author_id, c.name AS author_name FROM book_tb a INNER JOIN category_tb b ON a.category_id = b.id INNER JOIN writer_tb c ON a.writer_id = c.id ORDER BY book_id;");
?>
<h2>Book List</h2>
<hr>
<br><br>
<div class="books-wrapper">

  <?php

    if (mysqli_num_rows($query) <= 0) {
      echo '<h3>No Data Found!</h3>';
    } else {
      while ($res = mysqli_fetch_assoc($query)) {
        echo '
          <div class="card">
            <div class="header">
              <img src="img/'.$res['img'].'" alt="Image">
            </div>
            <div class="body">
              <p>'.$res['book_name'].'</p>
            </div>
            <div class="footer">
              <a href="?hal=book-detail&id='.$res['book_id'].'">View Detail</a>
            </div>
          </div>
        '; 
      }
    }
  ?>
</div>