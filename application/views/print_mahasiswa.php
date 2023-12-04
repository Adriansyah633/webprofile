<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <h2 align="center">DATA MAHASISWA</h2>
<table class="table" border="1px" align="center">
      <tr>
        <td>No</td>
        <td>Nama</td>
        <td>NPM</td>
        <td>Alamat</td>
      </tr>
      <?php
      $no=1;
      foreach ($mahasiswa as $mhs) : 
      
      ?>
      <tr>
        <td><?php echo  $no++; ?></td>
        <td><?php echo $mhs->nama;?></td>
        <td><?php echo $mhs->npm;?></td>
        <td><?php echo $mhs->alamat;?></td>
      </tr>
        <?php endforeach;  ?>

    </table>
    
    <script type="text/javascript">
        window.print();
        </script>
</body>
</html>
