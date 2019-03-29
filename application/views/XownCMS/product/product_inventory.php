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

<div class="p-content prod-invent-page">
    <div class="p-header">
        <div class="page-header-title">
            <h4 class="page-title"> <?php echo $pageTitle; ?> </h4>
        </div>

        <div class="add-new-prod-link">
            <a href="<?php echo base_url('product/new_product'); ?>"> Add New Product </a>
        </div>
    </div>

    <div class="page-content-wrapper">
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <h4 class="m-b-30 m-t-0">All Products</h4>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="table-responsive">
                                        <div id="products_wrapper"
                                            class="dataTables_wrapper form-inline dt-bootstrap no-footer">

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

                                            <!-- Row One -->
                                            <div class="row row-one">
                                                <div class="col-sm-6">
                                                    <div class="dataTables_length" id="products_length"><label>Show
                                                        <select name="products_length" aria-controls="products"
                                                            class="form-control input-sm">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select> entries</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div id="products_filter" class="dataTables_filter">
                                                        <label>Search:<input type="search" class="form-control input-sm"
                                                                placeholder="Search..." aria-controls="products"></label></div>
                                                </div>
                                            </div>

                                            <!-- Row Two -->
                                            <div class="row row-two">
                                                <div class="col-sm-12">
                                                    <table
                                                        class="table table-striped table-bordered table-hover dataTable no-footer"
                                                        id="products" role="grid" aria-describedby="products_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0"
                                                                    aria-controls="products" rowspan="1" colspan="1"
                                                                    style="width: 66px;" aria-sort="ascending"
                                                                    aria-label="#: activate to sort column descending">#
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="products" rowspan="1" colspan="1"
                                                                    style="width: 143px;"
                                                                    aria-label="Name: activate to sort column ascending">
                                                                    Name</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="products" rowspan="1" colspan="1"
                                                                    style="width: 205px;"
                                                                    aria-label="Unit Price: activate to sort column ascending">
                                                                    Price</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="products" rowspan="1" colspan="1"
                                                                    style="width: 207px;"
                                                                    aria-label="Qty. Prod.: activate to sort column ascending">
                                                                    Category</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="products" rowspan="1" colspan="1"
                                                                    style="width: 210px;"
                                                                    aria-label="Prod. Cost: activate to sort column ascending">
                                                                    Date Added</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="products" rowspan="1" colspan="1"
                                                                    style="width: 215px;"
                                                                    aria-label="Prod. Date: activate to sort column ascending">
                                                                    Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        <?php if ($products == false) : ?>
                                                            <tr class="odd">
                                                                <td colspan="6" class="dataTables_empty" valign="top"> <strong> No
                                                                    data available in table </strong>
                                                                </td>
                                                            </tr>
                                                            <?php else : ?>
                                                            <?php $x = 1; ?>
                                                            <?php foreach ($products as $product) : ?>
                                                            <tr class="odd">

                                                                <!-- S/N -->
                                                                <td colspan="" class="dataTables_empty" valign="top"> <?= $x; ?>
                                                                </td>

                                                                <!-- Product Name -->
                                                                <td colspan="" class="dataTables_empty" valign="top"> <?= $product->productName; ?>
                                                                </td>

                                                                <!-- Product Price -->
                                                                <td colspan="" class="dataTables_empty" valign="top"> <?= number_format($product->productPrice); ?>
                                                                </td>

                                                                <!-- Product Category -->
                                                                <td colspan="" class="dataTables_empty" valign="top"> <?= $product->title; ?>
                                                                </td>

                                                                <!-- Date Added -->
                                                                <td colspan="" class="dataTables_empty" valign="top"> <?= $product->dateAdded; ?>
                                                                </td>

                                                                <!-- Action -->
                                                                <td class="text-center">
                                                                    <a href="<?= base_url() ?>product/edit_product/<?= $product->prod_id; ?>" class="btn btn-default"><i class="ti-pencil"></i></a>
                                                                     | 
                                                                    <a href="<?= base_url() ?>product/delete_product/<?= $product->prod_id; ?>" class="btn btn-danger"><i class="ti-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <?php $x++; ?>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <!-- Row Three -->
                                            <div class="row row-three">
                                                <div class="col-sm-6">
                                                    <div class="dataTables_info" id="products_info" role="status"
                                                        aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="dataTables_paginate paging_simple_numbers"
                                                        id="products_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button previous disabled"
                                                                aria-controls="products" tabindex="0"
                                                                id="products_previous"><a href="#">Previous</a></li>
                                                            <li class="paginate_button next disabled"
                                                                aria-controls="products" tabindex="0"
                                                                id="products_next"><a href="#">Next</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>