<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>circle Progress bar test</title>
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <div class="card">
        <div class="circle">
          <div class="bar"></div>
          <div class="box"><span></span></div>
        </div>
        <div class="text">Tin Can</div>
      </div>
      <div class="card js">
        <div class="circle">
          <div class="bar"></div>
          <div class="box"><span></span></div>
        </div>
        <div class="text">Plastic</div>
      </div>
      <div class="card react">
        <div class="circle">
          <div class="bar"></div>
          <div class="box"><span></span></div>
        </div>
        <div class="text">Coins</div>
      </div>

      <div>
        {{ dd($compute)}}
      </div>
        {{-- <input name= 'val' type="hidden" value= {{ dd($compute) }}> --}}
    </div>
    <script>

      let options = {
        startAngle: -1.55,
        size: 150,
        value: 0.1,
        fill: {gradient: ['#a445b2', '#fa4299']}
      }
      $(".circle .bar").circleProgress(options).on('circle-animation-progress',
      function(event, progress, stepValue){
        $(this).parent().find("span").text(String(stepValue.toFixed(2).substr(2)) + "%");
      });
      $(".js .bar").circleProgress({
        value: 0.70
      });
      $(".react .bar").circleProgress({
        value: 0.60
      });
    </script>
  </body>
</html>