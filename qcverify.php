<?php
$qr = sha1(substr(str_shuffle('1234567890aAbBcCdDeEfF#$!'), 0, 16));
echo "	<script>qr = '$qr';</script>\n";
?>
