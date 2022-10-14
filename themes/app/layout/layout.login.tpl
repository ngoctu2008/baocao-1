<!-- BEGIN: main -->
{FILE "header_only.tpl"}

<link href="/themes/{TEMPLATE}/css/pace.min.css" rel="stylesheet" />
<!-- <link href="/themes/{TEMPLATE}/css/bootstrap.min.css" rel="stylesheet" /> -->
<link href="/themes/{TEMPLATE}/css/bootstrap-extended.css" rel="stylesheet" />
<link href="/themes/{TEMPLATE}/css/app.css" rel="stylesheet" />
<link href="/themes/{TEMPLATE}/css/icon.css" rel="stylesheet" />
<link href="/themes/{TEMPLATE}/css/semi-dark.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<script src="/themes/{TEMPLATE}/js/pace.min.js"></script>

</head>
<body class="bg-lock-screen">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-lock-screen d-flex align-items-center justify-content-center">
			<div class="shadow-none">
				<div class="card-body text-center">
					{MODULE_CONTENT}
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->

	{FILE "footer_only.tpl"}
<!-- END: main -->
