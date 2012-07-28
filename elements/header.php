<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE?>" >
<head>
  
  <?php  Loader::element('header_required'); ?>
  <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $this->getStyleSheet('main.css')?>" />

</head>
<body>

<div id="page">
	<header>
		
		<?php  if ($c->isEditMode()) { ?>
		<div style="min-height: 80px">
		<?php  } ?>

		<?php $ah = new Area('Header');	$ah->display($c); ?>	
		
		<nav>
			<?php 
			$a = new Area('Header Nav');
			$a->display($c);
			?>
		</nav>
		
		<h1>
			<a href="<?php   echo DIR_REL?>/"><?php   
				$block = Block::getByName('My_Site_Name');  
				if( $block && $block->bID ) $block->display();   
				else echo SITE;
			?></a>
		</h1>

		<?php 
		// we use the "is edit mode" check because, in edit mode, the bottom of the area overlaps the item below it, because
		// we're using absolute positioning. So in edit mode we add a bit of space so everything looks nice.
		?>


		<?php  if ($c->isEditMode()) { ?>
		</div>
		<?php  } ?>
			
		</header>
	</div>			