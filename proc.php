<?php 

$temporaryFolder = $_FILES['foto']['tmp_name'];
$target_dir = 'uploads/';
$target_file = $target_dir . basename($_FILES['foto']['name']);

move_uploaded_file($temporaryFolder, $target_file);

echo 'Halo' . $_POST['nama_lengkap'] . '<br>';
echo 'Alamat : ' . $_POST['alamat_kamu'] . '<br>';
echo '<img width="100px" src="/belajar_php_1/uploads/' . $_FILES
['foto']["name"] . '">';

?>
