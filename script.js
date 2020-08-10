
/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu */

function onClickMenu(){
	document.querySelector(".menu").classList.toggle("change");
	document.getElementById("navigation").classList.toggle("change");
}


var slideIndex = 0;
      showSlides();
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for(i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if(slideIndex > slides.length) {
          slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
      }
