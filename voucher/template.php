<?php
if(substr($validity,-1) == "d"){
  $validity = "   <br>KADALUARSA: ".substr($validity,0,-1)." HARI";
}else if(substr($validity,-1) == "h"){
  $validity = "KADALUARSA: ".substr($validity,0,-1)."Jam";
}
if(substr($timelimit,-1) == "d" & strlen($timelimit) >3){
  $timelimit = "AKTIF: ".((substr($timelimit,0,-1)*7) +  substr($timelimit, 2,1))." HARI";
}else if(substr($timelimit,-1) == "d"){
  $timelimit = "AKTIF: ".substr($timelimit,0,-1)." HARI";
}else if(substr($timelimit,-1) == "h"){
  $timelimit = "AKTIF: ".substr($timelimit,0,-1)." Jam";
}else if(substr($timelimit,-1) == "w"){
  $timelimit = "AKTIF: ".(substr($timelimit,0,-1)*7)." HARI";
}	            	            
if($getprice == "3000"){ $color = "#046b53";} 
elseif($getprice == "1000"){ $color = "#752CEB";}
elseif($getprice == "2000"){ $color = "#13C013";}
elseif($getprice == "3000"){ $color = "#50ff24";}
elseif($getprice == "4000"){ $color = "#F75418";}
elseif($getprice == "5000"){ $color = "#046b53";}
elseif($getprice == "8000"){ $color = "#663399";}
elseif($getprice == "10000"){ $color = "#663399";}
elseif($getprice == "13000"){ $color = "#2E8B57";}
elseif($getprice == "15000"){ $color = "#2E8B57";}
elseif($getprice == "17000"){ $color = "#0000FF";}
elseif($getprice == "20000"){ $color = "#0000FF";}
elseif($getprice == "35000"){ $color = "#6495ED";} 
elseif($getprice == "40000"){ $color = "#6495ED";} 
elseif($getprice == "80000"){ $color = "#FF8C00";}
elseif($getprice == "85000"){ $color = "#FF8C00";}
elseif($getprice == "160000"){ $color = "#DC143C";} 
elseif($getprice == "170000"){ $color = "#DC143C";} 
else{ $color = "#00c798";}?>  
 <!--mks-mulai-->
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
<div style="text-align:right;font-weight:bold;font-family:Tahoma;font-size:12px;padding-left:15px;color:<?php echo $color ?>"> <?= $price; ?>
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
<?php if($usermode == "vc"){?> 
<div style="padding:0px;border-bottom:1px solid;text-align:center;font-weight:bold;font-size:10px;color:#555">VOUCHER</div>		
<div style="padding:0px;border-bottom:1px solid;text-align:center;font-weight:bold;font-size:12px;color:#111;"><?php echo $username;?></div>
<?php }elseif($usermode == "up"){?>
<div style="padding:0px;border-bottom:1px solid;text-align:center;font-weight:bold;font-size:10px;color:#555">MEMBER</div>		
<div style="padding:0px;border-bottom:1px solid;text-align:center;font-weight:bold;font-size:12px;color:#111;"><?php echo "User: ".$username."<br>Pass: ".$password;?></div>
<?php }?>
<!--mks-voucher-akhir-->
</div>
<div style="text-align:center;color:#111;font-size:9px;font-weight:bold;margin:0px;padding:2.5px;">
CS:08786544114 <br>
<div style="text-align:center;color:#111;font-size:7px;font-weight:bold;margin:0px;padding:2.5px;">	
	<?= $hotspotname; ?>
</div>
</td>	
<p style=" margin-top:-14px;margin-bottom:5px">		
<td style="width:100px;text-align:right;">
<div style="clear:both;padding:0 2.5px;font-size:7px;font-weight:bold;color:#000000">
<?php echo $validity;?><br> <?php echo $timelimit;?> <br><?php echo $datalimit;?>
</div>
<div style="float:right;padding:1px;text-align:right;width:70%;margin:0 5px -15px 0;"><img style=" height:55px;width:55px;" <?= $qrcode ?></div>
</td>		
</tr>
<tr>
<td style="background:<?php echo $color ?>;color:#666;padding:0px;" valign="top" colspan="2">
<div style="text-align:left;color:#fff;font-size:8px;font-weight:bold;margin:0px;padding:2.5px;">
 <b>login/logout  : <?= $dnsname; ?> </b> -<?php echo " [$num]";?>
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