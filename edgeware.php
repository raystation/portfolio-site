<?php 
	$title = "Edgeware";
	$pageTitle = "Ray Yuen | " . $title;
	include('inc/header.php'); 
	$path="img/edgeware/";?>

	<!-- Row 1
	================================================== -->
	
	<div class="container add-bottom">

		<div class="sixteen columns">
			
			<div class="slick">
				<?php $item=$path."00.jpg"; $caption="caption";?><div><a href="<?php echo $item;?>" data-lightbox="detail" data-title="<?php echo $caption;?>"><img src="<?php echo $item;?>" class="scale-with-grid2 add-bottom"></a></div>
				<?php $item=$path."01.jpg"; $caption="caption";?><div><a href="<?php echo $item;?>" data-lightbox="detail" data-title="<?php echo $caption;?>"><img src="<?php echo $item;?>" class="scale-with-grid2 add-bottom"></a></div>
				<?php $item=$path."02.jpg"; $caption="caption";?><div><a href="<?php echo $item;?>" data-lightbox="detail" data-title="<?php echo $caption;?>"><img src="<?php echo $item;?>" class="scale-with-grid2 add-bottom"></a></div>
				<?php $item=$path."03.jpg"; $caption="caption";?><div><a href="<?php echo $item;?>" data-lightbox="detail" data-title="<?php echo $caption;?>"><img src="<?php echo $item;?>" class="scale-with-grid2 add-bottom"></a></div>
				<?php $item=$path."04.jpg"; $caption="caption";?><div><a href="<?php echo $item;?>" data-lightbox="detail" data-title="<?php echo $caption;?>"><img src="<?php echo $item;?>" class="scale-with-grid2 add-bottom"></a></div>
				<?php $item=$path."05.jpg"; $caption="caption";?><div><a href="<?php echo $item;?>" data-lightbox="detail" data-title="<?php echo $caption;?>"><img src="<?php echo $item;?>" class="scale-with-grid2 add-bottom"></a></div>
			</div>

			<div class="twelve columns alpha">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, nihil ad adipisci amet commodi est in dignissimos minus vel dolorem natus dolores exercitationem similique fugiat corporis assumenda ducimus. Accusamus, voluptatibus sequi eos iure itaque eaque beatae ipsa quaerat magni quia?
			</div>

			<div class="four columns omega padding caption">
				<h5><?php echo $title ;?></h5>
				<p>
					Vector illustrations for use on a simple graphical-user interface for a device that was intended to aid Coast Guard personnel with decision making.
				</p>				
			</div>

		</div> <!-- end sixteen -->

	</div> <!-- end container -->
	
	
<?php include('inc/footer.php'); ?>
