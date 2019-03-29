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
                <div class="col-sm-12 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <h4 class="m-b-30 m-t-0">Add New Category</h4>

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

                            <form action="add_category" method="post" id="add-category" novalidate="">
                                <div class="alert alert-danger hidden" id="error"></div>
                                <div class="alert alert-success hidden" id="success"></div>
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" name="category-name" id="category-name" class="form-control"
                                        required="true">
                                    <small>This is the name (title) of the category.</small>
                                </div>
                                <div class="form-group">
                                    <label>Category Slug</label>
                                    <input type="text" name="category-slug" id="category-slug" class="form-control" readonly="">
                                    <small>The “slug” is the URL-friendly version of the name. It is usually all
                                        lowercase and contains only letters, numbers, and hyphens. No need to enter it,
                                        it will be automatically populated for you.</small>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Second Column -->
                <div class="col-sm 12 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <h4 class="m-b-30 m-t-0">Categories</h4>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="table-responsive">

                                        <div id="categories_wrapper"
                                            class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                            <div class="row">
                                                <div class="col-sm-6">

                                                </div>
                                                <div class="col-sm-6">
                                                    <div id="categories_filter" class="dataTables_filter">
                                                        <label>Search:<input type="search" class="form-control input-sm"
                                                                placeholder="Search..." aria-controls="categories"></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">

                                                    <table
                                                        class="table table-striped table-bordered table-hover dataTable no-footer"
                                                        id="categories" role="grid" aria-describedby="categories_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0"
                                                                    aria-controls="categories" rowspan="1" colspan="1"
                                                                    style="width: 34px;" aria-sort="ascending"
                                                                    aria-label="#: activate to sort column descending">#
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="categories" rowspan="1" colspan="1"
                                                                    style="width: 298px;"
                                                                    aria-label="Name: activate to sort column ascending">
                                                                    Name</th>
                                                                <th class="text-center sorting" tabindex="0"
                                                                    aria-controls="categories" rowspan="1" colspan="1"
                                                                    style="width: 152px;"
                                                                    aria-label="Action: activate to sort column ascending">
                                                                    Action</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <?php if ($category == false) : ?>
                                                                <tr role="row" class="odd">
                                                                    <td class="sorting_1" colspan="3" style="text-align: center;"> <strong> No data available </strong> </td>
                                                                </tr>
                                                                <?php else : ?>
                                                                <?php $x = 1; ?>
                                                                <?php foreach ($category as $cat) : ?>
                                                                    <tr role="row" class="odd">
                                                                        <td class="sorting_1"> <?= $x; ?> </td>
                                                                        <td> <?= $cat->title; ?> </td>
                                                                        <td class="text-center">
                                                                            <a href="<?= base_url(); ?>product/edit_category/<?= $cat->id; ?>" class="btn btn-default"><i class="ti-pencil"></i></a> |
                                                                            <a href="<?= base_url(); ?>product/delete_category/<?= $cat->id; ?>" class="btn btn-danger"><i class="ti-trash"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                <?php $x++; ?>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <?php if ($category == false) : ?>
                                                    <div class="dataTables_info" id="categories_info" role="status"
                                                        aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                                    <?php else : ?>
                                                    <div class="dataTables_info" id="categories_info" role="status"
                                                        aria-live="polite">Showing 1 to 3 of 12 entries</div>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="dataTables_paginate paging_simple"
                                                        id="categories_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button previous disabled"
                                                                aria-controls="categories" tabindex="0"
                                                                id="categories_previous"><a href="#">Previous</a></li>

                                                            <?php if ($category == false) : ?>
                                                            <li class="paginate_button next disabled" aria-controls="categories"
                                                                tabindex="0" id="categories_next"><a href="#">Next</a>
                                                            </li>
                                                            <?php else : ?>
                                                            <li class="paginate_button next" aria-controls="categories"
                                                                tabindex="0" id="categories_next"><a href="#">Next</a>
                                                            </li>
                                                            <?php endif; ?>
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