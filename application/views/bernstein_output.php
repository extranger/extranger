<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Le styles -->
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
  </head>

  <body>
    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Result</h1>
        <p>This is the set of funtional dependencies .</p>
        <div class="span12">
        <?php
            $data0 = explode("#", $step0);
            for($i=0; $i < count($data0) - 1; $i++) {
              echo '<p>'.$data0[$i].'</p>';
            }
        ?>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-sm-6 col-md-3" style="background-color:#f7f5fa;padding:10px;margin:30px">
          <h2>Step 1</h2>
          <p>Eliminate extraneous attributes. </p>
          <?php
              $data1 = explode("#", $step1);
              for($i=0; $i < count($data1) - 1; $i++) {
                echo '<p>'.$data1[$i].'</p>';
              }
          ?>
        </div>
        <div class="col-sm-6 col-md-3" style="background-color:#f7f5fa;padding:10px;margin:30px">
          <h2>Step 2</h2>
          <p>Finding covering.  </p>
          <?php
              $data2 = explode("#", $step2);
              for($i=0; $i < count($data2) - 1; $i++) {
                echo '<p>'.$data2[$i].'</p>';
              }
          ?>
       </div>
        <div class="col-sm-6 col-md-3" style="background-color:#f7f5fa;padding:10px;margin:30px">
          <h2>Step 3</h2>
          <p>Partition. </p>
          <?php
              $data3 = explode("#", $step3);
              for($i=0; $i < count($data3) - 1; $i++) {
                echo '<p>'.$data3[$i].'</p>';
              }
          ?>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-6 col-md-3" style="background-color:#f7f5fa;padding:10px;margin:30px">
          <h2>Step 4</h2>
          <p>Merge equivalent keys. </p>
          <?php
              $data4 = explode("#", $step4);
              for($i=0; $i < count($data4) - 1; $i++) {
                echo '<p>'.$data4[$i].'</p>';
              }
          ?>
        </div>
        <div class="col-sm-6 col-md-3" style="background-color:#f7f5fa;padding:10px;margin:30px">
          <h2>Step 5</h2>
          <p>Eliminate transitive dependencies. </p>
          <?php
              $data5 = explode("#", $step5);
              for($i=0; $i < count($data5) - 1; $i++) {
                echo '<p>'.$data5[$i].'</p>';
              }
          ?>
        </div>
        <div class="col-sm-6 col-md-3" style="background-color:#f7f5fa;padding:10px;margin:30px">
          <h2>Step 6</h2>
          <p>Construct relations. </p>
          <?php
              $data6 = explode("#", $step6);
              for($i=0; $i < count($data6) - 1; $i++) {
                echo '<p>'.$data6[$i].'</p>';
              }
          ?>
        </div>
      </div>

      <hr>


    </div> <!-- /container -->
  </body>
</html>