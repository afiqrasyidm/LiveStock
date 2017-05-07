<?php
	 session_start();


  require "login.php";

  include 'header.php';
	
	?>
<!-- BEGIN # MODAL LOGIN -->

    <!-- Begin # DIV Form -->
      <div class="row">
      <div class="col-md-4 col-md-offset-4">
      <div id="div-forms" style="margin-top:30%;margin-bottom:15%; background-color:#C8F7C5">
      <img class="img-circle" id="img_logo" src="images/Livestock.jpg">
          <!-- Begin # Login Form -->
      <form id="login-form" method="post" action="<?php echo htmlspecialchars("login.php");?>">

          <div class="modal-body">
      <div id="div-login-msg">
                      <span>Type your username and password.</span>
      </div>
      <input name="username" id="login_username" class="form-control" type="text" placeholder="username/email" required>
      <input name="password" id="login_password" class="form-control" type="password" placeholder="Password" required>
                  <div class="checkbox">
                      <label>
                          <input type="checkbox"> Remember me
                      </label>
                  </div>
        </div>
      <div class="modal-footer">
                  <div>
                      <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                  </div>
                  <div class="lost-register-button">
                      <a href="" id="login_lost_btn">Lost Password?</a>
                      <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                  </div>
      </div>
          </form>
          <!-- End # Login Form -->
          
          <!-- Begin | Lost Password Form -->
      <form id="lost-form" style="display:none;">
      <div class="modal-body">
      <div id="div-lost-msg">
                      <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                      <span id="text-lost-msg">Type your e-mail.</span>
                  </div>
      <input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
        </div>
      <div class="modal-footer">
                  <div>
                      <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                  </div>
                  <div>
                      <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                      <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                  </div>
      </div>
          </form>
          <!-- End | Lost Password Form -->
          
      <!-- Begin | Register Form -->
      <form id="register-form" action="register.php" method="post" style="display:none;">
      <div class="modal-body">
      <div id="div-register-msg">
          <span id="text-register-msg">Register an account.</span>
      </div>
        <input id="register_name" name="fullname" class="form-control" type="text" placeholder="Fullname" required>
        <input id="register_username" name="username" class="form-control" type="text" placeholder="Username" required>
        <input id="register_password" name="password" class="form-control" type="password" placeholder="Password" required>
        <input id="register_email" name="email" class="form-control" type="text" placeholder="E-Mail" required>
        <input id="register_no_hp" name="no_hp" class="form-control" type="text" placeholder="No. Hp" required>
        <br/>
      </div>
      <div class="modal-footer">
                  <div style="margin-bottom:20px">
                      <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                  </div>
                  <div>
                      <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                      <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                  </div>
      </div>
          </form>
          <!-- End | Register Form -->
        </div>
      </div>
    </div>        
                 
<?php
	include 'footer.php';
	
	?>
