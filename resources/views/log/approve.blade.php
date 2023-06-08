<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		

(function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
        window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] 
                                   || window[vendors[x]+'CancelRequestAnimationFrame'];
    }
 
    if (!window.requestAnimationFrame)
        window.requestAnimationFrame = function(callback, element) {
            var currTime = new Date().getTime();
            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
            var id = window.setTimeout(function() { callback(currTime + timeToCall); }, 
              timeToCall);
            lastTime = currTime + timeToCall;
            return id;
        };
 
    if (!window.cancelAnimationFrame)
        window.cancelAnimationFrame = function(id) {
            clearTimeout(id);
        };
}());


(function() {

	// Get the buttons.
	var startBtn = document.getElementById('button');
  /*var resetBtn = document.getElementById('resetBtn');*/
	// A variable to store the requestID.
	var requestID;
	// Canvas
	var canvas = document.getElementById('canvas');
	// 2d Drawing Context.
	var ctx = canvas.getContext('2d');

	// Variables to for the drawing position and object.
	var posX = 0;
	var W = 246;
  var H = 60;
  var circles = []; 
  
  //Get canvas size
  canvas.width = 246;
  canvas.height = 60; 

	// Animate.
	function animate() {
		requestID = requestAnimationFrame(animate);
    //Fill canvas with black color
    //ctx.globalCompositeOperation = "source-over";
    ctx.fillStyle = "rgba(0,0,0,0.15)";
    ctx.fillRect(0, 0, W, H);

    //Fill the canvas with circles
    for(var j = 0; j < circles.length; j++){
      var c = circles[j];

      //Create the circles
      ctx.beginPath();
      ctx.arc(c.x, c.y, c.radius, 0, Math.PI*2, false);
          ctx.fillStyle = "rgba("+c.r+", "+c.g+", "+c.b+", 0.5)";
      ctx.fill();

      c.x += c.vx;
      c.y += c.vy;
      c.radius -= .02;

      if(c.radius < 0)
        circles[j] = new create();
    }
    
     
		
	}
  
 //Random Circles creator
      function create() {

        //Place the circles at the center

        this.x = W/2;
        this.y = H/2;


        //Random radius between 2 and 6
        this.radius = 2 + Math.random()*3; 

        //Random velocities
        this.vx = -5 + Math.random()*10;
        this.vy = -5 + Math.random()*10;

        //Random colors
        this.r = Math.round(Math.random())*255;
        this.g = Math.round(Math.random())*255;
        this.b = Math.round(Math.random())*255;
      }

      for (var i = 0; i < 500; i++) {
        circles.push(new create());
      }

	// Event listener for the start button.
	startBtn.addEventListener('mouseover', function(e) {
		e.preventDefault();

		// Start the animation.
		requestID = requestAnimationFrame(animate);
	});


	// Event listener for the stop button.
	startBtn.addEventListener('mouseout', function(e) {
		e.preventDefault();

		// Stop the animation;
		cancelAnimationFrame(requestID);
    
    e.preventDefault();

		// Reset the X position to 0.
		posX = 0;

		// Clear the canvas.
		ctx.clearRect(0, 0, canvas.width, canvas.height);

		// Draw the initial box on the canvas.
		ctx.fillRect(posX, 0, boxWidth, canvas.height);
    
	});
  
  
	/*// Event listener for the reset button.
	resetBtn.addEventListener('click', function(e) {
		e.preventDefault();

		// Reset the X position to 0.
		posX = 0;

		// Clear the canvas.
		ctx.clearRect(0, 0, canvas.width, canvas.height);

		// Draw the initial box on the canvas.
		ctx.fillRect(posX, 0, boxWidth, canvas.height);
	});*/


}());












	   

	</script>
	<style type="text/css"> html,body{
  heigth:100%;width:100%;min-height:100%;position:relative;oberflow:hidden;
  color:#fff;
}
body {
  background: #45484d; /* Old browsers */
  background: -moz-radial-gradient(center, ellipse cover,  #45484d 0%, #000000 100%); /* FF3.6+ */
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,#45484d), color-stop(100%,#000000)); /* Chrome,Safari4+ */
  background: -webkit-radial-gradient(center, ellipse cover,  #45484d 0%,#000000 100%); /* Chrome10+,Safari5.1+ */
  background: -o-radial-gradient(center, ellipse cover,  #45484d 0%,#000000 100%); /* Opera 12+ */
  background: -ms-radial-gradient(center, ellipse cover,  #45484d 0%,#000000 100%); /* IE10+ */
  background: radial-gradient(ellipse at center,  #45484d 0%,#000000 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#45484d', endColorstr='#000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
  text-align:center;
}
[class*="BT"]{width:250px;display:block;position:absolute;padding:0;border-color:#0e0e0e;margin:0 0 10px;line-height:6px;border-style:solid;left:50%;margin-left:-125px;height:60px;}
[class*="BT"] hover{position:absolute;z-index:5;width:246px;margin-left:-370px;  transition: all 0.3s ease-out 0s;    background: -moz-linear-gradient(45deg,  rgba(255,255,255,0) 0%, rgba(135,135,135,0.38) 50%, rgba(255,255,255,0) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,rgba(255,255,255,0)), color-stop(50%,rgba(135,135,135,0.38)), color-stop(100%,rgba(255,255,255,0))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(45deg,  rgba(255,255,255,0) 0%,rgba(135,135,135,0.38) 50%,rgba(255,255,255,0) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(45deg,  rgba(255,255,255,0) 0%,rgba(135,135,135,0.38) 50%,rgba(255,255,255,0) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(45deg,  rgba(255,255,255,0) 0%,rgba(135,135,135,0.38) 50%,rgba(255,255,255,0) 100%); /* IE10+ */background: linear-gradient(45deg,  rgba(255,255,255,0) 0%,rgba(135,135,135,0.38) 50%,rgba(255,255,255,0) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#00ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */  height:60px;margin-top:-30px;}
[class*="OH"]{overflow:hidden;}
[class*="BR"]{border-width:2px;}
[class*="R6"]{border-radius:6px;}
[class*="NF"]{background:transparent;}
[class*="BT"]:hover hover{  margin-left:123px;}
[class*="TU"]{text-transform:uppercase;}
[class*="PT"]{cursor:pointer;}
[class*="BT"] span{  position:absolute;  width:200px;  margin-left:-100px;  z-index:3;}
canvas{margin: 0;padding: 0;display:block;position:absolute;margin-top:-30px;} </style>
</head>
<body style="background-color: #DA70D6;">
	


	<br /><br /><br /> 


<br /><br /><br />
<p>
  <a href="selector/index.php"><button id="button" class="BT-OH-BR-R6-NF-FH-FP-TU-PT">
      <canvas id="canvas"></canvas> 
      <hover></hover>
      <span style="text-decoration-color: white;">Back To Index</span>
      
  </button></a>

</p>
<br /><br /><br /><br /><br /><br /><br /><br />




<!--<p><button class="BT-NF" type="button" id="resetBtn">Reset</button></p>-->

<h1>YOU ARE NOT APPROVED BY YOUR ADMIN YET!! PLEASE WAIT UNTIL YOU GET APPROVED!!! SEEYOU SOON</h1>
</body>
</html>