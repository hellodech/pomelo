<?php
include("./conn/conn.php");
?>

<?php
// Start the session
session_start();
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
	<meta http-equiv="content-Type" content="text/html; charset=utf8"> 
	
	
	
	
	<title>ตรวจสอบย้อนกลับส้มโอในจังหวัดนครปฐม</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
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
			<h2>เพิ่มข้อมูลสำหรับออกรหัส QR Code</h2>
			<hr />
			
			<?php
			$p_id = $_GET['p_id'];
			$sql = mysqli_query($Conn, "SELECT * FROM plant WHERE p_id='$p_id'");
			if(mysqli_num_rows($sql) == 0){
				//header("Location: frmPrint_qr_V1.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
	
	
			?>


			<form class="form-horizontal" action="frmPrint_QR_V5.php" method="post">

				<input type="hidden" name="p_id1" value="<?php echo $row ['p_id1']; ?>">
				

				<div class="form-group">
					<label class="col-sm-3 control-label">รหัสแปลงปลูก</label>
					<div class="col-sm-4">
						<input type="text" name="p_id" value="<?php echo $row ['p_id']; ?>" class="form-control" readonly>
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-3 control-label">ชื่อเจ้าของสวน</label>
					<div class="col-sm-4">
						<input type="text" name="p_name" value="<?php echo $row ['p_name']; ?>" class="form-control" readonly>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">วันที่ตัดผลผลิต</label>
					<div class="col-sm-2">
						<input type="date" name="date_cut" class="form-control" placeholder="date_cut" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">วันที่เริ่มทานอร่อย</label>
					<div class="col-sm-2">
						<input type="date" name="date_start_eat" class="form-control" placeholder="date_start_eat" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ถึงวันที่</label>
					<div class="col-sm-2">
						<input type="date" name="date_end_eat" class="form-control" placeholder="date_end_eat" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">วันที่หมดอายุ</label>
					<div class="col-sm-2">
						<input type="date" name="date_exp" class="form-control" placeholder="date_exp" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">จำนวนผลส้มโอที่ตัด Lot นี้</label>
					<div class="col-sm-4">
						<input type="text" name="num_pomelo"  class="form-control" placeholder="จำนวนผลส้มโอ" required>
					</div>
				</div>
	

				<div class="form-group">
					<label class="col-sm-3 control-label">กรุณาเลือกพันธุ์ส้มโอ</label>
					<div class="col-sm-2">
						<select name="pm_id" class="form-control" required>
							<option value="1"> - พันธ์ส้มโอ - </option>
							<?
								$sql = mysqli_query($Conn, "SELECT * FROM pomelo ORDER BY pm_id ASC");
								while($row = mysqli_fetch_assoc($sql)) {
								printf('<option value="%s">%s</option>', $row["pm_id"], $row["pm_name_th"]);
								$no++;
								}
							?>
							
						</select>
					</div>
  				</div>
				

	
				<!--<div class="form-group">
					<label class="col-sm-3 control-label">Username</label>
					<div class="col-sm-2">
						<input type="text" name="username" value="<?php //echo $row['username']; ?>" class="form-control" placeholder="Username">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Password</label>
					<div class="col-sm-2">
						<input type="password" name="pass1" value="<?php //echo $row['password']; ?>" class="form-control" placeholder="Password">
					</div>
				</div>-->
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="บันทึกข้อมูลเพื่อออกรหัส QR Code">
						<input type="reset" name="btnreset" class="btn btn-sm btn-primary" value="ยกเลิกการบันทึกข้อมูล">
						<a href="menu.php" class="btn btn-sm btn-danger">กลับหน้าแสดงข้อมูล</a>
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