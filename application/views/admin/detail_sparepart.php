    <!-- Page content -->
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col-lg-6 col-5 text-left">
                  <a href=<?php echo base_url("/sparepart") ?> class="btn btn-sm btn-neutral">
                        <i class="fas fa-chevron-circle-left text-primary"></i> Back
                  </a>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">
                        <i class="fas fa-plus-circle text-primary"></i> Add
                    </a>
                    <a href="#" class="btn btn-sm btn-neutral">
                        <i class="fas fa-edit text-primary"></i> Edit
                    </a>
                    <a href="#" class="btn btn-sm btn-neutral">
                        <i class="fas fa-trash-alt text-primary"></i> Delete
                    </a>
                </div>
              <div class="row-lg-6 col-5 align-items-center">
                <div class="col">
                  <h3 class="mb-0">Details Product</h3>
                </div>
              </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 video-box align-self-center">
                    <img src="assets/img/brand/demia.png" class="img-fluid">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                    <div class="section-title">
                      <?php
                        foreach ($query as $key) {
                      ?>
                        <h2>  <?php  echo ($key["name"]);  ?>  </h2>
                        <table>
                            <tr>
                              <td><span class="badge badge-secondary mr-2">Type</span></td>
                              <td>  <?php  echo ($key["type"]);  ?>  </td>
                            </tr>
                            <tr>
                              <td><span class="badge badge-secondary mr-2">Status</span></td>
                              <td>
                                <div class="<?php
                                    if ((int)$key["stock_end"] >= (int)$key['min_qty']) {
                                      echo "badge badge-success";
                                    } else if ((int)$key["stock_end"] <= (int)$key['min_qty']) {
                                      echo "badge badge-warning";
                                    };
                                    ?>"><?php
                                        if ((int)$key["stock_end"] >= (int)$key['min_qty']) {
                                          echo "ready";
                                        } else if ((int)$key["stock_end"] <= (int)$key['min_qty']) {
                                          echo "order";
                                        };
                                        ?>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td><span class="badge badge-secondary mr-2">Code Tool</span></td>
                              <td>  <?php  echo ($key["code_tool"]);  ?>  </td>
                            </tr>
                            <tr>
                              <td><span class="badge badge-secondary mr-2">Machine</span></td>
                              <td>  <?php  echo ($key["machine"]);  ?>  </td>
                            </tr>
                            <tr>
                              <td><span class="badge badge-secondary mr-2">Model</span></td>
                              <td>  <?php  echo ($key["model"]);  ?>  </td>
                            </tr>
                            <tr>
                              <td><span class="badge badge-secondary mr-2">Category</span></td>
                              <td>  <?php  echo ($key["category"]);  ?>  </td>
                            </tr>
                            <tr>
                              <td><span class="badge badge-secondary mr-2">Sub Category</span></td>
                              <td>  <?php  echo ($key["sub_category"]);  ?>  </td>
                            </tr> 
                            <tr>
                              <td><span class="badge badge-secondary mr-2">Maker</span></td>
                              <td>  <?php  echo ($key["maker"]);  ?>  </td>
                            </tr>
                            <tr>
                              <td><span class="badge badge-secondary mr-2">Seller</span></td>
                              <td>  <?php  echo ($key["seller"]);  ?>  </td>
                            </tr>
                            <tr>
                              <td><span class="badge badge-secondary mr-2">Remark</span></td>
                              <td>  <?php  echo ($key["remark"]);  ?>  </td>
                            </tr> 
                            <tr>
                              <td><span class="badge badge-secondary mr-2">Location</span></td>
                              <td>  <?php  echo ($key["location"]);  ?>  </td>
                            </tr> 
                            <tr>
                              <td><span class="badge badge-secondary mr-2">Price</span></td>
                              <td>
                                <?php
                                  echo 'Rp ' . number_format($key['unit_price'], '0', ',', '.');
                                  ?>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <hr class="my-3">
                                   <h6 class="navbar-heading p-0 text-muted"></h6>
                                </hr>
                              </td>
                              <td>
                                <hr class="my-3">
                                   <h6 class="navbar-heading p-0 text-muted"></h6>
                                </hr>
                              </td>
                              <td>
                                <hr class="my-3">
                                   <h6 class="navbar-heading p-0 text-muted"></h6>
                                </hr>
                              </td>
                            </tr>
                            <tr>
                              <td><span class="badge badge-primary mr-2">Maximum Qty</span></td>
                              <td>  <?php  echo ($key["max_qty"]);  ?>  </td>
                            </tr>
                            <tr>
                              <td><span class="badge badge-primary mr-2">Minimum Qty</span></td>
                              <td>  <?php  echo ($key["min_qty"]);  ?>  </td>
                            </tr>
                            <tr>
                              <td><span class="badge badge-primary mr-2">Stock End</span></td>
                              <td>  <?php  echo ($key["stock_end"]);  ?>  </td>
                            </tr>
                            <tr>
                              <td>
                                <hr class="my-3">
                                   <h6 class="navbar-heading p-0 text-muted"></h6>
                                </hr>
                              </td>
                              <td>
                                <hr class="my-3">
                                   <h6 class="navbar-heading p-0 text-muted"></h6>
                                </hr>
                              </td>
                              <td>
                                <hr class="my-3">
                                   <h6 class="navbar-heading p-0 text-muted"></h6>
                                </hr>
                              </td>
                            </tr>
                            <tr>
                              <td><span class="badge badge-secondary mr-2">Tool Permachine</span></td>
                              <td>  <?php  echo ($key["tool_permachine"]);  ?>  </td>
                            </tr>
                            <tr>
                              <td><span class="badge badge-secondary mr-2">Used Machine</span></td>
                              <td>  <?php  echo ($key["used_machine"]);  ?>  </td>
                            </tr>
                            <tr>
                              <td><span class="badge badge-secondary mr-2">Total Used Machine </span></td>
                              <td>  <?php  echo ($key["total_used"]);  ?>  </td>
                            </tr>
                            <tr>
                            <tr>
                              <td>
                                <hr class="my-3">
                                   <h6 class="navbar-heading p-0 text-muted"></h6>
                                </hr>
                              </td>
                              <td>
                                <hr class="my-3">
                                   <h6 class="navbar-heading p-0 text-muted"></h6>
                                </hr>
                              </td>
                              <td>
                                <hr class="my-3">
                                   <h6 class="navbar-heading p-0 text-muted"></h6>
                                </hr>
                              </td>
                            </tr>
                            
                        </table>  
                      <?php
                        };
                      ?>                   
                    </div>
                  
            </div>
          </div>
       </div>
      </div>
    </div>