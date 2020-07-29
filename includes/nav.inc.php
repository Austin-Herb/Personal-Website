<div class="vertical-menu">

  <!-- Home -->
  <a href="../index.php"
    <?php
        if($title == "Austin Herb's Home Page"){
            echo "class='active'";
        }
    ?>
  >Home</a>

  <!-- About -->
  <a href="../about.php"
    <?php
            if($title == "More About Austin Herb"){
                echo "class='active'";
            }
    ?>
  >About Me</a>

  <!-- Projects -->
  <a href="../projects.php"
    <?php
            if($title == "Austin Herb's Projects"){
                echo "class='active'";
            }
    ?>
  >My Projects</a>

  <!-- Resume -->
  <a href="../resume.php"
    <?php
            if($title == "Austin Herb's Resume"){
                echo "class='active'";
            }
    ?>
  >My Resume</a>

  <!-- Contact -->
  <a href="../contact.php"
    <?php
            if($title == "Contact Austin Herb"){
                echo "class='active'";
            }
    ?>
  >Contact Me</a>
  
</div>