<?php 
	$title = "Storymaps";
	$pageTitle = "Ray Yuen | " . $title;
	include('inc/header.php'); 
	
	$img_info = array(
    array("file" => "01.jpg", "alt" => "This is your alt text"),
    array("file" => "02.jpg", "alt" => "This is your alt text"),
    array("file" => "03.jpg", "alt" => "This is your alt text"),
    array("file" => "04.jpg", "alt" => "This is your alt text"),
    array("file" => "05.jpg", "alt" => "This is some more alt text")
	);

	?>

	<!-- Row 1
	================================================== -->
	
	<div class="container add-bottom">

		<div class="sixteen columns">
			
			<?php  
				echo '<div class="slick">';
					foreach($img_info as $img){
					    echo '<div><img src="img/storymaps/'.$img["file"].'" alt="'.$img["alt"].'" class="scale-with-grid add-bottom"/></div>';
					}
					echo '</div>';
			;?>

			<div class="twelve columns alpha">
				I supplied the illustrations for a PhD study by Sean Hammond. Essentially, it is a tool that kids can use to enhance their storywriting skills. In Sean’s research, he broke down the various elements of a fairy tale and I illustrated said elements as cards. The kids would then pick and choose the story elements they want to include and the software would help them plan out the story.
			</div>

			<div class="four columns omega caption">
				<h5><?php echo $title ;?></h5>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, modi.
				</p>
				
			</div>

		</div> <!-- end sixteen -->

	</div> <!-- end container -->


	
<?php include('inc/footer.php'); ?>
