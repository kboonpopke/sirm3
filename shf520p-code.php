<?php
session_start();
require 'C:\xampp\htdocs\sirm\dbcon.php';

if(isset($_POST['delete_shf520p']))
{
    $shf520p_id = mysqli_real_escape_string($con, $_POST['delete_shf520p']); // แก้ไขตรงนี้เป็น 'delete_shf520p'

    $query = "DELETE FROM shf520p WHERE id='$shf520p_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: shf520p-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: shf520p-index.php");
        exit(0);
    }


}

if (isset($_POST['update_shf520p'])) {
    $shf520p_id = mysqli_real_escape_string($con, $_POST['shf520p_id']);

    $shf520p_item = mysqli_real_escape_string($con, $_POST['shf520p_item']);
    $shf520p_po = mysqli_real_escape_string($con, $_POST['shf520p_po']);
    $shf520p_icode = mysqli_real_escape_string($con, $_POST['shf520p_icode']);
    $shf520p_md = mysqli_real_escape_string($con, $_POST['shf520p_md']);
    $shf520p_rd = mysqli_real_escape_string($con, $_POST['shf520p_rd']);
    $shf520p_lotrb = mysqli_real_escape_string($con, $_POST['shf520p_lotrb']);
    $shf520p_lotvendor = mysqli_real_escape_string($con, $_POST['shf520p_lotvendor']);
    $shf520p_qty_i = mysqli_real_escape_string($con, $_POST['shf520p_qty_i']);
    $shf520p_quantity_i = mysqli_real_escape_string($con, $_POST['shf520p_quantity_i']);
    $shf520p_unit_i = mysqli_real_escape_string($con, $_POST['shf520p_unit_i']);
    $shf520p_quantity_r = mysqli_real_escape_string($con, $_POST['shf520p_quantity_r']);
    $shf520p_uniti_r = mysqli_real_escape_string($con, $_POST['shf520p_uniti_r']);
    $shf520p_status = mysqli_real_escape_string($con, $_POST['shf520p_status']);
    $shf520p_ramark = mysqli_real_escape_string($con, $_POST['shf520p_ramark']);

    $query = "UPDATE shf520p SET shf520p_item='$shf520p_item', shf520p_po='$shf520p_po', shf520p_icode='$shf520p_icode', shf520p_md='$shf520p_md', shf520p_rd='$shf520p_rd', shf520p_lotrb='$shf520p_lotrb', shf520p_lotvendor='$shf520p_lotvendor', shf520p_qty_i='$shf520p_qty_i', shf520p_quantity_i='$shf520p_quantity_i', shf520p_unit_i='$shf520p_unit_i', shf520p_quantity_r='$shf520p_quantity_r', shf520p_uniti_r='$shf520p_uniti_r', shf520p_status='$shf520p_status', shf520p_ramark='$shf520p_ramark' WHERE id='$shf520p_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: shf520p-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: shf520p-index.php");
        exit(0);
    }
}

if(isset($_POST['save_shf520p'])) {
    
    $shf520p_item = mysqli_real_escape_string($con, $_POST['shf520p_item']);   
    $shf520p_po = mysqli_real_escape_string($con, $_POST['shf520p_po']);
    $shf520p_icode = mysqli_real_escape_string($con, $_POST['shf520p_icode']);
    $shf520p_md = mysqli_real_escape_string($con, $_POST['shf520p_md']);
    $shf520p_rd = mysqli_real_escape_string($con, $_POST['shf520p_rd']);
    $shf520p_lotrb = mysqli_real_escape_string($con, $_POST['shf520p_lotrb']);
    $shf520p_lotvendor = mysqli_real_escape_string($con, $_POST['shf520p_lotvendor']);
    $shf520p_qty_i = mysqli_real_escape_string($con, $_POST['shf520p_qty_i']);
    $shf520p_quantity_i = mysqli_real_escape_string($con, $_POST['shf520p_quantity_i']);
    $shf520p_unit_i = mysqli_real_escape_string($con, $_POST['shf520p_unit_i']);
    $shf520p_quantity_r = mysqli_real_escape_string($con, $_POST['shf520p_quantity_r']);
    $shf520p_uniti_r = mysqli_real_escape_string($con, $_POST['shf520p_uniti_r']);
    $shf520p_status = mysqli_real_escape_string($con, $_POST['shf520p_status']);
    $shf520p_ramark = mysqli_real_escape_string($con, $_POST['shf520p_ramark']);
    
    $query = "INSERT INTO shf520p (shf520p_item, shf520p_po, shf520p_icode, shf520p_md, shf520p_rd, shf520p_lotrb, shf520p_lotvendor, shf520p_qty_i, shf520p_quantity_i, shf520p_unit_i, shf520p_quantity_r, shf520p_uniti_r, shf520p_status, shf520p_ramark) 
    VALUES ('$shf520p_item','$shf520p_po','$shf520p_icode','$shf520p_md','$shf520p_rd','$shf520p_lotrb','$shf520p_lotvendor','$shf520p_qty_i','$shf520p_quantity_i','$shf520p_unit_i','$shf520p_quantity_r','$shf520p_uniti_r','$shf520p_status','$shf520p_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:shf520p-create.php");
    exit(0);
}
?>