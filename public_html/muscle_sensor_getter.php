
<!DOCTYPE html>
<html>
<h1>
<?php
define("ADDRESS","127.0.0.1");
define("USER","pi");
// change the password
define("PASSWORD","pass");

$sconnection = ssh2_connect(ADDRESS,22);
ssh2_auth_password($sconnection,USER,PASSWORD);
$stream = ssh2_exec($sconnection,"/usr/bin/sudo python3 /home/pi/public_html/muscle_sensor.py");
stream_set_blocking($stream, true);
$stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
if($stream_out == false){
  $stream_out = 0;
}
echo stream_get_contents($stream_out);
?>
</h1>
</html>
