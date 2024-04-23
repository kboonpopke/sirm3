<?php
session_start();
require 'C:\xampp\htdocs\sirm\dbcon.php';

if(isset($_POST['delete_shf350']))
{
    $shf350_id = mysqli_real_escape_string($con, $_POST['delete_shf350']); // แก้ไขตรงนี้เป็น 'delete_shf350'

    $query = "DELETE FROM shf350 WHERE id='$shf350_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: shf350-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: shf350-index.php");
        exit(0);
    }


}

if (isset($_POST['update_shf350'])) {
    $shf350_id = mysqli_real_escape_string($con, $_POST['shf350_id']);

    $shf350_item = mysqli_real_escape_string($con, $_POST['shf350_item']);
    $shf350_po = mysqli_real_escape_string($con, $_POST['shf350_po']);
    $shf350_icode = mysqli_real_escape_string($con, $_POST['shf350_icode']);
    $shf350_md = mysqli_real_escape_string($con, $_POST['shf350_md']);
    $shf350_rd = mysqli_real_escape_string($con, $_POST['shf350_rd']);
    $shf350_lotrb = mysqli_real_escape_string($con, $_POST['shf350_lotrb']);
    $shf350_lotvendor = mysqli_real_escape_string($con, $_POST['shf350_lotvendor']);
    $shf350_qty_i = mysqli_real_escape_string($con, $_POST['shf350_qty_i']);
    $shf350_quantity_i = mysqli_real_escape_string($con, $_POST['shf350_quantity_i']);
    $shf350_unit_i = mysqli_real_escape_string($con, $_POST['shf350_unit_i']);
    $shf350_quantity_r = mysqli_real_escape_string($con, $_POST['shf350_quantity_r']);
    $shf350_uniti_r = mysqli_real_escape_string($con, $_POST['shf350_uniti_r']);
    $shf350_status = mysqli_real_escape_string($con, $_POST['shf350_status']);
    $shf350_ramark = mysqli_real_escape_string($con, $_POST['shf350_ramark']);

    $query = "UPDATE shf350 SET shf350_item='$shf350_item', shf350_po='$shf350_po', shf350_icode='$shf350_icode', shf350_md='$shf350_md', shf350_rd='$shf350_rd', shf350_lotrb='$shf350_lotrb', shf350_lotvendor='$shf350_lotvendor', shf350_qty_i='$shf350_qty_i', shf350_quantity_i='$shf350_quantity_i', shf350_unit_i='$shf350_unit_i', shf350_quantity_r='$shf350_quantity_r', shf350_uniti_r='$shf350_uniti_r', shf350_status='$shf350_status', shf350_ramark='$shf350_ramark' WHERE id='$shf350_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: shf350-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: shf350-index.php");
        exit(0);
    }
}

if(isset($_POST['save_shf350'])) {
    
    $shf350_item = mysqli_real_escape_string($con, $_POST['shf350_item']);   
    $shf350_po = mysqli_real_escape_string($con, $_POST['shf350_po']);
    $shf350_icode = mysqli_real_escape_string($con, $_POST['shf350_icode']);
    $shf350_md = mysqli_real_escape_string($con, $_POST['shf350_md']);
    $shf350_rd = mysqli_real_escape_string($con, $_POST['shf350_rd']);
    $shf350_lotrb = mysqli_real_escape_string($con, $_POST['shf350_lotrb']);
    $shf350_lotvendor = mysqli_real_escape_string($con, $_POST['shf350_lotvendor']);
    $shf350_qty_i = mysqli_real_escape_string($con, $_POST['shf350_qty_i']);
    $shf350_quantity_i = mysqli_real_escape_string($con, $_POST['shf350_quantity_i']);
    $shf350_unit_i = mysqli_real_escape_string($con, $_POST['shf350_unit_i']);
    $shf350_quantity_r = mysqli_real_escape_string($con, $_POST['shf350_quantity_r']);
    $shf350_uniti_r = mysqli_real_escape_string($con, $_POST['shf350_uniti_r']);
    $shf350_status = mysqli_real_escape_string($con, $_POST['shf350_status']);
    $shf350_ramark = mysqli_real_escape_string($con, $_POST['shf350_ramark']);
    
    $query = "INSERT INTO shf350 (shf350_item, shf350_po, shf350_icode, shf350_md, shf350_rd, shf350_lotrb, shf350_lotvendor, shf350_qty_i, shf350_quantity_i, shf350_unit_i, shf350_quantity_r, shf350_uniti_r, shf350_status, shf350_ramark) 
    VALUES ('$shf350_item','$shf350_po','$shf350_icode','$shf350_md','$shf350_rd','$shf350_lotrb','$shf350_lotvendor','$shf350_qty_i','$shf350_quantity_i','$shf350_unit_i','$shf350_quantity_r','$shf350_uniti_r','$shf350_status','$shf350_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:shf350-create.php");
    exit(0);
}
?>