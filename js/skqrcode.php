<script>
//jQuery('#qrcode').qrcode("this plugin is great");
	jQuery('#qrcodeTable').qrcode({
		render	: "canvas",
		text	: "<?php $_SESSION['qcverify'] = sha1(substr(str_shuffle('1234567890aAbBcCdDeEfF#$!'), 0, 16)); echo $_SESSION['qcverify']; ?>",
		width	: "270",
	    height	: "260"
	});
</script>
