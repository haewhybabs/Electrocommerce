<link type="text/css" href="<?php echo base_url(); ?>assets/fullcalendar/fullcalendar.css" rel="stylesheet">
<!-- FullCalendar -->
<link type="text/css" href="<?php echo base_url(); ?>assets/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
<!-- jVectorMap -->
<link type="text/css" href="<?php echo base_url(); ?>assets/switchery/switchery.css" rel="stylesheet">


<!-- Charts -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/charts-flot/jquery.flot.min.js"></script>
<!-- Flot Main File -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/charts-flot/jquery.flot.pie.min.js"></script>
<!-- Flot Pie Chart Plugin -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/charts-flot/jquery.flot.stack.min.js"></script>
<!-- Flot Stacked Charts Plugin -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/charts-flot/jquery.flot.orderBars.min.js"></script>
<!-- Flot Ordered Bars Plugin-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/charts-flot/jquery.flot.resize.min.js"></script>
<!-- Flot Responsive -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/charts-flot/jquery.flot.tooltip.min.js"></script>
<!-- Flot Tooltips -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/charts-flot/jquery.flot.spline.js"></script>
<!-- Flot Curved Lines -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/sparklines/jquery.sparklines.min.js"></script>
<!-- Sparkline -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<!-- jVectorMap -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/jvectormap/jquery-jvectormap-world-mill-en.js">
</script> <!-- jVectorMap -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/switchery/switchery.js"></script> <!-- Switchery -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/easypiechart/jquery.easypiechart.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/fullcalendar/moment.min.js"></script>
<!-- Moment.js Dependency -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/fullcalendar/fullcalendar.min.js"></script>
<!-- Calendar Plugin -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/demo-index.js"></script>

<div class="p-content add-new-prod-page">
    <div class="p-header">
        <div class="page-header-title">
            <h4 class="page-title"> <?php echo $pageTitle; ?> </h4>
        </div>
    </div>

    <div class="page-content-wrapper">
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Conumn -->
                <div class="col-sm-12 col-md-8 col-md-offset-2 c-col-add-new-pg">
                    <!-- Panel -->
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <h4> Add New Specification&#40;s&#41; </h4>

                            <!-- Form -->
                            <?php echo form_open_multipart('product/product_specs'); ?>

                                <!-- Product Name and Category -->
                                <div class="row">
                                    <!-- Category Name Column -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""> Select a Product Category </label>
                                            <select name="productCategory" id="" class="form-control" required="true">
                                            <?php foreach ($category as $cat) { ?>
                                                <option value="<?= $cat->id; ?>"> <?= $cat->title; ?> </option>
                                            
                                        <?php 
                                    } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Product Name Column -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""> Number of Specification&#40;s&#41; </label>
                                            <input type="number" name="spec_num" class="form-control" required="true" placeholder="Type the number of specifications">
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="row sub-btn-wrapper">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light"> Submit </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>