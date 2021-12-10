<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Limit Stock</h3>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Action</th>
                <th scope="col">Status</th>
                <th scope="col">Code Tool</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Min Qty</th>
                <th scope="col">Stock End</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($query as $key) {
              ?>
                <tr>
                  <th scope="row">
                    <?php
                    echo ($key["no"]);
                    ?>
                  </th>
                  <td>
                    <div class="d-flex">
                      <a class="btn btn-sm btn-neutral" href="<?php echo base_url("/sparepart/detail/" . $key["no"]) ?>">
                        <i class="fas fa-eye"></i>
                      </a>
                    </div>
                  </td>
                  <td>
                    <span class="badge badge-dot mr-4">
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
                                        echo "min";
                                      };
                                      ?></div>
                      <span class="status">
                      </span>
                    </span>

                  </td>
                  <td>
                    <?php
                    echo ($key["code_tool"]);
                    ?>
                  </td>
                  <td>
                    <?php
                    echo ($key["name"]);
                    ?>
                  </td>
                  <td>
                    <?php
                    echo ($key["type"]);
                    ?>
                  </td>
                  <td>
                    <?php
                    echo ($key["min_qty"]);
                    ?>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="mr-2">
                        <?php
                        echo ($key["stock_end"]);
                        ?>
                      </span>
                    </div>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>

          <div class="d-flex justify-content-end pr-4 mt-4">
            <?php
            echo $this->pagination->create_links();
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php if (isset($footer)) {
    echo $footer;
  }  ?>
</div>