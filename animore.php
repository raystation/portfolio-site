<?php 
	$title = "Project Animore";
	$pageTitle = "Ray Yuen | " . $title;
	include('inc/header.php'); 
	$path = "img/animore/" ;?>

	<!-- Row 1
	================================================== -->
	
	<div class="container add-bottom">

		<div class="sixteen columns">

			<div class="slick">
				<?php $item=$path."01.jpg"; $caption="Home area";?><div><a href="<?php echo $item;?>" data-lightbox="detail" data-title="<?php echo $caption;?>"><img src="<?php echo $item;?>" class="scale-with-grid2 add-bottom"></a></div>
				<?php $item=$path."10.jpg"; $caption="Front page of the Store";?><div><a href="<?php echo $item;?>" data-lightbox="detail" data-title="<?php echo $caption;?>"><img src="<?php echo $item;?>" class="scale-with-grid2 add-bottom"></a></div>
				<?php $item=$path."02.jpg"; $caption="New Animals in the Store";?><div><a href="<?php echo $item;?>" data-lightbox="detail" data-title="<?php echo $caption;?>"><img src="<?php echo $item;?>" class="scale-with-grid2 add-bottom"></a></div>
				<?php $item=$path."03.jpg"; $caption="Mixing Chamber";?><div><a href="<?php echo $item;?>" data-lightbox="detail" data-title="<?php echo $caption;?>"><img src="<?php echo $item;?>" class="scale-with-grid2 add-bottom"></a></div>
				<?php $item=$path."04.jpg"; $caption="House detail";?><div><a href="<?php echo $item;?>" data-lightbox="detail" data-title="<?php echo $caption;?>"><img src="<?php echo $item;?>" class="scale-with-grid2 add-bottom"></a></div>
				<?php $item=$path."05.jpg"; $caption="Roads";?><div><a href="<?php echo $item;?>" data-lightbox="detail" data-title="<?php echo $caption;?>"><img src="<?php echo $item;?>" class="scale-with-grid2 add-bottom"></a></div>
				<?php $item=$path."07.jpg"; $caption="Bear house";?><div><a href="<?php echo $item;?>" data-lightbox="detail" data-title="<?php echo $caption;?>"><img src="<?php echo $item;?>" class="scale-with-grid2 add-bottom"></a></div>
				<?php $item=$path."08.jpg"; $caption="Dog house";?><div><a href="<?php echo $item;?>" data-lightbox="detail" data-title="<?php echo $caption;?>"><img src="<?php echo $item;?>" class="scale-with-grid2 add-bottom"></a></div>
				<?php $item=$path."09.jpg"; $caption="Cat house";?><div><a href="<?php echo $item;?>" data-lightbox="detail" data-title="<?php echo $caption;?>"><img src="<?php echo $item;?>" class="scale-with-grid2 add-bottom"></a></div>
			</div>

			<div class="twelve columns alpha">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, delectus, corporis, soluta totam ab fugit at esse animi eum maiores temporibus veritatis aut consequatur possimus accusamus magni sed nulla suscipit saepe alias nostrum eaque nemo quibusdam voluptate architecto incidunt tempore provident repudiandae nesciunt accusantium quis et ipsa excepturi recusandae error!
			</div>

			<div class="four columns omega padding caption">
				<h5><?php echo $title ;?></h5>
				<p>
					An unrealized video game concept.
				</p>
			</div>
		</div> <!-- end sixteen -->

	</div> <!-- end container -->
	
<?php include('inc/footer.php'); ?>
