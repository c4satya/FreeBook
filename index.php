<?php 
session_start();
include("./backend/connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Landing Page</title>
</head>
<body>
    <div class="cta">
        <div class="headNav">
            <div class="logo ">
                   <h1><b class="logo1">Free</b><b class="logo2">Book</b></h1>
                    <h4 class="logo3">A Digital Book Bank</h4>
            </div>
            
            <div class="navBar">            
                <a><img src="./instaIcon.png" alt="instaIcon" class="navIcons"></a>
                <a><img src="./facebookIcon.png" alt="facebookIcon" class="navIcons"></a>
                <a><img src="linkedIn.png" alt="linkedInIcon" class="navIcons"></a>
                <a><img src="./tweeter.png" alt="tweeterIcon" class="navIcons"></a>
                <a href="./login.php"><button class="loginbtn">Login</button>
                <a href="./backend/logout.php">Log Out</a>
            </div>
        </div> 
        <div class="navBtns">
            <button class="navBtn"><a href="#Gallary">Gallary</a></button>
            <button class="navBtn"><a href="#Feedbacks">Feedbacks</a></button>
           <button class="navBtn"><a href="#SearchBooks">Search Book</a></button>
            <button class="navBtn"><a href="#Articles">Articles</a></button>
           <button class="navBtn"><a href="#Testimonails">Testimonails</a></button>
           <button class="navBtn"><a href="#AboutUs">About Us</a></button>
        </div >
        <div class="donateSection"> 
           <div class="donateTxt"><h1>Donate A Book</h1><h1>And Inspire Someone to Learn</h1><h3>A book donation is a     small act of kindness that can make a big difference</h3>
           </div>
            <a href="./DonateBook.php">
           <div>
            <button class="donateBtn" type="submit">Donate <img src="./bookDonateLogo.png" alt="bookDonateLogo"></button>
           </div></a>
        </div>
    </div>
    <div class="searchBook" >
        <a name="SearchBooks"></a>
        <h1 >Search A Book</h1>
        <div class="SearchContainer">     
                <div >
                    <img class="searchVectorImg" src="./SearchImage.png" alt="This is an image">
                </div>
                <div class="SearchBtns">                
                    <button class="filterBtn">FILTER <img align="right" src="./filterIcon.png" alt=""></button>
                    <input type="text" class="SearchBtn" placeholder="Enter Book name/Sr.No"><button type="submit" class="SearchBtn">Search<img align="right" src="./SearchIcon.png" alt=""></button>
                </div>
        </div> 
    </div>
    <div class="testimonialSection" >
        <a name="Testimonails">  </a>
        <h1 class="testimnlHeader">Testimonails</h1>
         <div class="testimonails">
           <fieldset class="testmnl Card1">
                  <legend><img src="./nancy.jpg" alt=""></legend>
                <div>
                    <h3>nancy</h3>
                    <h4>Londan University</h4>
                    <p>
                        
    "Amazing resource! FreeBook has been a lifesaver for me during exam season. The selection is extensive, and the platform is user-friendly. Highly recommended!"
                    </p>
                </div>
           </fieldset >
           <fieldset  class="testmnl Card1">

            <legend> <img src="./klara.jpg" alt=""></legend>
             <div>
                 <h3>Klara</h3>
                 <h4>Cambridge University</h4>
                 <p>
                    "Great experience using FreeBook! I found all the textbooks I needed for my courses at free of cost. The rental process was smooth, and the customer service team was very helpful. Will definitely be using this service again!"
                    
                    
                 </p>
             </div>

           </fieldset>
           <fieldset class="testmnl Card3">
             <legend><img src="./david.jpg" alt=""></legend>
             <div>
                 <h3>David</h3>
                 <h4>SDE Google</h4>
                 <p>
                    "FreeBook is a game-changer for students! With their vast collection of books and easy rental system, studying has become much more convenient. Plus, the option to borrow used books at  free of cost. 5 stars!"
                 </p>
             </div>

           </fieldset>
        </div>   
    </div>
   
    <div class="gallery" >
        <a name="Gallary">  </a>
        <h1>Gallary</h1>
        <div class="imgContainer" align="center">
           
           <img src="./1.jpg" alt="this is image">
           <img src="./2.jpg" alt="this is image2">
           <img src="./3.jpg" alt="this is image3">           
           <img src="./4.jpg" alt="this is image4">
           <img src="./5.jpg" alt="this is image5">
           <img src="./6.jpg" alt="this is image6">          
        

       </div>
      
    </div>
  
    <div class="Feedbacks">
        <a name="Feedbacks">  </a>
        <h1>Feedbacks</h1>
        <p>
            "We value honest feedback from our clients. Your genuine review helps us understand your experience and improve our services. We appreciate your time and honesty in sharing your thoughts with us."
        </p>
      
            <textarea class="inputBox" placeholder="Write your query/review"></textarea> 
            <button  type="submit" class="QuerySubmitBtn">SUBMIT</button>
      
       
    </div>
    <a name="Articles"></a><div class="Articles">
         <h1 class="articleHead">Article&AMPNews</h1>
         <div class="newsCards">
            <div class="newsC1">
                <h2>Everything we know so far about Apple’s upcoming budget iPhone SE 4</h2>
                <p>It’s been a while since Apple updated its budget iPhone SE, and the last one looks a lot similar to its predecessor and the iPhone 8, which was introduced back in 2017. </p>
                <button>More&gt&gt</button>
            </div>
            <div class="newsC2">
                <h2>Education Budget 2024 Live Updates: More funding for institutes, ed-tech demands reduction in taxes
                </h2>
                <p>In the February edition of Union Budget 2024, the Finance Minister Nirmala Sitharaman had stressed that there has been an increase in higher educational institutes and women in...     </p>
                <button>More&gt&gt</button>
           </div>

         </div>
          
         <div class="impLinks">
            <h2>Important Links</h2>
            <ul>
                  <li>  <a href="http://www.reduceimages.com/">Image Resize</a></li>
                  <li>  <a href="http://jpg2pdf.com/">Image to Pdf Converter</a></li>
                  <li>  <a href="https://ssc.nic.in/portal/results">SSC Results</a></li>
                  <li>  <a href="https://www.jacresults.com/">JAC Results</a></li>
                  <li>  <a href="https://results.cbse.nic.in/">CBSE Results</a></li>
                  <li>  <a href="https://jharkhanduniversities.nic.in/">Chancellor Portal</a></li>
            </ul> 
         </div>

    </div>
    
    <div class="AboutUs">
     
        <div class="aboutUs">
            <div class="logo ">
                <h1><b class="logo1">Free</b><b class="logo2">Book</b>   <a name="AboutUs"></a></h1>
            </div>  
            
            <div class="footerAddress">
               <h3>MCIT,Gour Bhaban,Bompass</h3> 
                <h3>Town Deoghar, 804112</h3>
                <h3>Phone: +91 8756-621035</h>                    
                  <h3>Email: contact@freebook.com</h3>
            </div>
              
               
       
        </div>
        <div class="JoinUs">
            <h1>Join Our Community</h1>
            <h2>Promotes Free Education for All</h2>
            <div class="emailContainer">
               <input class="inputEmail" type="email" placeholder="Enter Your Email Address"><button class="emailSubmitBtn" type="submit">JoinUs</button>
            </div>
        </div>
        <div class="footerLinks">
                 <h2>Useful Links</h2>
                 <ul >
                   <li> <a href="">AboutUs</a></li>
                   <li><a href="">New&Articles</a></li>
                   <li><a href="">Contact Us</a></li>
                   <li><a href="">Site Map</a></li>
                   <li><a href="">Privacy Policy</a></li>
                </ul>   
        </div>


    </div>
    <footer>
        <h3>
            © Copyright 2024 VidyaBookBank Inc. All rights reserved
            </h3>
    </footer>
    
</body>
</html>