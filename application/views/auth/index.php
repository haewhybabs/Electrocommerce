<?php $this->load->view('layouts/header'); ?>
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
            <div class="row">
                <div class="col-md-6">
                    <!-- Login Your Account -->
                    <h5>Login Your Account</h5>

                    <!-- FORM -->
                    <form method="post" action="<?= base_url(); ?>user/login_user">
                        <ul class="row">
                            <li class="col-sm-12">
                                <label>Email
                                    <input type="email" class="form-control" name="email_login" placeholder="">
                                </label>
                            </li>
                            <li class="col-sm-12">
                                <label>Password
                                    <input type="password" class="form-control" name="password_login" placeholder="">
                                </label>
                            </li>
                            <li class="col-sm-6">
                                <div class="checkbox checkbox-primary">
                                    <input id="cate1" class="styled" type="checkbox">
                                    <label for="cate1"> Keep me logged in </label>
                                </div>
                            </li>
                            <li class="col-sm-6"> <a href="#." class="forget">Forgot your password?</a> </li>
                            <li class="col-sm-12 text-left">
                                <button type="submit" class="btn-round">Login</button>
                            </li>
                        </ul>
                    </form>
                </div>

                <!-- Don’t have an Account? Register now -->
                <div class="col-md-6">
                    <h5>Don’t have an Account? Register now</h5>

                    <!-- FORM -->
                    <form method="post" action="<?= base_url(); ?>user/register">
                        <ul class="row">
                            <li class="col-sm-12">
                                <label>First Name
                                    <input type="text" class="form-control" name="firstname" placeholder=""
                                        value="<?php echo set_value('firstname'); ?>" required>
                                </label>
                            </li>


                            <li class="col-sm-12">
                                <label>Last Name
                                    <input type="text" class="form-control" name="lastname" placeholder=""
                                        value="<?php echo set_value('lastname'); ?>" required>
                                </label>
                            </li>


                            <li class="col-sm-12">
                                <label>Username
                                    <input type="text" class="form-control" name="username" placeholder=""
                                        value="<?php echo set_value('username'); ?>" required>
                                </label>
                            </li>
                            <li class="col-sm-12">
                                <label>Email
                                    <input type="email" class="form-control" name="email" placeholder=""
                                        value="<?php echo set_value('email'); ?>" required>
                                </label>
                            </li>
                            <li class="col-sm-12">
                                <label>Password
                                    <input type="password" class="form-control" name="password" placeholder=""
                                        value="<?php echo set_value('password'); ?>" required>
                                </label>
                            </li>

                            <li class="col-sm-12">
                                <label>Mobile
                                    <input type="text" class="form-control" name="mobile" placeholder=""
                                        value="<?php echo set_value('mobile'); ?>" required>
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
                <li><img src="images/c-img-1.png" alt=""></li>
                <li><img src="images/c-img-2.png" alt=""></li>
                <li><img src="images/c-img-3.png" alt=""></li>
                <li><img src="images/c-img-4.png" alt=""></li>
                <li><img src="images/c-img-5.png" alt=""></li>
            </ul>
        </div>
    </section>

    <!-- Newslatter -->
    <section class="newslatter">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Subscribe our Newsletter <span>Get <strong>25% Off</strong> first purchase!</span></h3>
                </div>
                <div class="col-md-6">
                    <form>
                        <input type="email" placeholder="Your email address here...">
                        <button type="submit">Subscribe!</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('layouts/footer'); ?>