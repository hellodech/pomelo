
<?php
include("./conn/conn.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--
Project      : ตรวจสอบย้อนกลับส้มโอ ในจังหวัดนครปฐม
Author		 : อ.เดช และทีมงาน นักศึกษาสาขาวิชาคอมพิวเตอร์ธุรกิจ
Email	 	 : dechit@msn.com
Tel		 	 : 081-353-5718
-->
	
	<!-- Bootstrap -->
	<link href=".css/bootstrap.min.css" rel="stylesheet">
	<link href=".css/bootstrap-datepicker.css" rel="stylesheet">
	   <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./css/custom-css.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">


<style>
 .navbar-brand {
  padding: 0px;
}
.navbar-brand>img {
  height: 85%;
  width: auto;
  margin:5px 5px;
}

.navbar-brand {
  height: 60px;
}

.carousel-control { background: none !important; filter: none !important; progid:none !important; }

.bg-gray {
	background: #fafafa;
}

/* margins */
.marginbot-0{margin-bottom:0 !important;}
.marginbot-10{margin-bottom:10px !important;}
.marginbot-20{margin-bottom:20px !important;}
.marginbot-30{margin-bottom:30px !important;}
.marginbot-40{margin-bottom:40px !important;}
.marginbot-50{margin-bottom:50px !important;}

.margintop-0{margin-top:0 !important;}
.margintop-10{margin-top:10px !important;}
.margintop-20{margin-top:20px !important;}
.margintop-30{margin-top:30px !important;}
.margintop-40{margin-top:40px !important;}
.margintop-45{margin-top:45px !important;}
.margintop-50{margin-top:50px !important;}

/* padding */
.paddingtop-0{padding-top:0 !important;}
.paddingtop-10{padding-top:10px !important;}
.paddingtop-20{padding-top:20px !important;}
.paddingtop-30{padding-top:30px !important;}
.paddingtop-40{padding-top:40px !important;}
.paddingtop-50{padding-top:50px !important;}

.paddingbot-0{padding-bottom:0 !important;}
.paddingbot-10{padding-bottom:10px !important;}
.paddingbot-20{padding-bottom:20px !important;}
.paddingbot-30{padding-bottom:30px !important;}
.paddingbot-40{padding-bottom:40px !important;}
.paddingbot-50{padding-bottom:50px !important;}


.p-indent {
    text-indent: 50px;
}
.list-indent {
    text-indent: 50px;
}

.navbar-default {
  background-color: #bcf5c1;
  border-color: #68f169;
}
.navbar-default .navbar-brand {
  color: #616461;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #010101;
}
.navbar-default .navbar-text {
  color: #616461;
}
.navbar-default .navbar-nav > li > a {
	font-size:14px;	
  color: #555;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #000;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #010101;
  background-color: #68f169;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #010101;
  background-color: #68f169;
}
.navbar-default .navbar-toggle {
  border-color: #68f169;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #68f169;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #616461;
}

.btn-sq-lg {
  width: 180px !important;
  height: 180px !important;
}

@media (max-width: 1240px) {
.btn-sq-lg {
  width: 150px !important;
  height: 150px !important;
  font-size:13px;
}		
}

@media (max-width: 1027px) {
.carousel-caption{
    top: 0;
    bottom: auto;
}
.carousel-caption>h3{
	font-size: 20px;
	}
}




@media (max-width: 790px) {
	.page-content-header .page-header{
	
	font-size: 20px;
	}
}

@media (max-width: 768px) {
.carousel-caption{
    top: 0;
    bottom: auto;
}	
.carousel-caption>h3{
	font-size: 16px;
	}
	
.carousel-caption>img {
  height: 80%;
  width: auto;
}
	
		
	
}

@media (max-width: 480px) {
.carousel-caption{
    top: 0;
    bottom: auto;
}	
.carousel-caption>h3{
	font-size: 14px;
    padding: 0px;
    margin: 0px;	
	}
.page-content-header .page-header{
	
	font-size: 18px;
	}	
	
}

@media (max-width: 430px) {
.btn-sq-lg {
  width: 150px !important;
  height: 150px !important;
  font-size:12px;
}	
}

.widewrapper {
  width:100%;
  padding:20px 20px;
  background-color:#18bc9c;
  color:#FFF;
  }

.page-content {
	width:100%;
	position:relative;
	margin-top:0px;
	background-size: cover;
	background-color: #fafafa;
}

.page-content-header {
	width:100%;
	position:relative;
	margin-top:0px;
	background-size: cover;
	background-color: #003333;
	color:#FFF; 
	border-bottom:1px solid #68f169;
}

.page-header-unline {
  padding-bottom: 9px;
  margin: 40px 0 20px;
}

.last-section{
	padding-bottom:50px;	
	}


footer {
border-top: 1px solid #68f169;
}
footer h3 {
  margin-bottom: 30px;
}
footer .footer-top {
  color: 616461;
  padding-top: 50px;
  padding-bottom: 50px;
  background-color: #bcf5c1;  
  background-size: cover;

}
footer .footer-col {
  margin-bottom: 50px;
}
footer .footer-bottom {
  color: white;	
  padding: 10px 0;
  background-color:#003333;
}

.gi-2x{font-size: 2em;}
.gi-3x{font-size: 3em;}
.gi-4x{font-size: 4em;}
.gi-5x{font-size: 5em;}

#new-section p{
	text-align:center;
	}

