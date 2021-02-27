<?php

$title = 'فروشگاه آنلاین لوازم کامپیوتری';

include_once 'page/header.php';
?>

<!-- <h1>Its test</h1> -->


<?php
// include_once 'page/footer.php';
?>

 <header>
     <div class="nav">
         <img src="assets/img/logo.png" alt="">
         <div class="search">
             <button class="category"><i class="fas fa-bars"></i>دسته بندی ها</button>
             <input type="text" placeholder="جست و جو کن...">
         </div>

         <!-- <div class="income">
             <a href="return.html">درخواست مرجوعی کالا</a>
         </div> -->

         <div class="navLeft">
             <a href="" class="coo"><i class="fas fa-handshake"></i></a>
             <a href="signin.html" class="acc"><i class="fas fa-user"></i>حساب کاربری</a>
         </div>

     </div>
<!--     -->
     <div class="center">
         <h1>فروشگاه قطعات کامپیوتری <strong>نووا</strong></h1>
         <p>نوا اولین و برترین فروشگاه قطعات کامپیوتری کشور</p>
         <input type="text" placeholder="به دنبال چه محصولی هستی ؟...">
     </div>

 </header>


 <div class="container">
     <div class="novaslider">
         <div class="novasliderright">
         <div class="slideshow-container">

             <div class="mySlides fade">
                 <div class="numbertext">1 / 3</div>
                 <img src="assets/img/amd.jpg" style="width:800px; height: 300px">
             </div>

             <div class="mySlides fade">
                 <div class="numbertext">2 / 3</div>
                 <img src="assets/img/msi.jpg" style="width:800px; height: 300px">
             </div>

             <div class="mySlides fade">
                 <div class="numbertext">3 / 3</div>
                 <img src="assets/img/nvidia.jpg" style="width:800px; height: 300px">
             </div>

<!--             <a class="prev" onclick="plusSlides(-1)">&#10094;</a>-->
<!--             <a class="next" onclick="plusSlides(1)">&#10095;</a>-->

         </div>
         <br>

         <div style="text-align:center">
             <span class="dot" onclick="currentSlide(1)"></span>
             <span class="dot" onclick="currentSlide(2)"></span>
             <span class="dot" onclick="currentSlide(3)"></span>
         </div>
     </div>
         <div class="novasliderleft">
             <img src="assets/img/nvidia.jpg" alt="">
             <img src="assets/img/wd.jpg" alt="">
         </div>
     </div>
     <div class="chekup">
         <div class="box b1">
             <h3>دسته بندی های موجود</h3>
             <p>32 عدد</p>
             <div class="pattern"></div>
             <div class="pattern2"></div>
         </div>

         <div class="box b2">
             <h3>کالاهای موجود</h3>
             <p>5136 عدد</p>
             <div class="pattern"></div>
             <div class="pattern2"></div>
         </div>

         <div class="box b3">
             <h3> کالاهای مرجوع شده</h3>
             <p>200 عدد</p>
             <div class="pattern"></div>
             <div class="pattern2"></div>
         </div>

         <div class="box b4">
             <h3> کالای های تعمیر شده</h3>
             <p>183 عدد</p>
             <div class="pattern"></div>
             <div class="pattern2"></div>
         </div>

         <div class="box b5">
             <h3> کالاهای تعویض شده</h3>
             <p>17 عدد</p>
             <div class="pattern"></div>
             <div class="pattern2"></div>
         </div>

<!--         <div class="box b6">-->
<!--             <h3>دسته بندی های موجود</h3>-->
<!--             <p>85</p>-->
<!--             <div class="pattern"></div>-->
<!--             <div class="pattern2"></div>-->
<!--         </div>-->
     </div>
