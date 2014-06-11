<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Online Clipbaord</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <style type="text/css">
  body {
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .navbar {
    margin-bottom: 20px;
  }
  </style>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>

     <div class="container">
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Online Clipboard</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/">Home</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
      <div class="jumbotron">
       <h1>Create New Clipping</h1>
       <form role="form" action="action.php" method="POST">
        <div class="form-group">
         <label for="clipping">Enter your text:</label>
         <textarea class="form-control" size="5" id="clipping" name="clipping" placeholder="Loren Ipsum"></textarea>
       </div>
       <button type="submit" class="btn btn-default">Submit</button>
     </form>
  </div>
<<<<<<< HEAD
  <?php include 'get.php'; ?>
=======
  <? php //include('get.php'); ?>
>>>>>>> 1f154d366da033cc3c57851c1f5a1d0883b1dd37
</div><!-- /.container -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    function processData(){
        var clipping = $("#clipping").val();

    }
    $('form').submit(processData);
    </script>
  </body>
  </html>
