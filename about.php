<?php
/* 
Austin Herb
Personal Website - Home Page
Last Updated: 1/3/2020
*/

    $title = "Austin Herb: About";
    include 'includes/header.inc.php';
?>


<!-- Open 'Jumbotron' div -->
<div class="jumbotron">
    <!-- Open 'container' div -->
    <div class="jumbotron_container">
      <h1 class="display-4">Austin J. Herb</h1>
      <hr></hr>
      <h3>More About Austin</h3>
    <!-- Close 'container' div -->
    </div>
<!-- Close 'jumbotron' div -->
</div>


<!-- Open 'nav_container' -->
<div class="nav_container">
  <ul id="menu-v">
    <li>
      <a href="index.php">Home</a></li>
    <li>

    <li>
      <a href="about.php">About Me</a></li>
    <li>

    <li>
      <a href="projects.php">My Projects</a></li>
    <li>

    <li>
      <a href="#">My Resume</a></li>
    <li>

    <li>
      <a href="contact.php">Contact Me</a></li>
    <li>
  </ul>
<!-- Close nav-container -->
</div>


<!-- Open 'middle' div -->
<div class="middle">
  <!-- Open 'container' div -->
  <div class="content_container" id="about_content_container">

    <h1>My Education:</h1>

    <!-- Open 'row' div -->
    <div class="row" style="padding-right:50px;" id="education_container">


      <!-- Carlisle High School -->
      <!-- Open 'col-sm' div -->
      <div class="col-sm">
        <img src="images/CHS.jpg" alt="Carlisle Area High School">
        <h2>Carlisle Area High School<h2>
        <hr></hr>
        <p><strong>Years Attended:</strong> 2010-2014</p>
        <p><strong>Graduation:</strong> 2014</p>
        <p style="padding-bottom:34px;">Focus on networking</p>
        <a href="https://chs.carlisleschools.org/" class="btn btn-secondary">More About CHS</a>
      <!-- Close 'col-sm' div -->
      </div>


      <!-- Harrisburg Area Community College -->
      <!-- Open 'col-sm' div -->
      <div class="col-sm">
        <img src="images/HACC.jpg" alt="Harrisburg Area Community College">
        <h2>Harrisburg Area Community College<h2>
        <hr></hr>
        <p><strong>Years Attended:</strong> 2014-2016</p>
        <p><strong>Transfered:</strong> 2016</p>
        <p style="padding-bottom:34px;">Focus on general education courses</p>
        <a href="https://www.hacc.edu/" class="btn btn-secondary">More About HACC</a>
      <!-- Close 'col-sm' div -->
      </div>


      <!-- Pennsylvania College of Technology -->
      <!-- Open 'col-sm' div -->
      <div class="col-sm">
        <img src="images/PCT.png" alt="Pennsylvania College of Technology">
        <h2>Pennsylvania College of Technology<h2>
        <hr></hr>
        <p><strong>Years Attended:</strong> 2016-2019</p>
        <p><strong>Graduation:</strong> 2019</p>
        <p>Bachelor of Science in Software Development and Information Management</p>
        <a href="https://www.pct.edu/" class="btn btn-secondary">More About PCT</a>
      <!-- Close 'col-sm' div -->
      </div>

    <!-- Close 'row' div -->
    </div>
   

    <h1>Recent Work Experience:</h1>

    <!-- Open 'row' div -->
    <div class="row" style="padding-right:50px;">
      <!-- Open 'container' div -->
      <div class="container" id="RL_container">

        <img src="images/RL.png" alt="Return Logic">
          <!-- Open 'sub_container' div -->
          <div class="sub_container" id="RL_subcon">
            <p><strong>Employed:</strong> August 2014 - May 2016 </p>
            <p style="width:100%;"><strong>Title:</strong> Level 1 Technician, Warehouse Manager</p>
            <strong>Responsibilities:</strong>
              <ul>
                <li>Troubleshoot various electronic devices (computers, cellphones, tablets, etc.)</li>
                <li>Perform basic hardware and software repairs</li>
                <li>Resell products on various online marketplaces</li>
                <li>Warehouse and inventory management</li>
              </ul>
            
          <!-- Close 'sub_container' div -->
          </div>

      <!-- Close 'container' div -->
      </div>  
    <!-- Close 'row' div -->
    </div>
    <hr style="width:100%;"></hr>

    <!-- Open 'row' div -->
    <div class="row" style="margin-bottom:100px;">
      

        <!-- Open 'col-sm' div -->
        <div class="col-sm" style="padding-left:15px">
          <h1>My Skills:</h1>
            <ul>
              <li>Troubleshooting</li>
              <li>Technical Communication and Writing</li>
              <li>Teamworking</li>
              <li>Organization</li>
              <li>Creative Design</li>
            </ul>
        <!-- Close 'col-sm' div -->
        </div>

        <!-- Open 'col-sm' div -->
        <div class="col-sm">
          <h1>Programming Experience:</h1>

            <!-- Open 'sub_container' div -->
            <div class="row">
              <div class="col-sm">
                <ul>
                  <li>HTML5</li>
                  <li>CSS</li>
                  <li>PHPmyAdmin</li>
                  <li>Bootstrap</li>
                  <li>Visual Basic</li>
                </ul>
              <!-- Close 'sub_container' div -->
              </div>

              <!-- Open 'sub_container' div -->
              <div class="col-sm">
                <ul>
                  <li>.NET</li>
                  <li>Java</li>
                  <li>Javascript</li>
                  <li>SQL</li>
                  <li style="list-style-type:none;">And More!</li>
                </ul>
              <!-- Close 'sub_container' div -->
              </div>
            <!-- Close 'row' div -->
            </div>
            
        <!-- Close 'col-sm' div -->
        </div>

      
    <!-- Close 'row' div -->
    </div>



    <!-- TESTING AREA -->


    <!-- END TESTINIG AREA -->

  <!-- Close 'container' div -->
  </div>
<!-- Close 'middle' div -->
</div>


<!-- Optional JavaScript -->
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>


<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>


<!-- Bootstrap -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>


<?php
  include 'includes/footer.inc.php';
?>
