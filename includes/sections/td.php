<div class="green-bg <?php echo $spoPrefix ?>-td-target">
	<div class="<?php echo $spoPrefix ?>-container rel">
		<div class="<?php echo $spoPrefix ?>-td-content">
		<?php
			$s = isset($_GET['s']) ? $_GET['s'] : 'td-order';
			include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/sections/td/$s.php")
		?>
		</div>
	</div>
</div>





<script>
    function goToByScroll(id){
        // Scroll
        $('html,body').animate({
            scrollTop: $(id).offset().top},
            'slow');
    }
</script>
