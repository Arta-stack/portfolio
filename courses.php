<?php
	define("TITLE", "Courses");
	
	include('includes/header.php');
?>
	
	<div id="course-content" class="cf">
	
		<h1>Courses</h1>
		<p>Teaching and learning of programming languages is difficult as it involves the comprehension of theoretical background, practical usage of semantics and syntactic coding and algorithmic skills.<br>
The prospect of learning how to code can be overwhelming, especially if you don’t have any experience.<br>
These are some of the trainings I attended.<br></p>
		
		
		
		<?php foreach ($courseContent as $content) { ?>
			
			<div class="member">
				<img src="assets/img/<?php echo $content["img"]; ?>.png" alt="<?php echo $content["name"]; ?>">
				<h4><?php echo $content["name"]; ?></h4>
                <h6><?php echo $content["position"]; ?></h6>
				<p><?php echo $content["description"]; ?></p>
			</div>
		
		<?php } ?>
		
	</div>
	
	
			
<?php include('includes/footer.php'); ?>