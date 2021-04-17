<h2>Add Category</h2>
<hr>
<br><br>
<form action="?hal=process-add-category" method="POST">
  <table class="form">
    <tbody>
      <tr>
        <td><label for="nama_cat">Nama Kategori</label></td>
        <td>:</td>
        <td><input type="text" name="nama_cat" id="nama_cat" required></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input style="float: right;" type="submit" class="btn" name="add_category" value="Simpan"></td>
      </tr>
    </tbody>
  </table>
</form>
<br><br>
<h2>Writer List</h2>
<hr>

<?php
  $get_cat_query = mysqli_query($db, "SELECT * FROM category_tb;");
?>

<table class="table-list">
  <thead>
    <th style="width:15px">#</th>
    <th>Category</th>
    <th style="width:300px">Action</th>
  </thead>
  <tbody>
    <?php
    $no = 1;
    while ($res = mysqli_fetch_assoc($get_cat_query)) {
      echo '
        <tr>
          <td>'.$no++.'</td>
          <td>'.$res['name'].'</td>
          <td>
            <a style="background: #b3b31c;" href="?hal=edit-category&id='.$res['id'].'">Edit</a>
            <a style="background: #d34f4f;" href="?hal=delete-category&id='.$res['id'].'">Delete</a>
          </td>
        </tr>
      ';
    }
    ?>
  </tbody>
</table>