<header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.php" class="logo">
                          Seva Panchayat
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li ><a href="index.php" class="active">Home</a></li>
                          <li><a href="ANNOUNCE.php">Announcents</a></li>
                          
                          <li class="has-sub">
                              <a href="javascript:void(0)">Payments</a>
                              <ul class="sub-menu">
                                  <li><a href="service.php">Water Bill</a></li>
                                  <li><a href="meeting-details.php">House Tax</a></li>
                              </ul>
                          </li>
                          <li><a href="service.php">Services</a></li> 
                          <li ><a href="#contact">Contact Us</a></li> 
                          <?php if(!isset($_SESSION['uid'])) {?>
                          <li><a href="login.php" class="external">Login</a></li>

                           <?php } else { ?>
                           <li><a href="logout.php" class="external">Logout</a></li>
                          <?php } ?>
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header> 