<?php
/* 
Austin Herb
Personal Website - Home Page
Last Updated: 1/3/2020
*/

    $title = "Austin Herb: Home";
    include 'includes/header.inc.php';
?>

<!-- Open 'Jumbotron' div -->
<div class="jumbotron">
    <!-- Open 'container' div -->
    <div class="jumbotron_container">
      <h1 class="display-4">Austin J. Herb</h1>
      <hr></hr>
      <h3>Home</h3>
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

<!-- Testing background color for scrolling nav-box -->
<!-- Open 'nav-box' div -->
<!-- <div class="nav-box">
&nbsp -->
<!-- Close 'nav-box' -->
<!-- </div> -->

<!-- Open 'middle' div -->
<div class="middle">
  <!-- Open 'container' div -->
  <div class="content_container" id="index_content_container">
    <!-- Open 'row' div -->
    <div class="row" style="padding-right:25px;">

      <!-- Open 'col-sm' div -->
      <div class="col-sm">
        <img src="images/Austin_Herb_Graduation.png" alt="Austin Herb">
        <h2>About Me<h2>
        <hr></hr>
        <p>Learn more about Austin and his qualifications</p>
        <a href="about.php" class="btn btn-secondary">More Info</a>
      <!-- Close 'col-sm' div -->
      </div>

      <!-- Open 'col-sm' div -->
      <div class="col-sm">
        <img src="images/projects.jpg" alt="Austin's Projects">
        <h2>My Projects<h2>
        <hr></hr>
        <p>View Austins completed projects and preview his works-in-progress</p>
        <a href="projects.php" class="btn btn-secondary">View Projects</a>
      <!-- Close 'col-sm' div -->
      </div>

      <!-- Open 'col-sm' div -->
      <div class="col-sm">
        <img src="images/resume.jpg" alt="Austin's Resume">
        <h2>My Resume<h2>
        <hr></hr>
        <p style="padding-bottom:17px;">Download a copy of Austins resume</p>
        <a href="resume.php" class="btn btn-secondary">Download Resume</a>
      <!-- Close 'col-sm' div -->
      </div>

      <!-- Open 'col-sm' div -->
      <div class="col-sm">
        <img src="images/contact.jpg" alt="Contact Austin">
        <h2>Contact Me<h2>
        <hr></hr>
        <p style="padding-bottom:17px;">Learn how to contact Austin directly</p>
        <a href="contact.php" class="btn btn-secondary">Contact Me</a>
      <!-- Close 'col-sm' div -->
      </div>
      
    <!-- Close 'row' div -->
    </div>
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
