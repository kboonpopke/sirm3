<?php
session_start();
require 'C:\xampp\htdocs\sirm\dbcon.php';

if(isset($_POST['delete_shf520']))
{
    $shf520_id = mysqli_real_escape_string($con, $_POST['delete_shf520']); // แก้ไขตรงนี้เป็น 'delete_shf520'

    $query = "DELETE FROM shf520 WHERE id='$shf520_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: shf520-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: shf520-index.php");
        exit(0);
    }


}

if (isset($_POST['update_shf520'])) {
    $shf520_id = mysqli_real_escape_string($con, $_POST['shf520_id']);

    $shf520_item = mysqli_real_escape_string($con, $_POST['shf520_item']);
    $shf520_po = mysqli_real_escape_string($con, $_POST['shf520_po']);
    $shf520_icode = mysqli_real_escape_string($con, $_POST['shf520_icode']);
    $shf520_md = mysqli_real_escape_string($con, $_POST['shf520_md']);
    $shf520_rd = mysqli_real_escape_string($con, $_POST['shf520_rd']);
    $shf520_lotrb = mysqli_real_escape_string($con, $_POST['shf520_lotrb']);
    $shf520_lotvendor = mysqli_real_escape_string($con, $_POST['shf520_lotvendor']);
    $shf520_qty_i = mysqli_real_escape_string($con, $_POST['shf520_qty_i']);
    $shf520_quantity_i = mysqli_real_escape_string($con, $_POST['shf520_quantity_i']);
    $shf520_unit_i = mysqli_real_escape_string($con, $_POST['shf520_unit_i']);
    $shf520_quantity_r = mysqli_real_escape_string($con, $_POST['shf520_quantity_r']);
    $shf520_uniti_r = mysqli_real_escape_string($con, $_POST['shf520_uniti_r']);
    $shf520_status = mysqli_real_escape_string($con, $_POST['shf520_status']);
    $shf520_ramark = mysqli_real_escape_string($con, $_POST['shf520_ramark']);

    $query = "UPDATE shf520 SET shf520_item='$shf520_item', shf520_po='$shf520_po', shf520_icode='$shf520_icode', shf520_md='$shf520_md', shf520_rd='$shf520_rd', shf520_lotrb='$shf520_lotrb', shf520_lotvendor='$shf520_lotvendor', shf520_qty_i='$shf520_qty_i', shf520_quantity_i='$shf520_quantity_i', shf520_unit_i='$shf520_unit_i', shf520_quantity_r='$shf520_quantity_r', shf520_uniti_r='$shf520_uniti_r', shf520_status='$shf520_status', shf520_ramark='$shf520_ramark' WHERE id='$shf520_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: shf520-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: shf520-index.php");
        exit(0);
    }
}

if(isset($_POST['save_shf520'])) {
    
    $shf520_item = mysqli_real_escape_string($con, $_POST['shf520_item']);   
    $shf520_po = mysqli_real_escape_string($con, $_POST['shf520_po']);
    $shf520_icode = mysqli_real_escape_string($con, $_POST['shf520_icode']);
    $shf520_md = mysqli_real_escape_string($con, $_POST['shf520_md']);
    $shf520_rd = mysqli_real_escape_string($con, $_POST['shf520_rd']);
    $shf520_lotrb = mysqli_real_escape_string($con, $_POST['shf520_lotrb']);
    $shf520_lotvendor = mysqli_real_escape_string($con, $_POST['shf520_lotvendor']);
    $shf520_qty_i = mysqli_real_escape_string($con, $_POST['shf520_qty_i']);
    $shf520_quantity_i = mysqli_real_escape_string($con, $_POST['shf520_quantity_i']);
    $shf520_unit_i = mysqli_real_escape_string($con, $_POST['shf520_unit_i']);
    $shf520_quantity_r = mysqli_real_escape_string($con, $_POST['shf520_quantity_r']);
    $shf520_uniti_r = mysqli_real_escape_string($con, $_POST['shf520_uniti_r']);
    $shf520_status = mysqli_real_escape_string($con, $_POST['shf520_status']);
    $shf520_ramark = mysqli_real_escape_string($con, $_POST['shf520_ramark']);
    
    $query = "INSERT INTO shf520 (shf520_item, shf520_po, shf520_icode, shf520_md, shf520_rd, shf520_lotrb, shf520_lotvendor, shf520_qty_i, shf520_quantity_i, shf520_unit_i, shf520_quantity_r, shf520_uniti_r, shf520_status, shf520_ramark) 
    VALUES ('$shf520_item','$shf520_po','$shf520_icode','$shf520_md','$shf520_rd','$shf520_lotrb','$shf520_lotvendor','$shf520_qty_i','$shf520_quantity_i','$shf520_unit_i','$shf520_quantity_r','$shf520_uniti_r','$shf520_status','$shf520_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:shf520-create.php");
    exit(0);
}
?>