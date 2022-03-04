<?php $logo = "MARK"?>
<?php include_once "../partials/fab.php";?>
<?php include_once "../partials/header.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <style>
              .gospel 
              {      
                     margin: auto;
                     max-width: 800px;
                     text-align: center;
                     padding-top:6rem;
              }
              .verse 
              {
                 text-align: left;
                 font-style: oblique;
                 word-spacing: 2px;
                 padding: 12px;
                
              }
              .chapter 
              {
                     text-transform: uppercase;
              }
       </style>
</head>
<script>
       function getMark()
       {
              var x = new XMLHttpRequest();
              x.open("GET","mark.json",false);
              x.send();
              if(x.readyState == 4 && x.status == 200)
              {
                     var r = x.responseText;
                     var o = JSON.parse(r);
                     var data = "";
                     for(var i=0;i<o.length;i++)
                     {
                           if(o[i]["chapter"] == 1 || o[i]["chapter"] == 2 ||o[i]["chapter"] == 3  || o[i]["chapter"] == 4 || o[i]["chapter"] == 5 || o[i]["chapter"] == 6 || o[i]["chapter"] == 7 || o[i]["chapter"] == 8 || o[i]["chapter"] == 9 || o[i]["chapter"] == 10 ||
                           o[i]["chapter"] == 11 || o[i]["chapter"] == 12 ||o[i]["chapter"] == 13  || o[i]["chapter"] == 14 || o[i]["chapter"] == 15 || o[i]["chapter"] == 16)
                           {
                              data +=  '<h3 class="chapter">chapter: '+o[i]["chapter"]+' </h3>';
                           }
                           data +=   '<p class="verse"> '+o[i]["verse"]+' . '+o[i]["text"]+' </p>';


                     }
                     document.getElementById('show').innerHTML = data;
              }
       }
</script>
<body onload="getMark()">
<div id="show" class="gospel"></div>

</body>
</html>

<?php include_once "../partials/footer.php";?>