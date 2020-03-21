<!-- MULAI -->
<style>
.qrcode{
height:60px;
width:60px;
}
</style>
<div style="overflow:hidden;position:relative;padding: 0px;margin: 2px;border: 1px solid #FFF3E0;width:190px;height:125px;float:left;-webkit-print-color-adjust: exact;">
<div style="height:20px;">
<div style="float:left;width:45%;">
<img style="margin:5px 0 0 5px;width:90%;" src="<?php echo $logo ?>" alt="logo">
</div>
<div style="float:right;width:5%;text-align:right;font-size:8px;color:#666; margin-right:5px;">
<?php echo " [$num]";?>
</div>
<div style="float:right;width:50%;text-align:right;font-weight:bold;font-family:Agency FB;color:#555;font-size:32px;">
<small style="font-size:14px;margin-left:-15px;position:absolute;">Rp</small><?php echo $getsprice;?>
</div>
</div>
<div style="height:75px;">
<div style="float:left;width:50%;">
<!-- Username = Password    -->
<?php if($usermode == "vc"){?>
<div style="padding:0px;border-top:1px solid #777;text-align:center;font-weight:bold;font-size:10px;font-family:Courier New;">Kode Voucher</div>
<div style="padding:0px;border-top:1px solid #777;border-bottom:1px solid #777;text-align:center;font-weight:bold;font-size:16px;font-family:Courier New;"><?php echo $username;?></div>
<!-- /  -->
<!-- Username & Password  -->
<?php }elseif($usermode == "up"){?>
<div style="padding:0px;border-top:1px solid #777;text-align:center;font-weight:bold;font-size:10px;font-family:Courier New;">MEMBER</div>
<div style="padding:0px;border-top:1px solid #777;border-bottom:1px solid #777;text-align:left;font-weight:bold;font-size:16px;font-family:Courier New;"><small>Us:</small><?php echo $username;?></div>
<div style="padding:0px;border-bottom:1px solid #777;text-align:left;font-weight:bold;font-size:16px;font-family:Courier New;"><small>Ps:</small><?php echo $password;?></div>
<?php }?>
<!-- /  -->

</div>
<div style="float:right;width:50%;">

<div style="padding:0 2.5px;text-align:right;font-size:9px;font-weight:bold;color:#333333;">
<?php if($validity == "1d"){?>Aktif 1 Hari
<?php }elseif($validity == "2d"){?>Aktif 2 Hari
<?php }elseif($validity == "3d"){?>Aktif 3 Hari
<?php }elseif($validity == "4d"){?>Aktif 4 Hari
<?php }elseif($validity == "5d"){?>Aktif 5 Hari
<?php }elseif($validity == "6d"){?>Aktif 6 Hari
<?php }elseif($validity == "7d"){?>Aktif 1 Minggu
<?php }elseif($validity == "14d"){?>Aktif 2 Minggu
<?php }elseif($validity == "30d"){?>Aktif 1 Bulan
<?php }elseif($validity == "6h"){?>Masa Aktif 6 Jam
<?php }else{?>Aktif <span style="text-transform: uppercase;"><?php echo $validity ?></span>
<?php }?>
</div>
<div style="padding:0 2.5px;text-align:right;font-size:10px;font-weight:bold;color:#bf0000;">Kuota <?php if(empty($datalimit)){;?>Unlimted <?php }else{ echo $datalimit;}?></div>
<!-- QR Code    -->
<?php if($qr == "yes"){?>
<div style="margin-right:50px;padding:1px;text-align:right;width:60%;float:right;">
<?php echo $qrcode ?>
</div>
<?php }?>

</div>
</div>
<div style="height:20px;background:#d9d9d9;color:#000000;font-size:9px;font-weight:bold;margin:0px;padding:2.5px;">
<div style="width:50%;">
Cek Status/Logout : <?php echo $dnsname;?>
</div>
</div>
</div>
<!-- AKHIR -->