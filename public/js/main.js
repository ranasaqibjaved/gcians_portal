(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

})(jQuery);

   //  View  Message
   const toggleMessage = document.getElementById("toggleMessage");
   const toggleMessage2 = document.getElementById("toggleMessage2");
   const spanMessage = document.getElementById("spanMessage");
   const liMessage = document.getElementsByClassName("liMessage");
   toggleMessage.addEventListener("click", () => {
	 toggleMessage.style.display = "none";
	 spanMessage.style.display = "block";
	 for (var i = 0; i < liMessage.length; i++) {
	   liMessage[i].style.display = "block";
	 }
   })

//    toggleMessage2.addEventListener("click", () => {
// 	toggleMessage.style.display = "none";
// 	spanMessage.style.display = "block";
// 	for (var i = 0; i < liMessage.length; i++) {
// 	  liMessage[i].style.display = "block";
// 	}
//   })

   spanMessage.addEventListener("click", () => {
	 toggleMessage.style.display = "block";
	 spanMessage.style.display = "none";
	 for (var i = 0; i < liMessage.length; i++) {
	   liMessage[i].style.display = "none";
	 }
   })
   //  Student Services 
   const Services = document.getElementById("Services");
   const Services1 = document.getElementById("Services1");
   const li1 = document.getElementById("li1");
//    const li2 = document.getElementById("li2");
   const li32 = document.getElementById("li32");
   const li33 = document.getElementById("li33");
   Services.addEventListener("click", () => {
	 Services.style.display = "none";
	 Services1.style.display = "block";
	 li1.style.display = "block";
	//  li2.style.display = "block";
	 li32.style.display = "block";
	 li33.style.display = "block";

   })
   Services1.addEventListener("click", () => {
	 Services.style.display = "block";
	 Services1.style.display = "none";
	 li1.style.display = "none";
	 li2.style.display = "none";
	 li32.style.display = "none";
	 li33.style.display = "none";

   })
   // fee details
   const fee1 = document.getElementById("fee1");
   const fee2 = document.getElementById("fee2");
   const li3 = document.getElementById("li3");
   const li4 = document.getElementById("li4");
   fee1.addEventListener("click", () => {
	 fee1.style.display = "none";
	 fee2.style.display = "block";
	 li3.style.display = "block";
	 li4.style.display = "block";

   })
   fee2.addEventListener("click", () => {
	 fee1.style.display = "block";
	 fee2.style.display = "none";
	 li3.style.display = "none";
	 li4.style.display = "none";

   })

   // form 
   const form1 = document.getElementById("form1");
   const form2 = document.getElementById("form2");
   const form_sidebar = document.getElementsByClassName("form_sidebar");
   form1.addEventListener("click", () => {
	 form1.style.display = "none";
	 form2.style.display = "block";
	 for (var i = 0; i < form_sidebar.length; i++) {
	   form_sidebar[i].style.display = "block";
	 }
   })
   form2.addEventListener("click", () => {
	 form1.style.display = "block";
	 form2.style.display = "none";
	 for (var i = 0; i < form_sidebar.length; i++) {
	   form_sidebar[i].style.display = "none";
	 }
   })

   // account details
   const account1 = document.getElementById("account1");
   const account2 = document.getElementById("account2");
   const li5 = document.getElementById("li5");
   const li6 = document.getElementById("li6");
   const li61 = document.getElementById("li61");
   account1.addEventListener("click", () => {
	 account1.style.display = "none";
	 account2.style.display = "block";
	 li5.style.display = "block";
	 li6.style.display = "block";
	 li61.style.display = "block";

   })
   account2.addEventListener("click", () => {
	 account1.style.display = "block";
	 account2.style.display = "none";
	 li5.style.display = "none";
	 li6.style.display = "none";
	 li61.style.display = "none";

   })

   // exam 
   const exam1 = document.getElementById("exam1");
   const exam2 = document.getElementById("exam2");
   const li7 = document.getElementById("li7");
   const li8 = document.getElementById("li8");
   const li9 = document.getElementById("li9");
   exam1.addEventListener("click", () => {
	 exam1.style.display = "none";
	 exam2.style.display = "block";
	 li7.style.display = "block";
	 li8.style.display = "block";
	 li9.style.display = "block";

   })
   exam2.addEventListener("click", () => {
	 exam1.style.display = "block";
	 exam2.style.display = "none";
	 li7.style.display = "none";
	 li8.style.display = "none";
	 li9.style.display = "block";

   })





