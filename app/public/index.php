<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  </br>
  <div class="container col-md-4 border border-primary rounded">
    <h2>Please, type your informations.</h2>
    <form id="form-test" method="post">
      <div class="form-group col-md-12">
        <label for="inputName">Name</label>
        <input type="name" class="form-control" id="inputName" placeholder="Enter your name" required>
      </div>
      <div class="form-group col-md-12">
        <label for="inputEmail">Email address</label>
        <input type="name" class="form-control" id="inputEmail" placeholder="Enter email" required>
      </div>
      <div class="form-group col-md-8">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
      </div>
      <div class="form-group col-md-12">
        <label for="description">Description</label>
        <textarea type="name" class="form-control" id="inputDescription" placeholder="Description" rows="3"></textarea>
      </div>
      <small class="form-text text-muted">We'll never share your informations with anyone else.</small>
      <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
    </form>
    </br>
  </div>
</body>
<script type="text/javascript">
  $('#form-test').submit(function (e) {
      e.preventDefault();     

      let name = $('#inputName').val(); 
      let email = $('#inputEmail').val(); 
      let password = $('#inputPassword').val(); 
      let description = $('#inputDescription').val();

      let formData = {'name':name, 'email':email, 'pswd':password, 'desc':description};

      $.ajax({
          type: "POST",
          url: 'server.php',
          data: formData, 
          success: function(response){
            alert('response',response); 
          },
          error: function (request, status, error) {
            alert(request);
          }
      });       
    });  
</script>

</html>
