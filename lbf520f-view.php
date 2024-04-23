<?php
require 'dbcon.php'
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>View</title>
    <link rel="icon" href="logo.svg">
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Details
                            <a href="lbf520f-index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id']))
                        {
                            $lbf520f_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM lbf520f WHERE id='$lbf520f_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $lbf520f = mysqli_fetch_array($query_run);
                                ?>

                        <div class="mb-3">
                            <label>Item Detail</label>
                            <p class="form-control"><?=$lbf520f['lbf520f_item'];?></p>
                        </div>
                        <div class="mb-3">
                            <label>PO</label>
                            <p class="form-control"><?=$lbf520f['lbf520f_po'];?></p>
                        </div>
                        <div class="mb-3">
                            <label>Item Code</label>
                            <p class="form-control"><?=$lbf520f['lbf520f_icode'];?></p>
                        </div>
                        <div class="mb-3">
                            <label>Manufacturing Date</label>
                            <p class="form-control"><?=$lbf520f['lbf520f_md'];?></p>
                        </div>
                        <div class="mb-3">
                            <label>Receive Date</label>
                            <p class="form-control"><?=$lbf520f['lbf520f_rd'];?></p>
                        </div>
                        <div class="mb-3">
                            <label>Lot no.(RB)</label>
                            <p class="form-control"><?=$lbf520f['lbf520f_lotrb'];?></p>
                        </div>
                        <div class="mb-3">
                            <label>NaLot no.(Vendor)me</label>
                            <p class="form-control"><?=$lbf520f['lbf520f_lotvendor'];?></p>
                        </div>

                        <div class="row g-1">
                            <h4 class="col-12 text-center">Incoming</h4>
                            <div class="col">
                                <label>Q'ty (Pallet)</label>
                                <p class="form-control"><?=$lbf520f['lbf520f_qty_i'];?></p>
                            </div>
                            <div class="col">
                                <label>Quantity</label>
                                <p class="form-control"><?=$lbf520f['lbf520f_quantity_i'];?></p>
                            </div>
                            <div class="col">
                                <label>Unit</label>
                                <p class="form-control"><?=$lbf520f['lbf520f_unit_i'];?></p>
                            </div>
                        </div>

                        <div class="row g-1 mb-3">
                            <h4 class="col-12 text-center">Remaining</h4>
                            <div class="col">
                                <label>Quantity</label>
                                <p class="form-control"><?=$lbf520f['lbf520f_quantity_r'];?></p>
                            </div>
                            <div class="col">
                                <label>Unit</label>
                                <p class="form-control"><?=$lbf520f['lbf520f_uniti_r'];?></p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>Status</label>
                            <p class="form-control"><?=$lbf520f['lbf520f_status'];?></p>
                        </div>
                        <div class="mb-3">
                            <label>Ramark</label>
                            <p class="form-control"><?=$lbf520f['lbf520f_ramark'];?></p>
                        </div>


                        <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>