<link type="text/css" href="<?php echo base_url(); ?>assets/fullcalendar/fullcalendar.css" rel="stylesheet"> <!-- FullCalendar -->
<link type="text/css" href="<?php echo base_url(); ?>assets/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"> <!-- jVectorMap -->
<link type="text/css" href="<?php echo base_url(); ?>assets/switchery/switchery.css" rel="stylesheet">


<!-- Charts -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/charts-flot/jquery.flot.min.js"></script> <!-- Flot Main File -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/charts-flot/jquery.flot.pie.min.js"></script> <!-- Flot Pie Chart Plugin -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/charts-flot/jquery.flot.stack.min.js"></script> <!-- Flot Stacked Charts Plugin -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/charts-flot/jquery.flot.orderBars.min.js"></script> <!-- Flot Ordered Bars Plugin-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/charts-flot/jquery.flot.resize.min.js"></script> <!-- Flot Responsive -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/charts-flot/jquery.flot.tooltip.min.js"></script> <!-- Flot Tooltips -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/charts-flot/jquery.flot.spline.js"></script> <!-- Flot Curved Lines -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/sparklines/jquery.sparklines.min.js"></script> <!-- Sparkline -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/jvectormap/jquery-jvectormap-2.0.2.min.js"></script> <!-- jVectorMap -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/jvectormap/jquery-jvectormap-world-mill-en.js"></script> <!-- jVectorMap -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/switchery/switchery.js"></script> <!-- Switchery -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/easypiechart/jquery.easypiechart.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/fullcalendar/moment.min.js"></script> <!-- Moment.js Dependency -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/fullcalendar/fullcalendar.min.js"></script> <!-- Calendar Plugin -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/demo-index.js"></script>

<!-- Dashboard Title -->
<div class="row" style="margin-top: 40px;">
    <!-- Product Title -->
    <div class="col-sm-12">
        <h4 style="color: #7C1828 !important">
            <?= $product->productName; ?>
        </h4>
    </div>
    <!-- <div class="col-md-3">
        <div class="info-tile tile-orange">
            <div class="tile-icon"><i class="ti ti-user"></i></div>
            <div class="tile-heading"><span>Enrollee</span></div>
           <div class="tile-body"><span>2</span></div>
            <div class="tile-footer"><span class="text-success">22.5% <i class="fa fa-level-up"></i></span></div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-tile tile-success">
            <div class="tile-icon"><i class="ti ti-bar-chart"></i></div>
            <div class="tile-heading"><span>Capitation</span></div>
           <div class="tile-body"><span>2</span></div>
            <div class="tile-footer"><span class="text-danger">12.7% <i class="fa fa-level-down"></i></span></div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-tile tile-info">
            <div class="tile-icon"><i class="fa fa-hospital-o"></i></div>
            <div class="tile-heading"><span>Providers</span></div>
            <div class="tile-body"><span>2</span></div>
            <div class="tile-footer"><span class="text-success">5.2% <i class="fa fa-level-up"></i></span></div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-tile tile-danger">
            <div class="tile-icon"><i class="fa fa-group"></i></div>
            <div class="tile-heading"><span>Customers</span></div>
            <div class="tile-body"><span>2</span></div>
            <div class="tile-footer"><span class="text-danger">10.5% <i class="fa fa-level-down"></i></span></div>
        </div>
    </div -->
</div>

<?php
if ($this->session->userdata('error') <> '') {
    echo '<div class="alert alert-dismissable alert-danger">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<i class="ti ti-alert"></i>&nbsp; <strong>Error!</strong><p>' . $this->session->userdata("error") . '</p>
</div>';
}
if ($this->session->userdata('message') <> '') {
    echo '<div class="alert alert-dismissable alert-info">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<strong><p><i class="ti ti-check"></i>&nbsp; ' . $this->session->userdata("message") . '</p></strong>
</div>';
}
if (validation_errors() != false) {
    echo '<div class="alert alert-dismissable alert-danger">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<i class="ti ti-alert"></i>&nbsp; <strong>Error!</strong> There are some errors in your form
<ul style="list-style-type:disc">' . validation_errors() . '</ul>
</div>';
}
?>

