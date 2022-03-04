 <!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php if(isset($page_title)) echo $page_title;  ?></title>  
       <!-- icons  -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
       <style>
              *{ box-sizing: border-box;}
              body{margin: 0;padding:0;font-family: Arial, Helvetica, sans-serif;}
              header
              {
               background-color: #ee0548;
               position: fixed;
               top: 0;
               left: 0;
               right: 0;
               padding: 30px 10px;
               display: flex;
               justify-content: space-between;
               align-items: center;
               z-index: 10000;
            
       }
       .heading .logo
       {
              
               margin-left: 80px;
       }
       .heading .logo a 
       {
         text-decoration: none;
         font-size: 30px;
         color: #fff;
         font-family:Verdana, Geneva, Tahoma, sans-serif;
       }
       .heading .translater 
       {
             
              margin-right: 80px;
              display: flex;
              align-items: center;
              justify-content: center;
       }
       .translater .text 
       {
              text-decoration: none;
              color: #fff;
              font-size: 2rem;
              margin-right: 20px;
              text-transform: capitalize;
              font-family:Verdana, Geneva, Tahoma, sans-serif;

       }
       .translater #lang 
       {
              color: #fff;
              font-size: 32px;
       }
       
@media(max-width:1080px)
       {
        .heading .logo
       {
               /* background-color: wheat; */
               margin-left: 60px;
       }
       .heading .logo a 
       {
        font-size: 30px;
       }
       .heading .translater 
       {
              /* background-color: #fff; */
              margin-right: 60px;
       }
       .translater .text 
       {
              text-decoration: none;
              color: #fff;
              font-size: 2rem;
              margin-right: 10px

       }
       .translater #lang 
       {
              
              font-size: 32px;
       }

 }
 @media(max-width:720px)
       {
        .heading .logo
       {
               margin-left: 30px;
       }
       .heading .logo a 
       {
        font-size: 20px;
       }
       .heading .translater 
       {
              margin-right: 20px;
       }
       .translater .text 
       {
        font-size: 1.5rem;
       }
       .translater #lang 
       {
       
              font-size: 22px;
       }

 }
   @media(max-width:420px)
       {
        .heading .logo
       {
               margin-left: 10px;
       }
       .heading .logo a 
       {
        font-size: 13px;
       }
        .heading .translater 
       {
              margin-right: 10px;
       } 
       .translater .text 
       {
              font-size: 15px;
              margin-right: 10px
       }
       .translater #lang 
       {       
              font-size: 15px;
       }

    
       
 }
 @media(max-width:280px)
       {
         header 
         {
              padding: 20px 10px;
         }
        .heading .logo
       {
               margin-left: 0px;
       }
       .heading .logo a 
       {
        font-size: 10px;
       }
       .heading .translater 
       {
              margin-right: 1px;
       }
       .translater .text 
       {
              font-size: 8px;
              margin-right: 3px
       }
       
 }
</style>
</head>
<body>
       
   <header class="heading">
          <div class="logo"><a href="http://localhost/projects_who_is_jesuschrist/view/index.php"><?php if(isset($logo)) echo $logo;  ?></a></div>
          <div class="translater">
                 <a href="#" class="text" id="text">translate</a>
                 <div id="translate" style="display: none;"></div>
                 <a href="#" id="toggle"><i class="fa-solid fa-language" id="lang"></i></a>
          </div>
   </header>


   <!-- google translatoro API -->

   <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   
   <script>
   function googleTranslateElementInit()
    {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'translate');
    }

   const translate = document.getElementById("translate");
   const btn = document.getElementById("toggle");
   const txt = document.getElementById("text");
   btn.onclick = function()
   {
          if(translate.style.display !== "block")
          {
                 translate.style.display = "block";
                 translate.style.marginRight = "20px";

                 txt.style.display = "none";
          }
          else 
          {
                 translate.style.display = "none";
                 txt.style.display = "block";
          }
   };
   </script>
    
 

