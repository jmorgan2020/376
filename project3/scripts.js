function areaOfCircle() {
    var radius1 = parseInt(document.getElementById("radius1").value);

    var result = radius1 * radius1 * Math.PI;

    document.getElementById("circleArea").innerHTML = result.toFixed(2);
}
        
function volumeOfSphere() {
    var radius2 = parseInt(document.getElementById("radius2").value);

    var result = 4/3 * Math.PI * radius2 * radius2 * radius2;

    document.getElementById("sphereVolume").innerHTML = result.toFixed(2);
}
        
function volumeOfCube() {
    var edge = parseInt(document.getElementById("edge").value);

    var result = edge* edge * edge;

    document.getElementById("cubeVolume").innerHTML = result;
}