<!------------------------------------->
     <div class="title">
         <div class="lasp">     <h3><i class="far fa-clock recent"></i>آخرین محصولات</h3>
         </div>
         <div class="seeall">
             <a href="">نمایش همه محصولات<i class="fas fa-chevron-left"></i></a>
         </div>


 </div>
     <div class="product">
         <div class="card">
             <a href=""><img src="assets/img/product.jpg" alt=""></a>
             <h4>هارد ssd یک ترابایت وسترن دیجیتال</h4>
             <div class="detail">
                 <div class="rightdetail">
                     <img src="assets/img/wd.jpg" alt="">
                     <div class="aboutdetail">
                         <p class="maker">تولید کننده</p>
                         <p class="makername">وسترن دیجیتال</p>
                     </div>
                 </div>


                 <div class="leftdetail">
                     <i style="color: silver" class="far fa-star"></i>
                     <p>4/6</p>
                 </div>

             </div>
             <div class="info">
                 <div class="social">
                     <p> <i  class="far fa-heart "></i>999</p>
                     <p><i class="far fa-user "></i>1024</p>
                 </div>

                 <p style="color: #40c857; margin-left: 5px;">800/000 </p>
                 <p style="color: #40c857 ">تومان</p>
             </div>
             <div class="buy">
                 <a href="">افزودن به سبد</a>
             </div>
         </div>
<!-- ----------------------------->
         <div class="card">
             <a href=""><img src="assets/img/product.jpg" alt=""></a>
             <h4>هارد ssd یک ترابایت وسترن دیجیتال</h4>
             <div class="detail">
                 <div class="rightdetail">
                     <img src="assets/img/wd.jpg" alt="">
                     <div class="aboutdetail">
                         <p class="maker">تولید کننده</p>
                         <p class="makername">وسترن دیجیتال</p>
                     </div>
                 </div>


                 <div class="leftdetail">
                     <i style="color: silver" class="far fa-star"></i>
                     <p>4/6</p>

                 </div>

             </div>
             <div class="info">
                 <div class="social">
                     <p> <i id="heart" class="far fa-heart "></i>999</p>
                     <p><i class="far fa-user "></i>1024</p>
                 </div>

                 <p style="color: #40c857; margin-left: 5px;">800/000 </p>
                 <p style="color: #40c857 ">تومان</p>
             </div>
             <div class="buy">
                 <a href="">افزودن به سبد</a>
             </div>
         </div>
<!------------------------>
         <div class="card">
             <a href=""><img src="assets/img/product.jpg" alt=""></a>
             <h4>هارد ssd یک ترابایت وسترن دیجیتال</h4>
             <div class="detail">
                 <div class="rightdetail">
                     <img src="assets/img/wd.jpg" alt="">
                     <div class="aboutdetail">
                         <p class="maker">تولید کننده</p>
                         <p class="makername">وسترن دیجیتال</p>
                     </div>
                 </div>


                 <div class="leftdetail">
                     <i style="color: silver" class="far fa-star"></i>
                     <p>4/6</p>

                 </div>

             </div>
             <div class="info">
                 <div class="social">
                     <p> <i  class="far fa-heart "></i>999</p>
                     <p><i class="far fa-user "></i>1024</p>
                 </div>

                 <p style="color: #40c857; margin-left: 5px;">800/000 </p>
                 <p style="color: #40c857 ">تومان</p>
             </div>
             <div class="buy">
                 <a href="">افزودن به سبد</a>
             </div>
         </div>
<!------------------>
         <div class="card">
             <a href=""><img src="assets/img/product.jpg" alt=""></a>
             <h4>هارد ssd یک ترابایت وسترن دیجیتال</h4>
             <div class="detail">
                 <div class="rightdetail">
                     <img src="assets/img/wd.jpg" alt="">
                     <div class="aboutdetail">
                         <p class="maker">تولید کننده</p>
                         <p class="makername">وسترن دیجیتال</p>
                     </div>
                 </div>


                 <div class="leftdetail">
                     <i style="color: silver" class="far fa-star"></i>
                     <p>4/6</p>

                 </div>

             </div>
             <div class="info">
                 <div class="social">
                     <p> <i id="heart" class="far fa-heart "></i>999</p>
                     <p><i class="far fa-user "></i>1024</p>
                 </div>

                 <p style="color: #40c857; margin-left: 5px;">800/000 </p>
                 <p style="color: #40c857 ">تومان</p>
             </div>
             <div class="buy">
                 <a href="">افزودن به سبد</a>
             </div>
         </div>
