
<!-- jQuery  -->

<script src="<?php echo base_url(); ?>assets/assetpack/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>assets/assetpack/waves.js"></script>

<!--Morris Chart-->
<script src="<?php echo base_url(); ?>assets/assetpack/morris.min.js"></script>
<script src="<?php echo base_url(); ?>assets/assetpack/raphael-min.js"></script>
<!-- Datatables-->
<script src="<?php echo base_url(); ?>assets/assetpack/jquery.dataTables.min.js"></script>

<!-- Bootstrap File Style -->

<script src="<?php echo base_url(); ?>assets/assetpack/summernote.min.js"></script>
<script src="<?php echo base_url(); ?>assets/assetpack/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/assetpack/parsley.min.js"></script>

<script>
    $(document).ready(function() {
        $('#products').DataTable();
        $('#categories, #departments').DataTable({
            pageLength: 3,
            pagingType: "simple",
            lengthChange: false
        });
        $('#my-loans').DataTable({
            pageLength: 5,
            pagingType: "simple",
            lengthChange: false,
            language: {
                emptyTable: "You have no loan request(s)."
            }
        });
        $('form').parsley();
        $('input#datepicker-autoclose').datepicker({
            autoclose: !0,
            todayHighlight: !0,
            format: "yyyy-mm-dd"
        });
        $('.summernote').summernote({
            height: 200,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['para', ['ul', 'ol', 'paragraph']],
            ]
        });
        $('form#add-category #category-name').change(function(){
            var name = $(this).val();
            $.ajax({
                url: 'http://localhost/eattohealth-ems/dashboard/ajax-cat-slug',
                method: 'POST',
                cache: false,
                data: {title: name},
                dataType: 'text',
                success: function(data) {
                    $('form#add-category #category-slug').val(data);
                    // alert(data);
                },
                error: function(data) {
                    console.log("There was a problem fetching the url");
                }
            });
        });
        $('form#add-category').submit(function(e) {
            e.preventDefault();
            var form = $(this).serialize();
            $.ajax({
                url: 'http://localhost/eattohealth-ems/dashboard/ajax-add-cat',
                method: 'POST',
                cache: false,
                data: form,
                dataType: 'json',
                success: function(data) {
                    if (data.valid == true) {
                        $('#success').removeClass('hidden').slideDown().text(data.message);
                        $('#category-name, #category-slug').val("");
                        $('#error').slideUp();
                    } else {
                        $('#error').removeClass('hidden').slideDown().text(data.message);
                        $('#category-name, #category-slug').val("");
                        $('#success').slideUp();
                    }
                },
                error: function(data) {
                    console.log("There was a problem fetching the url.");
                }
            });
        });
    });
</script>

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
                            <h4> Add New Product </h4>

                            <!-- Form -->
                            <?php echo form_open_multipart('product/update_product'); ?>

                                <!-- Product Name and Category -->
                                <div class="row">
                                    <!-- Product Name Column -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""> Name </label>
                                            <input type="text" name="productName" value="<?= $products->productName; ?>" class="form-control" required="true">
                                        </div>
                                    </div>

                                    <!-- Category Name Column -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""> Category </label>
                                            <select name="productCategory" id="" class="form-control" required="true">
                                            <?php foreach ($cat as $c) { ?>
                                                <option value="<?= $c->id; ?>"> <?= $c->title; ?> </option>
                                            
                                        <?php 
                                    } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product Description -->
                                <div class="form-group">
                                    <label for=""> Description </label>
                                    <textarea name="shortProductDesc" id="" cols="30" rows="3" class="form-control" required="true"> <?= $products->shortProductDesc; ?> </textarea>
                                </div>

                                <!-- Product Description -->
                                <div class="form-group">
                                    <label for=""> Full Description </label>
                                    <textarea name="fullProductDesc" id="" cols="30" rows="7" class="form-control summernote" required="true"> <?= $products->fullProductDesc; ?> </textarea>
                                </div>

                                <!-- Product Price and ... -->
                                <div class="row">
                                    <!-- Product Name Column -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""> Price </label>
                                            <input type="text" name="productPrice" value="<?= $products->productPrice; ?>" class="form-control" required="true">
                                        </div>
                                    </div>

                                    <!-- Category Name Column -->
                                    <div class="form-group">
                                        <label>Product Image</label>
                                        <input type="file" name="userfile" value="<?= $products->productImage; ?>" class="filestyle"
                                            data-buttonname="btn-success" data-buttontext=" &nbsp;Upload product image" id="filestyle-0"
                                            style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                        <div class="bootstrap-filestyle input-group"><input type="text"
                                                class="form-control " placeholder="" disabled=""> <span
                                                class="group-span-filestyle input-group-btn" tabindex="0"><label
                                                    for="filestyle-0" class="btn btn-success "><span
                                                        class="icon-span-filestyle glyphicon glyphicon-folder-open"></span>
                                                    <span class="buttonText"> &nbsp;Upload Product
                                                        Image</span></label></span></div>
                                    </div>
                                    <input type="hidden" name="product_id" value="<?=$products->prod_id;?>">
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