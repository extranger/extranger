<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">
    <style type="text/css">
    body {
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }
    .starter-template {
      padding: 40px 15px;
      text-align: center;
    }
    .form-input {
      max-width: 800px;
      padding: 15px;
      margin: 0 auto 20px;
      background-color: #fff;
      border: 1px solid #e5e5e5;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
      -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
      box-shadow: 0 1px 2px rgba(0,0,0,.05);
    }
    .form-input .form-input-heading{
      margin-bottom: 10px;
      text-align: center;
    }
    .form-input .form-control {
      position: relative;
      font-size: 16px;
      width : 100px;
      height: auto;
      padding: 10px;
      -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
              box-sizing: border-box;
    }
    .form-input .form-control:focus {
      z-index: 2;
    }
    .form-input input[type="text"] {
      margin-bottom: -1px;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }
    .parent_div {
        height:50px;
        margin: 0 auto;
        margin-bottom: 10px;
        background-color: #fff;
    }
    .child_div{
        margin-left: 20px;
        margin-right:20px;
        float:left;
    }
    .rem_div{
        margin-top:10px;
        float:left;
    }
    .img_container {
        float:left;
        margin-right:0 auto;
        max-width:100%;
        max-height:100%;
    }
    .form-btn {
        text-align:center;
        margin: 0 auto;
        margin-top:10px;
        margin-bottom:10px;
    }


    </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<!-- 
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      <!-- </div> -->
    <!-- </div> -->

    <div class="container">
      <div class="starter-template">
        <h1>CS4221 Project Group po4</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>
      <div class="container">
      <form class="form-input" action="<?php echo base_url() ?>index.php/bernstein/output" method="post">
        <h2 class="form-input-heading">Input Funtional Dependency Below</h2>

        <div id="parent" class="form-input">
          <div id="block_1" class="parent_div">
            <div class="child_div">
              <input type="text" class="form-control" placeholder="ABC" autofocus name="left_input_1">
            </div>
            <img class="img_container" src="<?php echo base_url() ?>assets/img/arrow.jpg" alt="dependency">
            <div class="child_div">
              <input type="text" class="form-control" placeholder="DEF" autofocus name="right_input_1">
            </div>
            <div class="rem_div"><a href="#" class="remove_block">Remove</a></div>
          </div>
        </div>

        <div class="form-btn"><button id="addBtn" class="btn btn-large btn-default">ADD</button></div>
        <div class="form-btn"><button class="btn btn-large btn-primary" type="submit">OK</button></div>

      </form>
     </div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script type="text/javascript" src="<?php echo base_url() ?>assets/js/add_btn.js"></script>
  </body>
</html>
