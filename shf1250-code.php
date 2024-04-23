<?php
session_start();
require 'C:\xampp\htdocs\sirm\dbcon.php';

if(isset($_POST['delete_shf1250']))
{
    $shf1250_id = mysqli_real_escape_string($con, $_POST['delete_shf1250']); // แก้ไขตรงนี้เป็น 'delete_shf1250'

    $query = "DELETE FROM shf1250 WHERE id='$shf1250_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: shf1250-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: shf1250-index.php");
        exit(0);
    }


}

if (isset($_POST['update_shf1250'])) {
    $shf1250_id = mysqli_real_escape_string($con, $_POST['shf1250_id']);

    $shf1250_item = mysqli_real_escape_string($con, $_POST['shf1250_item']);
    $shf1250_po = mysqli_real_escape_string($con, $_POST['shf1250_po']);
    $shf1250_icode = mysqli_real_escape_string($con, $_POST['shf1250_icode']);
    $shf1250_md = mysqli_real_escape_string($con, $_POST['shf1250_md']);
    $shf1250_rd = mysqli_real_escape_string($con, $_POST['shf1250_rd']);
    $shf1250_lotrb = mysqli_real_escape_string($con, $_POST['shf1250_lotrb']);
    $shf1250_lotvendor = mysqli_real_escape_string($con, $_POST['shf1250_lotvendor']);
    $shf1250_qty_i = mysqli_real_escape_string($con, $_POST['shf1250_qty_i']);
    $shf1250_quantity_i = mysqli_real_escape_string($con, $_POST['shf1250_quantity_i']);
    $shf1250_unit_i = mysqli_real_escape_string($con, $_POST['shf1250_unit_i']);
    $shf1250_quantity_r = mysqli_real_escape_string($con, $_POST['shf1250_quantity_r']);
    $shf1250_uniti_r = mysqli_real_escape_string($con, $_POST['shf1250_uniti_r']);
    $shf1250_status = mysqli_real_escape_string($con, $_POST['shf1250_status']);
    $shf1250_ramark = mysqli_real_escape_string($con, $_POST['shf1250_ramark']);

    $query = "UPDATE shf1250 SET shf1250_item='$shf1250_item', shf1250_po='$shf1250_po', shf1250_icode='$shf1250_icode', shf1250_md='$shf1250_md', shf1250_rd='$shf1250_rd', shf1250_lotrb='$shf1250_lotrb', shf1250_lotvendor='$shf1250_lotvendor', shf1250_qty_i='$shf1250_qty_i', shf1250_quantity_i='$shf1250_quantity_i', shf1250_unit_i='$shf1250_unit_i', shf1250_quantity_r='$shf1250_quantity_r', shf1250_uniti_r='$shf1250_uniti_r', shf1250_status='$shf1250_status', shf1250_ramark='$shf1250_ramark' WHERE id='$shf1250_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: shf1250-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: shf1250-index.php");
        exit(0);
    }
}

if(isset($_POST['save_shf1250'])) {
    
    $shf1250_item = mysqli_real_escape_string($con, $_POST['shf1250_item']);   
    $shf1250_po = mysqli_real_escape_string($con, $_POST['shf1250_po']);
    $shf1250_icode = mysqli_real_escape_string($con, $_POST['shf1250_icode']);
    $shf1250_md = mysqli_real_escape_string($con, $_POST['shf1250_md']);
    $shf1250_rd = mysqli_real_escape_string($con, $_POST['shf1250_rd']);
    $shf1250_lotrb = mysqli_real_escape_string($con, $_POST['shf1250_lotrb']);
    $shf1250_lotvendor = mysqli_real_escape_string($con, $_POST['shf1250_lotvendor']);
    $shf1250_qty_i = mysqli_real_escape_string($con, $_POST['shf1250_qty_i']);
    $shf1250_quantity_i = mysqli_real_escape_string($con, $_POST['shf1250_quantity_i']);
    $shf1250_unit_i = mysqli_real_escape_string($con, $_POST['shf1250_unit_i']);
    $shf1250_quantity_r = mysqli_real_escape_string($con, $_POST['shf1250_quantity_r']);
    $shf1250_uniti_r = mysqli_real_escape_string($con, $_POST['shf1250_uniti_r']);
    $shf1250_status = mysqli_real_escape_string($con, $_POST['shf1250_status']);
    $shf1250_ramark = mysqli_real_escape_string($con, $_POST['shf1250_ramark']);
    
    $query = "INSERT INTO shf1250 (shf1250_item, shf1250_po, shf1250_icode, shf1250_md, shf1250_rd, shf1250_lotrb, shf1250_lotvendor, shf1250_qty_i, shf1250_quantity_i, shf1250_unit_i, shf1250_quantity_r, shf1250_uniti_r, shf1250_status, shf1250_ramark) 
    VALUES ('$shf1250_item','$shf1250_po','$shf1250_icode','$shf1250_md','$shf1250_rd','$shf1250_lotrb','$shf1250_lotvendor','$shf1250_qty_i','$shf1250_quantity_i','$shf1250_unit_i','$shf1250_quantity_r','$shf1250_uniti_r','$shf1250_status','$shf1250_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:shf1250-create.php");
    exit(0);
}
?>