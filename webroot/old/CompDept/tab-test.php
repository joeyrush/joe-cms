<!DOCTYPE html>
<html>
<head>
  <title>Department of Computing</title>
<?php include "includes/stylesheets.php"; ?>
</head>
<body id="coursebg">

<div class="page-wrap">

 <?php include "includes/nav.html"; ?>

<div class="container-fluid">
  <div class="course-page">
      <div class="row">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#overview" role="tab">OVERVIEW</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#desc" role="tab">COURSE DESC</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#messages" role="tab">ENTRY REQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">CONTENTS</a>
          </li>
        </ul>
      </div>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="overview" role="tabpanel">
          <!--COURSE OVERVIEW CONTENT-->
          <div class="row">
            <div class="col-md-5 col-md-offset-1">
              <div class="course-box-title">
                <h3><i>BSc</i></h3>
                <h1>Computing</h1>            
                <h3>UNDERGRADUATE COURSE</h3>
                
                    <img class="course-icon" src="img/icons/full-time.png" alt="clock"/>
                    <span>Full Time</span>
                    <img class="course-icon" src="img/icons/years.png" alt="timer"/>
                    <span>4 Years</span>
                
              </div>
              <div class="description"><p>We live in a data-driven world. From social media posts and digital entertainment, to transportation schedules and manufacturing controls, to customer buying trends and financial information - data is everywhere. Studying BSc Computing will give you the skills which are needed to design, build, manage and operate the IT systems that generate, store, process and display all this data.</p></div>
            </div>
          </div>
          <!--END COURSE OVERVIEW CONTENT-->

          </div>
          <div class="tab-pane" id="desc" role="tabpanel">
          
          

          </div>
          <div class="tab-pane" id="messages" role="tabpanel">
          Tab3
          </div>
          <div class="tab-pane" id="settings" role="tabpanel">
          Tab4
          </div>
        </div>
    
    
  </div><!--end container-->

</div><!--end page wrap-->

<!--To make footer a different height for this page, may have to omit the include and manually add footer-->
<?php include "includes/footer.html"; ?> 