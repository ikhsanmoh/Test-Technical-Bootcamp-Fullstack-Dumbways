<?php
// Cek id yg akan di update
if (!isset($_GET['id']) && !empty($_GET['id'])) {
  header('Location: index.php?hal=add-writer');
  die();
}

// Menyimpan id yg akan diupdate kedalam variabel
$id = $_GET['id'];

$get_writer_query = mysqli_query($db, "SELECT * FROM writer_tb WHERE id='$id';");

if (mysqli_num_rows($get_writer_query) <= 0) {
  header('Location: index.php?hal=add-writer');
}

$res = mysqli_fetch_assoc($get_writer_query);

?>
<h2>Edit Writer</h2>
<hr>
<br><br>
<form action="?hal=process-update-writer" method="POST">
  <input type="hidden" name="id" value="<?php echo $res['id'];?>">
  <table class="form">
    <tbody>
      <tr>
        <td><label for="nama_writer">Nama Penulis</label></td>
        <td>:</td>
        <td><input type="text" name="nama_writer" id="nama_writer" value="<?php echo $res['name'];?>" required></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input style="float: right;" type="submit" class="btn" name="update_book" value="Perbaharui"></td>
      </tr>
    </tbody>
  </table>
</form>