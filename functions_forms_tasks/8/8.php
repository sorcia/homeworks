<?php
function clearMessage($message) {
    $bannedWords = array('плохое слово', 'мат', 'пиписька');
    $message = str_replace($bannedWords, '#BANNED#', $message);
    return $message;
    strip_tags($message, '<b><b/>');
    return $message;
}

$messages = array();
$messages = unserialize(file_get_contents('message_8.txt'));

if (isset($_POST['action']) && $_POST['action'] == 'add') {
    $messages[] = array(
        'username' => $_POST['username'],
        'message' => $_POST['message']
    );
}

file_put_contents('message_8.txt', serialize($messages));

foreach ($messages as $message) { ?>
    <div>
        <h5><?php echo $message['username']?></h5>
        <p><?php echo clearMessage($message['message'])?></p>
    </div>
<?php }
?>

<h1>Гостевая книга</h1>
<form action="" method="post">

    <label for="username">Username:<br></label>
    <input type="text" name="username" id="username">

    <label for="message"><br>Message:<br></label>
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
    <div style="clear:both  "></div>
    <input type="submit" value="Add message">
    <input type="hidden" name="action" value="add">
</form>

