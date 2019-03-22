<script>
//jQuery('#qrcode').qrcode("this plugin is great");
	jQuery('#qrcodeTable').qrcode({
		render	: "table",
		text	: "<?php echo sha1(substr(str_shuffle('1234567890aAbBcCdDeEfF#$!'), 0, 16)); ?>",
		width	: "250",
	    height	: "250"
	});
</script>
