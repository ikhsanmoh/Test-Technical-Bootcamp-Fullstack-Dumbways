<h2>Add Book</h2>
<hr>
<br><br>
<form action="?hal=process-add-book" method="POST">
  <table class="form">
    <tbody>
      <tr>
        <td><label for="nama_buku">Nama Buku</label></td>
        <td>:</td>
        <td><input type="text" name="nama_buku" id="nama_buku" required></td>
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
                echo "<option value='$res[id]'>$res[name]</option>";
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
                echo "<option value='$res[id]'>$res[name]</option>";
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
                echo "<option value='$i'>$i</option>";
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
        <td><input style="float: right;" type="submit" class="btn" name="add_book" value="Simpan"></td>
      </tr>
    </tbody>
  </table>
</form>