<!--timelimit untuk mengaktifkan informasi Durasi-->
<?php
if(substr($validity,-1) == "d"){
  $validity = "<br>Masa Aktif: ".substr($validity,0,-1)." HARI";}
else if(substr($validity,-1) == "h"){
  $validity = "Masa Aktif: ".substr($validity,0,-1)." Jam";}

if($getprice == "1000"){ $color = "#000000";} 
else if($getprice == "2000"){ $color = "#cc9900";}
else if($getprice == "4000"){ $color = "#3300ff";}
else if($getprice == "5000"){ $color = "#004eff";}
else if($getprice == "6000"){ $color = "#00f6ff";}
else if($getprice == "15000"){ $color = "#33cc00";}
else{ $color = "#990000";}
?>  
 <!--mks-mulai-->
<style>
.qrcode{
    height:60px;
    width:60px;
}
</style>                                                                                        
<table style="display: inline-block;border-collapse: collapse;border: 1px solid #666;margin: 2.5px;width: 190px;overflow:hidden;position:relative;padding: 0px;margin: 2px;border: 1px solid #000000;">
<tbody>
<tr>
<td style="color:#666;" valign="top">
<table style="width:100%;">
<tbody>
<tr>
<td style="width:75px">
<div style="position:relative;z-index:-1;padding: 0px;float:left;">
<div style="position:absolute;top:0;display:inline;margin-top:-100px;width: 0; height: 0; border-top: 230px solid transparent;border-left: 50px solid transparent;border-right:140px solid #DCDCDC; "></div>
</div>
<img style="margin:5px 0 0 5px;" width="85" height="20" src="<?php echo $logo;?>" alt="logo">
</td> 
<td style="width:115px">
<div style="float:right;margin-top:-6px;margin-right:0px;width:5%;text-align:right;font-size:7px;">
</div>
<div style="text-align:right;font-weight:bold;font-family:Tahoma;font-size:20px;padding-left:17px;color:<?php echo $color;?>; -webkit-print-color-adjust: exact;">
<small style="font-size:10px;margin-left:-17px;position:absolute;"><?= explode(" ",$price)[0]?></small><?= explode(" ",$price)[1]?>
</div>  
</td>   
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="color:#666;border-collapse: collapse;" valign="top">
<table style="width:100%;border-collapse: collapse;">
<tbody>
<tr>
<td style="width:95px"valign="top" >
<div style="clear:both;color:#555;margin-top:2px;margin-bottom:2.5px;">
<!-- Username = Password    -->
<?php if($usermode == "vc"){ ?>
<div style="padding:0px;border-bottom:1px solid<?php echo $color;?>;text-align:center;font-weight:bold;font-size:10px;">Voucher</div>
<div style="padding:0px;border-bottom:1px solid<?php echo $color;?>;text-align:center;font-weight:bold;font-size:14px;;color:#000000;"><?php echo $username;?></div>
<!-- Username & Password  -->
<?php }elseif ($usermode == "up"){ ?>
<div style="padding:0px;border-bottom:1px solid<?php echo $color;?>;text-align:center;font-weight:bold;font-size:10px;">Member (Us/Ps)</div>
<div style="padding:0px;border-bottom:1px solid<?php echo $color;?>;text-align:center;font-weight:bold;font-size:14px;;color:#000000;"><small></small><?php echo $username;?></div>
<div style="padding:0px;border-bottom:1px solid<?php echo $color;?>;text-align:center;font-weight:bold;font-size:14px;;color:#000000;"><small></small><?php echo $password;?></div>
<?php } ?>
</div>
<div style="text-align:center;color:#111;font-size:7px;font-weight:bold;margin:0px;padding:2.5px;">
Hubungkan ke wifi <?= $hotspotname; ?><br>
Buka browser ketik:<br><?= $dnsname; ?>
</div>
</td> 
<td style="width:100px;text-align:right;">
<div style="clear:both;padding:0 2.5px;font-size:8px;font-weight:bold;color:#000000">
<?php echo $validity;?>
</div>
<div style="clear:both;padding:0 2.5px;font-size:8px;font-weight:bold;color:#bf0000">
Kuota: <?php if(empty($datalimit)){;?>Unlimited <?php }else{ echo $datalimit;}?>
</div>
<div style="float:right;padding:1px;text-align:right;width:70%;margin:0 5px -20px 0;"><?= $qrcode ?></div>
</td>   
</tr>
<tr>
<td style="background:<?php echo $color ?>;color:#666;padding:0px;" valign="top" colspan="2">
<div style="text-align:left;color:#fff;font-size:9px;font-weight:bold;margin:0px;padding:2.5px;">
Nur Arifin: <b>085226682008</b>
</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
 <!--mks-akhir-->