<!------------------------>
         <div class="company">
             <div class="amd">
                 <a href=""><img src="assets/img/amd.jpg" alt=""></a>
             </div>
             <div class="msi">
                 <a href=""><img src="assets/img/msi.jpg" alt=""></a>

             </div>
             <div class="nvidia">
                 <a href=""> <img src="assets/img/nvidia.jpg" alt=""></a>

             </div>
             <div class="intel">
                 <a href=""><img src="assets/img/intel.jpg" alt=""></a>

             </div>
             <div class="wd">
                 <a href=""><img src="assets/img/wd.jpg" alt=""></a>

             </div>
         </div>



<!--         -------------->
         <div class="card">
             <a href=""><img src="assets/img/product.jpg" alt=""></a>
             <h4>هارد ssd یک ترابایت وسترن دیجیتال</h4>
             <div class="detail">
                 <div class="rightdetail">
                     <img src="assets/img/wd.jpg" alt="">
                     <div class="aboutdetail">
                         <p class="maker">تولید کننده</p>
                         <p class="makername">وسترن دیجیتال</p>
                     </div>
                 </div>


                 <div class="leftdetail">
                     <i style="color: silver" class="far fa-star"></i>
                     <p>4/6</p>

                 </div>

             </div>
             <div class="info">
                 <div class="social">
                    <p> <i id="heart" class="far fa-heart "></i>999</p>
                    <p><i class="far fa-user "></i>1024</p>
                 </div>

                 <p style="color: #40c857; margin-left: 5px;">800/000 </p>
                 <p style="color: #40c857 ">تومان</p>
             </div>
             <div class="buy">
                 <a href="">افزودن به سبد</a>
             </div>
         </div>

         <div class="card">
             <a href=""><img src="assets/img/product.jpg" alt=""></a>
             <h4>هارد ssd یک ترابایت وسترن دیجیتال</h4>
             <div class="detail">
                 <div class="rightdetail">
                     <img src="assets/img/wd.jpg" alt="">
                     <div class="aboutdetail">
                         <p class="maker">تولید کننده</p>
                         <p class="makername">وسترن دیجیتال</p>
                     </div>
                 </div>


                 <div class="leftdetail">
                     <i style="color: silver" class="far fa-star"></i>
                     <p>4/6</p>

                 </div>

             </div>
             <div class="info">
                 <div class="social">
                     <p> <i id="heart" class="far fa-heart "></i>999</p>
                     <p><i class="far fa-user "></i>1024</p>
                 </div>

                 <p style="color: #40c857; margin-left: 5px;">800/000 </p>
                 <p style="color: #40c857 ">تومان</p>
             </div>
             <div class="buy">
                 <a href="">افزودن به سبد</a>
             </div>
         </div>

         <div class="card">
             <a href=""><img src="assets/img/product.jpg" alt=""></a>
             <h4>هارد ssd یک ترابایت وسترن دیجیتال</h4>
             <div class="detail">
                 <div class="rightdetail">
                     <img src="assets/img/wd.jpg" alt="">
                     <div class="aboutdetail">
                         <p class="maker">تولید کننده</p>
                         <p class="makername">وسترن دیجیتال</p>
                     </div>
                 </div>


                 <div class="leftdetail">
                     <i style="color: silver" class="far fa-star"></i>
                     <p>4/6</p>

                 </div>

             </div>
             <div class="info">
                 <div class="social">
                     <p> <i id="heart" class="far fa-heart "></i>999</p>
                     <p><i class="far fa-user "></i>1024</p>
                 </div>

                 <p style="color: #40c857; margin-left: 5px;">800/000 </p>
                 <p style="color: #40c857 ">تومان</p>
             </div>
             <div class="buy">
                 <a href="">افزودن به سبد</a>
             </div>
         </div>

         <div class="card">
             <a href=""><img src="assets/img/product.jpg" alt=""></a>
             <h4>هارد ssd یک ترابایت وسترن دیجیتال</h4>
             <div class="detail">
                 <div class="rightdetail">
                     <img src="assets/img/wd.jpg" alt="">
                     <div class="aboutdetail">
                         <p class="maker">تولید کننده</p>
                         <p class="makername">وسترن دیجیتال</p>
                     </div>
                 </div>


                 <div class="leftdetail">
                     <i style="color: silver" class="far fa-star"></i>
                     <p>4/6</p>

                 </div>

             </div>
             <div class="info">
                 <div class="social">
                     <p> <i id="heart" class="far fa-heart "></i>999</p>
                     <p><i class="far fa-user "></i>1024</p>
                 </div>

                 <p style="color: #40c857; margin-left: 5px;">800/000 </p>
                 <p style="color: #40c857 ">تومان</p>
             </div>
             <div class="buy">
                 <a href="">افزودن به سبد</a>
             </div>
         </div>
         
     </div>

     
     
     
     <div class="adversite">
         <a href=""><img src="assets/img/as.png" alt=""></a>
     </div>



     <h1>تیم ما</h1>

     <div class="team">
         <div class="teamCard id1">
             <div class="top1">

             </div>
             <div class="teamImg">
                 <img src="assets/img/seleverzi.jpg" alt="">
             </div>
             <div class="bottom">
                     <h2>آرتین سلاحورزی</h2>
                 <p class="job">(مدیر بخش تعمیرات)</p>
                 <p>sel6171@gmail.com<i class="far fa-envelope"></i></p>
                 <p class="phone">5651 827 98903+<i class="fas fa-phone"></i></p>

             </div>
         </div>

         <div class="teamCard id2">
             <div class="top2">

             </div>
             <div class="teamImg">
                 <img src="assets/img/keshvari.jpg" alt="">
             </div>
             <div class="bottom">
                 <h2>علیرضا کشوری</h2>
                 <p class="job">(مدیر عامل )</p>

                 <p>alireza.ksv@gmail.com<i class="far fa-envelope"></i></p>
                 <p class="phone">9583 079 98903+<i class="fas fa-phone"></i></p>

             </div>
         </div>

         <div class="teamCard id3">
             <div class="top3">

             </div>
             <div class="teamImg">
                 <img src="assets/img/me.jpg" alt="">
             </div>
             <div class="bottom">
                 <h2>علیرضا مهرزاد</h2>
                 <p class="job">(مدیر بخش اطلاعات )</p>
                 <p>alirza.mehrzad@gmail.com<i class="far fa-envelope"></i></p>
                 <p class="phone">4001 046 98916+<i class="fas fa-phone phonem "></i></p>

             </div>
         </div>
     </div>


 </div>


 <footer>

     <div class="pattern3">
         <a href=""><i class="fab fa-telegram telegram"></i></a>
         <a href=""> <i class="fab fa-whatsapp whatsapp"></i></a>
         <a href=""><i class="fab fa-instagram instagram"></i></a>
     </div>
     <div class="pattern4"></div>
     <div class="pattern5"></div>
     <div class="pattern6"></div>

 </footer>


 <script type="text/javascript">
     var replaceDigits = function() {
         var map = ["&\#1776;","&\#1777;","&\#1778;","&\#1779;","&\#1780;","&\#1781;","&\#1782;","&\#1783;","&\#1784;","&\#1785;"]
         document.body.innerHTML = document.body.innerHTML.replace(/\d(?=[^<>]*(<|$))/g, function($0) { return map[$0]});
     }
     window.onload = replaceDigits;




     var slideIndex = 1;
     showSlides(slideIndex);

     function plusSlides(n) {
         showSlides(slideIndex += n);
     }

     function currentSlide(n) {
         showSlides(slideIndex = n);
     }

     function showSlides(n) {
         var i;
         var slides = document.getElementsByClassName("mySlides");
         var dots = document.getElementsByClassName("dot");
         if (n > slides.length) {slideIndex = 1}
         if (n < 1) {slideIndex = slides.length}
         for (i = 0; i < slides.length; i++) {
             slides[i].style.display = "none";
         }
         for (i = 0; i < dots.length; i++) {
             dots[i].className = dots[i].className.replace(" active", "");
         }
         slides[slideIndex-1].style.display = "block";
         dots[slideIndex-1].className += " active";
     }
 </script>
</body>
</html>