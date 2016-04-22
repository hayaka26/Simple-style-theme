<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header_top.php');
?>
<header class="header-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<div class="logo">
					<?php
					$a = new GlobalArea('Header Site Title');
					$a->display();
					?>
				</div>
			</div>
			<div class="col-sm-7">
				<div class="header-search">
					<?php
					$a = new GlobalArea('Header Search');
					$a->display();
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="global-wrap">
		<div class="container">
			<div class="global-nav">
			<?php
			$a = new GlobalArea('Header Navigation');
			$a->display();
			?>
			</div>
		</div>
	</div>
</header>