<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button id="b" >change background</button>
<script>
    let b1=document.getElementById("b")
    b1.addEventListener('click',change)
    function change(){
        var letters="0123456789ABCDEF"
        var color="#"
        for(var i=0;i<6;i++){
            var r=math.floor(math.random()*16)
            color=color+letters[r]
        }
        document.body.style.backgroundcolor=color
    }
    </script>
</body>
</html>