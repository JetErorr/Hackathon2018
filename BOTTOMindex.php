<footer>		<!-- Start of The Page Footer -->
		
			<div class="footer-content">

					<div id="google_translate_element"></div>

			</div>
		
			<div class="bottomimg" align="center">
				
				<a href="http://www.digitalindia.gov.in" target="_blank">
					<img src="images/digital-india-logo.png" title="Government of India" alt="Government of India">
				</a>
				
				<a href="https://mygov.in/" target="_blank">
                    <img src="images/pmkvy.jpg" title="My Government" alt="My Government">
                </a>
				
				<a href="https://mygov.in/" target="_blank">
                    <img src="images/mygov.png" title="My Government" alt="My Government">
                </a>
			
				<a href="http://india.gov.in/" target="_blank">
					<img src="images/govindia.png" title="Government of India" alt="Government of India">
				</a>
				
			</div>
			
		</footer>		<!-- Endof The Page Footer -->
		
	</div>		<!-- End of Main Division -->
	<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}


</script>
<script>
	
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
var dv=document.getElementById("maindiv");

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    dv.style.marginTop="42px";
  } else {
    navbar.classList.remove("sticky");
    dv.style.marginTop="0px";
  }
}
</script>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</body>
</html>