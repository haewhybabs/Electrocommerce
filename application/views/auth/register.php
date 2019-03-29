<?php $this->load->view('layouts/header'); ?>

<!-- Content -->
<div id="content"> 
    
    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Authentication</li>
        </ol>
      </div>
    </div>
    
    <!-- Blog -->
    <section class="login-sec padding-top-30 padding-bottom-100">
      <div class="container">
        <div class="row row-grid">

          <!-- Tabs column -->
          <div class="tab-sect">
            <div class="tab-wrap">
              <!-- Tab one -->
              <div class="login">
                <a href="<?php echo base_url('user/index'); ?>"> Login </a>
              </div>

              <!-- Tab two -->
              <div class="register">
                <a href="<?php echo base_url('user/sign_up'); ?>"> Sign Up </a>
              </div>
            </div>
          </div>

          <!-- Social media icons -->
          <div class="social-sect">
            <div class="social-wrap">
              <!-- Facebook -->
              <a href="#" class="facebook">
                <i class="fab fa-facebook-f"></i>
              </a>

              <!-- Twitter -->
              <a href="#" class="twitter">
                <i class="fab fa-twitter"></i>
              </a>

              <!-- LinkedIn -->
              <a href="#" class="linked-in">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>

          <!-- Or clause -->
          <div class="or-clause">
            <span> OR </span>
          </div>
                    
          <!-- Don’t have an Account? Register now -->
          <div class="col-md-6">
            
            <!-- FORM -->
            <form>
              <ul class="row">
                <li class="col-sm-12">
                  <label>Username
                    <input type="text" class="form-control" name="name" placeholder="">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>Email
                    <input type="password" class="form-control" name="pass" placeholder="">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>Password
                    <input type="password" class="form-control" name="pass" placeholder="">
                  </label>
                </li>
                <li class="col-sm-12 text-left">
                  <button type="submit" class="btn-round">Register</button>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Clients img -->
    <section class="light-gry-bg clients-img">
      <div class="container">
        <ul>
          <li><img src="<?php echo base_url(); ?>public_assets/images/infinix-logo.png" alt="" ></li>
          <li><img src="<?php echo base_url(); ?>public_assets/images/hauwaii-logo.png" alt="" ></li>
          <li><img src="<?php echo base_url(); ?>public_assets/images/itel-logo.png" alt="" ></li>
          <li><img src="<?php echo base_url(); ?>public_assets/images/gionee-logo.png" alt="" ></li>
          <li><img src="<?php echo base_url(); ?>public_assets/images/dell-logo.png" alt="" ></li>
        </ul>
      </div>
    </section>
    
  </div>
  <!-- End Content --> 

<?php $this->load->view('layouts/footer'); ?>