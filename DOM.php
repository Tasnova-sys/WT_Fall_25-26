<!DOCTYPE html>
<html>
<head>
    <title>DOM </title>  
</head>
<body>

<h1 id="pagetitle">LIGHT MODE</h1>
<button id="SWITCHmotion"onclick ="toggle()">Switch</button>
    <script>
        function toggle()
        {
            var body =document.body;
            var title=document.getElementById("pagetitle")
       var button=document.getElementById("SWITCHmotion")



        
if(body.style.backgroundColor==="black")

{    body.style.backgroundColor="white";

    title.style.color="black";

    title.innerHTML="LIGHT MODE";

    button.innerHTML="Switch to DARK MODE";

    
    }

    else
    {
        body.style.backgroundColor="black";

        title.style.color="white";

        title.innerHTML="DARK MODE";

        button.innerHTML="Switch to LIGHT MODE";
    }

        }
</script>
</body>
</html>