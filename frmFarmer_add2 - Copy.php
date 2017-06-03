
<?php
include("/conn/conn.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>
<!--
Project      : ตรวจสอบย้อนกลับส้มโอ ในจังหวัดนครปฐม
Author		 : อ.เดช และทีมงาน นักศึกษาสาขาวิชาคอมพิวเตอร์ธุรกิจ
Email	 	 : dechit@msn.com
Tel		 	 : 081-353-5718
-->
	
	<meta http-equiv="Content-Language" content="th"> 
	<meta http-equiv="content-Type" content="text/html; charset=window-874"> 
	<meta http-equiv="content-Type" content="text/html; charset=tis-620"> 
	
	<title>ตรวจสอบย้อนกลับส้มโอในจังหวัดนครปฐม</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">

	<style>
		.content {
			margin-top: 80px;
		}
	</style>

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs-block visible-sm-block" href="">จัดการข้อมูลแหล่งน้ำ</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="">จัดการข้อมูลเกษตรกร</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="">จัดการข้อมูลGAP</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="">จัดการข้อมูลการให้ปุ๋ย</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="">จัดการข้อมูลการให้ยา</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">จัดการข้อมูลแปลงปลูก</a></li>
				</ul>
			</div><!--/.nav-collapse -->

		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>ตารางข้อมูลเกษตรกรผู้เพาะปลูก</h2>
			<hr />

			<?php

			//error_reporting( ~E_NOTICE ); // avoid notice
			if(isset($_POST['btnsave'])){
				
				$Fm_id			= $_POST['Fm_id'];
				$Fm_name_th		= $_POST['Fm_name_th'];
				$Fm_name_en		= $_POST['Fm_name_en'];
				$Fm_sname_th	= $_POST['Fm_sname_th'];
				$Fm_sname_en	= $_POST['Fm_sname_en'];
				$Fm_birthdate	= $_POST['Fm_birthdate'];
				$Fm_sex			= $_POST['Fm_sex'];
				$Fm_Tel			= $_POST['Fm_Tel'];
				$Fm_email		= $_POST['Fm_email'];
				$Fm_address		= $_POST['Fm_address'];
				$Fm_pic			= $_POST['Fm_pic'];

// ส่วนสำหรับรูปภาพ  /////////////////////////////////////////////////////////////////////////////////////				
				$imgFile = $_FILES['user_image']['name'];
				$tmp_dir = $_FILES['user_image']['tmp_name'];
				$imgSize = $_FILES['user_image']['size'];

								echo '<script language="javascript">';
								echo 'alert("message Variable")';
								echo '</script>';

				/////////
					
								echo '<script language="javascript">';
								echo 'alert($imgFile)';
								echo '</script>';

					if(empty($imgFile)){
						$errMSG = "Please Select Image File.";
					}
					else
					{
						$upload_dir = 'user_images/'; // upload directory
				
						$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
					
						// valid image extensions
						$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
					
						// rename uploading image
						$userpic = rand(1000,1000000).".".$imgExt;
							
						// allow valid image file formats
						if(in_array($imgExt, $valid_extensions)){			
							// Check file size '5MB'
							if($imgSize < 5000000)				{
								move_uploaded_file($tmp_dir,$upload_dir.$userpic);

								echo '<script language="javascript">';
								echo 'alert("message successfully sent")';
								echo '</script>';

							}
							else{
								$errMSG = "Sorry, your file is too large.";
							}
						}
						else{
							$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
						}
					}
					
/////////////////////////////////////////////////////////////////////////////////////////////////////////

						$insert = mysqli_query($Conn, "INSERT INTO farmer(Fm_id,Fm_name_th,Fm_name_en,Fm_sname_th,Fm_sname_en,Fm_birthdate,Fm_sex,Fm_Tel,Fm_email,Fm_address,Fm_pic)
															VALUES($Fm_id,'$Fm_name_th','$Fm_name_en','$Fm_sname_th','$Fm_sname_en','Fm_birthdate','$Fm_sex','$Fm_Tel','$Fm_email','$Fm_address','$userpic') ") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>บันทึกข้อมูลเรียบร้อย.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> มีปัญหาการบันทึกข้อมูลกรุณาตรวจสอบ !</div>';
						}
			}
			?>




				<?php
////////////////////////////////////////////////////////////////////////////////////////////
				if(isset($errMSG)){
						?>
						<div class="alert alert-danger">
							<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
						</div>
						<?php
				}
				else if(isset($successMSG)){
					?>
					<div class="alert alert-success">
						  <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
					</div>
					<?php
				}
////////////////////////////////////////////////////////////////////////////////////////////
				?>   
			<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label class="col-sm-3 control-label">รหัสเกษตรกร</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-2">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input type="text" name="Fm_id" class="form-control" placeholder="กรุณากรอกรหัส" required> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ชื่อเจ้าของสวน</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-2">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input type="text" name="Fm_name_th" class="form-control" placeholder="(ภาษาไทย)" required> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ชื่อเจ้าของสวน</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-2">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input type="text" name="Fm_name_en" class="form-control" placeholder="(ภาษาอังกฤษ)" required> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">นามสกุลเจ้าของสวน</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-2">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input type="text" name="Fm_sname_th" class="form-control" placeholder="(ภาษาไทย)" required> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">นามสกุลเจ้าของสวน</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-2">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input type="text" name="Fm_sname_en" class="form-control" placeholder="(ภาษาอังกฤษ)" required> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">วันเดือนปีเกิด</label>
					<div class="col-sm-2">
						<input type="text" name="Fm_birthdate" class="input-group date form-control" date="" data-date-format="yyyy-mm-dd" placeholder="0000-00-00" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">เพศ</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-2">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input type="text" name="Fm_sex" class="form-control" placeholder="(0=ชาย,1=หญิง)" required> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">เบอร์ติดต่อ</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-2">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input type="text" name="Fm_Tel" class="form-control" placeholder="กรุณากรอกเบอร์" required> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">อีเมลติดต่อ</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-2">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input type="text" name="Fm_email" class="form-control" placeholder="กรุณากรอกอีเมล" required> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ที่อยู่</label>
					<div class="col-sm-4"> <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<textarea name="Fm_address" class="form-control" placeholder="กรุณากรอกข้อมูล"></textarea>  <!-- ถ้าข้อมูลที่ผู้ใช้ต้องกรอกเกิน 1 บรรทัดให้ใช้ Textarea นะครับ -->
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">รูปเจ้าของสวน</label>
					<div class="col-sm-4"> <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input class="input-group" type="file" name="user_image" accept="image/*" />  <!-- ถ้าข้อมูลที่ผู้ใช้ต้องกรอกเกิน 1 บรรทัดให้ใช้ Textarea นะครับ -->
					</div>
				</div>
					<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="btnsave" class="btn btn-sm btn-primary" value="บันทึกข้อมูล">
						<input type="reset" name="btnreset" class="btn btn-sm btn-primary" value="ยกเลิกการบันทึกข้อมูล">
						<a href="http://www.npru.ac.th" class="btn btn-sm btn-danger">กลับสู่หน้าเมนูหลัก</a>
					</div>
				</div>
			</form>
		</div>
	</div>






	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
</body>
</html>
