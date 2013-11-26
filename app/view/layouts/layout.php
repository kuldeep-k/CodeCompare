<html>
<head>
<title><?php echo $this->http_metas['title'] ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo $this->AppConfig->site_root ?>css/app.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->AppConfig->site_root ?>css/blueprint/screen.css">
    
</head>
<body>
<div class="wrapper container">
<div class="header"><div><a style="color: #000;font-size: 24px; font-weight: bolder; text-decoration: none;"  href="<?php echo SITE_ROOT ?>">Code Compare</a></div><div style="font-size: 14px; font-style: italic;">Code Compare is place for coders to check/compare code against various languages.</div></div>
<div class="nav">
    <!-- menu Bar -->
</div>
<div class="content"><?php echo $this->content ?></div>
<div class="footer"></div>
</div>
</body>
</html>