#new-section p span{
	margin-top:10px;
	}	
</style>   <!-- jQuery -->
    <script src="./index_files/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./index_files/bootstrap.min.js"></script>
    <script src="./index_files/bootbox.min.js"></script>
	<script src="./index_files/jquery.form.min.js"></script>
    <!-- Script to Activate the Carousel -->
<script type="text/javascript">
$(document).ready(function () {
    $('.carousel').carousel({
        interval: 3000
    });

    $('.carousel').carousel('cycle');
});
</script>
<style>
#myCarousel{
	width:100%;
	height:auto;
	overflow:hidden;
	}

.img100{
	width:100%;
	}	
</style>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div class="container">
		<div class="content">
		<img src="img/menu1.png" width="1158" height="262" border="0" alt="">
			<h2>เพิ่มข้อมูลตรวจสอบย้อนกลับ</h2>
			<hr />

			<?php

			//error_reporting( ~E_NOTICE ); // avoid notice
			if(isset($_POST['btnsave'])){
				
				//$Fm_id			= $_POST['Fm_id'];
				$p_name		= $_POST['p_name'];
				$p_detail	= $_POST['p_detail'];
				$p_plant_name	= $_POST['p_plant_name'];
				$p_address	= $_POST['p_address'];
				$p_tel	= $_POST['p_tel'];
				$p_line_id	= $_POST['p_line_id'];
				$p_facebook	= $_POST['p_facebook'];
				$p_email	= $_POST['p_email'];
				$p_lat	= $_POST['p_lat'];
				$p_long	= $_POST['p_long'];
				$p_water	= $_POST['p_water'];
				$p_fertilizer	= $_POST['p_fertilizer'];
				$p_biocide	= $_POST['p_biocide'];
             // ส่วนสำหรับรูปภาพ  เจ้าของ  /////////////////////////////////////////////////////////////////////////////////////				
				$imgFile = $_FILES['user_image']['name'];
				$tmp_dir = $_FILES['user_image']['tmp_name'];
				$imgSize = $_FILES['user_image']['size'];


					if(empty($imgFile)){
						$errMSG = "Please Select Image File.";
					}
					else
					{
						$upload_dir = 'img/owner/'; // upload directory
				
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

// ส่วนสำหรับรูปภาพ  GAP  /////////////////////////////////////////////////////////////////////////////////////				
				$imgFile1 = $_FILES['p_gap_pic']['name'];
				$tmp_dir1 = $_FILES['p_gap_pic']['tmp_name'];
				$imgSize1 = $_FILES['p_gap_pic']['size'];


					if(empty($imgFile1)){
						$errMSG = "Please Select Image File.";
					}
					else
					{
						$upload_dir1 = 'img/gap/'; // upload directory
				
						$imgExt1 = strtolower(pathinfo($imgFile1,PATHINFO_EXTENSION)); // get image extension
					
						// valid image extensions
						$valid_extensions1 = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
					
						// rename uploading image
						$userpic1 = rand(1000,1000000).".".$imgExt1;
							
						// allow valid image file formats
						if(in_array($imgExt1, $valid_extensions1)){			
							// Check file size '5MB'
							if($imgSize1 < 5000000)				{
								move_uploaded_file($tmp_dir1,$upload_dir1.$userpic1);

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

// ส่วนสำหรับรูปภาพ  Water  /////////////////////////////////////////////////////////////////////////////////////				
				$imgFile2 = $_FILES['p_water_pic']['name'];
				$tmp_dir2 = $_FILES['p_water_pic']['tmp_name'];
				$imgSize2 = $_FILES['p_water_pic']['size'];


					if(empty($imgFile2)){
						$errMSG = "Please Select Image File.";
					}
					else
					{
						$upload_dir2 = 'img/water/'; // upload directory
				
						$imgExt2 = strtolower(pathinfo($imgFile2,PATHINFO_EXTENSION)); // get image extension
					
						// valid image extensions
						$valid_extensions2 = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
					
						// rename uploading image
						$userpic2 = rand(1000,1000000).".".$imgExt2;
							
						// allow valid image file formats
						if(in_array($imgExt2, $valid_extensions2)){			
							// Check file size '5MB'
							if($imgSize2 < 5000000)				{
								move_uploaded_file($tmp_dir2,$upload_dir2.$userpic2);

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

// ส่วนสำหรับรูปภาพ  ปุ๋ย  /////////////////////////////////////////////////////////////////////////////////////				
				$imgFile3 = $_FILES['p_fertilizer_pic']['name'];
				$tmp_dir3 = $_FILES['p_fertilizer_pic']['tmp_name'];
				$imgSize3 = $_FILES['p_fertilizer_pic']['size'];


					if(empty($imgFile3)){
						$errMSG = "Please Select Image File.";
					}
					else
					{
						$upload_dir3 = 'img/fertilizer/'; // upload directory
				
						$imgExt3 = strtolower(pathinfo($imgFile3,PATHINFO_EXTENSION)); // get image extension
					
						// valid image extensions
						$valid_extensions3 = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
					
						// rename uploading image
						$userpic3 = rand(1000,1000000).".".$imgExt3;
							
						// allow valid image file formats
						if(in_array($imgExt3, $valid_extensions3)){			
							// Check file size '5MB'
							if($imgSize3 < 5000000)				{
								move_uploaded_file($tmp_dir3,$upload_dir3.$userpic3);

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

// ส่วนสำหรับรูปภาพ  ยาฆ่าแมลง  /////////////////////////////////////////////////////////////////////////////////////				
				$imgFile4 = $_FILES['p_biocide_pic']['name'];
				$tmp_dir4 = $_FILES['p_biocide_pic']['tmp_name'];
				$imgSize4 = $_FILES['p_biocide_pic']['size'];


					if(empty($imgFile4)){
						$errMSG = "Please Select Image File.";
					}
					else
					{
						$upload_dir4 = 'img/biocide/'; // upload directory
				
						$imgExt4 = strtolower(pathinfo($imgFile4,PATHINFO_EXTENSION)); // get image extension
					
						// valid image extensions
						$valid_extensions4 = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
					
						// rename uploading image
						$userpic4 = rand(1000,1000000).".".$imgExt4;
							
						// allow valid image file formats
						if(in_array($imgExt4, $valid_extensions4)){			
							// Check file size '5MB'
							if($imgSize4 < 5000000)				{
								move_uploaded_file($tmp_dir4,$upload_dir4.$userpic4);

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

						$insert = mysqli_query($Conn, "INSERT INTO plant(p_name,p_owner_pic,p_detail,p_plant_name,p_address,p_tel,p_line_id,p_facebook,p_email,p_gap_pic,p_lat,p_long,p_water,p_water_pic,p_fertilizer,p_fertilizer_pic,p_biocide,p_biocide_pic)
															VALUES('$p_name','$userpic','$p_detail','$p_plant_name','$p_address','$p_tel','$p_line_id','$p_facebook','$p_email','$userpic1','$p_lat','$p_long','$p_water','$userpic2','$p_fertilizer','$userpic3','$p_biocide','$userpic4') ") or die(mysqli_error());
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
					<label class="col-sm-3 control-label">ชื่อเกษตรกร</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-4">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input type="text" name="p_name" class="form-control" placeholder="ชื่อเกษตรกร" required> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">รูปเกษตรกร</label>
					<div class="col-sm-4"> <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input class="input-group" type="file" name="user_image" accept="image/*" />  <!-- ถ้าข้อมูลที่ผู้ใช้ต้องกรอกเกิน 1 บรรทัดให้ใช้ Textarea นะครับ -->
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label">ชื่อสวน</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-4">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input type="text" name="p_plant_name" class="form-control" placeholder="กรุณากรอกชื่อสวน" required> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">รายละเอียดเกี่ยวกับเจ้าของสวน</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-4">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<textarea name="p_detail" class="form-control" placeholder="กรุณากรอกรายละเอียดสวน"></textarea>
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label">ที่อยู่</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-4">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<textarea name="p_address" rows="4" cols="50" class="form-control" placeholder="กรุณากรอกที่อยู่"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">เบอร์ติดต่อ</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-2">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input type="text" name="p_tel" class="form-control" placeholder="กรุณากรอกเบอร์โทร" required> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Line ID</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-2">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input type="text" name="p_line_id" class="form-control" placeholder="กรุณากรอก Line ID" required> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Facebook</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-2">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input type="text" name="p_facebook" class="form-control" placeholder="กรุณากรอกFacebook " required> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label">Email</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-2">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input type="text" name="p_email" class="form-control" placeholder="กรุณากรอก email " required> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label">รูปภาพใบรับรอง GAP</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-2">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input class="input-group" type="file" name="p_gap_pic" accept="image/*" /> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Latitude</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-2">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input type="text" name="p_lat" class="form-control" placeholder="กรุณากรอก Latitude" required> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Longtitude</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-2">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input type="text" name="p_long" class="form-control" placeholder="กรุณากรอก Longtitude" required> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">ข้อมูลแหล่งน้ำ</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-4">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<textarea name="p_water" rows="6" cols="50" class="form-control" placeholder="กรุณากรอกข้อมูลแหล่งน้ำ"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">รูปภาพแหล่งน้ำ</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-2">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input class="input-group" type="file" name="p_water_pic" accept="image/*" /> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">ข้อมูลปุ๋ย</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-4">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<textarea name="p_fertilizer" rows="6" cols="50" class="form-control" placeholder="กรุณากรอกข้อมูลปุ๋ย"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">รูปภาพปุ๋ย</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-2">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input class="input-group" type="file" name="p_fertilizer_pic" accept="image/*" /> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">ข้อมูลสารกำจัดศัตรูพืช</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-4">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<textarea name="p_biocide" rows="6" cols="50" class="form-control" placeholder="กรุณากรอกข้อมูลปุ๋ย"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">รูปภาพสารกำจัดศ้ตรูพืช</label> <!-- อันนี้ข้อความที่จะให้แสดงที่หน้าจอนะครับ -->
					<div class="col-sm-2">  <!-- ตรงนี้ปรับขนาดนะครับ ถ้า 2 จะเล็กกว่า 3 และ 4 -->
						<input class="input-group" type="file" name="p_biocide_pic" accept="image/*" /> <!-- ตรง name ให้ใส่เป็นชื่อ field ในฐานข้อมูลนะครับ  -->  
					</div>
				</div>



					<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="btnsave" class="btn btn-sm btn-primary" value="บันทึกข้อมูล">
						<input type="reset" name="btnreset" class="btn btn-sm btn-primary" value="ยกเลิกการบันทึกข้อมูล">
						<a href="menu.php" class="btn btn-sm btn-danger">กลับสู่หน้าเมนูหลัก</a>
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
