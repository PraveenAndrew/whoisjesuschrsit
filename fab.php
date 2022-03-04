<!DOCTYPE html>
<html lang="en">
<head>
  <!-- icons  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
         .fab 
         {
                position:fixed;
                bottom:50px;
                right: 50px;
                z-index:1000;
         }
         .btn 
         {
                display: inline-flex;
                height: 60px;
                padding: 10px;
                background: #FF416C;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #FF4B2B, #FF416C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                border-radius: 90px;
                outline: none;
                border: none;
              
        }
         .btn_text, .btn_icon 
         {
                display: inline-flex;
                align-items: center;
                padding:0 8px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: 600;
                font-size: 20px;
                color: #fff;
                height: 100%;
                cursor: pointer;
         }
         .btn_icon
         {
                font-size: 2.5em;
         }
         .fab-icon-holder 
         {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                background-color: darkred;
         }
         .fab-icon-holder i 
         {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100%;
                font-size: 25px;
                color: #fff;
         }
         .fab-icon-holder:hover 
         {
                opacity: 0.8;
         }
         .fab-icon-holder a 
         {
                text-decoration: none;
         }
     
         .fab-options 
         {
                list-style-type: none;
                position: absolute;
                bottom:44px;
                right: 0;          
                transition: all 0.3s ease;
                transform: scale(0);
                transform-origin: 85% bottom;
                opacity: 0;
              
           }
           .fab-options li 
           {
                  padding: 5px;
                  display: flex;
                  justify-content: flex-end;
           }
           .fab-label 
           {
                  padding: 4px 10px;
                  align-self: center;
                  white-space: nowrap;
                  border-radius: 3px;
                  font-size: 10px;
                  text-transform: capitalize;
                  background: #666666;
                  color: #fff;
                  margin-right: 10px;
                  box-shadow: 0 6px 20px rgba(0,0,0,0.2);
           }
           #button:hover + .fab-options,.fab-options:hover
           {
                  opacity: 1;
                  transform: scale(1);
           }
           @media (max-widht:1080)
           {
              .btn 
             {
                display: inline-flex;
                height: 35px;
                padding: 5px;
             }
              .fab 
             {
                position:fixed;
                bottom:50px;
                right: 30px;
             }
             .fab-icon-holder i 
            {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100%;
                font-size: 15px;
                color: #fff;
         }
             .btn_text, .btn_icon 
         {
               
                padding:0 3px;
                font-weight: 500;
                font-size: 20px;
            }
            .btn_text
            {
                   font-size: 12px;
            }
            .btn_icon
         {
                font-size: 1.5em;
         }
           }

           @media (max-width:768px)
           {
              
              .btn 
           {
                display: inline-flex;
                height: 55px;
                padding: 18px;
              
           }
              .fab 
             {
                position:fixed;
                bottom:100px;
                right: 30px;
             }
             .fab-icon-holder i 
            {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100%;
                font-size: 15px;
                color: #fff;
         }
             .btn_text, .btn_icon 
         {
               
                padding:0 3px;
                font-weight: 500;
                font-size: 20px;
            }
            .btn_text
            {
                   font-size: 12px;
            }
            .btn_icon
         {
                font-size: 1.5em;
         }
           }
           @media (max-width:380px)
           {
           
                  .btn_text
                  {
                         display: none;
                  }
                  .fab 
                  {
                   position:fixed;
                   bottom:100px;
                   right: 30px;
               }
               .btn 
               {     
                      height: 50px;
                      padding: 20px;
               }
               .fab-options 
         {
                list-style-type: none;
                position: absolute;
                bottom:34px;
                right: 0;          
                transition: all 0.3s ease;
                transform: scale(0);
                transform-origin: 85% bottom;
                opacity: 0;
              
           }
           }
           
           
  </style>
</head>
<body>
      
  <div class="fab">
     <button class="btn" id="button">
             <span class="btn_icon" id="fab">
                  <i class="fa-solid fa-person-praying"></i>
             </span>
             <span class="btn_text" id="pray">prayer request</span>
     </button>
               <ul class="fab-options">
                 <li>
                 <span class="fab-label">googleform</span>
                    <div class="fab-icon-holder">
                   <a href="https://docs.google.com/forms/d/e/1FAIpQLSdUCWgM00f9VF4JLMNKGCk2Q8ZzYiziciUQKMbferKj9K70Sg/viewform?usp=pp_url" target="_blank">  <i class="fa-brands fa-wpforms"></i></a>
                    </div>
                </li>
                <li>
                <span class="fab-label">email</span>
                   <div class="fab-icon-holder">
                  <a href="mailto:praveenandrew2020@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i></a>
                   </div>
                </li>
               <li>
               <span class="fab-label">phonecall</span>
                   <div class="fab-icon-holder">
                     <a href="tel:+919087965764" target="_blank"> <i class="fa-solid fa-phone"></i></a>
                  </div>
              </li>
              <li>
              <span class="fab-label">whatsapp</span>
                   <div class="fab-icon-holder">
                   <a href="https://wa.me/919087965764" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                 </div>
              </li>
          </ul>
  </div>

       <script>
          var mybutton = document.getElementById("pray");
          window.onscroll = function() {scrollFunction()};
          function scrollFunction() 
        {
          if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10)
           {
               mybutton.style.display = "none";
           }
            else
             {
             mybutton.style.display = "block";
             mybutton.style.display = "inline-flex";
             }
        } 
     </script> 
</body>
</html>