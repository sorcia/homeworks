<?php
define('GALLERY', 'gallery_6/');
if (isset($_POST['action']) && $_POST['action'] =='add')  {
    $fileName = $_FILES['image']['tmp_name'];
    $destination = GALLERY . $_FILES['image']['name'];
    move_uploaded_file($fileName, $destination);
}
$images = glob(GALLERY . '*.*');
?>

<h1>Gallery</h1>
<h2>Add your image</h2>
<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="add">
    <input type="file" name="image">
    <input type="submit">
</form>
<table style="border: solid 2px crimson">

<?php
$i = 0;
$coln = 3;
foreach ($images as $image){
    if ($i == 0) {
        echo '<tr>';
    } ?>
   <td><img src="<?php echo $image; ?>" width="200px"></td>
    <?php
    $i++;
    if ($i==$coln) {
        echo '</tr>';
        $i=0;
    }
}
?>
