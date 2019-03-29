<?php $this->load->view('layouts/header'); ?>

  <!-- Content -->
  <div id="content"> 
    
    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">About Us</li>
        </ol>
      </div>
    </div>
    
    <!-- About Sec -->
    <section class="about-sec padding-top-60 padding-bottom-60">
      <div class="container"> 
        
        <!-- About Adds -->
        <div class="about-adds">
          <div class="position-center-center">
            <h2> Gadget Hub <small> Computer Hardware, Mobile Phone, <br> Home And Office Accessories  </small></h2>
            <a href="<?php echo base_url('/'); ?>" class="btn-round">Shop with Us</a> </div>
        </div>
      </div>
    </section>
    
    <!-- General Information -->
    <section class="gen-info padding-top-60">
      <div class="container"> 
        
        <!-- heading -->
        <div class="heading">
          <h2>General Information</h2>
          <hr>
        </div>
        
        <!-- Section body -->
        <div class="sectBody"> 
          <div class="info">
            GadgetHub Limited is Nigeria No 1 information and technology products and 
            service store <strong> (www.gadgethubng.com) </strong>.Focused at providing turnkey bussiness 
            solutions and  distribution of communications equipments,ranging  sales of 
            mobile devices, laptops, accessories, office euipments such as desktops, computers,
            printers, scanners, inverters and more. We also do repairs of all kinds of 
            communications equipments ranging from mobile devices, laptops, printers, 
            photocopiers, cameras and more. At GadgetHub Limited, our services allows 
            you focus on your core competences, while we worry about your IT/gadgets 
            needs. We deliver anywhere you are within Nigeria, no matter the distance. 
            All that is needed is a call from you and your experience will be worth 
            the call. Please do send your us feedback.
          </div>
        
        </div>
      </div>
    </section>
    
    <!-- Skills -->
    <!-- <section class="skills padding-top-60">
      <div class="container">  -->
        
        <!-- heading -->
        <!-- <div class="heading">
          <h2>Our Awesome Skills</h2>
          <hr>
        </div> -->
        
        <!-- progress-bars -->
        <!-- <div class="progress-bars">  -->
          <!-- PHOTOSHOP -->
          <!-- <div class="bar">
            <div class="row">
              <div class="col-sm-2">
                <p>Adobe/Photoshop </p>
              </div>
              <div class="col-sm-10">
                <div class="progress" data-percent="90%">
                  <div class="progress-bar"> <span class="progress-bar-tooltip">90%</span></div>
                </div>
              </div>
            </div>
          </div> -->
          
          <!-- HTML -->
          <!-- <div class="bar">
            <div class="row">
              <div class="col-sm-2">
                <p>UI Design</p>
              </div>
              <div class="col-sm-10">
                <div class="progress" data-percent="70%">
                  <div class="progress-bar"><span class="progress-bar-tooltip">70%</span> </div>
                </div>
              </div>
            </div>
          </div> -->
          
          <!-- ILLUSTRATION -->
          <!-- <div class="bar">
            <div class="row">
              <div class="col-sm-2">
                <p>Layout & Frame</p>
              </div>
              <div class="col-sm-10">
                <div class="progress" data-percent="80%">
                  <div class="progress-bar"><span class="progress-bar-tooltip">80%</span> </div>
                </div>
              </div>
            </div>
          </div> -->
          
          <!-- ILLUSTRATION -->
          <!-- <div class="bar">
            <div class="row">
              <div class="col-sm-2">
                <p>Typography</p>
              </div>
              <div class="col-sm-10">
                <div class="progress" data-percent="80%">
                  <div class="progress-bar"><span class="progress-bar-tooltip">80%</span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    
    <!-- Team -->
    <!-- <section class="padding-top-60 padding-bottom-60">
      <div class="container">  -->
        
        <!-- heading -->
        <!-- <div class="heading">
          <h2>Meet Our Team</h2>
          <hr>
        </div>
        <div class="team">
          <div class="row">
            <div class="col-md-3"> <img class="img-responsive" src="images/team-img-1.jpg" alt="" >
              <h3>Tom Doe</h3>
              <span>Ceo/Founder SmartTech</span> </div>
            <div class="col-md-3"> <img class="img-responsive" src="images/team-img-2.jpg" alt="" >
              <h3>Tom Doe</h3>
              <span>Ceo/Founder SmartTech</span> </div>
            <div class="col-md-3"> <img class="img-responsive" src="images/team-img-3.jpg" alt="" >
              <h3>Tom Doe</h3>
              <span>Ceo/Founder SmartTech</span> </div>
            <div class="col-md-3"> <img class="img-responsive" src="images/team-img-4.jpg" alt="" >
              <h3>Tom Doe</h3>
              <span>Ceo/Founder SmartTech</span> </div>
          </div>
        </div>
      </div>
    </section> -->
    
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