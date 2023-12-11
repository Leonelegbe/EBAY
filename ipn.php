<?php
include_once "myconnect.php";

if (   isset($_REQUEST["payment_status"])  &&  isset($_REQUEST["custom"])  &&  isset($_REQUEST["item_number"]) &&  isset($_REQUEST["amount"]) )
{

//////////// IT WAS AN ADD MONEY REQUEST //////////////
if (   ($_REQUEST["payment_status"]=="Completed")  && ($_REQUEST["item_number"]=="P1")  )
{
$amount=str_replace("'","''",$_REQUEST["amount"]);
$description="Money added through paypal";
mysql_query("insert into zeeauctions_transactions (uid,amount,description,date_submitted) values
(".$_REQUEST["custom"].",$amount,'$description','".date("Ymdhis",time())."')");
}
//////////////// MONEY ADDED ///////////////////////

}
?>