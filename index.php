<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Country State City JavaScript, PHP Library</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Country, State, City</h1>
    <br />
    <form id="csv" action="index.html" method="post">

      <div class="form-group">
        <label for="country">Country</label>
        <select class="form-control" name="country" id="country"></select>
      </div>

      <div class="form-group">
        <label for="state">State</label>
        <select class="form-control" name="state" id="state"></select>
      </div>

      <div class="form-group">
        <label for="city">City</label>
        <select class="form-control" name="city" id="city"></select>
      </div>

      <button type="submit" name="button" class="btn btn-primary">Submit</button>
    </form>



  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="csc.js"></script>
  <script type="text/javascript">
  $('#csv').submit(function(event) {
    event.preventDefault();
    $country = $('#country option:selected').text();
    $state = $('#state option:selected').text();
    $city = $('#city option:selected').text();
    alert("Country: " + $country + " State: " + $state + " City: " + $city);
  });
  </script>

</body>
</html>
