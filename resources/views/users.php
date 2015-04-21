<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
    
            <link href="/assets/plugins/kendo/content/css/web/kendo.common.min.css" rel="stylesheet" />
        <link href="/assets/plugins/kendo/content/css/web/kendo.rtl.min.css" rel="stylesheet" />
        <link href="/assets/plugins/kendo/content/css/web/kendo.default.min.css" rel="stylesheet" />
        <link href="/assets/plugins/kendo/content/css/web/kendo.default.mobile.min.css" rel="stylesheet" />
        <link href="/assets/plugins/kendo/content/css/dataviz/kendo.dataviz.min.css" rel="stylesheet" />
        <link href="/assets/plugins/kendo/content/css/dataviz/kendo.dataviz.default.min.css" rel="stylesheet" />
        <link href="/assets/plugins/kendo/content/shared/styles/examples-offline.css" rel="stylesheet">

        <script src="/assets/plugins/kendo/content/js/jquery.min.js"></script>
        <script src="/assets/plugins/kendo/content/js/kendo.all.min.js"></script>

</head>


<body>
	<div class="page">
            <a class="offline-button" href="../index.php">Back to all examples</a>
            <div id="example" class="k-content">
            
            <?php echo $grid->render(); ?>
            </div>
    </div>
</body>
</html>
