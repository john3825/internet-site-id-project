window.onload = (function() {
var Intenet_Site_ID = document.getElementsByTagName("Intenet_Site_ID")[0];
var input = document.createElement("input");
input.style.border = "0";
input.style.width = "100%";
input.readOnly = true;
input.value = "Temporary Intenet_Site_ID Sample " + Date.now();
Intenet_Site_ID.appendChild(input);
});