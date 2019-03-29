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

                <!-- First Column -->
                <div class="col-sm-12 col-md-offset-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <h4 class="m-b-30 m-t-0">Edit Category</h4>

                            <?php
                            if ($this->session->userdata('error') <> '') {
                                echo '<div class="alert alert-dismissable alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <i class="ti ti-alert"></i>&nbsp; <strong>Error!</strong> There are some errors happening
                                        <p>' . $this->session->userdata("error") . '</p>
                                </div>';
                            }
                            ?>

                            <?php
                            if ($this->session->userdata('message') <> '') {
                                echo '<div class="alert alert-dismissable alert-info">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong><p><i class="ti ti-check"></i>&nbsp; ' . $this->session->userdata("message") . '</p></strong>
                                        </div>';
                            }
                            ?>

                            <form action="<?= base_url('product/update_category'); ?>" method="post" id="edit-category" novalidate="">
                                <div class="alert alert-danger hidden" id="error"></div>
                                <div class="alert alert-success hidden" id="success"></div>
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" name="category-name" value="<?= $category->title; ?>" id="category-name" class="form-control" required="true">
                                    <small>This is the name (title) of the category.</small>
                                </div>
                                <div class="form-group">
                                    <label>Category Slug</label>
                                    <input type="text" name="category-slug" id="category-slug" class="form-control" readonly="">
                                    <small>The “slug” is the URL-friendly version of the name. It is usually all
                                        lowercase and contains only letters, numbers, and hyphens. No need to enter it,
                                        it will be automatically populated for you.</small>
                                </div>

                                <input type="hidden" name="id" value="<?= $category->id; ?>">
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>