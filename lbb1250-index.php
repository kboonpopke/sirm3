<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sirm";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<?php require 'dbcon.php'; ?>
<?php session_start();?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="logo.svg">

    <title>Label Back 1250ml. - CCL</title>
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>
    <?php include('message.php');?>
    <?php require 'nav.php'; ?>


    <div class="dashboard">
        <h3>Label Back 1250ml. - CCL</h3>
        <div class="row g-3">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary1 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-9">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    QC Passed
                                </div>
                                <?php
                    $query = "SELECT SUM(lbb1250_quantity_r) as total_quantity FROM lbb1250 WHERE lbb1250_status = 'QC Passed'";
                    $query_run = mysqli_query($con, $query);
                    if ($query_run) {
                        $row = mysqli_fetch_assoc($query_run);
                        $total_quantity = $row['total_quantity'];
                    ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_quantity ?> pcs.</div>
                                <?php } else {
                        echo "Error executing query: " . mysqli_error($con);
                    } ?>
                            </div>
                            <div class="col-3">
                                <i class="bi bi-check2-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary2 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-9">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Remaining</div>
                                <?php
                            $query = "SELECT SUM(lbb1250_quantity_r) as total_quantity1 FROM lbb1250 WHERE lbb1250_status = 'Returned'";
                            $query_run = mysqli_query($con, $query);
                            if ($query_run) {
                                $row = mysqli_fetch_assoc($query_run);
                                $total_quantity1 = $row['total_quantity1'];
                            ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_quantity1 ?> pcs.
                                </div>
                                <?php } else {
                                echo "Error executing query: " . mysqli_error($con);
                            } ?>
                            </div>
                            <div class="col-3">
                                <i class="bi bi-clipboard-data fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary3 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-9">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Waiting for Destroy</div>
                                <?php
                            $query = "SELECT SUM(lbb1250_quantity_r) as total_quantity2 FROM lbb1250 WHERE lbb1250_status = 'Waiting for Destroy'";
                            $query_run = mysqli_query($con, $query);
                            if ($query_run) {
                                $row = mysqli_fetch_assoc($query_run);
                                $total_quantity2 = $row['total_quantity2'];
                            ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_quantity2 ?> pcs.
                                </div>
                                <?php } else {
                                echo "Error executing query: " . mysqli_error($con);
                            } ?>
                            </div>
                            <div class="col-3">
                                <i class="bi bi-x-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary4 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-9">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Waiting for Return</div>
                                <?php
                            $query = "SELECT SUM(lbb1250_quantity_r) as total_quantity3 FROM lbb1250 WHERE lbb1250_status = 'Waiting for Return'";
                            $query_run = mysqli_query($con, $query);
                            if ($query_run) {
                                $row = mysqli_fetch_assoc($query_run);
                                $total_quantity3 = $row['total_quantity3'];
                            ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_quantity3 ?> pcs.
                                </div>
                                <?php } else {
                                echo "Error executing query: " . mysqli_error($con);
                            } ?>
                            </div>
                            <div class="col-3">
                                <i class="bi bi-bootstrap-reboot fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary5 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-9">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Waiting for Inspection</div>
                                <?php
                            $query = "SELECT SUM(lbb1250_quantity_r) as total_quantity4 FROM lbb1250 WHERE lbb1250_status = 'Waiting for Inspection'";
                            $query_run = mysqli_query($con, $query);
                            if ($query_run) {
                                $row = mysqli_fetch_assoc($query_run);
                                $total_quantity4 = $row['total_quantity4'];
                            ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_quantity4 ?> pcs.
                                </div>
                                <?php } else {
                                echo "Error executing query: " . mysqli_error($con);
                            } ?>
                            </div>
                            <div class="col-3">
                                <i class="bi bi-list-check fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary6 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-9">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total</div>
                                <?php
    $query = "SELECT SUM(lbb1250_quantity_r) as total_quantity FROM lbb1250";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $row = mysqli_fetch_assoc($query_run);
        $total_quantity = $row['total_quantity'];
        if ($total_quantity !== null) {
            ?> <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_quantity ?> pcs.
                                </div>
                                <?php
        } else {
            echo "No data available.";
        }
    } else {
        echo "Error executing query: " . mysqli_error($con);
    }
?>

                            </div>
                            <div class="col-3">
                                <i class="bi bi-box-seam fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Label Back 1250ml. - CCL
                        <a href="lbb1250-create.php" class="btn btn-primary float-end">Add</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered " >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Item Detail</th>
                                <th>PO</th>
                                <th>Item Code</th>
                                <th>Manufacturing Date</th>
                                <th>Receive Date</th>
                                <th>Lot no.(RB)</th>
                                <th>Lot no.(Vendor)</th>
                                <th>Q'ty(Pallet)</th>
                                <th>Quantity</th>
                                <th>Unit</th>
                                <th>Quantity</th>
                                <th>Unit</th>
                                <th>Status</th>
                                <th>Ramark</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                    $query = "SELECT * FROM lbb1250";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $lbb1250)
                                        {
                                            ?>
                            <tr <?php if ($lbb1250['lbb1250_status'] == 'Waiting for Inspection') echo 'class="Inspection"'; ?>
                                <?php if ($lbb1250['lbb1250_status'] == 'Waiting for Destroy') echo 'class="Destroy"'; ?>
                                <?php if ($lbb1250['lbb1250_status'] == 'QC Passed') echo 'class="Passed"'; ?>
                                <?php if ($lbb1250['lbb1250_status'] == 'Returned') echo 'class="Returned"'; ?>
                                <?php if ($lbb1250['lbb1250_status'] == 'Waiting for Return') echo 'class="Return"'; ?>
                                
                                >
                                <td><?= $lbb1250['id']; ?></td>
                                <td><?= $lbb1250['lbb1250_item']; ?></td>
                                <td><?= $lbb1250['lbb1250_po']; ?></td>
                                <td><?= $lbb1250['lbb1250_icode']; ?></td>
                                <td><?= date('d-m-Y', strtotime($lbb1250['lbb1250_md'])); ?></td>
                                <td><?= date('d-m-Y', strtotime($lbb1250['lbb1250_rd'])); ?></td>
                                <td><?= $lbb1250['lbb1250_lotrb']; ?></td>
                                <td><?= $lbb1250['lbb1250_lotvendor']; ?></td>
                                <td><?= $lbb1250['lbb1250_qty_i']; ?></td>
                                <td><?= $lbb1250['lbb1250_quantity_i']; ?></td>
                                <td><?= $lbb1250['lbb1250_unit_i']; ?></td>
                                <td><?= $lbb1250['lbb1250_quantity_r']; ?></td>
                                <td><?= $lbb1250['lbb1250_uniti_r']; ?></td>
                                <td><?= $lbb1250['lbb1250_status']; ?></td>
                                <td><?= $lbb1250['lbb1250_ramark']; ?></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="lbb1250-view.php?id=<?= $lbb1250['id']; ?>"
                                            class="btn btn-info btn-sm me-2">View</a>
                                        <a href="lbb1250-edit.php?id=<?= $lbb1250['id']; ?>"
                                            class="btn btn-success btn-sm me-2">Edit</a>

                                        <form action="lbb1250-code.php" method="POST" class="d-inline">
                                            <input type="hidden" name="delete_lbb1250" value="<?= $lbb1250['id']; ?>">
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>