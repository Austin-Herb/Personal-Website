<?php
  $title = "Austin Herb: Contact";
  include 'includes/header.inc.php';
?>


<!-- Open 'Jumbotron' div -->
<div class="jumbotron">
    <!-- Open 'container' div -->
    <div class="jumbotron_container">
      <h1 class="display-4">Austin J. Herb</h1>
      <hr></hr>
      <h3>Contact Austin with Questions or Comments</h3>
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
  <!-- Open 'content-container' div -->
  <div class="content-container">

    <div class='row'>
      <div class='col-sm'>
        <!-- OpenEmail Contact Form -->
        <form class="contact-form" action="sendContactForm.php" method="post" style="width:500px; padding-bottom:20px;">
          <!-- Input First Name -->
          <p>First Name</p>
          <input type="text" name="firstName" placeholder="First Name">
          <!-- Input Last Name -->
          <p>Last Name:</p>
          <input type="text" name="lastName" placeholder="Last Name">
          <!-- Input Company Name -->
          <p>Company/Organization Name:</p>
          <input type="text" name="companyName" placeholder="Company/Organization Name">
          <!-- Input Email Address -->
          <p>Email Address:</p>
          <input type="text" name="email" placeholder="Email Address">
          <!-- Input Telephone Number -->
          <p>Telephone Number:</p>
          <input type="text" name="phone" placeholder="Telephone Number">
          <!-- Input Email Subject -->
          <p>Email Subject:</p>
          <input type="text" name="subject" placeholder="Email Subject">
          <!-- Text Area for Questions/Comments -->
          <p>Questions/Comments:</p>
          <textarea name="comments" placeholder="Questions/Comments"></textarea>
          <!-- Submit Button -->
          <button type="submit" name="submit">Send</button>
        <!-- Close Email Contact Form -->
        </form>
      <!-- Close 'col-sm' div -->
      </div>
  
      <!-- Open 'col-sm' div -->
      <div class='col-sm'>
        <!-- Open 'container' div -->
        <div class='container' style="float:right;">
          <h1>Other Ways to Reach Me:</h1>
          <hr style="width:100%;"></hr>

          <!-- Open 'row' div -->
          <div class='row'>
            <!-- Open 'col-sm' div -->
            <div class='col-sm'>
              <!-- LinkedIn Profile -->
              <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="vertical" data-theme="dark" data-vanity="austin-herb-084366101"><a class="LI-simple-link" href='https://www.linkedin.com/in/austin-herb-084366101?trk=profile-badge'>Austin Herb</a></div>
            <!-- Close 'col-sm' div -->
            </div>
            <!-- Open 'col-sm' div -->
            <div class='col-sm'>

            <!-- Close 'col-sm' div -->
            </div>
          <!-- Close 'row' div -->
          </div>

          <!-- Open 'row' div -->
          <div class='row'>
            <!-- Open 'col-sm' div -->
            <div class='col-sm'>

            <!-- Close 'col-sm' div -->
            </div>
          <!-- Close 'row' div -->
          </div>

        <!-- Close 'container' div -->
        </div>
      <!-- Close 'col-sm' div -->
      </div>
    <!-- Close 'row' div -->
    </div>








  <!-- END TESTING AREA -->


  <!-- Close 'content-container' div -->
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

<!-- LinkedIn -->
<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>


<?php
  include 'includes/footer.inc.php';
?>