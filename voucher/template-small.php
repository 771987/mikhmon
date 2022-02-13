<?php 
if(substr($validity,-1) == "d"){
  $validity = "  Masa Aktif ".substr($validity,0,-1)." Hari";
}else if(substr($validity,-1) == "h"){
  $validity = "Masa Aktif : ".substr($validity,0,-1)."Jam";
}
if(substr($timelimit,-1) == "d" & strlen($timelimit) >3){
  $timelimit = "Durasi:".((substr($timelimit,0,-1)*7) +  substr($timelimit, 2,1))." HARI";
}else if(substr($timelimit,-1) == "d"){
  $timelimit = "Durasi:".substr($timelimit,0,-1)." Hari";
}else if(substr($timelimit,-1) == "h"){
  $timelimit = "Durasi:".substr($timelimit,0,-1)."Jam";
}else if(substr($timelimit,-1) == "w"){
  $timelimit = "Durasi:".(substr($timelimit,0,-1)*7)." HARI";
}                            
if($getprice == "3000"){ $mks = "border:none; width: 350px; height:200px; background: url('https://isbernendi.github.io/thumber/images/mks50.png') no-repeat; background-size:contain;";} 
elseif($getprice == "1000"){ $mks = "border:none; width: 350px; height:200px; background:
url('https://isbernendi.github.io/thumber/images/mks51.png') no-repeat; background-size:contain;";}
elseif($getprice == "2000"){ $mks = "border:none; width: 350px; height:200px; background:
url('https://isbernendi.github.io/thumber/images/mks52.png') no-repeat; background-size:contain;";}
elseif($getprice == "3000"){ $mks = "border:none; width: 350px; height:200px; background:
url('https://isbernendi.github.io/thumber/images/mks50.png') no-repeat; background-size:contain;";}
elseif($getprice == "4000"){ $mks = "border:none; width: 350px; height:200px; background:
url('https://isbernendi.github.io/thumber/images/mks53.png') no-repeat; background-size:contain;";}
elseif($getprice == "5000"){ $mks = "border:none; width: 350px; height:200px; background:
url('https://isbernendi.github.io/thumber/images/mks54.png') no-repeat; background-size:contain;";}
elseif($getprice == "10000"){ $mks = "border:none; width: 350px; height:200px; background:
url('https://isbernendi.github.io/thumber/images/mks55.png') no-repeat; background-size:contain;";}
else{ $mks = "border:none; width: 350px; height:200px; background: 
url('https://isbernendi.github.io/thumber/images/mks50.png') no-repeat; background-size:contain;";}?> 
<table class="voucher" style="border:none; width: 350px; height:200px; background: <?php echo $mks ?> no-repeat; background-size:contain;">
<tbody>
 <tr>  
   <td> 
<div style="font-weight:bold;font-family:Agency FB ;margin-top: 10px;margin-left:245px;font-size:30px;padding-left:17px;color:#555 ">
<small style="font-size:15px;margin-left:-15px;position:absolute;">Rp.</small><?php echo $getprice;?>
</div>	   
   <div style="margin-top: -35px; margin-left:20px;">
  <img style="margin:1px 0 0 5px;" width="100" height="30" src="<?php echo $logo;?>" alt="logo">	

	   
</div>
	<?php if($usermode == "vc"){?>    
   <div style="color:#111;margin-top: 50px; margin-left:200px;">
   <b style="font-size:10px;color:#fff;"><?= $username ?></b>	   
</div>	
<?php }elseif($usermode == "up"){?>	   
   <div style="color:#111;margin-top: 50px; margin-left:200px;">
   <b style="font-size:8px;color:#fff;">User : <?= $username ?>  -  Pass : <?= $password; ?></b><?php }?>	
   </div> 
<div style="color:#fff; margin-top: 25px; margin-left:122px;">
   <b style="font-size:8px">Login : <?= $dnsname; ?> Cs : <?= $hotspotname; ?></b> 
  </div> 
<div style="color:#777; margin-top: -85px; margin-left:237px;">
   <b style="font-size:11px"><?php echo $validity;?></b> 	
 </div>
<div style="margin-top: 14px; margin-left:39px;">
   <img style="height:58px; width:56px;"  <?= $qrcode ?>
	</div>
   </td>
   </tr>
   </tbody>
   </table>	