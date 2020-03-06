<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('profile/css/bootstrap.min.css')}}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('profile/css/mdb.min.css')}}">

  <!-- Your custom styles (optional) -->
  <style>
    .card.card-cascade .view.gradient-card-header {
            padding: 1.1rem 1rem;
        }

        .card.card-cascade .view {
            box-shadow: 0 5px 12px 0 rgba(0, 0, 0, 0.2), 0 2px 8px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>

<body class="fixed-sn white-skin">

  <!-- Main Navigation -->
  
  <!-- Main Navigation -->

  <!-- Main layout -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card card-cascade narrower">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                <h5 class="mb-0 font-weight-bold">Profile</h5>
              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-img-top card-body-cascade text-center mb-4">
                <img src="{{asset($user->member->avatar)}}" width="300px;" alt="User Photo" class="z-depth-1 mb-3 mx-auto" />

                <p class="text-muted"><small>Profile photo will be changed automatically</small></p>

                <div class="form-group row">
                  <label for="memberName" class="offset-3 col-lg-2 col-form-label">Name:</label>
                  <div class="col-lg-4">
                  <p class="">{{$user->name}}</p>                    
                  </div>
                </div>

                <div class="form-group row">
                  <label for="memberName" class="offset-3 col-lg-2 col-form-label">Email:</label>
                  <div class="col-lg-4">                                      
                    <p class="">{{$user->email}}</p>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="memberName" class="offset-3 col-lg-2 col-form-label">Address:</label>
                  <div class="col-lg-4">                                      
                    <p class="">{{$user->member->address}}</p>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="memberName" class="offset-3 col-lg-2 col-form-label">Gender:</label>
                  <div class="col-lg-4">                                      
                    <p class="">{{$user->member->gender}}</p>
                  </div>
                </div>

                <div class="row flex-center">
                  <button class="btn btn-info btn-rounded btn-sm">Edit Profile</button><br>
                  <button class="btn btn-danger btn-rounded btn-sm">Delete</button>
                </div>
              </div>
              <!-- Card content -->

      </div>
      </div>
    </div>

  </div>
  <!-- Main layout -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card card-cascade narrower">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                <h5 class="mb-0 font-weight-bold">Edit Account</h5>
              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-body-cascade text-center">

                <!-- Edit Form -->
                <form>
                  <!-- First row -->

                  <div class="row">

                    <!-- First column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="form1" class="form-control validate" value="Company, inc" disabled>
                        <label for="form1" data-error="wrong" data-success="right">Company</label>
                      </div>
                    </div>
                    <!-- Second column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="form2" class="form-control validate">
                        <label for="form2" data-error="wrong" data-success="right">Username</label>
                      </div>
                    </div>
                  </div>
                  <!-- First row -->

                  <!-- First row -->
                  <div class="row">
                    <!-- First column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="form81" class="form-control validate">
                        <label for="form81" data-error="wrong" data-success="right">First name</label>
                      </div>
                    </div>

                    <!-- Second column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="form82" class="form-control validate">
                        <label for="form82" data-error="wrong" data-success="right">Last name</label>
                      </div>
                    </div>
                  </div>
                  <!-- First row -->

                  <!-- Second row -->
                  <div class="row">

                    <!-- First column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="email" id="form76" class="form-control validate">
                        <label for="form76">Email address</label>
                      </div>
                    </div>
                    <!-- Second column -->

                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="form77" class="form-control validate">
                        <label for="form77" data-error="wrong" data-success="right">Website Address</label>
                      </div>
                    </div>
                  </div>
                  <!-- Second row -->

                  <!-- Third row -->
                  <div class="row">

                    <!-- First column -->
                    <div class="col-md-12">
                      <div class="md-form mb-0">
                        <textarea type="text" id="form78" class="md-textarea form-control" rows="3"></textarea>
                        <label for="form78">About me</label>
                      </div>
                    </div>
                  </div>
                  <!-- Third row -->

                  <!-- Fourth row -->
                  <div class="row">
                    <div class="col-md-12 text-center my-4">
                      <input type="submit" value="Update Account" class="btn btn-info btn-rounded">
                    </div>
                  </div>
                  <!-- Fourth row -->

                </form>
                <!-- Edit Form -->

              </div>
              <!-- Card content -->

            </div>
      </div>
    </div>
    
  </div>
  

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="{{ asset('profile/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('profile/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('profile/js/bootstrap.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('profile/js/mdb.min.js')}}"></script>
  <!-- Custom scripts -->
  <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

  </script>
</body>

</html>
