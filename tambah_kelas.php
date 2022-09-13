<!DOCTYPE html>
<html>
<head>
    <?php include 'navbar.php'; ?>
    <title>Tambah Kelas</title>
</head>
<body>
    <h3>Tambah Kelas</h3>
    <form action="proses_tambah_kelas.php" method="post">
        Nama kelas :
        <input type="text" name="nama_kelas" value="" class="form-control">
        Kelompok :
        <input type="text" name="kelompok" value="" class="form-control"> 
        Angkatan :
        <input type="text" name="angkatan" value="" class="form-control"> <br>
        <input type="submit" name="simpan" value="Tambah Kelas" class="btn btn-primary">
    </form>

</script>
</body>
</html>