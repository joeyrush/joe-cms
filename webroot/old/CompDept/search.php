<!DOCTYPE html>
<html>
<head>
  <title>Search | Department of Computing</title>
<?php include "includes/stylesheets.php"; ?>
</head>
<body>

<div class="page-wrap">

<!--Dynamically insert navbar-->
  <?php include "includes/nav.html"; ?>


<!--start jumbotron-->
  <div class="jumbotron">
    <div class="container">
      <h1 class="animate fadeInUp one">DEPARTMENT OF COMPUTING</h1>
    </div>
  </div>
<!--end jumbotron-->

<div class="container" id="searchresults">
  <h1>Search Results</h1>
  <h2> <?php if(!empty($_GET['search'])){
  echo 'Displaying Results for "' . $_GET['search'] . '"';
  }else{
  echo 'Please enter something into the search field <br>';
  }
  
  ?></h2>
  <hr>
  <form action="search.php" method="get" class="navbar-form navbar-right" role="search">
      <input type="text" placeholder="Search Our Department" name="search" style="width:200px;">
      <button type="submit"><span class="glyphicon glyphicon-search" style="width:30px;"></span></button>
</form>
</div>





</div><!--end page-wrap-->


<?php include "includes/footer.html"; ?>