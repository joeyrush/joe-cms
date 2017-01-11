<!DOCTYPE html>
<html>
<head>
  <title>Student Work | Department of Computing</title>
<?php include "includes/stylesheets.php"; ?>
</head>
<body>

<div class="page-wrap">

<!--Dynamically insert navbar-->
  <?php include "includes/nav.html"; ?>


  <div class="jumbotron jumbotron-img">
    <div class="container">
      <h1 class="animate fadeInUp one">STUDENT WORK</h1><small class="fade-in two"> Examples of our students work</small>
    </div>
  </div>

<!--start of student work section-->
<div id="student-work">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<iframe width="100%" height="350px" src="https://www.youtube.com/embed/w_CFXWvXTj8"></iframe>
			</div>
			<div class="col-md-4">
				<iframe width="100%" height="350px" src="https://www.youtube.com/embed/emoYb2Bdp7Q"></iframe>
			</div>
			<div class="col-md-4">
				<iframe width="100%" height="350px" src="https://www.youtube.com/embed/EOjhEDp0hw0"></iframe>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<h2>Apis - 3D World Puzzle</h2>
				<p>Apsis was created by students Mike Roberts, Darryl Farquhar and Hsin-Yi Liu and is a 3D world puzzle game built upon the Unreal 2 Engine.</p>
				<p>In the game demo, players navigate around rooms manipulating gravity to get from point A to point B. The task becomes increasingly difficult as the game progresses.</p>
			</div>
			<div class="col-md-4">
				<h2>Non Compos - Puzzle Game</h2>
				<p>Non Compos Mentis was created by students George Tamm, Toby Everett, Yogesh Patel and Phil Hewson.</p>
				<p>The prototype, created on the Unreal 2 Engine, is a demo for a 3D puzzle game where the player has to manipulate and move golems to reach the goal, travelling around a 3D environment.</p>
			</div>
			<div class="col-md-4">
				<h2>Revenge of TK - Adventure</h2>
				<p>Revenge of the TKorup was created by students Mark East, Steve Wilkinson, Joe Binks and Vian. The prototype is a demo for a first person 3D adventure game built upon the Unreal 3 Engine.</p>

				<p>In the game you can speak and interact with people, navigate through large alien environments and uncover enemies and weapons.</p>
			</div>
		</div>
		<hr>
  		<div class="bottom-buttons">
    		<a href="about.php" class="btn btn-default btn-bk-to-overview"><span class="glyphicon glyphicon-share-alt icon-flipped"></span> Back to Overview</a>
    		<a href="courses.php" class="btn btn-default btn-bk-to-overview"><span class="glyphicon glyphicon-star"></span> View Our Courses</a>
  		</div>
	</div>
</div>

<!--end of student work section-->




</div><!--end page-wrap-->




<?php include "includes/footer.html"; ?>