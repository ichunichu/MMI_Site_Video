
const nav = document.getElementsByTagName("nav")[0]
console.log("ready");
function showMobileMenu(){
    nav.classList.toggle("activated")
    console.log("toggle");
}