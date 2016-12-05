<section class="content-header">
      <h1>
        Data Mahasiswa
        <small>Politeknik Negeri Semarang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
</section>

<?php
include "koneksi.php";

$sql = "SELECT * FROM mahasiswa";
$query=mysql_query($sql);
?>

<section class="content">
      <div class="row">
        <div class="col-md-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Jurusan</th>
                  <th>Program Studi</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>

                <?php
                  $i=1;
                  while ($row = mysql_fetch_array($query)) {
                ?>

                <tr>
                  <td><?=$i?></td>
                  <td><?=$row['NIM']?></td>
                  <td><?=$row['nama']?></td>
                  <td><?=$row['jurusan']?></td>
                  <td><?=$row['prodi']?></td>
                  <td><?=$row['alamat']?></td>
                  <td>
                    <div class="btn-group">
                  <button type="button" class="btn btn-info">Action</button>
                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href='edit.php?NIM="<?php echo $row['NIM']; ?>"'>Edit</a></li>
                    <li><a href='delete.php?NIM="<?php echo $row['NIM']; ?>"'>Delete</a></li>
                  </ul>
                </div>
                  </td>
                </tr>

                <?php
                  $i++;
                }
                ?>

              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <table>
                <tr>
                  <td>
                   <a href="tambah.php"> <button type="button" class="btn btn-block btn-danger" name="submit">Tambah Data</button></a>
                  </td>
                </tr>
          </table>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>