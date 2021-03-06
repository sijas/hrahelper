<?
    if(!isset($_POST['ename'])){
        header("location:./index.php");
    }
    extract($_POST);
?>

<!DOCTYPE html>
<html>
<head>
    <link href="css/master.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?
$time = mktime(0,0,0,4,5,$year);
for($i=0;$i<12;$i++){
?>
<div class="receipt">
    <div class="header">
        <b><?=$housename?></b><br/>
        <?=$ad1?>,<br/>
        <?=$ad2?>,<br/>
        <?=$ad3?>,<br/>
        <?=$ad4?>,<br/>
    </div>
    <div style="text-align: center;font-size: medium;text-decoration: underline;font-weight: bold">Rent Receipt</div>
    <div class="dateandreceiptno">
        <div class="date">Date: <span class="underline"><?=date("Y/m/d",$time)?></span></div>
    </div>
    Received from: <span class="underline">&nbsp;&nbsp;&nbsp;<?=$ename?>,&nbsp;&nbsp;&nbsp;</span> the amount of
    &#x20b9;<span class="underline">&nbsp;&nbsp;&nbsp;<?=$amount?>&nbsp;&nbsp;&nbsp;</span><br/><br/>
    Month <span class="underline">&nbsp;&nbsp;&nbsp;<?=date("F",$time)?>&nbsp;&nbsp;&nbsp;</span> Year <span class="underline">&nbsp;&nbsp;&nbsp;<?=date("Y",$time)?>&nbsp;&nbsp;&nbsp;</span>

    <div class="dateandreceiptno">
        <div class="receiptno">Received by: <span class="underline"><?=$landlord?></span>
        </div>
    </div>
</div>
<?
    $time = date("Y/m/d",$time);
    $time = strtotime(date("Y-m-d", strtotime($time)) . " +1 month");
    if(($i+1)%4==0){
        echo "<div class='break'></div>";
    }
} ?>
<div class="print">
    <div class="donate">
        <a href="https://paypal.me/sijas" target="_blank">
            <img src="./img/donate.png"/>
        </a>
    </div>
    <p>Please get the receipts signed from <?=$landlord?> before submitting.</p>
    <a href="javascript:window.print()">Print all Receipts</a>
</div>
</body>
</body>
</html>
