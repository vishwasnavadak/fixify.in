<!DOCTYPE html>
<html>
<head>
  <title>Fixify</title>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css" >
  <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="img/fixify.png" alt="logo"></a>
    </div>
    <ul class="nav navbar-nav navbar-right ">
      <li><a href="login"><i class="fa fa-sign-in"></i>  LOGIN</a></li>
      <li><a href="#"><i class="fa fa-group"></i>  PARTNERS</a></li>
      <li><a href="#"><i class="fa fa-info"></i>  ABOUT US</a></li>
      <div class=" pull-right navbar-form">
                <div class="input-group hidden-search">
                    <input required type="text" class="form-control hidden-input" placeholder="Search" style="display:none;">
                    <div class="input-group-btn">
                        <button class="btn" id="search-button" onclick="searchClicked()"><i class="fa fa-search"></i>  SEARCH</button>
                    </div>
                </div>
        </div>
    </ul>
  </div>
</nav>
<div id="heroWrapper">
  <div id="typing">
    <span id="caption"></span>
    <span id="cursor">|</span>
  </div>
  <div id="search">
    <input type="text" class="form-control" placeholder="Let us know your problem..">
    <button class="btn btn-lg" onclick="searchClicked()">Submit</button>
  </div>
  <div id="heroInner" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img id="img1" src="img/grey-laptop.png" alt="laptop" height="180" width="275">
      </div>
      <div class="item">
        <img id="img2"src="img/cpu.png" alt="cpu" height="280" width="200">
      </div>
      <div class="item">
        <img id="img3"src="img/combo.png" alt="cpu" height="300" width="350">
      </div>
    </div>
  </div>
</div>
<div id="section1">
  <div id="section1Inner" class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="innerWrapper">
          <img src="img/bulb.png" alt="innovation" >
          <h2>INNOVATION</h2>
          <p>We see the world differently. We aim higher, dream bigger and explore further. We try to make everything 10x better than anything ever done before.</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="innerWrapper">
          <img src="img/growth.png" alt="growth" >
          <h2>GROWTH</h2>
          <p>We solve problems differently. We combine knowledge, passion and technology to drive innovation and set new benchmarks for excellence.</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="innerWrapper">
          <img src="img/online.png" alt="online" >
          <h2>TECHNOLOGY</h2>
          <p>We do things differently. We don’t stop at success, we always ask ‘what next?’ so we can change the game and keep on winning. Yes that's it.. We win.. Always win</p>
        </div>
      </div>
    </div>
  </div>
  <div id="about" class="us">
    <h2>ABOUT US</h2>
    <div id="vision">
      <h4>We at fixify are aiming to change the world from a more complicated and entangled life to a simplified one. We’re part of your community, so we really care about your computer productivity and happiness.</h4>
    </div>
  </div>
</div>

<form action="index.html" method="post">
  <input type="hidden" name="complaint">
</form>

<script src="js/jquery.js"></script>
<script src="js/scripts.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(".hidden-search").hover(function(){
        $(".hidden-input").toggle("slow");
    });
</script>
</body>
</html>
