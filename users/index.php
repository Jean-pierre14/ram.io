  <?php include './__header.hash.php'; include './__nav__.php';?>
  <div class="wrapper">
    <input type="hidden" id="myId" value="<?= $_SESSION['id'];?>" class="form-control">
    <div class="page-header">
      <img src="../assets/img/dots.png" class="dots">
      <img src="../assets/img/path4.png" class="path">
      <div class="container align-items-center">
        <div class="tab-content tab-subcategories">
            <div class="tab-pane active" id="linka">
                <div id="profil">
                    <h3>Welcome to your account</h3>
                </div>
            </div>
            <div class="tab-pane" id="linkb">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                      <i class="tim-icons icon-single-02"></i>
                  </div>
                </div>
                <input type="text" id="search" class="form-control" placeholder="search">
              </div>
                <div id="salary">
                    <h3 class="text-center">Welcome to your salary platform</h3>
                </div>
            </div>
            <div class="tab-pane" id="linkc">
                <div id="news">
                  <?php include './news.php';?>
                </div>
            </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h1 class="title">RamaLL•</h1>
          </div>
          <div class="col-md-3">
            <ul class="nav">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Landing
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Register
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Profile
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul class="nav">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Contact Us
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  About Us
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Blog
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  License
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3 class="title">Follow us:</h3>
            <div class="btn-wrapper profile">
              <a target="_blank" href="#"
                class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip"
                data-original-title="Follow us">
                <i class="fab fa-twitter"></i>
              </a>
              <a target="_blank" href="#"
                class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip"
                data-original-title="Like us">
                <i class="fab fa-facebook-square"></i>
              </a>
              <a target="_blank" href="#"
                class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip"
                data-original-title="Follow us">
                <i class="fab fa-dribbble"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  
<?php include '__footer.php';?>