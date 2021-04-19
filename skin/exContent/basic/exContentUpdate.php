<?php
include_once('./_common.php');

print_r($_FILES);

$fileName 	= $_FILES['file']['name'];
$tmpName 	= $_FILES['file']['tmp_name'];
$fileSize 	= $_FILES['file']['size'];

@mkdir(G5_DATA_PATH.'/exContent', G5_DIR_PERMISSION);
@chmod(G5_DATA_PATH."/exContent", G5_DIR_PERMISSION);

move_uploaded_file($tmpName, G5_DATA_PATH."/exContent/".$fileName);

?>