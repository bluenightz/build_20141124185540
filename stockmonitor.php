<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once('inc_head.php'); ?>
</head>
<body>
	<?php include_once('inc_mainmenu.php'); ?>
	
	<div class="container-body container-fluid">
		<div class="row">
			<div class="col-xs-6">
					


				<div class="row">
					<div class="col-xs-10">
						<h3 class="h3">รายการวัสดุเบิกรวมสาขา</h3>
					</div>
					<div class="col-xs-2 ta-r">
						<button type="submit" class="btn btn-default">Export</button>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
							<div class="row">
								<form action="" class="">
									<div class="col-xs-6">
										<div class="row">
											<div class="col-xs-3">
												<img src="http://placehold.it/70x70" alt="">
											</div>
											<div class="col-xs-9">
												<div class="form-group">
													<label for="">รหัสวัสดุ</label>
													<select name="" id="" class="form-control">
														<option value="">ALR011M51B0</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label for="">วันที่อนุมัติเบิก</label>
												<input type="text" name="" id="" class="form-control" value="19/11/54">
										</div>
										<div class="form-group">
											<label for="">ชื่อวัสดุ</label>
												<input type="text" name="" id="" class="form-control" value="11R Silver">
										</div>
									</div>
								</form>
							</div>
					</div>
				</div>

				<div class="row">
					<div class="table-responsive col-xs-12">
					  <table class="table table-bordered table1">
					  	<thead class="thead-center">
					  		<tr>
					  			<th>รหัสสาขา</th>
					  			<th>ชื่อสาขา</th>
					  			<th>จำนวนขอเบิก</th>
					  			<th>สต็อกกลาง</th>
					  			<th>อนุมัติจัดเบิก</th>
					  			<th>ใบเบิกเลขที่</th>
					  			<th>บันทึก/ยืนยัน</th>
					  			<th>สถานะ</th>
					  		</tr>
					  	</thead>
					  	<tbody>
					  		<tr>
					  			<td>
					  				<div class="ta-c">KI03</div>
					  			</td>
					  			<td>
					  				<div class="ta-c">เซ็นทรัลพระราม 9</div>
					  			</td>
					  			<td>
					  				<div class="ta-r">50</div>
					  			</td>
					  			<td>
					  				<div class="ta-r">300</div>
					  			</td>
					  			<td>
					  				<div class="ta-r">(ระบุจำนวน) 50</div>
					  			</td>
					  			<td>
					  				<div class="ta-c">TKI0314xxxxxx</div>
					  			</td>
					  			<td>
					  				<div class="ta-c"><button class="btn btn-default">ยืนยัน</button></div>
					  			</td>
					  			<td>
					  				<div class="ta-c"><div class="circle circle-green"></div></div>
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<div class="ta-c">KI04</div>
					  			</td>
					  			<td>
					  				<div class="ta-c">เซ็นทรัลปิ่นเกล้า</div>
					  			</td>
					  			<td>
					  				<div class="ta-r">100</div>
					  			</td>
					  			<td>
					  				<div class="ta-r">250</div>
					  			</td>
					  			<td>
					  				<div class="ta-r">(ระบุจำนวน) 0</div>
					  			</td>
					  			<td>
					  				<div class="ta-c">TKI0414xxxxxx</div>
					  			</td>
					  			<td>
					  				<div class="ta-c"><button class="btn btn-default">ยืนยัน</button></div>
					  			</td>
					  			<td>
					  				<div class="ta-c"><div class="circle circle-green"></div></div>
					  			</td>
					  		</tr>
					  		<tr>
					  			<td>
					  				<div class="ta-c">KI05</div>
					  			</td>
					  			<td>
					  				<div class="ta-c">เซ็นทรัลเวิลด์</div>
					  			</td>
					  			<td>
					  				<div class="ta-r">50</div>
					  			</td>
					  			<td>
					  				<div class="ta-r">50</div>
					  			</td>
					  			<td>
					  				<div class="ta-r">(ระบุจำนวน) 500</div>
					  			</td>
					  			<td>
					  				<div class="ta-c">TKI0514xxxxxx</div>
					  			</td>
					  			<td>
					  				<div class="ta-c"><button class="btn btn-default">ยืนยัน</button></div>
					  			</td>
					  			<td>
					  				<div class="ta-c"><div class="circle circle-green"></div></div>
					  			</td>
					  		</tr>
					  	</tbody>
					  	<tfoot>
							<tr>
								<td colspan="8"></td>
							</tr>
					  	</tfoot>
					  </table>
					</div>
				</div>

			</div>


			<div class="col-xs-6">
					


				<div class="row">
					<div class="col-xs-8">
						<h3 class="h3">ใบโอนย้ายสินค้า</h3>
					</div>
					<div class="col-xs-4 ta-r">
						<button type="submit" class="btn btn-default">Export</button>
						<button type="submit" class="btn btn-default">Print</button>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
							<div class="row">
								<form action="" class="">
									<div class="col-xs-4">
										<div class="form-group">
											<label for="">รหัสสาขา</label>
											<select name="" id="" class="form-control">
												<option value="">KI03</option>
											</select>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="form-group">
											<label for="">รหัสสาขาเบิกออก</label>
												<input type="text" name="" id="" class="form-control" value="สำนักงานใหญ่ 00000">
										</div>
										<div class="form-group">
											<label for="">ชื่อสาขาที่รับเข้า</label>
												<select name="" id="" class="form-control">
													<option value="">เซ็นทรัลพระราม 9</option>
												</select>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="form-group">
											<label for="">ใบโอนย้ายสินค้าเลขที่</label>
												<input type="text" name="" id="" class="form-control" value="TKI0314xxxxxx">
										</div>
										<div class="form-group">
											<label for="">วันที่ออกเอกสาร</label>
												<input type="text" name="" id="" class="form-control" value="19/11/54">
										</div>
									</div>
								</form>
							</div>
					</div>
				</div>

				<div class="row">
					<div class="table-responsive col-xs-12">
					  <table class="table table-bordered table1">
					  	<col>
					  	<col>
					  	<col width="30%">
					  	<col width="10%">
					  	<col width="10%">
					  	<col width="10%">
					  	<col>
					  	<thead class="thead-center">
					  		<tr>
					  			<th>No.</th>
					  			<th>รหัสวัสดุ</th>
					  			<th>ชื่อวัสดุ</th>
					  			<th>จำนวนขอเบิก</th>
					  			<th>อนุมัติจัดเบิก</th>
					  			<th>จำนวนจัดเบิก</th>
					  			<th>บันทึกหมายเหตุ</th>
					  		</tr>
					  	</thead>
					  	<tbody>
					  		<tr>
					  			<td>
					  				<div class="ta-c">1.</div>
					  			</td>
					  			<td>
					  				<div class="ta-c">ALR011M51B0</div>
					  			</td>
					  			<td>
					  				<div class="ta-c">11R Silver</div>
					  			</td>
					  			<td>
					  				<div class="ta-c">500</div>
					  			</td>
					  			<td>
					  				<div class="ta-c">30</div>
					  			</td>
					  			<td>
					  				<div class="ta-c">30</div>
					  			</td>
					  			<td>
					  				<div class="ta-c"></div>
					  			</td>
					  		</tr>
					  	</tbody>
					  	<tfoot>
							<tr>
								<td colspan="7"></td>
							</tr>
					  	</tfoot>
					  </table>
					</div>
				</div>


				<div class="row">
					<div class="col-xs-12 topline"></div>
				</div>

				<div class="row font-xs">
					<div class="col-xs-2 col-xs-offset-4 signature-box">
						<div class="signature">(....................)</div>
						<div class="datebox">dd/mm/yyyy <br> ผู้ตรวจสอบ</div>
					</div>
					<div class="col-xs-2 signature-box">
						<div class="signature">(....................)</div>
						<div class="datebox">dd/mm/yyyy <br> ผู้ตรวจสอบ</div>
					</div>
					<div class="col-xs-2 signature-box">
						<div class="signature">(....................)</div>
						<div class="datebox">dd/mm/yyyy <br> ผู้ตรวจสอบ</div>
					</div>
					<div class="col-xs-2 signature-box">
						<div class="signature">(....................)</div>
						<div class="datebox">dd/mm/yyyy <br> ผู้ตรวจสอบ</div>
					</div>
				</div>

			</div>


		</div>
		

	</div>

	<?php include_once("inc_script.js"); ?>
</body>
</html>