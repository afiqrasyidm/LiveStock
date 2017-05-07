<?php

  include 'header.php';
	
	?>
<!--/.header-->
<div id="#top"></div>
<section id="home">
  <div class="banner-container"> 
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
      </ol>
      <!-- Carousel items -->
      <div class="carousel-inner" style="opacity:0.34;">
        <div class="active item">
          <img src="images/banner-bg.jpg" alt="banner" style="max-width: 100%;height: 150vh; overflow: hidden;"/>
        </div>
        <div class="item">
          <img src="images/banner-bg2.jpg" alt="banner" style="max-width: 100%;height: 150vh; overflow: hidden;"/>
        </div>
 
      </div>
      <div style="position: absolute; text-align: center; top: 34%; width: 100%; z-index: 1">
        <h1>Selamat datang di LIVESTOCK</h1>
        <h2>Investasikan dana anda dalam dunia peternakan</h2>
        <h4>Tersedia Investasi Periode Januari-April 2017</br>Batch 1</h4>
        <form action="detail-lowongan.php">
          <?php if(!isset($_SESSION["username"])) {
              echo "<input role='button' data-toggle='modal' data-target='#login-modal' value='Mulai Sekarang' style='background-color: #4CAF50;border: none;color: white;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;padding: 10px 24px;'>";

            }else{
              echo "<input type='submit' value='Mulai Sekarang' style='background-color: #4CAF50;border: none;color: white;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;padding: 10px 24px;'>";     
            } ?>          
        </form>
      </div>
      <!-- Carousel nav -->
      <a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
    </div>
  </div>  
  
  <div class="container hero-text2">

  </div>
</section>


<section id="team" class="page-section">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2>Mulailah Berinvestasi</h2>
      <p>Jenis Sapi yang Kami Sediakan</p>
    </div>
    <!-- Team Member's Details -->
    <div class="team-content">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="images/sapi-limousin.jpg" alt=""
			  style="max-width: 100%;height: 200px;"
			  
			  > 
            </div>
              <!-- Member Details -->
            <div class="team-title">
              <h4>Sapi Limousin</h4>
              <!-- Designation --> 
            </div>
  
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="images/sapi-simmental.jpg" alt=""
			  style="max-width: 100%;height: 200px;"
			  
			  >  
			  
			  </div>
            <!-- Member Details -->
            <h4>Sapi Simmental</h4>
            <!-- Designation --> 
     
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="images/sapi-brangus.jpg" alt=""
			  style="max-width: 100%;height: 200px;"
			  
			  >  
		    </div>
            <!-- Member Details -->
            <h4>Sapi Brangus</h4>
            <!-- Designation --> 
           
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/.container--> 
</section>

<section id="services" class="page-section colord">
  <div class="container">
	<center>
		<h3>Keuntungan Berinvestasi dengan kami</h3></a>
    </center>
	<br>
	<br>
    <div class="row"> 
      <!-- item -->
      <div class="col-md-4 text-center"><i class="circle"><img src="images/5.png" alt="" /></i>
        <h3>Peternakkan Asli Indonesia</h3>
      </div>
      <!-- end: --> 
      
      <!-- item -->
      <div class="col-md-4 text-center"><i class="circle"><img src="images/1.png" alt="" /></i>
        <h3>Investasi Minim Fluktuasi</h3>
      </div>
      <!-- end: --> 
      
      <!-- item -->
      <div class="col-md-4 text-center"><i class="circle"><img src="images/2.png" alt="" /></i>
        <h3>Menguntungkan bagi banyak pihak</h3>
      </div>
      <!-- end: --> 
      
      <!-- item -->
      
      <!-- end:--> 
    </div>
  </div>
  <!--/.container--> 
</section>

<section class="page-section">
  <div class="banner-container"> 
    <div id="carousels" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousels" data-slide-to="0" class="active"></li>
        <li data-target="#carousels" data-slide-to="1"></li>
        <li data-target="#carousels" data-slide-to="2"></li>
      </ol>
      <!-- Carousel items -->
      <div class="carousel-inner">
        <div class="active item">
          <section id="aboutUs">
            <div class="container">
              <div class="heading text-center"> 
                <!-- Heading -->
                <h2>Mereka berkata..</h2>
              </div>
              <div class="row feature design">
                <div class="area1 columns right">
                  <h3>Muhammad Luqman Hakim</h3>
				  <h4>Orang greget Abad 21</h4>
				  
				  <br>
				  <br>
                  <h4> LiveStock merupakan inovasi yang menarik dan kreatif yang dapat menyelesaikan permasalahan kekurangan dagi di Indonesia </h5>
                </div>
                <div class="area2 columns feature-media left"> <img src="images/photo-1.jpg" alt="" width="100%"> </div>
              </div>
            </div>
          </section>
        </div>
        <div class="item">
          <section id="aboutUs">
            <div class="container">
              <div class="heading text-center"> 
                <!-- Heading -->
                <h2>Mereka berkata..</h2>
              </div>
              <div class="row feature design">
                <div class="area1 columns right">
                  <h3>Muhammad Luqman Hakim</h3>
				  <h4>Orang greget Abad 21</h4>
				  
				  <br>
				  <br>
                  <h4> LiveStock merupakan inovasi yang menarik dan kreatif yang dapat menyelesaikan permasalahan kekurangan dagi di Indonesia </h5>
                </div>
                <div class="area2 columns feature-media left"> <img src="images/photo-2.jpg" alt="" width="100%"> </div>
              </div>
            </div>
          </section>
        </div>
        <div class="item">
          <section id="aboutUs">
            <div class="container">
              <div class="heading text-center"> 
                <!-- Heading -->
                <h2>Mereka berkata..</h2>
              </div>
              <div class="row feature design">
                <div class="area1 columns right">
					<h3>Muhammad Luqman Hakim</h3>
				  <h4>Orang greget Abad 21</h4>
				  
				  <br>
				  <br>
                  <h4> LiveStock merupakan inovasi yang menarik dan kreatif yang dapat menyelesaikan permasalahan kekurangan dagi di Indonesia </h5>
                </div>
                <div class="area2 columns feature-media left"> <img src="images/photo-3.jpg" alt="" width="100%"> </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <!-- Carousel nav -->
      <a class="carousel-control left" href="#carousels" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#carousels" data-slide="next">&rsaquo;</a>
    </div>
  </div>
</section>

<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" align="center">
          <h3>Join Us!</h3>
        </div>
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
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
                <!-- End # DIV Form -->
                
      </div>
    </div>
  </div>
    <!-- END # MODAL LOGIN -->
    
<section id="services" class="page-section">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2>Jumlah yang telah bergabung</h2>
	  <br>
	  
    </div>
    <div class="row"> 
      <!-- item -->
      <div class="col-md-4 text-center">
          <img src="images/farmer-icon.png" 
		  style="width: 100px;height: 100px;"
		  >
	  
	    <h3>0 Peternak</h3>
      </div>
      <!-- end: --> 
      
      <!-- item -->
      <div class="col-md-4 text-center">
          <img src="images/money-icon.jpg"
		  style="width: 150px;height: 100px;"
		  
		  >

		<h3>0 M Investasi</h3>
      </div>
      <!-- end: --> 
      
      <!-- item -->
      <div class="col-md-4 text-center">
          <img src="images/investor-icon.jpg"
		  
		  style="width: 150px;height: 100px;"
		  
		  >

		<h3>0 Investor</h3>
      </div>
      <!-- end: --> 
     <!-- end:--> 
    </div>
  </div>
  <!--/.container--> 
</section>
 <br>
		<br>
      

<?php
	include 'footer.php';
	
	?>
