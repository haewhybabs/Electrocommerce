<?php $this->load->view('layouts/header'); ?>

<!-- Content -->
<div id="content"> 
    
    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Contact</li>
        </ol>
      </div>
    </div>
    
    <!-- Contact -->
    <section class="contact-sec padding-top-40 padding-bottom-80">
      <div class="container"> 
        
        <!-- MAP -->
        <section class="map-block margin-bottom-40">
          <div class="container">
            <div class="row">
              <iframe style="width: 1170px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4216729567565!2d3.337127514835556!3d6.594398495231023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9227511b7bf3%3A0x74af91f67609f069!2s3a+Somoye+Osundairo+Street%2C+Ikeja+100271%2C+Ikeja!5e0!3m2!1sen!2sng!4v1548948689209" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </section>
        
        <!-- Conatct -->
        <div class="contact">
          <div class="contact-form"> 
            <!-- FORM  -->
            <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
              <div class="row">
                <div class="col-md-8"> 
                  
                  <!-- Payment information -->
                  <div class="heading">
                    <h2>Dou You have a Question for Us ?</h2>
                  </div>
                  <ul class="row">
                    <li class="col-sm-6">
                      <label>First Name
                        <input type="text" class="form-control" name="name" id="name" placeholder="">
                      </label>
                    </li>
                    <li class="col-sm-6">
                      <label>Last Name
                        <input type="text" class="form-control" name="email" id="email" placeholder="">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>Message
                        <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                      </label>
                    </li>
                    <li class="col-sm-12 no-margin">
                      <button type="submit" value="submit" class="btn-round" id="btn_submit" onClick="proceed();">Send Message</button>
                    </li>
                  </ul>
                </div>
                
                <!-- Conatct Infomation -->
                <div class="col-md-4">
                  <div class="contact-info">
                    <h5>Gadget Hub</h5>
                    <p> Computer Hardware, Mobile Phone, Home And Office Accessories </p>
                    <hr>

                    <h6> Office Address: </h6>
                    <p> Business Address: 3A, Somoye Osundairo Street, Computer Village, Ikeja, Lagos, Nigeria </p>

                    <h6> Phone: </h6>
                    <p> (+234) 023 456 7890 </p>
                    <p> (+234) 023 456 7890 </p>

                    <h6>Email:</h6>
                    <p> support@gadgethub.com
                      contact@gadgethubh.com</p>
                  </div>
                </div>
              </div>
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