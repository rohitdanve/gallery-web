

<header class="top-header">
      <nav class="navbar navbar-expand gap-3">
        <div class="toggle-icon">
          <ion-icon name="menu-outline"></ion-icon>
        </div>
       
      
        <div class="top-navbar-right ms-auto">

          <ul class="navbar-nav align-items-center">
          
            <li class="nav-item">
               <a class="nav-link" href="javascript:;">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="themeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <ion-icon name="color-palette-outline"></ion-icon>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="themeDropdown">
                      <li>
                        <button class="dropdown-item d-flex align-items-center" id="LightTheme">
                          <ion-icon name="sunny-outline" class="me-2"></ion-icon> Light
                        </button>
                      </li>
                      <li>
                        <button class="dropdown-item d-flex align-items-center" id="DarkTheme">
                          <ion-icon name="moon-outline" class="me-2"></ion-icon> Dark
                        </button>
                      </li>
                      <li>
                        <button class="dropdown-item d-flex align-items-center" id="SemiDark">
                          <ion-icon name="contrast-outline" class="me-2"></ion-icon> Semi Dark
                        </button>
                      </li>
                    </ul>
                  </li>
               
          
            <li class="nav-item dropdown dropdown-user-setting">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                <div class="user-setting">
                  <img src="https://codervent.com/fobia/demo/ltr/assets/images/avatars/06.png" class="user-img" alt="">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="javascript:;">
                    <div class="d-flex flex-row align-items-center gap-2">
                      <img src="https://codervent.com/fobia/demo/ltr/assets/images/avatars/06.png" alt="" class="rounded-circle" width="54" height="54">
                      <div class="">
                        <h6 class="mb-0 dropdown-user-name text-capitalize "><?php echo $_SESSION["username"] ?></h6>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
               
                <li>
                  <a class="dropdown-item" href="index.php">
                    <div class="d-flex align-items-center">
                      <div class="">
                      <i class="bi bi-speedometer2"></i>
                      </div>
                      <div class="ms-3"><span>Dashboard</span></div>
                    </div>
                  </a>
                </li>
           
                <li>
                  <a class="dropdown-item" href="add-photo.php">
                    <div class="d-flex align-items-center">
                      <div class="">
                      <i class="bi bi-calendar4-event"></i>
                      </div>
                      <div class="ms-3"><span>Add Photo</span></div>
                    </div>
                  </a>
                </li>

                <li>
                  <a class="dropdown-item" href="video-add.php">
                    <div class="d-flex align-items-center">
                      <div class="">
                      <i class="bi bi-calendar4-event"></i>
                      </div>
                      <div class="ms-3"><span>Add Video</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                 <li>
                  <a class="dropdown-item" href="password-change.php">
                    <div class="d-flex align-items-center">
                      <div class="">
                      <i class="bi bi-person"></i>
                      </div>
                      <div class="ms-3"><span>Password Change</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="logout.php">
                    <div class="d-flex align-items-center">
                      <div class="">
                      <i class="bi bi-box-arrow-right"></i>
                      </div>
                      <div class="ms-3"><span>Logout</span></div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

          </ul>

        </div>
      </nav>
    </header>