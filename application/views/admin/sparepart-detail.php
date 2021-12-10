<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-5 text-left">
                            <div class="d-flex align-items-center">
                                <a href=<?php echo base_url("/sparepart") ?> class="btn btn-sm btn-neutral">
                                    <i class="fas fa-chevron-circle-left text-primary"></i> Back
                                </a>
                            </div>
                            <!-- <a href=<?php echo base_url("/sparepart") ?> class="btn btn-sm btn-neutral">
                                <i class="fas fa-chevron-circle-left text-primary"></i> Back
                            </a> -->
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="<?= base_url('sparepart/add/') ?>" class="btn btn-sm btn-neutral">
                                <i class="fas fa-plus-circle text-primary"></i> Add
                            </a>
                            <a href="<?= base_url('sparepart/edit/') . $query[0]['no'] ?>" class="btn btn-sm btn-neutral">
                                <i class="fas fa-edit text-primary"></i> Edit
                            </a>
                            <a href class="btn btn-sm btn-neutral" onclick="toggleModal(<?= $query[0]['no'] ?>)" href data-toggle="modal" data-target="#deleteModal">
                                <i class="fas fa-trash-alt text-primary"></i> Delete
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <!-- <h2 class="">Details Product</h2> -->
                    <?php
                    foreach ($query as $key) {
                    ?>
                        <div class="row no-gutters">
                            <div class="col-lg-4">
                                <img src="<?php if ($key['picture'] === "") {
                                                echo base_url('/assets/img/no-images.jpg');
                                            } else {
                                                echo base_url('/assets/picture/') . $key['picture'];
                                            } ?>" class="img-fluid">
                                </img>
                            </div>
                            <div class="col-lg-8">
                                <table class="table table-borderless table-hover table-striped">
                                    <tr>
                                        <td>Name</td>
                                        <td> <b><?php echo ($key["name"]);  ?></b> </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Type</td>
                                        <td> <b><?php echo ($key["type"]);  ?></b> </td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>
                                            <span class="<?php
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
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Model</td>
                                        <td> <b><?php echo ($key["model"]);  ?></b> </td>
                                    </tr>
                                    <tr>
                                        <td>Code Tool</td>
                                        <td> <b><?php echo ($key["code_tool"]);  ?></b> </td>
                                    </tr>
                                    <tr>
                                        <td>Machine</td>
                                        <td> <b><?php echo ($key["machine"]);  ?></b> </td>
                                    </tr>
                                    <tr>
                                        <td>Category</td>
                                        <td><b> <?php echo ($key["category"]);  ?></b> </td>
                                    </tr>
                                    <tr>
                                        <td>Sub Category</td>
                                        <td><b> <?php echo ($key["sub_category"]);  ?></b> </td>
                                    </tr>
                                    <tr>
                                        <td>Maker</td>
                                        <td><b> <?php echo ($key["maker"]);  ?></b> </td>
                                    </tr>
                                    <tr>
                                        <td>Seller</td>
                                        <td><b> <?php echo ($key["seller"]);  ?></b> </td>
                                    </tr>
                                    <tr>
                                        <td>Remark</td>
                                        <td> <b><?php echo ($key["remark"]);  ?></b> </td>
                                    </tr>
                                    <tr>
                                        <td>Location</td>
                                        <td> <b><?php echo ($key["location"]);  ?> </b></td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td>
                                            <b>
                                                <?php
                                                echo 'Rp ' . number_format($key['unit_price'], '0', ',', '.');
                                                ?>
                                            </b>
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                                <table class="table table-borderless table-hover table-striped">
                                    <tr>
                                        <td style="width: 200px;">Delivery Time</td>
                                        <td> <b><?php echo ($key["delivery_time"]);  ?></b> </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Maximum Qty</td>
                                        <td> <b><?php echo ($key["max_qty"]);  ?></b> </td>
                                    </tr>
                                    <tr>
                                        <td>Minimum Qty</td>
                                        <td><b> <?php echo ($key["min_qty"]);  ?></b> </td>
                                    </tr>
                                    <tr>
                                        <td>Stock End</td>
                                        <td> <b><?php echo ($key["stock_end"]);  ?></b> </td>
                                    </tr>
                                </table>
                                <hr>
                                <table class="table table-borderless table-hover table-striped">
                                    <tr>
                                        <td style="width: 200px;">Tool Permachine</td>
                                        <td> <b><?php echo ($key["tool_permachine"]);  ?> </b></td>
                                    </tr>
                                    <tr>
                                        <td>Used Machine</td>
                                        <td><b> <?php echo ($key["used_machine"]);  ?></b> </td>
                                    </tr>
                                    <tr>
                                        <td>Total Used Machine</td>
                                        <td><b> <?php echo ($key["total_used"]);  ?></b> </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    <?php
                    };
                    ?>
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