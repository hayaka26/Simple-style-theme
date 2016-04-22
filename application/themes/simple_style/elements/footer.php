<?php defined('C5_EXECUTE') or die("Access Denied.");?>
<footer class="footer-wrap">
	<div class="container">
		<?php
		$a = new GlobalArea('Footer Navigation');
		$a->display();
		?>
	</div>
</footer>

</div>

<?php Loader::element('footer_required'); ?>
</body>
</html>
