<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Pallet Barcode Sticker</title>
    <link rel="icon" href="logo.svg">

</head>

<body>
    <?php include('message.php');?>
    <?php require 'nav.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Pallet Barcode Sticker
                            <a href="shf1250-index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="shf1250-code.php" method="POST">

                            <div class="mb-3">
                                <label>Item Detail</label>
                                <input type="text" name="shf1250_item" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>PO</label>
                                <input type="text" name="shf1250_po" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Item Code</label>
                                <input type="text" name="shf1250_icode" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Manufacturing Date</label>
                                <input type="date" name="shf1250_md" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Receive Date</label>
                                <input type="date" name="shf1250_rd" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Lot no.(RB)</label>
                                <input type="text" name="shf1250_lotrb" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Lot no.(Vendor)</label>
                                <input type="text" name="shf1250_lotvendor" class="form-control">
                            </div>

                            <div class="row g-1">
                                <h4 class="col-12 text-center">Incoming</h4>
                                <div class="col">
                                    <label>Q'ty (Pallet)</label>
                                    <input type="number" name="shf1250_qty_i" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Quantity</label>
                                    <input type="number" name="shf1250_quantity_i" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Unit</label>
                                    <select name="shf1250_unit_i" class="form-control">
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
                                    <input type="number" name="shf1250_quantity_r" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Unit</label>                                    
                                    <select name="shf1250_uniti_r" class="form-control">
                                    <option value="pcs.">pcs.</option>
                                    <option value="kg.">kg.</option>
                                    <option value="spool.">spool.</option>
                                    <!-- เพิ่มตัวเลือกเพิ่มเติมตามที่คุณต้องการ -->
                                </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="shf1250_status">Status</label>
                                <select name="shf1250_status" class="form-control">                                    
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
                                <input type="text" name="shf1250_ramark" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_shf1250" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>