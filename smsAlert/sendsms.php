<?php
session_start();
/**
 * Created by PhpStorm.
 * User: MSaqib
 * Date: 07-03-2017
 * Time: 19:31
 */
//echo "Please Wait..Completing Transaction....!";
include('sms.php');
if (isset($_POST['pwd'])) {
    //echo "<script>window.open('../index.php?transaction=success','_self');</script>";
    echo "Done";
   // header("Location:../index.php?transaction=success");
    exit();
}
$msg = "helllllo";
//echo $msg;
//echo "Please Wait..Completing Transaction....!";
?>
<div class="content">
    <form method="post" id="smsform">
        <input type="hidden" name="uid" value="9690296844"/>
        <input type="hidden" name="pwd" value="pass1234"/><input type="hidden" name="to" value="9690296844"/>
        <input type="hidden" name="msg" value="<?php echo $msg; ?>"/>
        <input type="hidden" value="Send SmS" id="send"/></form>
</div>
<script>
    var send = document.getElementById('smsform');
    send.submit();
</script>