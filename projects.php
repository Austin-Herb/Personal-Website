<?php
/* 
Austin Herb
Personal Website - Home Page
Last Updated: 1/3/2020
*/

    $title = "Austin Herb: Projects";
    include 'includes/header.inc.php';
?>


<!-- Open 'Jumbotron' div -->
<div class="jumbotron">
    <!-- Open 'container' div -->
    <div class="jumbotron_container">
      <h1 class="display-4">Austin J. Herb</h1>
      <hr></hr>
      <h3>Austin's Projects</h3>
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
  <!-- Open 'content_container' div -->
  <div class="content_container" id="projects_content_container">

    <h1>Rolling Hills Estates Website:</h1>

    <!-- Open 'RHE_project_container' div -->
    <div class="container" id="RHE_project_container">

      <!-- Images used to open the lightbox -->
      <!-- Open 'row' div -->
      <div class="row">

        <!-- Open 'column' div -->
        <div class="column">
          <img src="images/RHE_Screenshot_01_sm.png" onclick="openRHEModal();currentRHESlide(1)" class="hover-shadow">
        <!-- Close 'column' div -->
        </div>

        <!-- Open 'column' div -->
        <div class="column">
          <img src="images/RHE_Screenshot_02_sm.png" onclick="openRHEModal();currentRHESlide(2)" class="hover-shadow">
        <!-- Close 'column' div -->
        </div>

        <!-- Open 'column' div -->
        <div class="column">
          <img src="images/RHE_Screenshot_03_sm.png" onclick="openRHEModal();currentRHESlide(3)" class="hover-shadow">
        <!-- Close 'column' div -->
        </div>

        <!-- Open 'column' div -->
        <div class="column">
          <img src="images/RHE_Screenshot_04_sm.png" onclick="openRHEModal();currentRHESlide(4)" class="hover-shadow">
        <!-- Close 'column' div -->
        </div>

      <!-- Close 'row' div -->
      </div>

      <!-- The Modal/Lightbox -->
      <!-- Open 'RHEmodal' div -->
      <div id="RHEmodal" class="modal">
        <span class="close cursor" onclick="closeRHEModal()">&times;</span>
        <!-- Open 'RHEmodal-content' div -->
        <div class="RHEmodal-content">

          <!-- Open 'RHEslides' div -->
          <div class="RHEslides">
            <div class="numbertext">1 / 4</div>
            <img src="images/RHE_Screenshot_01.png" style="width:100%">
          <!-- Close 'RHEslides' div -->
          </div>

          <!-- Open 'RHEslides' div -->
          <div class="RHEslides">
            <div class="numbertext">2 / 4</div>
            <img src="images/RHE_Screenshot_02.png" style="width:100%">
          <!-- Close 'RHEslides' div -->
          </div>

          <!-- Open 'RHEslides' div -->
          <div class="RHEslides">
            <div class="numbertext">3 / 4</div>
            <img src="images/RHE_Screenshot_03.png" style="width:100%">
          <!-- Close 'RHEslides' div -->
          </div>

          <!-- Open 'RHEslides' div -->
          <div class="RHEslides">
            <div class="numbertext">4 / 4</div>
            <img src="images/RHE_Screenshot_04.png" style="width:100%">
          <!-- Close 'RHEslides' div -->
          </div>

          <!-- Next/Previous Controls -->
          <a class="prev" onclick="nextRHESlide(-1)">&#10094;</a>
          <a class="next" onclick="nextRHESlide(1)">&#10095;</a>

          <!-- RHE Caption text -->
          <div class="RHEcaption-container">
            <p id="RHEcaption"></p>
          </div>

          <!-- RHE Thumbnail Image Controls -->
          <!-- Open 'column' div -->
          <div class="column">
            <img class="RHEdemo" src="images/RHE_Screenshot_01_sm.png" onclick="currentRHESlide(1)" alt="Rolling Hills Estates Home">
          <!-- Close 'column' div -->
          </div>

          <!-- Open 'column' div -->
          <div class="column">
            <img class="RHEdemo" src="images/RHE_Screenshot_02_sm.png" onclick="currentRHESlide(2)" alt="Functional user registration and loggin system">
          <!-- Close 'column' div -->
          </div>

          <!-- Open 'column' div -->
          <div class="column">
            <img class="RHEdemo" src="images/RHE_Screenshot_03_sm.png" onclick="currentRHESlide(3)" alt="Contact forms with integrated SMS text notifications">
          <!-- Close 'column' div -->
          </div>

          <!-- Open 'column' div -->
          <div class="column">
            <img class="RHEdemo" src="images/RHE_Screenshot_04_sm.png" onclick="currentRHESlide(4)" alt="Administrative panel with integrated mySQL database">
          <!-- Close 'column' div -->
          </div>
          
        <!-- Close 'RHEmodal-content' div -->
        </div>
      <!-- Close 'RHEmodal' div -->
      </div>
    
      <hr style="width:100%;"></hr>
      <ul style="list-style:none; padding-left:0px;">
        <li><strong>Description:</strong> A web page designed to advertise the United Mobile Homes community, Rolling Hills Estates. </li>
        <li><strong>Key Features:</strong></li>
          <ul>
            <li>Administrative panel integrated with mySQL database</li>
            <li>Functional user registration and login system</li>
            <li>Contact forms with SMS text notification</li>
          </ul>
        <li><strong>Project Scope:</strong> 4 Months </li>
        <li><strong>Completion Date:</strong> August 2019 </li>
      </ul>
      <a href="Rolling_Hills_Estates/index.php" class="btn btn-secondary" style="margin-left:0px;">View Project</a>
      <hr style="width:100%;"></hr>

    <!-- Close 'RHE_project_container' div -->
    </div>

    <h1>Olive Garden POS System:</h1>

    <!-- Open 'OG_project_container' div -->
    <div class="container" id="OG_project_container">

      <!-- Images used to open the Olive Garden lightbox -->
      <!-- Open 'row' div -->
      <div class="row">

        <!-- Open 'column' div -->
        <div class="column">
          <img src="images/OliveGarden_Screenshot_01_sm.png" onclick="openOGModal();currentOGSlide(1)" class="hover-shadow">
        <!-- Close 'column' div -->
        </div>

        <!-- Open 'column' div -->
        <div class="column">
          <img src="images/OliveGarden_Screenshot_02_sm.png" onclick="openOGModal();currentOGSlide(2)" class="hover-shadow">
        <!-- Close 'column' div -->
        </div>

        <!-- Open 'column' div -->
        <div class="column">
          <img src="images/OliveGarden_Screenshot_03_sm.png" onclick="openOGModal();currentOGSlide(3)" class="hover-shadow">
        <!-- Close 'column' div -->
        </div>

        <!-- Open 'column' div -->
        <div class="column">
          <img src="images/OliveGarden_Screenshot_04_sm.png" onclick="openOGModal();currentOGSlide(4)" class="hover-shadow">
        <!-- Close 'column' div -->
        </div>

      <!-- Close 'row' div -->
      </div>

      <!-- The Modal/Lightbox -->
      <!-- Open 'OGmodal' div -->
      <div id="OGmodal" class="modal">
        <span class="close cursor" onclick="closeOGModal()">&times;</span>
        <!-- Open 'OGmodal-content' div -->
        <div class="OGmodal-content">

          <!-- Open 'OGslides' div -->
          <div class="OGslides">
            <div class="numbertext">1 / 4</div>
            <img src="images/OliveGarden_Screenshot_01.png" style="width:100%">
          <!-- Close 'OGslides' div -->
          </div>

          <!-- Open 'OGslides' div -->
          <div class="OGslides">
            <div class="numbertext">2 / 4</div>
            <img src="images/OliveGarden_Screenshot_02.png" style="width:100%">
          <!-- Close 'OGslides' div -->
          </div>

          <!-- Open 'OGslides' div -->
          <div class="OGslides">
            <div class="numbertext">3 / 4</div>
            <img src="images/OliveGarden_Screenshot_03.png" style="width:100%">
          <!-- Close 'OGslides' div -->
          </div>

          <!-- Open 'OGslides' div -->
          <div class="OGslides">
            <div class="numbertext">4 / 4</div>
            <img src="images/OliveGarden_Screenshot_04.png" style="width:100%">
          <!-- Close 'OGslides' div -->
          </div>

          <!-- Next/Previous Controls -->
          <a class="prev" onclick="nextOGSlide(-1)">&#10094;</a>
          <a class="next" onclick="nextOGSlide(1)">&#10095;</a>

          <!-- Open 'OGcaption-container' div -->
          <div class="OGcaption-container">
            <p id="OGcaption"></p>
          <!-- Close 'OGcaption-container' div -->
          </div>

          <!-- OG Thumbnail Image Controls -->
          <!-- Open 'column' div -->
          <div class="column">
            <img class="OGdemo" src="images/OliveGarden_Screenshot_01_sm.png" onclick="currentOGSlide(1)" alt="Point-of-Sale system designed with an Olive Garden theme">
          <!-- Close 'column' div -->
          </div>

          <!-- Open 'column' div -->
          <div class="column">
            <img class="OGdemo" src="images/OliveGarden_Screenshot_02_sm.png" onclick="currentOGSlide(2)" alt="Add or remove menu items from your bill">
          <!-- Close 'column' div -->
          </div>

          <!-- Open 'column' div -->
          <div class="column">
            <img class="OGdemo" src="images/OliveGarden_Screenshot_03_sm.png" onclick="currentOGSlide(3)" alt="Easy to maneuver menus with images for each item">
          <!-- Close 'column' div -->
          </div>

          <!-- Open 'column' div -->
          <div class="column">
            <img class="OGdemo" src="images/OliveGarden_Screenshot_04_sm.png" onclick="currentOGSlide(4)" alt="Easy to maneuver menus with images for each item">
          <!-- Close 'column' div -->
          </div>
          
        <!-- Close 'OGmodal-content' div -->
        </div>
      <!-- Close 'OGmodal' div -->
      </div>

      <hr style="width:100%;"></hr>
      <ul style="list-style:none; padding-left:0px;">
        <li><strong>Description:</strong> A functional point of sale system developed as a course assignment for Pennsylvania College of Technology.  This system uses the popular restaurant chain "Olive Garden" as it's central theme but can easily be adapted to fit any restaurants needs. </li>
        <li><strong>Key Features:</strong></li>
          <ul>
            <li>Simple to maneuver</li>
            <li>Easily calculate and print customer receipts</li>
            <li>Add discounts and coupons</li>
          </ul>
        <li><strong>Project Scope:</strong> 4 Months </li>
        <li><strong>Completion Date:</strong> December 2019 </li>
      </ul>
      <a href="Rolling_Hills_Estates/index.php" class="btn btn-secondary" style="margin-left:0px;">View Project</a>
      <hr style="width:100%;"></hr>
    <!-- Close 'OG_project_container' div -->
    </div>

  <!-- Close 'content_container' div  -->
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

<!-- Modal Images -->
<script src="js/modal_images.js"></script>


<?php
  include 'includes/footer.inc.php';
?>
