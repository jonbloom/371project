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
       <form role="form">
        <div class="form-group">
         <label for="clipping">Enter your text:</label>
         <textarea class="form-control" size="5" id="clipping" name="clipping" placeholder="Loren Ipsum"></textarea>
       </div>
       <button type="submit" class="btn btn-default">Submit</button>
     </form>
   </div>
   <div id="clips"></div>
 </div><!-- /.container -->
 <script src="https://code.jquery.com/jquery.min.js"></script>
 <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 $(document).ready(function(){
  loadClips();
 });
 function validate(){
  var clipping = $("#clipping").val();
  if (!clipping){
    alert("You must enter some text to store.");
  } else {
    processData();
  }
 }

 function del(clip){
  var id = $(clip).data('id');
  $.ajax({
    type: "POST",
    url: "delete.php",
    data: { id: id }
  })
  .done(function(  ) {
    $("#clips").load("get.php");
    $("#clipping").val("");
    loadClips();
  });
 }

 function loadClips(){
  $("#clips").load("get.php");
 }

 $('button').on('click',validate);
 function processData(){
  var clipping = $("#clipping").val();
  $.ajax({
    type: "POST",
    url: "action.php",
    data: { clipping: clipping }
  })
  .done(function() {
    $("#clipping").val("");
    loadClips();
  });
}
</script>
</body>
</html>
