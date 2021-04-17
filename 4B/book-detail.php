<?php
// Cek id
if (!isset($_GET['id']) && !empty($_GET['id'])) {
  header('Location: index.php');
  die();
}

// var_dump('test');
// die();

// Menyimpan id kedalam variabel
$id = $_GET['id'];

$get_book_query = mysqli_query($db, "SELECT a.id AS book_id, a.name AS book_name, a.publication_year, a.img, b.id AS cat_id, b.name as cat_name, c.id AS author_id, c.name AS author_name FROM book_tb a INNER JOIN category_tb b ON a.category_id = b.id INNER JOIN writer_tb c ON a.writer_id = c.id WHERE a.id = '$id';");

if (mysqli_num_rows($get_book_query) <= 0) {
  header('Location: index.php');
}
$res = mysqli_fetch_assoc($get_book_query);
?>

<h2>Detail Book</h2>
<hr>
<br><br>
<div class="detail-book-wrapper">
  <div class="cover">
    <img src="img/<?php echo $res['img'];?>" alt="Image">
  </div>
  <br>
  <div class="body">
    <div class="list-info">
      <table class="detail-book-table">
        <tr>
          <td style="width: 150px;"><b>ID</b></td>
          <td style="width:10px">:</td>
          <td><?php echo $res['book_id'];?></td>
        </tr>
        <tr>
          <td><b>NAMA</b></td>
          <td>:</td>
          <td><?php echo $res['book_name'];?></td>
        </tr>
        <tr>
          <td><b>KATEGORI</b></td>
          <td>:</td>
          <td><?php echo $res['cat_name'];?></td>
        </tr>
        <tr>
          <td><b>PENULIS</b></td>
          <td>:</td>
          <td><?php echo $res['author_name'];?></td>
        </tr>
        <tr>
          <td><b>TAHUN TERBIT</b></td>
          <td>:</td>
          <td><?php echo $res['publication_year'];?></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td style="float:right;">
            <a style="background: #d34f4f;" href="?hal=delete-book&id=<?php echo $res['book_id']; ?>">Delete</a>
            <a style="background: #b3b31c;" href="?hal=edit-book&id=<?php echo $res['book_id'];?>">Edit</a>
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>