<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>{{$title}}</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/profile.css">
</head>
<body>
<div id="border-top"></div>
<div class="container" id="wrapper">
  <div id="section1">
    <a href="logout" title="Logout"><span class="fa fa-power-off"></span></a>
    <div id="part_a">
      @if(count($user->hasSocial))
        <img src="http://graph.facebook.com/{{$user->hasSocial->socialId}}/picture?type=large" alt="" />
      @else
        <img src="img/default_user.png" alt="" />
      @endif
      <div id="belowDP">
        <div class="info-strip">
          <i>Name</i>
          <span>{{$user->fName}} {{$user->lName}}</span>
        </div>
        <div class="info-strip">
          <i>Email</i>
          <span>{{$user->email}}</span>
        </div>
        <div class="info-strip">
          <i>ID</i>
          <span>{{$user->id}}</span>
        </div>
      </div>
    </div>
    <div id="part_b">

      <center><h3>Personal Information</h3></center>
      <hr>
    </div>
  </div>
  <div id="section2" class="section">
    <span class="panel-title">Your Devices</span>
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-success">
          <div class="panel-heading">
            Device 1
            <span class="fa fa-check-circle"></span>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-info">
          <div class="panel-heading">
            Device 2
            <span class="fa fa-question-circle"></span>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-danger">
          <div class="panel-heading">
            Device 3
            <span class="fa fa-times-circle"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="section3" class="section">
    <span class="panel-title">Section 2</span>
    <div class="panel panel-primary">
      <div class="panel-heading">Section 2 heading</div>
      <div class="panel-body">
        <span style="height:200px;">Section 2 body</span>
      </div>
    </div>
  </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/profile.js"></script>
</body>
</html>
