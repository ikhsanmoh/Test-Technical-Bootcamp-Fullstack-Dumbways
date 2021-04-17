<?php
// Cek id yg akan di update
if (!isset($_GET['id']) && !empty($_GET['id'])) {
  header('Location: index.php');
  die();
}

// Menyimpan id yg akan diupdate kedalam variabel
$id = $_GET['id'];

$get_book_query = mysqli_query($db, "SELECT * FROM book_tb WHERE id='$id';");

if (mysqli_num_rows($get_book_query) <= 0) {
  header('Location: index.php');
}

$data = mysqli_fetch_assoc($get_book_query);

?>

<form action="?hal=process-update-book" method="POST">
  <input type="hidden" name="id" value="<?php echo $data['id'];?>">
  <table class="form">
    <tbody>
      <tr>
        <td><label for="nama_buku">Nama Buku</label></td>
        <td>:</td>
        <td><input type="text" name="nama_buku" id="nama_buku" value="<?php echo $data['name'];?>" required></td>
      </tr>
      <tr>
        <td><label for="category">Kategori</label></td>
        <td>:</td>
        <td>
          <?php
            $get_cat_query = mysqli_query($db, "SELECT * FROM category_tb;");
          ?>
          <select name="category" id="category" required>
            <option value="">--Pilih--</option>
            <?php
              while ($res = mysqli_fetch_assoc($get_cat_query)) {
                if ($res['id'] == $data['category_id']) {
                  echo "<option value='$res[id]' selected>$res[name]</option>";
                } else {
                  echo "<option value='$res[id]'>$res[name]</option>";
                }
              } 
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td><label for="writer">Penulis</label></td>
        <td>:</td>
        <td>
          <?php
            $get_writer_query = mysqli_query($db, "SELECT * FROM writer_tb;");
          ?>
          <select name="writer" id="writer" required>
            <option value="">--Pilih--</option>
            <?php
              while ($res = mysqli_fetch_assoc($get_writer_query)) {
                if ($res['id'] == $data['writer_id']) {
                  echo "<option value='$res[id]' selected>$res[name]</option>";
                } else {
                  echo "<option value='$res[id]'>$res[name]</option>";
                }
              } 
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td><label for="publication">Tahun</label></td>
        <td>:</td>
        <td>
          <select name="publication" id="publication" required>
            <option value="">--Pilih--</option>
            <?php
              for ($i=2000; $i <= 2021 ; $i++) {
                if ($i == $data['publication_year']) {
                  echo "<option value='$i' selected>$i</option>";
                } else {
                  echo "<option value='$i'>$i</option>";
                }
                
              }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td><label for="img">Cover</label></td>
        <td>:</td>
        <td><input type="file" name="img" id="img"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input style="float: right;" type="submit" class="btn" name="update_book" value="Simpan"></td>
      </tr>
    </tbody>
  </table>
</form>