<?php
  $myname = getenv('REMOTE_ADDR');
  echo 'Hello World!<br/>';
  echo date('l \t\h\e jS') . '<br/>';
  echo 'My username is ' $myname . '!';
  echo '<br/> random change for no reason';
?>
