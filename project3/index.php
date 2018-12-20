<!DOCTYPE html>
<html>
    <head>
    <h1>Equations</h1>
    <script src="scripts.js?v=<?php rand(0,100); ?>"></script>
    <link rel="stylesheet" type="text/css" href="styles.css?v=<?php rand(0,100); ?>">
    </head>

    <body>
      
      
      <h2> Area of a circle</h1>
      Radius: <input type="text" id="radius1" name="radius1" />
      <br>
      <button onclick="areaOfCircle()">Solve</button>
      <br>
      Result: <span id="circleArea"></span>
       
       
      <h2> Volume of a sphere</h1>
      Radius: <input type="text" id="radius2" name="radius2" />
      <br>
      <button onclick="volumeOfSphere()">Solve</button>
      <br>
      Result: <span id="sphereVolume"></span>
       
       
      <h2> Volume of a cube</h1>
      Edge: <input type="text" id="edge" name="edge" />
      <br>
      <button onclick="volumeOfCube()">Solve</button>
      <br>
      Result: <span id="cubeVolume"></span>

    </body>
</html>