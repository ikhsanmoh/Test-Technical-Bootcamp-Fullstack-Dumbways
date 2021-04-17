<?php
// Cek id yg akan di update
if (!isset($_GET['id']) && !empty($_GET['id'])) {
  header('Location: index.php?hal=add-category');
  die();
}

// Menyimpan id yg akan diupdate kedalam variabel
$id = $_GET['id'];

$get_cat_query = mysqli_query($db, "SELECT * FROM category_tb WHERE id='$id';");

if (mysqli_num_rows($get_cat_query) <= 0) {
  header('Location: index.php?hal=add-category');
}

$res = mysqli_fetch_assoc($get_cat_query);

?>
<h2>Edit Category</h2>
<hr>
<br><br>
<form action="?hal=process-update-category" method="POST">
  <input type="hidden" name="id" value="<?php echo $res['id'];?>">
  <table class="form">
    <tbody>
      <tr>
        <td><label for="nama_category">Nama Kategori</label></td>
        <td>:</td>
        <td><input type="text" name="nama_category" id="nama_category" value="<?php echo $res['name'];?>" required></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input style="float: right;" type="submit" class="btn" name="update_category" value="Perbaharui"></td>
      </tr>
    </tbody>
  </table>
</form>