<?php
session_start();
?>
<?php require 'dbcon.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="logo.svg">
    <title>Edit</title>
</head>

<body>
    <?php include('message.php'); ?>
    <?php require 'nav.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit
                            <a href="shf350-index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $shf350_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM shf350 WHERE id='$shf350_id'";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $shf350 = mysqli_fetch_array($query_run);
                                ?>
                        <form action="shf350-code.php" method="POST">
                            <input type="hidden" name="shf350_id" value="<?= $shf350['id']; ?>">
                            
                            <div class="mb-3">
                                <label>Item Detail</label>
                                <input type="text" name="shf350_item" value="<?=$shf350['shf350_item'];?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>PO</label>
                                <input type="text" name="shf350_po" value="<?=$shf350['shf350_po'];?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Item Code</label>
                                <input type="text" name="shf350_icode" value="<?=$shf350['shf350_icode'];?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Manufacturing Date</label>
                                <input type="date" name="shf350_md" value="<?=$shf350['shf350_md'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Receive Date</label>
                                <input type="date" name="shf350_rd" value="<?=$shf350['shf350_rd'];?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Lot no.(RB)</label>
                                <input type="text" name="shf350_lotrb" value="<?=$shf350['shf350_lotrb'];?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Lot no.(Vendor)</label>
                                <input type="text" name="shf350_lotvendor" value="<?=$shf350['shf350_lotvendor'];?>" class="form-control">
                            </div>

                            <div class="row g-1">
                                <h4 class="col-12 text-center">Incoming</h4>
                                <div class="col">
                                    <label>Q'ty (Pallet)</label>
                                    <input type="number" name="shf350_qty_i" value="<?=$shf350['shf350_qty_i'];?>" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Quantity</label>
                                    <input type="number" name="shf350_quantity_i" value="<?=$shf350['shf350_quantity_i'];?>" class="form-control">
                                </div>

                                <div class="col">
                                    <label>Unit</label>                                    
                                    <select name="shf350_unit_i" value="<?=$shf350['shf350_unit_i'];?>" class="form-control">
                                    <option value="pcs.">pcs.</option>
                                    <option value="kg.">kg.</option>
                                    <option value="spool.">spool.</option>
                                    <!-- เพิ่มตัวเลือกเพิ่มเติมตามที่คุณต้องการ -->
                                </select>
                                </div>
                            </div>

                            <div class="row g-1 mb-3">
                                <h4 class="col-12 text-center">Remaining</h4>
                                <div class="col">
                                    <label>Quantity</label>
                                    <input type="number" name="shf350_quantity_r" value="<?=$shf350['shf350_quantity_r'];?>" class="form-control">
                                </div>

                                <div class="col">
                                    <label>Unit</label>                                                                       
                                    <select name="shf350_uniti_r" value="<?=$shf350['shf350_uniti_r'];?>" class="form-control">
                                    <option value="pcs.">pcs.</option>
                                    <option value="kg.">kg.</option>
                                    <option value="spool.">spool.</option>
                                    <!-- เพิ่มตัวเลือกเพิ่มเติมตามที่คุณต้องการ -->
                                </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label>Status</label>                                
                                <select name="shf350_status" value="<?=$shf350['shf350_status'];?>" class="form-control">                                    
                                    <option value="QC Passed">QC Passed</option>
                                    <option value="Quarantine">Quarantine</option>                                    
                                    <option value="Destroyed">Destroyed</option>
                                    <option value="Returned">Returned</option>
                                    <option value="Waiting for Destroy">Waiting for Destroy</option>
                                    <option value="Waiting for Return">Waiting for Return</option>
                                    <option value="Waiting for Inspection">Waiting for Inspection</option>                                    
                                    <option value="option3">Out of stock</option>
                                    <!-- เพิ่มตัวเลือกเพิ่มเติมตามที่คุณต้องการ -->
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Ramark</label>
                                <input type="text" name="shf350_ramark" value="<?=$shf350['shf350_ramark'];?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update_shf350" class="btn btn-primary">Save</button>
                            </div>

                        </form>
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