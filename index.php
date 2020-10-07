<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>foresics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body id="particles-js">
    <div class="header">
      <h1>FORENSIC DEPARTMENT</h1>
    </div>

   <div class="container">
   <form  action="bookstore.php" method="get">
          <div class="form-group">
            <label for="sel1" id="label">SELECT YEAR</label>
              <select class="form-control" name="year" id="sel1">
                <option value="1">I-YEAR</option>
                <option value="2">II-YEAR</option>
                <option value="3">III-YEAR</option>
                <option value="4">IV-YEAR</option>
              </select>
            <br>
            <label for="sel2" id="label">SELECT SEMISTER</label>
              <select class="form-control" name="sem" id="sel2">
                <option value="1">I-SEMISTER</option>
                <option value="2">II-SEMISTER</option>
              </select>
          </div>
    <input type="submit" value="Submit" id="button" class="btn btn-success" >
  </form>

  </div>
  <script type="text/javascript" src="bg/particles.js"></script>
  <script type="text/javascript" src="bg/app.js"></script>


  </body>
</html>