<!-- Panels -->
<div data-widget-group="group1">

    <!-- Row one - top -->
    <div class="row">

        <!-- Product image and other meta data -->
        <div class="col-md-4">
            <div class="panel panel-default" data-widget='{"draggable": "false"}'>

                <!-- Panel heading -->
                <!-- <div class="panel-heading">
                    <h2>Website Visitor Stats</h2>
                    <div class="panel-ctrls button-icon-bg" 
                         data-actions-container="" 
                         data-action-collapse='{"target": ".panel-body"}'
                         >
                    </div>
                </div> -->

                <!-- Panel body -->
                <div class="panel-body home2">
                    <!-- Product image view in 600 x 600 -->
                    <div style="text-align: center; margin-bottom: 20px;">
                        <img src="<?php echo base_url(); ?>uploads/<?= $product->productImage; ?>" alt="" width="374px" height="374px;">
                    </div>

                    <!-- Other meta data -->
                    <div style="text-align: center;">

                        <!-- Date Added -->
                        <div>
                            <p> <strong> &#8358;
                                    <?= number_format($product->productPrice); ?> </strong> </p>
                        </div>

                        <!-- Product category -->
                        <div>
                            <h5> Product Category </h5>

                            <p>
                                <?= $product->title; ?>
                            </p>
                        </div>

                        <!-- Brief description -->
                        <div>
                            <?php if ($product->shortProductDesc == false): ?>

                            <span></span>

                            <?php else: ?>
                            <h5> Brief Description </h5>

                            <p>
                                <?= $product->shortProductDesc; ?>
                            </p>

                            <?php endif; ?>
                        </div>

                        <!-- Date Added -->
                        <div>
                            <h5> Date Added </h5>

                            <p>
                                <?= $product->dateAdded; ?>
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-8">
            <!-- Full description -->
            <div class="">
                <div class="panel panel-teal" data-widget='{"draggable": "false"}'>
                    <div class="panel-heading">
                        <h2>
                            <?= $product->productName; ?> Full Description </h2>
                        <div class=" button-icon-bg">

                            <!-- <input type="hidden" value="<?= $single_specification->specification_id; ?>"> -->
                        </div>
                    </div>
                    <div class="panel-body no-padding home full-desc-max-height">
                        <table class="table browsers m-n">
                            <tbody>
                                <?php if ($product == false): ?>
                                <tr>
                                    <td>
                                        <center> <strong> Full description is not available for this product </strong> </center>
                                    </td>
                                </tr>

                                <?php else: ?>

                                <tr>
                                    <td>
                                        <?= $product->fullProductDesc; ?>
                                    </td>
                                </tr>

                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Product specification table -->
            <div class="">
                <div class="panel panel-teal" data-widget='{"draggable": "false"}'>
                    <div class="panel-heading">
                        <h2>
                            <?= $product->productName; ?> Specification </h2>
                        <div class=" button-icon-bg">
                            <!-- <div> -->
                            <a class="add-spec" href="<?php echo base_url(); ?>product/single_product_specs/<?= $product->prod_id; ?>"> <i class="ti ti-plus"></i> Add Specification </a>
                            <!-- </div> -->
                            <!-- <input type="hidden" value="<?= $single_specification->specification_id; ?>"> -->
                        </div>
                    </div>
                    <div class="panel-body no-padding home prod-spec-max-height">
                        <table class="table browsers m-n">
                            <tbody>
                                <?php if ($specification == false): ?>
                                <tr>
                                    <td>
                                        <center> <strong> There is no specification for this product </strong> </center>
                                    </td>
                                </tr>

                                <?php else: ?>
                                <?php foreach ($specification as $spec): ?>
                                <tr>
                                    <td>
                                        <?= $spec->specification; ?>
                                    </td>
                                    <td class="text-right"> <a class="edit-spec" title="Modify Specification" href="<?php echo base_url(); ?>product/edit_specification/<?= $spec->specification_id; ?>"> <i class="ti ti-pencil"></i> </a> </td>
                                    <td class="vam" style="width: 56px;">
                                        <a class="del-spec" title="Remove Specification" href="<?php echo base_url(); ?>product/delete_specification/<?= $spec->specification_id; ?>"> <i class="ti ti-trash"></i> </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                                <?php endif; ?>

                                <!-- <tr>
                                    <td>Firefox</td>
                                    <td class="text-right">20.5%</td>
                                    <td class="vam">
                                        <div class="progress m-n">
                                            <div class="progress-bar progress-bar-teal" style="width: 50%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Opera</td>
                                    <td class="text-right">14.6%</td>
                                    <td class="vam">
                                        <div class="progress m-n">
                                            <div class="progress-bar progress-bar-teal" style="width: 40%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Safari</td>
                                    <td class="text-right">9.1%</td>
                                    <td class="vam">
                                        <div class="progress m-n">
                                            <div class="progress-bar progress-bar-teal" style="width: 25%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Internet Explorer</td>
                                    <td class="text-right">5.3%</td>
                                    <td class="vam">
                                        <div class="progress m-n">
                                            <div class="progress-bar progress-bar-teal" style="width: 12.5%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Torch</td>
                                    <td class="text-right">2.9%</td>
                                    <td class="vam">
                                        <div class="progress m-n">
                                            <div class="progress-bar progress-bar-teal" style="width: 9%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maxthon</td>
                                    <td class="text-right">2.3%</td>
                                    <td class="vam">
                                        <div class="progress m-n">
                                            <div class="progress-bar progress-bar-teal" style="width: 6%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Others</td>
                                    <td class="text-right">1.6%</td>
                                    <td class="vam">
                                        <div class="progress m-n">
                                            <div class="progress-bar progress-bar-teal" style="width: 3%"></div>
                                        </div>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div> 