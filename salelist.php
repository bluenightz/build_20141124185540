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
				<h3 class="h3">ใบสรุปยอดขายรายวันสาขา</h3>
			</div>
			<div class="col-xs-6 col-text-right">
				<form action="" class="form-inline">
					<div class="form-group mr-1">
						<select name="" id="" class="form-control">
							<option value="">ตัดยอด 19:00</option>
						</select>
					</div>
					  <div class="form-group">
					  	<p class="form-control-static">ชื่อรหัสสาขา</p>
					    <select name="" id="" class="form-control select-xs-1">
					    	<option value="">KI03</option>
					    </select>
					    <select name="" id="" class="form-control">
					    	<option value="">เซ็นทรัลพระราม 9</option>
					    </select>
					  </div>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="table-responsive col-xs-12">
			  <table class="table table-bordered table1">
			  	<thead class="thead-center">
			  		<tr>
			  			<th>No.</th>
			  			<th>วันที่</th>
			  			<th>เวลา</th>
			  			<th>ใบเสร็จเลขที่</th>
			  			<th>รับเงินสด</th>
			  			<th>บัตรเครดิต</th>
			  			<th>ยอดขายรวม</th>
			  			<th>หักค่าจัดส่ง</th>
			  			<th>ผู้ขาย</th>
			  			<th>บันทึก</th>
			  		</tr>
			  	</thead>
			  	<tbody>
			  		<tr>
			  			<td>
			  				<div class="ta-c">1.</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">18/11/57</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">20:05</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">BKI03YYMM-001</div>
			  			</td>
			  			<td>
			  				<div class="ta-r">1,800.00</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">&nbsp;</div>
			  			</td>
			  			<td>
			  				<div class="ta-r">1,800.00</div>
			  			</td>
			  			<td>
			  				<div class="ta-r">100.00</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">ตามชื่อผู้ Login</div>
			  			</td>
			  			<td>
			  				<div class="ta-c"></div>
			  			</td>
			  		</tr>
			  		<tr>
			  			<td>
			  				<div class="ta-c">2.</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">19/11/57</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">14:37</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">BKI03YYMM-002</div>
			  			</td>
			  			<td>
			  				<div class="ta-r">750.00</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">&nbsp;</div>
			  			</td>
			  			<td>
			  				<div class="ta-r">750.00</div>
			  			</td>
			  			<td>
			  				<div class="ta-r">&nbsp;</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">ตามชื่อผู้ Login</div>
			  			</td>
			  			<td>
			  				<div class="ta-c"></div>
			  			</td>
			  		</tr><tr>
			  			<td>
			  				<div class="ta-c">3.</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">19/11/57</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">17:30</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">BKI03YYMM-003</div>
			  			</td>
			  			<td>
			  				<div class="ta-r">800.00</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">&nbsp;</div>
			  			</td>
			  			<td>
			  				<div class="ta-r">800.00</div>
			  			</td>
			  			<td>
			  				<div class="ta-r">&nbsp;</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">ตามชื่อผู้ Login</div>
			  			</td>
			  			<td>
			  				<div class="ta-c"></div>
			  			</td>
			  		</tr>
			  		<tr>
			  			<td>
			  				<div class="ta-c">4.</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">19/11/57</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">18:15</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">BKI03YYMM-004</div>
			  			</td>
			  			<td>
			  				<div class="ta-r">&nbsp;</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">2,560.00</div>
			  			</td>
			  			<td>
			  				<div class="ta-r">2,560.00</div>
			  			</td>
			  			<td>
			  				<div class="ta-r">150.00</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">ตามชื่อผู้ Login</div>
			  			</td>
			  			<td>
			  				<div class="ta-c"></div>
			  			</td>
			  		</tr>
					<tr>
			  			<td>
			  				<div class="ta-c">5.</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">19/11/57</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">18:20</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">BKI03YYMM-005</div>
			  			</td>
			  			<td>
			  				<div class="ta-r">&nbsp;</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">3,050.00</div>
			  			</td>
			  			<td>
			  				<div class="ta-r">3,050.00</div>
			  			</td>
			  			<td>
			  				<div class="ta-r">200.00</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">ตามชื่อผู้ Login</div>
			  			</td>
			  			<td>
			  				<div class="ta-c"></div>
			  			</td>
			  		</tr>
			  		<tr>
			  			<td>
			  				<div class="ta-c">6.</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">19/11/57</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">18:25</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">BKI03YYMM-001</div>
			  			</td>
			  			<td>
			  				<div class="ta-r">&nbsp;</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">5,000.00</div>
			  			</td>
			  			<td>
			  				<div class="ta-r">5,000.00</div>
			  			</td>
			  			<td>
			  				<div class="ta-r">&nbsp;</div>
			  			</td>
			  			<td>
			  				<div class="ta-c">ตามชื่อผู้ Login</div>
			  			</td>
			  			<td>
			  				<div class="ta-c"></div>
			  			</td>
			  		</tr>
			  	</tbody>
			  	<tfoot>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><div class="ta-c">ยอดรวม</div></td>
						<td><div class="ta-r">3,350.00</div></td>
						<td><div class="ta-r">10,610.00</div></td>
						<td><div class="ta-r">13,960.00</div></td>
						<td><div class="ta-r text-red">450.00</div></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><div class="ta-c">รวมยอดโอน</div></td>
						<td class="tdyellow"><div class="ta-r">2,900.00</div></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
			  	</tfoot>
			  </table>
			</div>
		</div>

		<!-- <div class="row">
			<div class="col-xs-3 col-xs-offset-9 signature-box">
				<div class="signature">(......................................)</div>
				<div class="datebox">dd/mm/yyyy <br> ผู้ตรวจสอบ</div>
			</div>
		</div> -->
	</div>

	<?php include_once("inc_script.js"); ?>
</body>
</html>