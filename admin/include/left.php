<?php
if (isset($_GET['error']) && $_GET['error'] == 'invalid_access') {
  echo  $error_message = "You tried to access an unauthorized page. Please log in again.";
} else {
  $error_message = "";
}
?>

<aside class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header text-center">
    <div>
      <img src=".././images/logo.png" class="logo-icon" alt="" style=" width:70%">
    </div>
    </div>
  <!--navigation-->
  <ul class="metismenu" id="menu">
    <li>
      <a href="index.php">
        <div class="parent-icon">
          <i class="bi bi-speedometer2"></i>
        </div>
        <div class="menu-title">Dashboard</div>
      </a>
    </li>
    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon">
          <i class="bi bi-person-video2"></i>
        </div>
        <div class="menu-title">Photo</div>
      </a>
      <ul>
        <li> <a href="add-photo.php">
            <ion-icon name="ellipse-outline"></ion-icon>Add Photos
          </a>
        </li>
        <li> <a href="view-photo.php">
            <ion-icon name="ellipse-outline"></ion-icon>View Photos
          </a>
        </li>
      </ul>
    </li>

  <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon">
          <i class="bi bi-calendar-check"></i>
        </div>
        <div class="menu-title">Video</div>
      </a>
      <ul>
        <li> <a href="video-add.php">
            <ion-icon name="ellipse-outline"></ion-icon>Add Video
          </a>
        </li>
        <li> <a href="view-video.php">
            <ion-icon name="ellipse-outline"></ion-icon>View Video
          </a>
        </li>
      </ul>
    </li>

    <li>
      <a  href="contact.php">
        <div class="parent-icon">
          <i class="bi bi-people"></i>
        </div>
        <div class="menu-title">View Contact</div>
      </a>
    </li>

    

    <li>
      <a href="password-change.php">
        <div class="parent-icon">
          <i class="bi bi-person"></i>
        </div>
        <div class="menu-title">My Password</div>
      </a>
    </li>


  
    <li>
      <a href="logout.php">
        <div class="parent-icon">
          <i class="bi bi-box-arrow-right"></i>
        </div>
        <div class="menu-title">Logout</div>
      </a>
    </li>







  </ul>
  <!--end navigation-->
</aside>