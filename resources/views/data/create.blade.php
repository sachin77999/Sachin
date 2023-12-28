<?php

?>

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script/getData.js"></script>
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
                <form method="POST" action="/locations/store/data">
                 @csrf
                 <div class="form-group">
                   <label for="fullnames">FUll Names</label>
                   <input type="text" name="fullnames" id="fullnames" class="form-control" /> 
                   @if($errors->has('fullnames'))
                   <span class="text-danger">{{ $errors->first('fullnames') }}</span>
                   @endif
                </div>

                    <div class="form-group">
                     <label for="nickname">Nick Name</label>
                     <input type="text" name="nickname" id="nickname" class="form-control" /> 
                    </div>


                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input type="text" name="gender" id="gender" class="form-control" /> 
                       </div>

                       <div class="form-group">
                        <label for="occupation">Occupation</label>
                        <input type="text" name="occupation" id="occupation" class="form-control" /> 
                       </div>

                        {{-- <div class="form-group">
                          <label for="workplace">WorkPlace</label>
                          <input type="text" name="workplace" id="workplace" class="form-control" /> 
                        </div> --}}

                        <div class="form-group">
                            <label for="phonesafaricom">Phone Safari Com</label>
                            <input type="text" name="phonesafaricom" id="phonesafaricom" class="form-control" /> 
                          </div>

                          <div class="form-group">
                            <label for="phoneairtel">Phone Airtel</label>
                            <input type="text" name="phoneairtel" id="phoneairtel" class="form-control" /> 
                          </div>

                          <div class="form-group">
                            <label for="idno">ID NO</label>
                            <input type="number" name="idno" id="idno" class="form-control" /> 
                          </div>

                          <div class="form-group">
                            <label for="facebookid">Facebook Id</label>
                            <input type="text" name="facebookid" id="facebookid" class="form-control" /> 
                          </div>

                          <div class="form-group">
                            <label for="ageset">Age Set</label>
                            <input type="text" name="ageset" id="ageset" class="form-control" /> 
                          </div>

                          {{-- <div class="form-group">
                            <label for="positionnominated">Position Nominated</label>
                            <input type="text" name="positionnominated" id="positionnominated" class="form-control" /> 
                          </div>

                          <div class="form-group">
                            <label for="ward">Ward</label>
                            <input type="text" name="ward" id="ward" class="form-control" /> 
                          </div> --}}

                          {{-- <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" name="location" id="location" class="form-control" /> 
                          </div>

                          <div class="form-group">
                            <label for="sublocation">Sub Location</label>
                            <input type="text" name="sublocation" id="sublocation" class="form-control" /> 
                          </div> --}}
                          {{-- <div class="form-group">
                            <label for="workplace">Workplace</label>
                            <input type="text" name="workplace" id="workplace" class="form-control" /> 
                          </div> --}}


                        <div class="form-group">
                           <label for="positionnominated">PositionNominated</label>
                           <select class="form-select" id="positionnominated" name="positionnominated">
                               @foreach($data as $row)
                                  <option value="{{ $row->positions }}">{{ $row->positions }}</option>
                               @endforeach   
                          </select>
                        </div>


                        {{-- <div class="form-group">
                            <label for="ward">Ward</label>
                            <select class="form-select" id="ward" name="location">
                                @foreach($data2 as $row)
                                   <option value="{{ $row->ward }}" data-sync="{{ $row->location }}">{{ $row->ward }}</option>
                                @endforeach   
                           </select>
                         </div> --}}

                         {{-- <div class="form-group">
                            <label for="location">Location</label>
                            <select class="form-select" id="location" name="location" onchange="updateDropdowns()">
                                @foreach($data2 as $row)
                                   <option value="{{ $row->location }}">{{ $row->location }}</option>
                                @endforeach   
                           </select>
                         </div>  --}}

                          {{-- <div class="form-group">
                            <label for="sublocation">Sub Location</label>
                            <select class="form-select" id="sublocation" name="sublocation">
                                @foreach($data2 as $row)
                                   <option value="{{ $row->sublocation }}">{{ $row->sublocation }}</option>
                                @endforeach   
                           </select>
                         </div> --}}

                         <div class="container  col-md-4 ">
                          <div class="form-group py-2">
                      
                              <label for="country"> Country</label>
                              <select class="form-select" id="country">
                                  <option value=""> Select Country</option>
                                 
                      
                              </select>
                          </div>
                          <div class="form-group py-2">
                              <label for="country"> State</label>
                              <select class="form-select" id="state">
                                  <option value="">select State</option>
                      
                              </select>
                          </div>
                          <div class="form-group py-2 ">
                              <label for="country"> City</label>
                              <select class="form-select" id="city">
                                  <option value="">select City</option>
                              </select>
                          </div>
                      </div>
                      

                         <div class="form-group">
                            <label for="village">Village</label>
                            <input type="text" name="village" id="village" class="form-control" /> 
                          </div>


                          <div class="form-group">
                            <label for="pollingstation">Polling Station</label>
                            <input type="text" name="pollingstation" id="pollingstation" class="form-control" /> 
                          </div>

                          <div class="form-group">
                            <label for="workplace">WorkPlace</label>
                            <select class="form-select" id="workplace" name="workplace">
                                @foreach($data2 as $row)
                                   <option value="{{ $row->subcounty }}">{{ $row->subcounty }}</option>
                                @endforeach   
                           </select>
                         </div>

                         <div class="form-group">
                            <label for="influenceother">Influence Other</label>
                            <input type="text" name="influenceother" id="influenceother" class="form-control" /> 
                          </div>
{{-- 
                          <div class="form-group">
                            <label for="influenceother">Influence Other</label>
                            <input type="text" name="influenceother" id="influenceother" class="form-control" /> 
                          </div> --}}

                          <div class="form-group">
                            <label for="nfluencelocality">N Fluence Locality</label>
                            <input type="text" name="nfluencelocality" id="nfluencelocality" class="form-control" /> 
                          </div>

                          <div class="form-group">
                            <label for="supportlevel">Support Level</label>
                            <input type="text" name="supportlevel" id="supportlevel" class="form-control" /> 
                          </div>

                          <div class="form-group">
                            <label for="remarks">Remarks</label>
                            <input type="text" name="remarks" id="remarks" class="form-control" /> 
                          </div>
                        
                        
                       
                            {{-- <div class="form-group">
                            <label for="sublocation">Sub Location</label>
                           <input type="text" name="sublocation" id="sublocation" class="form-control" /> 
                            </div> --}}
                            <div class="form-group">
                                {{-- <label for="villages">Villages</label>
                               <input type="text" name="villages" id="villages" class="form-control" /> 
                            </div> --}}
                      <input type="submit" name="submit" class="btn btn-dark" value="Submit">
                </form>
                </div>
            </div>
        </div>
        <h1>New Locations</h1>
    </div>
</body>
<script type="text/javascript">
//   window.onload=function() { 
//   document.getElementById("ward").onchange=function() {
//     document.getElementById("location").value=this.options[this.selectedIndex].getAttribute("data-sync");
//     document.getElementById("sublocation").value=this.options[this.selectedIndex].getAttribute("data-sync");
      
//   }
//   document.getElementById("ward").onchange(); // trigger when loading
// }
<script type="text/javascript">
    $(document).ready(function() {
    $("#country").on('change', function() {
        var countryid = $(this).val();

        $.ajax({
            method: "POST",
            url: "response.php",
            data: {
                id: countryid
            },
            datatype: "html",
            success: function(data) {
                $("#state").html(data);
                $("#city").html('<option value="">Select city</option');

            }
        });
    });
    $("#state").on('change', function() {
        var stateid = $(this).val();
        $.ajax({
            method: "POST",
            url: "response.php",
            data: {
                sid: stateid
            },
            datatype: "html",
            success: function(data) {
                $("#city").html(data);

            }

        });
    });
});
</script>
</script>
</html>