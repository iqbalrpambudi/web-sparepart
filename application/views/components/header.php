<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">

            <?php if (isset($breadcrumbs)) {
                echo $breadcrumbs;
            }  ?>

            <?php if (isset($card_stat)) {
                echo $card_stat;
            }  ?>

        </div>
    </div>
</div>