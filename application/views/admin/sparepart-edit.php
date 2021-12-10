<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Edit Sparepart</h3>
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
          <form action="<?php echo base_url("/sparepart/edit/" . $sparepart[0]["no"]) ?>" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-4">
                <div class="media align-items-center">
                  <img id="preview" src="<?php if ($sparepart[0]['picture'] === "") {
                                            echo base_url('/assets/img/no-images.jpg');
                                          } else {
                                            echo base_url('/assets/picture/') . $sparepart[0]['picture'];
                                          } ?>" class="avatar rounded w-100 h-100" style="max-width:300px; max-height:240px">
                </div>
                <input type="file" id="file" name="image" class="form-control mt-3" onchange="previewImage()">
                <input type="hidden" id="file" name="old_image" value="<?php echo $sparepart[0]['picture'] ?>">
              </div>
              <div class="col-md-8">
                <h6 class="heading-small text-muted mb-4">Data Sparepart</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="code-tool">Code Tool</label>
                        <input type="text" id="code-tool" name="code_tool" class="form-control" value="<?php echo $sparepart[0]["code_tool"] ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="type">Type</label>
                        <input type="text" id="type" name="type" class="form-control" value="<?php echo $sparepart[0]["type"] ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="model">Model</label>
                        <input type="text" id="model" name="model" class="form-control" value="<?php echo $sparepart[0]["model"] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="<?php echo $sparepart[0]["name"] ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="machine">Machine</label>
                        <input type="text" id="machine" name="machine" class="form-control" value="<?php echo $sparepart[0]["machine"] ?>">
                      </div>
                    </div>                    
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="category">Category</label>
                        <input type="text" id="category" name="category" class="form-control" value="<?php echo $sparepart[0]["category"] ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="sub-category">Sub-Category</label>
                        <input type="text" id="sub-category" name="sub_category" class="form-control" value="<?php echo $sparepart[0]["sub_category"] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="maker">Maker</label>
                        <input type="text" id="maker" name="maker" class="form-control" value="<?php echo $sparepart[0]["maker"] ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="seller">Seller</label>
                        <input type="text" id="seller" name="seller" class="form-control" value="<?php echo $sparepart[0]["seller"] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="location">Location</label>
                        <input type="text" id="location" name="location" class="form-control" value="<?php echo $sparepart[0]["location"] ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="remark">Remark</label>
                        <input type="text" id="remark" name="remark" class="form-control" value="<?php echo $sparepart[0]["remark"] ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="unit-price">Unit Price</label>
                        <input type="text" id="unit-price" name="unit_price" class="form-control" value="<?php echo $sparepart[0]["unit_price"] ?>">
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
                        <input type="text" id="tool-permachine" name="tool_permachine" class="form-control" value="<?php echo $sparepart[0]["tool_permachine"] ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="used-machine">Used Machine</label>
                        <input type="text" id="used-machine" name="used_machine" class="form-control" value="<?php echo $sparepart[0]["used_machine"] ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="total-used">Total Used</label>
                        <input type="text" id="total-used" name="total_used" class="form-control" value="<?php echo $sparepart[0]["total_used"] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="delivery-time">Delivery Time</label>
                        <input type="text" id="delivery-time" name="delivery_time" class="form-control" value="<?php echo $sparepart[0]["delivery_time"] ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="min-qty">Min Qty</label>
                        <input type="text" id="min-qty" name="min_qty" class="form-control" value="<?php echo $sparepart[0]["min_qty"] ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="max-qty">Max Qty</label>
                        <input type="text" id="max-qty" name="max_qty" class="form-control" value="<?php echo $sparepart[0]["max_qty"] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="stock-end">Stock End</label>
                        <input type="text" id="stock-end" name="stock_end" class="form-control" value="<?php echo $sparepart[0]["stock_end"] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 d-flex justify-content-end">
                      <input type="submit" value="Edit Sparepart" class="btn btn-success" />
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