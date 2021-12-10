<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Add Sparepart</h3>
            </div>
            <div class="d-flex align-items-center">
              <a href=<?php echo base_url("/sparepart") ?> class="btn btn-sm btn-neutral">
                <i class="fas fa-chevron-circle-left text-primary"></i> Back to Sparepart
              </a>
            </div>
          </div>
        </div>
        
        <div class="card-body">
          <?php echo validation_errors(); ?>

          <form action="<?php echo base_url("/sparepart/add") ?>" enctype="multipart/form-data" method="post">
            <div class="row">
              <div class="col-md-4">
                <div class="media align-items-center">
                  <img id="preview" src="<?php echo base_url('assets/img/thumbnail.png')?>" class="avatar rounded w-100 h-100" style="max-width:300px; max-height:240px">
                </div>
                <input type="file" id="file" name="image" class="form-control mt-3" onchange="previewImage()">
              </div>
              <div class="col-md-8">
                <h6 class="heading-small text-muted mb-4">Data Sparepart</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="code-tool">Code Tool</label>
                        <input type="text" id="code-tool" name="code_tool" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="type">Type</label>
                        <input type="text" id="type" name="type" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="machine">Machine</label>
                        <input type="text" id="machine" name="machine" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="category">Category</label>
                        <input type="text" id="category" name="category" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="sub-category">Sub-Category</label>
                        <input type="text" id="sub-category" name="sub_category" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="maker">Maker</label>
                        <input type="text" id="maker" name="maker" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="seller">Seller</label>
                        <input type="text" id="seller" name="seller" class="form-control"></input>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="remark">Remark</label>
                        <input type="text" id="remark" name="remark" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="location">Location</label>
                        <input type="text" id="location" name="location" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="unit-price">Unit Price</label>
                        <input type="number" id="unit-price" name="unit_price" class="form-control">
                      </div>
                    </div>
                  </div>

                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Quantity Option</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="tool-permachine">Tool Permachine</label>
                        <input type="number" id="tool-permachine" name="tool_permachine" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="used-machine">Used Machine</label>
                        <input type="number" id="used-machine" name="used_machine" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="total-used">Total Used</label>
                        <input type="number" id="total-used" name="total_used" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="delivery-time">Delivery Time</label>
                        <input type="text" id="delivery-time" name="delivery_time" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="min-qty">Min Qty</label>
                        <input type="number" id="min-qty" name="min_qty" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="max-qty">Max Qty</label>
                        <input type="number" id="max-qty" name="max_qty" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="stock-start">Stock Start</label>
                        <input type="number" id="stock-start" name="stock_start" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="stock-end">Stock End</label>
                        <input type="number" id="stock-end" name="stock_end" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="in-tool">In Tool</label>
                        <input type="number" id="in-tool" name="in_tool" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="out-tool">Out Tool</label>
                        <input type="number" id="out-tool" name="out_tool" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 d-flex justify-content-end">
                      <button type="submit" class="btn btn-success">Add to Database</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php if (isset($footer)) {
    echo $footer;
  }  ?>
  <script>
    function previewImage() {
      var file = document.getElementById("file").files;
      if (file.length > 0) {
        var fileReader = new FileReader();

        fileReader.onload = function(event) {
          document.getElementById("preview").setAttribute("src", event.target.result);
        };

        fileReader.readAsDataURL(file[0]);
      }
    }
  </script>
</div>