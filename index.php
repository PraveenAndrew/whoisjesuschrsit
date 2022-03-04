<?php $page_title = "who is jesus - HOME PAGES" ?>
<?php $logo = "WHO IS JESUS CHRIST" ?>
<?php include_once "../partials/header.php"; ?> 
<?php include_once "../partials/fab.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title></title>
       <!-- favicons -->
       <link rel="icon" href="../images/faviconcross.png" type="image/png"> 
       <style>
              *
              {
	       box-sizing: border-box;
	       transition: .3s linear;
              }
              *::selection
              {
	       background:red;
	       color: #fff;
              }
             
              /* text style */
              .hero 
             {
	       /* background: whitesmoke; */
	       padding: 150px 0;
              }
           .hero_container
            {
	       display: flex;
	       flex-direction: column;
	       justify-content: center;
	       align-items: center;
	       max-width: 1200px;
	       margin: 0 auto;
	       height: 90%;
	       text-align: center;
	       padding: 30px;
             }
           .hero_heading
            {
	     font-size: 40px;
	     margin-bottom: 14px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            }
           .hero_heading span 
            {
	     color: tomato;
            }
           .hero_description
            {
	      font-size: 40px;
             font-family: 'Times New Roman', Times, serif;
             font-weight: bolder;
            }
          .main_btn
           {   
	     font-size: 1.4rem;
            font-style: italic;
	     padding: 15px 30px;
	     border: none;
	     border-radius: 7px;
	     color: #fff;
	    cursor: pointer;
	    transition: all 0.3s;
	    outline: none;
	    background: #ee0979;  /* fallback for old browsers */
           background: -webkit-linear-gradient(to right, #ff6a00, #ee0979);  /* Chrome 10-25, Safari 5.1-6 */
           background: linear-gradient(to right, #ff6a00, #ee0979); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          }
        .main_btn a 
         {
	  position: relative;
	  z-index: 2;
	  color: #fff;
         font-family: cursive;
	  text-decoration: none;
         }
         .main_btn:hover
         {
         transform: scale(1.1);
         }
        @media(max-width: 720px)
        {
              .hero 
              {
	       padding: 120px 0;
              }
	      .hero_heading
	       {
		font-size: 30px;
              font-weight: 500;
	       }
	      .hero_description
	       {
		font-size: 30px;
              margin-top: 10px;
	       }
              .main_btn
              {   
	       font-size: 1rem;
	        padding: 10px 20px;
               }
             }

     @media(max-width: 360px)
       {
              .hero 
              {
	       padding: 100px 0;
              }
	      .hero_heading
	       {
		font-size: 20px;
              line-height: 40px;
	       }
	      .hero_description
	       {
		font-size: 20px;
	       }
              .main_btn
           {   
	     font-size: 1rem;
	     padding: 10px 20px;
            }
       }

       /* 6 container box style */

       .text-center
       {
	text-align: center;
	padding: 90px;
       }
       .text-center h1
       {
              color: red;
              font-size: 35px;
              font-family: Verdana, Geneva, Tahoma, sans-serif;
              font-weight: 800;
              text-transform: uppercase;
       }
      .step-container .box-container
       {
	display: flex;
	justify-content: center;
	align-items: center;
	flex-wrap: wrap;
      }
     .box-container .step 
      {
	flex:1 1 30rem;
       background: #ee0979;  /* fallback for old browsers */
       background: -webkit-linear-gradient(to right, #ff6a00, #ee0979);  /* Chrome 10-25, Safari 5.1-6 */
       background: linear-gradient(to right, #ff6a00, #ee0979); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
       padding: 20px;
	margin: 10px;
	text-align: center;
	border-radius: 10px;
       overflow: hidden; 
       position: relative;
}

   .step-container .step h3
   {
	color: #fff;
	font-size: 20px;
       text-align: center;
	letter-spacing: 2px;
       font-family: sans-serif;
       text-transform: uppercase;
       font-weight: 500;
     
   }
   .box-container .step span 
   {   
	display: block;
	text-align: right;
       color: #fff;
	font-style: italic;
   }
   .step-container  .box-container .step .info
  {
       position:absolute;
       top:0;
       left: 0;
       background: rgba(255,255,255,.8);
       width: 100%;
       height: 100%;
       display: flex;
       justify-content: center; 
       align-items:center; 
       flex-direction: column;
       text-align: center;

       /* remove the info div */
       transform: scale(1.3); 
        opacity: 0;
   }   
     .step-container .box-container .step:hover .info 
    {
       transform: scale(2);
       opacity: 1;
       cursor: pointer;
    }
   .box-container .step .info .box_btn
    {
       color:darkred;
       border:1px solid red;
       font-size: 10px;
       padding: 4px 12px;
       border-radius: 2px;
       font-style: italic;
       background-color: #fff;
       color: #ee0979;
       font-weight: 800;
       text-decoration: none;
    }
    @media(max-width: 720px)
    {
       .text-center h1
       {
             
              font-size: 25px;
              line-height: 40px;
            
       }
       .box-container .step 
      {
       padding: 8px;
	margin: 8px;
       
      }
      .step-container .step h3
     {
	font-size: 15px;
     }
     .box-container .step span 
     {   
	
       font-size: 7px;
   }
    }
    @media(max-width: 360px)
    {
       .text-center h1
       {
             
              font-size: 16px;
              line-height: 30px;
            
       }
       .box-container .step 
      {
       padding: 5px;
	margin: 15px;
       
      }
      .step-container .step h3
     {
	font-size: 12px;
     }
   .box-container .step span 
   {   
       font-size: 7px;
   }
}


/* gospel for jesus */

.post-container
{
       display: flex;
       align-items: center;
       justify-content: center;
       flex-wrap: wrap;
}
.post-container .post 
{
       width: 300px;
       background-color: #fff;
       margin: 0 auto;
       padding-bottom: 60px;
}
 .post-container .post .image img 
 {
       height: 250px;
       width: 100%;
       object-fit: cover;
       object-position: center;
       cursor: pointer;
}
 /* .post-container .post .content 
{
       padding: 0 20px;
} */

.post-container .post .content .title
{
  font-weight: 600;
  font-size: 18px;
  color:darkred;
  padding-top: 5px;
  text-decoration: none;
}
.post-container .post .content p 
{
       font-size: 16px;
       color: #ee0979;
       font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
       word-spacing: 3px;
}

.post-container .post .content .link
{      
       text-decoration: none;
       color: #fff;
       display: block;
       width: 100%;
       background-color: darkred;
       text-align: center;
       padding: 8px 0;
       border-radius: 4px;
       cursor: pointer;
       text-transform: lowercase;
       border: 2px solid orangered;
       font-family:Verdana, Geneva, Tahoma, sans-serif;
} 
.link:hover
        {
        transform: scale(1.1);
        }
.jesus 
{
        /* background-color: #ff6a00; */
       color: #fff;
       background: #ee0979;  /* fallback for old browsers */
       background: -webkit-linear-gradient(to right, #ff6a00, #ee0979);  /* Chrome 10-25, Safari 5.1-6 */
       background: linear-gradient(to right, #ff6a00, #ee0979); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
       padding: 3px;
       text-align: center;
       text-transform: uppercase;
}

/* life of jesus  */

   /* .videoforchrist
   {
	 padding: 2rem;
    } */
 .videoforchrist .lifeofjesus
{
	display: flex;
	justify-content: center;
	align-items: center;
	flex-wrap: wrap;

}
.videoforchrist .lifeofjesus .videos 
{
	flex: 1 1 30rem;
	background:#fff;
	padding: 5px;
	margin: 5px;
	text-align: center;
       border: 0;
	border-radius: 2rem;
	/*background: red;*/
	/* box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .9); */
}
video 
{
	width: 400px;
	height: 300px;
}
.lifeofjesus .videos p 
{
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;
       text-transform: capitalize;
       font-weight: 200;
       color: darkred;
}

@media(max-width: 360px)
{
	video
	{
		width: 300px;
	}
}


/* accorditon frequently asked question */

.accordition .faq_accordion
{
	max-width: 1200px;
	margin: auto;
}

.accordition summary 
{
	font-size: 25px;
	font-weight: 600;
	font-family: monospace;
	background:#ee0979;
	color: #fff;
	padding: 18px;
	margin-bottom: 15px;
	outline: none;
	border-radius: 4px;
	text-align: left;
	cursor: pointer;
	position: relative;
}
.faq_accordion .faq_content
{
	padding: 10px;
       background: #ee0979;  /* fallback for old browsers */
       background: -webkit-linear-gradient(to right, #ff6a00, #ee0979);  /* Chrome 10-25, Safari 5.1-6 */
       background: linear-gradient(to right, #ff6a00, #ee0979); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	margin: 3px;
}
.faq_accordion .faq_content p 
{
	font-size: 20px;
	font-style: italic;
       text-transform: capitalize;
	font-family: monospace;
	color: #fff;
	text-align: left;

}
details > summary::after
{
	position: absolute;
	content: "+";
	right: 20px;

}
details[open] > summary::after
{
	position: absolute;
	content: "-";
	right: 20px;
}
details[open] summary ~ *
{
	animation: sweep .5s ease-in-out;
}
@keyframes sweep
{
	0% 
	{
		opacity: 0;
		margin-top: -10px;
	}
	100% 
	{
		opacity: 1;
		margin-top:0px ;
	}
}
 </style>
</head>
<body>
     
   <!-- text container -->

     <div class="hero" id="home">
 	  <div class="hero_container">
 	 	 <h1 class="hero_heading">Everybody it has Question in Our <span>Heart </span>?</h1>
 	 	 <p class="hero_description">He is God  or  Man </p>
 	 	 <button class="main_btn"><a href="http://localhost/projects_who_is_jesuschrist/controller/jcisgodorman.php" target="_blank">Click Here to Read More </a></button>
 	  </div>
     </div>

     <!-- 6 container box -->

     <section class="step-container"> 
              <!-- heading -->
              <div class="text-center">
              <h1>what the bible say about JESUS CHRIST ?</h1>
              </div>
   
          <div class="box-container">    
              <!-- box 1 -->
              <div class="step">
                 <h3>JESUS is god</h3>
                 <span>philippians 2:6</span>
                 <div class="info">
                   <a href="http://localhost/projects_who_is_jesuschrist/controller/jcisgod.php" target="_blank" class="box_btn">click to read</a>
                 </div> 
              </div>
              <!-- box 2 -->
              <div class="step">
                 <h3>JESUS is doing good</h3>
                 <span>acts 10:38</span>
                 <div class="info">
                   <a href="http://localhost/projects_who_is_jesuschrist/controller/jcdogood.php" target="_blank" class="box_btn">click to read</a>
                 </div> 
              </div>
              <!-- box 3 -->
              <div class="step">
                <h3>JESUS is healer</h3>
                <span>mathew 4:24</span>
                <div class="info">
                   <a href="http://localhost/projects_who_is_jesuschrist/controller/jcishealer.php" target="_blank" class="box_btn">click to read</a>
                 </div> 
              </div>
              <!-- box 4 -->
              <div class="step">
                <h3>JESUS is saviour</h3>
                <span>acts 4:12</span>
              <div class="info">
                   <a href="http://localhost/projects_who_is_jesuschrist/controller/jcissaviour.php" target="_blank" class="box_btn">click to read</a>
                 </div> 
              </div>
              <!-- box 5 -->
              <div class="step">
                <h3>JESUS is redeemer</h3>
                <span>luke 1:71</span>
              <div class="info">
                   <a href="http://localhost/projects_who_is_jesuschrist/controller/jcisredeemer.php" target="_blank" class="box_btn">click to read</a>
                 </div> 
              </div>
              <!-- box 6 -->
              <div class="step">
                 <h3>JESUS is forgiveness</h3>
                <span>luke 5:20</span>
              <div class="info">
                   <a href="http://localhost/projects_who_is_jesuschrist/controller/jcisforgiveness.php" target="_blank" class="box_btn">click to read</a>
                 </div> 
              </div>
         </div>
       </section>

         <!-- GOSPEL FOR JESUS CHRIST -->

       <section class="step-container"> 
              <!-- heading -->
              <div class="text-center">
              <h1>Gospel for  JESUS CHRIST </h1>
              </div>
 
       <div class="post-container">

              <!-- pic 1 -->
              <div class="post">
                     <div class="image">
                            <!-- <img src="images/mathew.jpg" alt="pic1" > -->
                            <img src="../images/mathew.jpg" alt="server prblm">
                     </div>
                     <div class="content">
                           
                            <a href="#" class="title">MATHEW</a>
                            <p>mathew was show <span class="jesus">Jesus</span>  like a king into the judah people</p>
                            <a href="http://localhost/projects_who_is_jesuschrist/model/mathew.php" target="_blank" class="link">read more </a>
                     </div>
              </div>
              <!-- pic 2-->
              <div class="post">
                     <div class="image">
                            <img src="../images/mark.jpg" alt="server prblm" >
                     </div>
                     <div class="content">
                           
                            <a href="#" class="title">MARK</a>
                            <p>mark was show <span class="jesus">jesus</span>  like servant of god into the roman people</p>
                            <a href="http://localhost/projects_who_is_jesuschrist/model/mark.php" target="_blank" class="link"> Read More</a>
                     </div>
              </div>

              <!-- pic 3 -->

              <div class="post">
                     <div class="image">
                            <img src="../images/luke.jpg" alt="server prblm">
                     </div>
                     <div class="content">
                           
                            <a href="#"  class="title">LUKE</a>
                            <p>luke was show <span class="jesus">JESUS</span>  like a son of man into the greek people</p>
                            <a href="http://localhost/projects_who_is_jesuschrist/model/luke.php" target="_blank" class="link"> Read More</a>
                     </div>
              </div>

              <!-- pic 4 -->

              <div class="post">
                     <div class="image">
                            <img src="../images/john.jpg" alt="server prblm" >
                     </div>
                     <div class="content">
                         
                            <a href="#"  class="title">JOHN</a>
                            <p>john was show <span class="jesus">jesus</span>  like a son of god into the all people</p>
                            <a href="http://localhost/projects_who_is_jesuschrist/model/john.php" target="_blank" class="link"> Read More</a>
                     </div>
              </div>
     </div>
</section>

        <!-- LIFE OF JESUS  -->

         <section class="videoforchrist">
                <!-- heading -->
                 <div class="text-center">
                  <h1>LIFE OF JESUS CHRIST </h1>
                 </div>         
       
                <div class="lifeofjesus">
         
                     <div class="videos">
                     <video  controls autoplay poster="../video/poster/birthofjesus.jpg">
                            <source src="../video/JesusChristBirth.mp4" type="video/mp4">
                     </video>
                     <p> birth of jesus christ</p>
                     </div>
                     <div class="videos">
                     <video autoplay controls poster="../video/poster/jesuswalkingonthewater.jpg">
                            <source src="../video/JesusChristWalkingOnWater.mp4" type="video/mp4">
                     </video>
                     <p>jesus christ walking on the water</p>
                     </div>
                     <div class="videos">
                     <video autoplay controls poster="../video/poster/miracleofjesus.jpg">
                            <source src="../video/JesusChristMiracle.mp4" type="video/mp4">
                     </video>
                     <p>miracle of jesus christ</p>
                     </div>
                     <div class="videos">
                     <video autoplay controls poster="../video/poster/jesussufferingonthecross.jpg">
                            <source src="../video/JesusChristSufferingOnTheCross.mp4" type="video/mp4">
                     </video>
                     <p>jesus christ suffering on the cross</p>
                     </div>
                     <div class="videos">
                     <video autoplay controls poster="../video/poster/jesusresurrection.jpg">
                            <source src="../video/JesusChristResurrection.mp4" type="video/mp4">
                     </video>
                     <p>resurrection of jesus christ</p>
                     </div>
                     <div class="videos">
                     <video autoplay controls poster="../video/poster/Second_Coming.jpg">
                            <source src="../video/SecondComingOfJesusChrist.mp4" type="video/mp4">
                     </video>
                     <p>second coming of jesus christ</p>
                     </div>
               </div>
         </section>


         <!-- frequently question asked -->

         <section class="accordition">
                  <div class="text-center">
                     <h1>Frequently ASked Questions</h1>
                 </div>     
  
                     <div class="faq_accordion">
                            <details open>
                                   <summary>what is trinity god</summary>
                                   <div class="faq_content">
                                   <p>father, son, holy spirit are god and lord. father, son, holy spirit are one.
                                      one are father, son, holy spirit. we will see that father, son, holy spirit are individual person in bible. <span>(luke 1:35,3:22, II-corinthians 13:14, john 14:16)</span>
                                      three person are being truth. but god one and lord one said in bible. <span>(mark 12:29,ephesians 4:6)</span>
                                      "THE OPINION THAT HUMAN BEINGS CANNOT UNDERSTAND ABOUT THE TRINITY GOD"
                                   </p>
                                   </div>
                            </details>

                            <details>
                                   <summary>who is father</summary>
                                   <div class="faq_content">
                                   <p>god is a spirit being . no man hath seen god at any time. <span>(john 1:18)</span>
                                     father only hath immortality dwelling in the light which no man can approach unto; whom no man hath see,
                                     nor can see; <span>(I-timothy 6:16)</span>
                                     {YHWH}
              
                            </p>
                                   </div>
                            </details>

                            <details>
                                   <summary>who is son</summary>
                                   <div class="faq_content">
                                    <p>JESUS is son of god <span>(john 3:16)</span>
                                     and JESUS is one of the god among three. JESUS had been being in before world creation <span>(genesis 1:3)</span>  
                                    </p>
                                   </div>
                            </details>

                            <details>
                                   <summary>who is holy spirit</summary>
                                   <div class="faq_content">
                                   <p>holy spirit is god among threee. he is person  <span>(ephesians 4:30)</span>
                                     holy spirit is a comforter <span>(john 14:16)</span>
                                     he always dwell inside the human being.
                                   </p>
                                   </div>
                            </details>
                     </div>
              </section>
   
 <?php include_once "../partials/footer.php"; ?> 
       
</body>
</html>