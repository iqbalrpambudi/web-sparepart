<!-- Card stats -->
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats" style="height: 120px;">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Sparepart Model FK0478</h5>
                        <span class="h2 font-weight-bold mb-0">
                            <?php foreach ($model as $models) {
                                if($models["model"]=="FK0478"){
                                    echo $models['total'];
                                }
                            } ?> part</span>
                            <hr class="my-1" />
                            <h5 class="card-title font-weight-bold mt-2 text-muted text-uppercase mb-0">
                                Limit : 
                                <?php foreach ($model_limit as $limit) {
                                if($limit["model"]=="FK0478"){
                                    echo $limit['limit_stock'];
                                }
                            } ?></h5>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                            <i class="ni ni-settings-gear-65"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats" style="height: 120px;">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Sparepart Model FK0580</h5>
                        <span class="h2 font-weight-bold mb-0">
                            <?php foreach ($model as $models) {
                                if($models["model"]=="FK0580"){
                                    echo $models['total'];
                                }
                            } ?> part</span>
                            <hr class="my-1" />
                            <h5 class="card-title font-weight-bold mt-2 text-muted text-uppercase mb-0">
                                Limit : 
                                <?php foreach ($model_limit as $models) {
                                if($models["model"]=="FK0580"){
                                    echo $models['limit_stock'];
                                }
                            } ?></h5>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                            <i class="ni ni-settings-gear-65"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Sparepart Model FK0570</h5>
                        <span class="h2 font-weight-bold mb-0">
                            <?php foreach ($model as $models) {
                                if($models["model"]=="FK0570"){
                                    echo $models['total'];
                                }
                            } ?> part</span>
                            <hr class="my-1" />
                            <h5 class="card-title font-weight-bold mt-2 text-muted text-uppercase mb-0">
                                Limit : 
                                <?php foreach ($model_limit as $models) {
                                if($models["model"]=="FK0570"){
                                    echo $models['limit_stock'];
                                }
                            } ?></h5>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                            <i class="ni ni-settings-gear-65"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats" style="height: 120px;">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Sparepart Model FK0443</h5>
                        <span class="h2 font-weight-bold mb-0">
                            <?php foreach ($model as $models) {
                                if($models["model"]=="FK0443"){
                                    echo $models['total'];
                                }
                            } ?> part</span>
                            <hr class="my-1" />
                            <h5 class="card-title font-weight-bold mt-2 text-muted text-uppercase mb-0">
                                Limit : 
                                <?php foreach ($model_limit as $models) {
                                if($models["model"]=="FK0443"){
                                    echo $models['limit_stock'];
                                }
                            } ?></h5>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                            <i class="ni ni-settings-gear-65"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6">
        <div class="card card-stats" style="height: 100px;">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Spareparts Limit Stocks </h5>
                        <span class="h2 font-weight-bold mb-0">
                            <?php echo $total_limit_stock ?> part
                        </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                            <i class="ni ni-money-coins"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6">
        <div class="card card-stats" style="height: 100px;">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Spareparts Ready</h5>
                        <span class="h2 font-weight-bold mb-0">
                            <?php echo $total_product_ready ?> part
                        </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                            <i class="ni ni-chart-bar-32"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>