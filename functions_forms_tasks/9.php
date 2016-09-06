<?php
if (isset ($_POST['text']) ) {
    $text = strrev($_POST['text']);
    echo $text;
}
?>

<form action="" method="post">
    <input type="text" name="text"> Enter text</input>
    <p><input type="submit" name="submit" value="submit"> </input></p>
</form>

