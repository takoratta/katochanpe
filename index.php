<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<form action="result.php" method="post" enctype="multipart/form-data">

		<button id="syousai" type="button" class="btn btn-default" onclick="showInputPathDetail()">詳細を入力</button>


		<div class="row block1"></div>
		<div class="row block2"></div>
		<div class="row block1"></div>
		<div class="row block2"></div>
		<div class="row block1"></div>
		<div class="row block2"></div>
		<div class="row block1"></div>
		<div class="row block2"></div>
		<input type="hidden" name="id" value="test">

		<!-- begin 経路の詳細設定フォーム -->
		<div class="modal_path" style="display: none;">
			<div class="row read_pics">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					  <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
					  <input name="userfile[]" type="file" multiple/><br />
					  <input type="submit" value="Send files" />

				</div>
			</div>
			<div class="row show_pics">
				
			</div>
			<div class="row maps">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					
				</div>				
			</div>			

		</div>
		</form>

		<!-- end 経路の詳細設定フォーム -->

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

		<script src="js/script.js"></script>
	</body>
</html>