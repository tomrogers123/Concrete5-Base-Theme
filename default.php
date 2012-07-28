<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

	<section>	
		<?php 
		  $a = new Area('Main');
		  $a->display($c);
		?>
	</section>

	<aside>
	  <?php 
		$as = new Area('Sidebar');
		$as->display($c);
	  ?>		
	</aside>

<?php  $this->inc('elements/footer.php'); ?>