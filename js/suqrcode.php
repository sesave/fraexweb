<script>
//jQuery('#qrcode').qrcode("this plugin is great");
	jQuery('#qrcodeTable').qrcode({
		render	: "canvas",
		text	: "<?php echo $user['res_st_devkey']; ?>",
		width	: "260",
	    height	: "250"
	});
</script>
