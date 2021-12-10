<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Sparepart List</h3>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('/sparepart/add')?>" class="btn btn-sm btn-neutral">
                <i class="fas fa-plus-circle"></i> Add
              </a>
              <a href class="btn btn-sm btn-neutral" onclick="toggleModal(<?= $query[0]['no'] ?>)" href data-toggle="modal" data-target="#deleteModal">
                <i class="fas fa-trash-alt text-primary"></i> Delete
              </a>
            </div>
          </div>
        </div>
        <?php if ($this->session->flashdata('success')) : ?>
          <div class="alert alert-success alert-dismissible fade show mx-3" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><?php echo $this->session->flashdata('success'); ?></span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif; ?>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">No</th>
                <th scode="col">Action</th>
                <th scope="col">Picture</th>
                <th scope="col">Status</th>
                <th scope="col">Stock End</th>
                <th scope="col">Code Tool</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Location</th>
                
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($query as $key) {
              ?>
                <tr>
                  <td style="min-width: 50px;">
                    <?php
                    echo ($key["no"]);
                    ?>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a class="btn btn-sm btn-neutral" href="<?php echo base_url("/sparepart/detail/" . $key["no"]) ?>">
                        <i class="fas fa-eye"></i>
                      </a>
                      <a class="btn btn-sm btn-neutral" id="modal" href data-toggle="modal" data-target="#deleteModal" onclick="toggleModal(<?= $key['no'] ?>)">
                        <i class="fa fa-trash"></i>
                      </a>
                    </div>
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <div class="avatar mr-3">
                        <img alt="thumbnail" style="width: 48px;height: 48px;object-fit: cover;" src="<?php if ($key['picture'] === "") {
                                                                                                        echo base_url('/assets/img/no-images.jpg');
                                                                                                      } else {
                                                                                                        echo base_url('/assets/picture/') . $key['picture'];
                                                                                                      } ?>">
                        </img>
                      </div>
                    </div>
                  </td>
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
                                    ?></div>
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
                  <td>
                    <?php
                    echo ($key["code_tool"]);
                    ?>
                  </td>
                  <td style="max-width: 200px; overflow:hidden">
                    <?php
                    echo ($key["name"]);
                    ?>
                  </td>
                  <td style="max-width: 200px; overflow:hidden">
                    <?php
                    echo ($key["type"]);
                    ?>
                  </td>
                  <td style="max-width: 200px; overflow:hidden">
                    <?php
                    echo ($key["location"]);
                    ?>
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

  <!-- Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Delete Sparepart</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Do you want to delete this sparepart ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <a id="deleteAction" href="#" class="btn btn-primary">Delete</a>
        </div>
      </div>
    </div>
  </div>
  <?php if (isset($footer)) {
    echo $footer;
  }  ?>

  <script>
    // var modal = document.getElementById('modal')

    function toggleModal(id) {
      document.getElementById("deleteAction").setAttribute("href", "<?= base_url('/sparepart/delete/') ?>" + id);
    }
  </script>
</div>