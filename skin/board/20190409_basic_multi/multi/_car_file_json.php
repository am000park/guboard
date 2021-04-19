<?php
include_once('./_common.php');
$bo_table = $_POST['bo_table'];
$wr_id	= $_POST['wr_id'];
if(!$bo_table || !$wr_id) { die(); }
$data = Array();
$sql = "select
			*
		from
			{$g5['board_file_table']}
		where
			bo_table = '$bo_table' and
			wr_id = '$wr_id' and
			bf_type = 0
		order by
			bf_no ";
$result = sql_query($sql);
while ($row = sql_fetch_array($result))
{
	$data[] = Array(
		"no"		=> $row['bf_no'],
		"source"	=> addslashes($row['bf_source']),
		"image_type"=> $row['bf_type'],
		"size"		=> get_filesize($row['bf_filesize']),
		"download"	=> $row['bf_download'],
		"content"	=> get_text($row['bf_content']),
		"datetime"	=> $row['bf_datetime'],
		"dlink"		=> "<span class='dlink' onclick=\"pic_Del('{$wr_id}', '{$row['bf_no']}', '1');\">삭제</span>"
	);
}

$data = ($data==null)? "":$data;
echo json_encode($data);
exit;
?>