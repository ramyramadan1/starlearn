<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
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
          <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
         <!-- DATA TABLES -->
    <link href="/assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>

<!--        <link href="/assets/plugins/kendo/content/shared/styles/examples-offline.css" rel="stylesheet">
        <script src="/assets/plugins/kendo/content/js/kendo.all.min.js"></script>-->
 @section('head')
            
        @show
</head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>