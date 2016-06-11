<?php
function post($key) {
    if (isset($_POST[$key]))
        return $_POST[$key];
    return false;
}

$cxn = mysql_connect('localhost', 'mouse2mout', 'm2mBbM-s');
if (!$cxn)
    exit;
mysql_select_db('mouse2mout_winkwow', $cxn);
if (!post('name'))
    exit;

$name = post('name');
$id = post('id');
$vote = post('vote');
$ip = post('ip');
print($id);
$sql = "SELECT * FROM vote where id = '$id'";

$result = mysql_query($strSQL, $cxn);
$resp = new stdClass();
$resp->success = false;
if (mysql_num_rows($result)==0) {
  print('null');
  $sql = "INSERT INTO vote (id, name, ip, time, vote)
          VALUES ('$id', '$name', '$ip', NOW(), '$vote')";
  $result = mysql_query($sql, $cxn);
  $resp->success = false;
  if($result) {
      $resp->success = true;
  }
} else {
  print('not null');
  $resp->success = false;
}
?>
