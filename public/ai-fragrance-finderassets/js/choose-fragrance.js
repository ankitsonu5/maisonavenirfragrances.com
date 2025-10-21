/** 
 * commented the below to allow the user to select any
 * user can go directly to step 3 - fragrance families
 */
/*
let selectedIngredients = localStorage.getItem("selectedIngredients");
let selectedAccord = localStorage.getItem("selectedAccord");
let selectedFamily = localStorage.getItem("selectedFamily");
const imgElement = document.getElementById("img1");
const imgElement1 = document.getElementById("img2");
const imgElement2 = document.getElementById("img3");
const link1 = document.getElementById("link-1");
const link2 = document.getElementById("link-2");
const link3 = document.getElementById("link-3");

if (
  !selectedIngredients ||
  selectedIngredients === "none" ||
  selectedIngredients === "[]"
) {
  imgElement.style.opacity = "1";
  link2.removeAttribute("href");
  link3.removeAttribute("href");
  imgElement1.style.opacity = "0.5";
} else {
  imgElement.style.opacity = "0.5";
}

if (!selectedAccord || selectedAccord === "none" || selectedAccord === "[]") {
  imgElement1.style.opacity = "1";
  link3.removeAttribute("href");
} else {
  imgElement1.style.opacity = "0.5";
}

if (!selectedFamily || selectedFamily === "none" || selectedFamily === "[]") {
  imgElement2.style.opacity = "1";
} else {
  imgElement2.style.opacity = "0.5";
}
*/

document.getElementById("link-1").addEventListener("click", function (event) {
  localStorage.setItem("selectedIngredients", "none");
});
document.getElementById("link-2").addEventListener("click", function (event) {
  localStorage.setItem("selectedAccord", "none");
});
document.getElementById("link-3").addEventListener("click", function (event) {
  localStorage.setItem("selectedFamily", "none");
});
