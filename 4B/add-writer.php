<h2>Add Writer</h2>
<hr>
<br><br>
<form action="?hal=process-add-writer" method="POST">
  <table class="form">
    <tbody>
      <tr>
        <td><label for="nama_writer">Nama Penulis</label></td>
        <td>:</td>
        <td><input type="text" name="nama_writer" id="nama_writer" required></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input style="float: right;" type="submit" class="btn" name="add_writer" value="Simpan"></td>
      </tr>
    </tbody>
  </table>
</form>

<br><br>
<h2>Writer List</h2>
<hr>

<?php
  $get_writer_query = mysqli_query($db, "SELECT * FROM writer_tb;");
?>

<table class="table-list">
  <thead>
    <th style="width:15px">#</th>
    <th>Writer Name</th>
    <th style="width:300px">Action</th>
  </thead>
  <tbody>
    <?php
    $no = 1;
    while ($res = mysqli_fetch_assoc($get_writer_query)) {
      echo '
        <tr>
          <td>'.$no++.'</td>
          <td>'.$res['name'].'</td>
          <td>
            <a style="background: #b3b31c;" href="?hal=edit-writer&id='.$res['id'].'">Edit</a>
            <a style="background: #d34f4f;" href="?hal=delete-writer&id='.$res['id'].'">Delete</a>
          </td>
        </tr>
      ';
    }
    ?>
  </tbody>
</table>