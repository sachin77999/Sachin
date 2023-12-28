<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark">
       
          <ul class="navbar-nav">
            <li class="nav-item">
           <a class="nav-link text-light" href="/">Locations</a>
            </li>      
          </ul>
         
      </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                <form method="POST" action="/locations/store">
                 @csrf
                 <div class="form-group">
                   <label for="subcounty">SubCounty</label>
                   <input type="text" name="subcounty" id="subcounty" class="form-control" /> 
                   @if($errors->has('subcounty'))
                   <span class="text-danger">{{ $errors->first('subcounty') }}</span>
                   @endif
                </div>

                    <div class="form-group">
                     <label for="division">Division</label>
                     <input type="text" name="division" id="division" class="form-control" /> 
                    </div>

                        <div class="form-group">
                          <label for="location">Location</label>
                          <input type="text" name="location" id="location" class="form-control" /> 
                        </div>
                            <div class="form-group">
                            <label for="sublocation">Sub Location</label>
                           <input type="text" name="sublocation" id="sublocation" class="form-control" /> 
                            </div>
                            <div class="form-group">
                                <label for="villages">Villages</label>
                               <input type="text" name="villages" id="villages" class="form-control" /> 
                            </div>

                            
                      <input type="submit" name="submit" class="btn btn-dark" value="Submit">
                </form>
                </div>
            </div>
        </div>
        <h1>New Locations</h1>
    </div>
</body>
</html>