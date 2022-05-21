
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Appointment History</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Search Appointment History</h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="search">
      <table class="table table-hover">
      <thead>
        <tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Catagory of Doctor</th>
					<th>Name of Doctor</th>
					<th>Problem description</th>
        </tr>
      </thead>
      <tbody id="output">
        
      </tbody>
    </table>
    </div>
    <div class="col-sm-3">
    </div>
  </div>
</div><script type="text/javascript">
  $(document).ready(function(){
    $("#search").keypress(function(){
      $.ajax({
        type:'POST',
        url:'serback.php',
        data:{
          name:$("#search").val(),
        },
        success:function(data){
          $("#output").html(data);
        }
      });
    });
  });
</script>
</body>
</html>