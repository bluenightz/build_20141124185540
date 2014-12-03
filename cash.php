<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once('inc_head.php'); ?>
</head>
<body>
	<?php include_once('inc_mainmenu.php'); ?>
	
	<div class="container-body container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav navbar-nav navbar-right">
			        <li>
						<form class="navbar-form navbar-left" role="search">
					        <div class="form-group">
					          <input type="text" class="form-control" placeholder="dd/mm/yyyy">
					        </div>
					        <button type="submit" class="btn btn-default btn-noborder"><span class="balloonarticon-calendar"></span></button>
								
					        <div class="form-group">
					          <input type="text" class="form-control" placeholder="dd/mm/yyyy">
					        </div>
					        <button type="submit" class="btn btn-default btn-noborder"><span class="balloonarticon-calendar"></span></button>

					        <button type="submit" class="btn btn-default">Query</button>
							&nbsp;&nbsp;&nbsp;
					        <button type="submit" class="btn btn-default">Print</button>
					        <button type="submit" class="btn btn-default">Export</button>

					    </form>
			        </li>
			      </ul>
			  </div>
		</div>

		<div class="row">
			<div class="col-xs-6">
				<h3 class="h3">ยอดโอนเงินสดรายวันสาขา</h3>
			</div>
			<div class="col-xs-6 col-text-right">
				<form action="" class="form-inline">
					<div class="form-group">
					    <p class="form-control-static">วันที่ </p>
					  </div>
					  <div class="form-group">
					    <input type="text" class="form-control" placeholder="dd/mm/yyyy">
					  </div>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="table-responsive col-xs-12">
			  <table class="table table-bordered table1">
			  	<col>
			  	<col width="50%">
			  	<col>
			  	<col>
			  	<col>
			  	<thead class="thead-center">
			  		<tr>
			  			<th>รหัสสาขา</th>
			  			<th>ชื่อสาขา</th>
			  			<th>ยอดขาย 19:00 น.</th>
			  			<th>ตรวจสอบ</th>
			  			<th>สถานะ</th>
			  		</tr>
			  	</thead>
			  	<tbody>
			  		<tr>
			  			<td><div class="td1">KI03</div></td>
			  			<td><div class="td2">เข็นทรัลพระราม 9</div></td>
			  			<td><div class="td3">2,900.00</div></td>
			  			<td><div class="td4">
			  				<button class="btn btn-default">ตรวจสอบ</button>
			  			</div></td>
			  			<td><div class="td5"><div class="circle circle-green"></div></div></td>
			  		</tr>
			  		<tr>
			  			<td><div class="td1">KI04</div></td>
			  			<td><div class="td2">เซ็นทรัลปิ่นเกล้า</div></td>
			  			<td><div class="td3">1,850.00</div></td>
			  			<td><div class="td4">
			  				<button class="btn btn-default">รอตรวจสอบ</button>
			  			</div></td>
			  			<td><div class="td5"><div class="circle circle-red"></div></div></td>
			  		</tr>
			  		<tr>
			  			<td><div class="td1">KI05</div></td>
			  			<td><div class="td2">เซ็นทรัลเวิร์ด</div></td>
			  			<td><div class="td3">4,500.00</div></td>
			  			<td><div class="td4">
			  				<button class="btn btn-default">รอตรวจสอบ</button>
			  			</div></td>
			  			<td><div class="td5"><div class="circle circle-red"></div></div></td>
			  		</tr>
			  	</tbody>
			  	<tfoot>
			  		<tr>
			  			<td><div class="td1">&nbsp;</div></td>
			  			<td class=""><div class="td2">รวมยอดโอน</div></td>
			  			<td class="tdyellow"><div class="td3">9,250.00</div></td>
			  			<td><div class="td4">
			  				&nbsp;
			  			</div></td>
			  			<td><div class="td5">&nbsp;</div></td>
			  		</tr>
			  	</tfoot>
			  </table>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-3 col-xs-offset-9 signature-box">
				<div class="signature">(......................................)</div>
				<div class="datebox">dd/mm/yyyy <br> ผู้ตรวจสอบ</div>
			</div>
		</div>
	</div>

	<?php include_once("inc_script.js"); ?>
</body>
</html>