<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
       <style>
              body
              {
               min-height: 100vh;
              }
          footer 
          {      
                 position:sticky;
                 bottom: 0; 
                 left: 0;
                 right: 0;  
                 top: 100%;
          }
          .footer-content 
          {  
                 display: flex;
                 align-items: center;
                 justify-content: center;
                 flex-direction: column;
                 text-align: center;
                 background-color: #ee0548;
          }
          .footer-content p 
          {
                 color: #fff;
                 text-transform: capitalize;
                 font-family: Arial, Helvetica, sans-serif;
                 margin-top: 20px;
                 word-spacing: 2px;
          }
          .footer-content p span 
          {
                 color:aqua;
          }
          .footer-bottom 
          {
                 width: 100%;
                 display: flex;
                 align-items: center;
                 justify-content: space-between;
                 background-color:#ee0548;   
          }
          .footer-bottom p
          {      
                 color: #fff;
                 margin-left: 12px;
                 font-size: 12px;
                 text-transform: capitalize;
          }
          .footer-bottom p a 
          {
                 color: #fff;
                 font-size: 12px;
                 text-decoration:none;
          }
          .footer-menu ul 
          {
                 display: flex;
          }
          .footer-menu ul li 
          {
                 padding-right: 10px;
                 display: block;
          }
          .footer-menu ul li a 
          {
                 text-decoration: none;
                 color: #fff;
                 font-size: 12px;
          }
           @media (max-width:500px)
           {
                  .footer-menu ul 
                  {
                         display: flex;
                         margin-top: 5px;
                         margin-bottom: 10px;
                  }
           }
           @media (max-width:1080px)
           {
              .footer-content p 
                {
                 font-size: 12px;
                 max-width: 600px;
                 
              }
           }
           @media (max-width:720px)
           {
              .footer-content p 
                {
                 font-size: 10px;
                 max-width: 300px;
                 
              }
              .footer-menu ul 
                  {
                         display: flex;
                         margin-top: 5px;
                         margin-bottom: 10px;
                  }
                  .footer-menu ul li a 
                {
                 font-size:10px;
                }
           }
           @media (max-width:450px)
           {
              .footer-content p 
                {
                 font-size: 8px;
                 max-width: 300px;
                 
              }
                  .footer-menu ul li a 
                {
                 font-size:7px;
                }
           }
           @media (max-width:360px)
           {
              .footer-content p 
                {
                 font-size: 6px;
                 max-width: 250px;
                 
              }
              .footer-bottom p 
              {    
                 font-size: 5px;
              }
              .footer-bottom p a 
              {
              font-size: 6px;
               }
               .footer-menu ul li a 
                {
                 font-size:6px;
                }
           }

           .socials
           {
                     list-style: none;
                     display: flex;
                     align-items: center;
                     justify-content: center;
                     /* margin: 1rem 0 3rem 0; */
          }

        .socials li
        {
          margin: 0 15px;
        }

       .socials a
       {
       text-decoration: none;
       color: #fff;
       }

     .socials a i
     {
     font-size: 20px;
     width: 10px;
     transition: color .4s ease;
    }

   .socials a:hover i
   {
    color: aqua;
   }
       </style>
</head>
<body>
<footer>

 <div class="footer-content">
        <p>jesus christ is only the way, the truth &  the life. no one come to the father except through <span>JESUS</span></p>
        <ul class="socials">
                    <li><a href="https://www.linkedin.com/in/praveen-k-52b957221/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/PraveenAndrew" target="_blank"><i class="fa-brands fa-github-square"></i></i></a></li>

        </ul>
 </div>
 <div class="footer-bottom">
        <div>
         <p>copyright &copy;2022 <a href="#">praveen k</a></p>
        </div>
        <div class="footer-menu">
               <ul class="f-menu">
                      <li><a href="#">About us</a></li>
                      <li><a href="http://localhost/projects_who_is_jesuschrist/controller/privacy&policy.php">Privacy Policy</a></li>
                      <li><a href="http://localhost/projects_who_is_jesuschrist/controller/terms&condition.php">Terms of Services</a></li>
               </ul>
        </div>
  </div>
</footer>
<body>
</html>