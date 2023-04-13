<?php
$zip = new ZipArchive;
$res = $zip->open('lamreward_resp.zip');
if ($res === TRUE) {
  $zip->extractTo('/srv/users/alburraqftp/apps/al-burraq/public/lamreward');
  $zip->close();
  echo 'woot!';
} else {
  echo 'doh!';
}