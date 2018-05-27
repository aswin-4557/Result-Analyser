<?php
    include("connection.php");
    include 'member.php';
    
    $grades = ['O[S]','A+','B+','B','C','P','F'];
    $subCode =  $_SESSION["csid"];
    $gradeCount = [];

    for($i=0;$i<sizeof($grades);$i++)
    {
        $query = "SELECT count(*) as c from mytable where $subCode = '$grades[$i]'";
        $result = $con->query($query);
        $count = mysqli_fetch_assoc($result);
        $num =  $count['c'];
        $gradeCount[$i] = $num;        
    }

?>
<html>
  <head>
    <script src="p5.min.js"></script>
  </head>
  <style>
  </style>
  <body bgcolor = "#0000">
  <input type="hidden" id="myPhpValue" value="<?php echo $myPhpValue ?>" />
  <div id="sketch-holder" align="center">
      <!-- Our sketch will go here! -->
    </div>
  </body>
</html>
<script>

var param = "<?php echo $gradeCount[0]; ?>";
var cnt = <?php echo json_encode($gradeCount); ?>;
var sum = 0, rectWid,color = [];
var grades = <?php echo json_encode($grades); ?>;

function setup()
{
    for(var i=0;i<cnt.length;i++)
        cnt[i] = parseInt(cnt[i]);
    var canvas = createCanvas(window.innerWidth/2, window.innerHeight);  
    canvas.parent('sketch-holder'); 
    for(var i=0;i<cnt.length;i++)
      sum = sum + cnt[i];
    rectWid = width/cnt.length;
    rectHgt = height/sum;
    for(var i=0;i<cnt.length;i++)
        color[i] = color(random(100,255), random(100,255), random(100,255));
}

function draw()
{
    background(0);
    noStroke();
    for(var i=0;i<cnt.length;i++)
    {
        fill(60, 50, 60);
        fill(color[i]);
        rect(i*rectWid,height,rectWid,-cnt[i]*rectHgt);
        textSize(width/20);
        text(grades[i],i*rectWid+width/50,height-cnt[i]*rectHgt-width/20);
        var a = (cnt[i]/sum)*100;
        text(round(a,4)+"%",i*rectWid+width/50,height-cnt[i]*rectHgt-width/10);  
    }
}

</script>