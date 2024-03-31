//toggling of sidebar on toggle button click
function toggleSidebar() {
   var sidebar = document.getElementById("sidebar");
   if (sidebar.style.width === "250px") {
      sidebar.style.width = "0";
   } else {
      sidebar.style.width = "250px";
   }
}

// Close sidebar when clicked outside
document.addEventListener('click', function (event) {
   var sidebar = document.getElementById("sidebar");
   var sidebarToggle = document.getElementById("navbar-toggle");
   if (event.target !== sidebar && event.target !== sidebarToggle && sidebar.style.width === "250px") {
      sidebar.style.width = "0";
   }
});

//scroll at particular position
document.addEventListener("DOMContentLoaded", function () {
   const scrollLinks = document.querySelectorAll('.scroll-link');
   scrollLinks.forEach(link => {
      link.addEventListener('click', function (event) {
         event.preventDefault();
         const target = this.getAttribute('data-scroll-to');
         window.scrollTo({
            top: target,
            behavior: 'smooth'
         });
      });
   });
});


document.addEventListener("DOMContentLoaded", function () {
   const links = document.querySelectorAll('.scroll-link');
   links.forEach(function (link) {
       link.addEventListener('click', function (e) {
           // Highlight the clicked link
           links.forEach(function (otherLink) {
               otherLink.classList.remove('active');
           });
           link.classList.add('active');
           
           // Scroll to the target
           e.preventDefault();
           const target = document.getElementById(link.getAttribute('data-scroll-to'));
           window.scrollTo({
               top: target.offsetTop,
               behavior: 'smooth'
           });
       });
   });
});

