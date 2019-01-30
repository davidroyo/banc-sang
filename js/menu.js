function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}



document.addEventListener("DOMContentLoaded", function(){
    var divWebhost = document.getElementsByTagName('div');
    divWebhost[divWebhost.length - 1].style.display = 'none';
});
