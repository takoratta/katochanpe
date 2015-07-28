<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>我が家の防災計画メーカー</title>

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

<?php
  $count = count($_FILES['userfile']['name']);
  for ($i=0; $i<$count; $i++) {
    if (is_uploaded_file($_FILES["userfile"]["tmp_name"][$i])) {
      $image_name = sprintf('%03d', $i). "-" .$_FILES["userfile"]["name"][$i];
      if (move_uploaded_file($_FILES["userfile"]["tmp_name"][$i], "files/".$image_name)) {
        chmod("files/". $image_name, 0644);
        $img_arr[$i] = $image_name;
      } else {
        // echo "ファイルをアップロードできません。<br>";
      }
    } else {
      // echo "ファイルが選択されていません。<br>";
    }
  }
?>
　
　<body>
  <div class="jumbotron">
      <h1>我が家の防災計画メーカー</h1>
  </div>
  <form action="result.php" method="post" enctype="multipart/form-data">

  <ul class="nav nav-pills nav-justified">
    <li role="presentation"><a href="index.html">なにかおきるまえに</a></li>
    <li role="presentation" class="active"><a href="#">なにかおきたら</a></li>
  </ul>


<div class="container-fluid">
<!-- checklist start -->
<table class="table">
  <thead>
    <tr>
      <th>そろえておくもの</th>
    </tr>
  </thead>
  <tbody>
    <?php for($i = 0; $i < count($_POST["checklist"]); $i++ ) { ?>
    <tr class="active">
      <td><?php echo $_POST["checklist"][$i]; ?></td>
    </tr>
    <?php } ?>

  </tbody>
</table>
<!-- checklist end-->


<!-- contact start -->
<table class="table">
  <thead>
    <tr>
      <th>いちばんさいしょのれんらくさき</th>
    </tr>
  </thead>
  <tbody>
    <tr class="active">
      <td><?php echo $_POST['tel'] ?></td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead>
    <tr>
      <th>ほかのれんらくさき</th>
    </tr>
  </thead>
  <tbody>
    <?php for($i = 0; $i < count($_POST["contact"]); $i++ ) { ?>
    <tr class="active">
      <td><?php echo $_POST["contact"][$i]; ?></td>
    </tr>
    <?php } ?>

  </tbody>
</table>


<!-- evacuation photo  -->

<table class="table">
  <thead>
    <tr>
      <th>ひなんさきみちじゅん</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td colspan="4">
        <img src="img/path_sample.png" alt="" style="width: 50%; margin: 0 auto; display: block;">
      </td>
    </tr>
   
    <tr>
        <?php for ($i=0; $i<$count; $i++) { ?>

        <td>
        <img src="./files/<?php echo $img_arr[$i] ?>" width="200px" class="img-full img-thumbnail"> <br/>
        <?php echo $i+1;?>.  <?php echo $_POST["imagetext"][$i]; ?><br/>
        </td>
        <?php if ($i % 4 == 3) { ?>
        </tr>
        <tr>
        <?php } ?>

    <?php } ?>
    </tr>
    </tbody>
    </table>

<!-- evacuation photo end -->

<!-- evacuation -->
<table class="table">
  <thead>
    <tr>
      <th>ほかのひなんばしょ</th>
    </tr>
  </thead>　
  <tbody>
    <?php for($i = 0; $i < count($_POST["evacuation"]); $i++ ) { ?>
    <tr class="active">
      <td><?php echo $_POST["evacuation"][$i]; ?></td>
    </tr>
    <?php } ?>

  </tbody>
</table>
<!-- evacuation end -->

</div>

    <div class="row" style="text-align: center">
      <input type="button" class="btn btn-primary btn-lg" value="印刷する" onclick="window.print();" />
    </div>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
  </body>
</html>