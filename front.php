<!DOCTYPE html>
<html>
    <head>
        <title>Covid Fundraising</title>
        <link rel="stylesheet" type="text/css" href="front.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    </head>
    <style type="text/css">
          
          
            .fade {
              -webkit-animation-name: fade;
              -webkit-animation-duration: 1.5s;
              animation-name: fade;
              animation-duration: 1.5s;
              }

            @-webkit-keyframes fade {
              from {opacity: .4} 
              to {opacity: 0.8}
              }

            @keyframes fade {
              from {opacity: .4} 
              to {opacity: 0.8}
              }

              .fade1{
                -webkit-animation-name: fade1;
                -webkit-animation-duration: 2.0s;
                animation-duration: 2.0s;
                animation-name: fade1;
              }
              @-webkit-keyframes fade1{
                from{
                    opacity: 0.2;
                }
                to{
                    opacity: 0.9;
                }
              }

              @keyframes fade1{
                from{
                    opacity: 0.2;
                }
                to{
                    opacity: 0.9;
                }

              }

              
    </style>
    <body>
        <div class="container">
           
            
            <div class="header">
            <header>
                <ul class="hdrlist">
                    <li><i class="fa fa-home" style="font-size: 30px;"></i><a href="#">Home</a></li>
                    <li><i class="fa fa-history" style="font-size: 30px;"></i><a href="history.php">Transactions</a></li>
                    <li><i class="fa fa-envelope" style="font-size: 30px;"></i><a href="suggestion.php">Suggest</a></li>
                    <li><i class="fa fa-money" style="font-size: 30px;"></i><a href="donate.php">Donate</a></li>
                </ul>
            </header>
            </div>
            <div class="bg" >


                <div class="mySlide fade1" style="background-image:url('img/c41.jpg');">
                    <h1>HELPING HANDS<br><img src="https://static.thenounproject.com/png/196653-200.png" style="width:120px; height: 120px;"><br>FOR COVID<br><span style="font-size: 40px;">Lets come together to fight #COVID19</span></h1>

                    <div class="card">
                        <h3>Noone Should Be Hungry</h3>
                        <h3>Vaccination For All</h3>
                        <h3>Provide All Needy Things </h3>
                        <h3>Help India Beat COVID19</h3>
                        
                    </div>
                </div>
                <div class="mySlide fade1" style="background-image:url('img/w1.jpg');">
                    <h1>HELPING HANDS<br><img src="https://static.thenounproject.com/png/196653-200.png" style="width:120px; height: 120px;"><br>FOR COVID<br><span style="font-size: 40px;">Lets come together to fight #COVID19</span></h1>

                    <div class="card">
                        <h3>Noone should be hungry</h3>
                        <h3>Everyone should get vaccinated</h3>
                        <h3>Provide all needy things </h3>
                        <h3>Help India Beat COVID19</h3>
                    </div>
                </div>
                <div class="mySlide fade1" style="background-image:url('img/w3.jpg');">
                    <h1>HELPING HANDS<br><img src="https://static.thenounproject.com/png/196653-200.png" style="width:120px; height: 120px;"><br>FOR COVID<br><span style="font-size: 40px;">Lets come together to fight #COVID19</span></h1>

                    <div class="card">
                        <h3>Noone should be hungry</h3>
                        <h3>Everyone should get vaccinated</h3>
                        <h3>Provide all needy things </h3>
                        <h3>Help India Beat COVID19</h3>
                    </div>
                </div>
                <div class="mySlide fade1" style="background-image:url('img/w2.jpg');">
                    <h1>HELPING HANDS<br><img src="https://static.thenounproject.com/png/196653-200.png" style="width:120px; height: 120px;"><br>FOR COVID<br><span style="font-size: 40px;">Lets come together to fight #COVID19</span></h1>

                    <div class="card">
                        <h3>Noone should be hungry</h3>
                        <h3>Everyone should get vaccinated</h3>
                        <h3>Provide all needy things </h3>
                        <h3>Help India Beat COVID19</h3>
                    </div>

                </div>


            </div>
        </div>
        <a id="container1"></a>
        <div class="container1">
          <div class="slide-container">
            <div class="slider fade" >
                <img src="img/c7.jpg" style="width:100%;">
            </div>
            <div class="slider fade">
                <img src="img/c6.jpg"style="width:100%;">
            </div>
            <div class="slider fade">
                <img src="img/c3.jpg"style="width:100%;">
            </div>
            <div class="slider fade">
                <img src="img/c5.jpg"style="width:100%;">
            </div>
          
            <h2>#COVIDFIGHT</h2>
          </div>
            <script>
                var slideIndex = 0;
                showSlides();
                function showSlides() {
                var i;
                var slides = document.getElementsByClassName("slider");
                for(i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";
                }
                slideIndex++;
                if(slideIndex > slides.length) {
                  slideIndex = 1
                }
                slides[slideIndex - 1].style.display = "block";
                setTimeout(showSlides, 2500); // Change image every 2.5 seconds

                }

                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlide");
                    for (i = 0; i < x.length; i++) {
                         x[i].style.display = "none";  
                        }
                    myIndex++;
                    if (myIndex > x.length) {myIndex = 1}    
                    x[myIndex-1].style.display = "block";  
                    setTimeout(carousel, 3500);    
                }
            </script>

        
        <div class="article">
            <p>Life in India includes urban and rural and they both got impacted by COVID-19. 
            The disease in transmission was previously epicentre in all the major metro and 
            capital cities of Indian states. However, both people from rural and urban sectors 
             face a real traumatized situation. COVID-19 has created a negative impact on human life also.
             Almost everything got effected in this pandemic our lifestyles had changed, everything is 
             becoming online our education system, our works etc., poverty, unemployement, depression,
             mental health problems, and many more that we can forget the count of it. After arrival of second
             wave of COVID many peoples had lost their loved ones, their families and still fighting with the same,
             In this bad situation we all should be together and fight with this pandemic by helping each
             other in all way possible, this situation is not like normal that we can go out and help 
             but by sitting safe in home also we can help by contributing some for them who are fighting
             and suffering not just with COVID but with the poverty, starvation, lack of money for the treatments 
             and many other such problems. </p>
        </div>
    </div>
        <div class="container2">
            <a id="container2"></a>
            <div class="cont2_wrap">
                <h2 >We are in this together, and we will get through this together."</h2>
                
            </div>
        </div>
        <div class="container3">
            
            <div class="one" onmouseover="detailchange(this)" onmouseout="detailoriginal(this)">
                <img src="img/mask.jpg" onmouseover="change(this)" onmouseout="original(this)">
                <div class="middle" >
                    <div class="text">WEAR MASK</div>
                    <p class="detail">When you wear a mask, you protect others as well as yourself. Masks work best when everyone wears one.<br><br>
                    Masks should completely cover the nose and mouth and fit snugly against the sides of face without gaps.<br><br>
                Masks should be worn any time you are traveling on a plane, bus, train, or other form of public transportation traveling into, within, or out of the United States and in U.S. transportation hubs such as airports and stations.<br><br>When you take off a mask, store it in a clean plastic bag, and every day either wash it if it???s a fabric mask, or dispose of a medical mask in a trash bin.</p>
                </div>            
            </div>
            <div class="two" onmouseover="detailchange(this)" onmouseout="detailoriginal(this)">
                <img src="img/sanitize.jpg" onmouseover="change(this)" onmouseout="original(this)" >
                <div class="middle">
                    <div class="text">SANITIZATION</div>
                    <p class="detail">If soap and water are not readily available, use a hand sanitizer that contains at least 60% alcohol. Cover all surfaces of your hands and rub them together until they feel dry.<br><br>Wash your hands often with soap and water for at least 20 seconds especially after you have been in a public place, or after blowing your nose, coughing, or sneezing.<br><br>Avoid touching your eyes, nose, and mouth with unwashed hands.<br><br>Clean high touch surfaces daily. This includes tables, doorknobs, light switches, countertops, handles, desks, phones, keyboards, toilets, faucets, and sinks.</p>
                </div> 
            </div>
                
            <div class="three" onmouseover="detailchange(this)" onmouseout="detailoriginal(this)">
                <img src="img/distance.jpg" onmouseover="change(this)" onmouseout="original(this)">
                <div class="middle">
                    <div class="text">SOCIAL DISTANCING</div>
                    <p class="detail">Keep your distance from other people who are not part of your household or extended household ??? stay 2 metres (3 steps) away from others when outdoors and in enclosed spaces outside the home setting.<br><br>Avoid contact with someone who is displaying symptoms of  COVID-19. These symptoms include high temperature, or new and continuous cough, or loss of or change to sense of smell or taste.<br><br>Avoid large and small gatherings in public spaces, where there are no reasonable measures in placeas infections spread easily in closed spaces where people gather together.<br><br>Work from home, where possible.</p>
                </div> 
            </div>
            <div class="four" onmouseover="detailchange(this)" onmouseout="detailoriginal(this)">
                <img src="img/vaccine.jpg" onmouseover="change(this)" onmouseout="original(this)">
                <div class="middle">
                    <div class="text">VACCINATION</div>
                    <p class="detail">COVID 19-vaccines are effective. They can keep you from getting and spreading the virus that causes COVID-19.<br><br>COVID-19 vaccines also help keep you from getting seriously ill even if you do get COVID-19.<br><br>After you are fully vaccinated for COVID-19, you can resume many activities without wearing a mask or staying 6 feet apart, except where required by federal, state, local, tribal, or territorial laws, rules, and regulations, including local business and workplace guidance.<br><br>COVID-19 vaccines are not experimental. They went through all the required stages of clinical trials. Extensive testing and monitoring have shown that these vaccines are safe and effective.</p>
                </div> 
            </div>
                <script type="text/javascript">
                    function detailchange(x) {
                        x.style.border='2px outset';
                        x.style.padding="2em";
                        
                    }
                    function detailoriginal(x){
                        x.style.border="none";
                        x.style.padding="0";
                        
                    }
                </script>

                <script type="text/javascript">
                    function change(x){
                        x.style.opacity=0.8;

                    }
                    function original(x){
                        x.style.opacity=1;
                    }
                </script>  
        </div>
        <div class="containerempty">

            <p class="empty" >India is currently trying to cope with a humanitarian crisis as a deadly second wave of the COVID-19 pandemic sweeps across the country.This crisis in India affects all of us, and we all need to pull together to help India with vaccines, oxygen, medical supplies, and support to poverty stricken people. Our team is connected with many NGO's and rural communities to provide all kind of help they need, arrangement of oxygen supplies, vaccination camps, distribution of Ration Relief Kits, Cooked Meals, Personal Protective Equipment Kits, N-95 Masks, Nourishment Supplements, Bedding Kits, Hygiene related things, etc. We can do much more together and make India cope up with this crisis #FIGHTTOGETHER .
                </p><br>

            <p class="quote">We Can't Help Everyone But Everyone Can Help Someone.</p>

            
        </div>
        <div class="container5">
            <h1 style="font-style: italic;">We Can Beat It Together</h1>
    
        </div>
        <footer>
            Contact Us<br>   
            <i class="fa fa-envelope" style="font-size: 15px; "></i>: rashu1keshari8@gmail.com <br> 
            <i class="fa fa-phone-square" style="font-size: 15px; "></i>: +91-6377726937<br><br>
            <i class="fa fa-copyright"></i>2020. Made by Prasanna,Puneet & Rashmi
        </footer>
    </body>

    <div class="chat">
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-4201eb2a-740b-4de5-b98f-40462252d305"></div>
</div>

</html>
