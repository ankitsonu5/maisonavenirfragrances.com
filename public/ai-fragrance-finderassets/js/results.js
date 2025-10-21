const queryString = window.location.search;
// console.log(queryString);

const urlParams = new URLSearchParams(queryString);

const result = urlParams.get('r')
console.log(result);
// shirt

var _img = document.getElementById('resultant-image');
var newImg = new Image;
newImg.onload = function() {
    _img.src = this.src;
}

newImg.src = './assets/results/result-' + result.replace(/\s+/g, '-') + '.jpg';