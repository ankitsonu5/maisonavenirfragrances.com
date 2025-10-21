let selectedIngredients = localStorage.getItem("selectedIngredients");
let selectedAccord = localStorage.getItem("selectedAccord");
let selectedFamily = localStorage.getItem("selectedFamily");
let selectedMood = localStorage.getItem("selectedMood");
let selectedOcassion = localStorage.getItem("selectedOcassion");
let storedValues = [];
let selectedOption = localStorage.getItem("preference");
storedValues.push({
  selectedOption: JSON.parse(selectedOption),
});
storedValues.push({
  selectedIngredients: selectedIngredients ? selectedIngredients : "none",
});

storedValues.push({
  selectedAccord: selectedAccord ? selectedAccord : "none",
});

if (!selectedFamily) {
  storedValues.push({
    selectedFamily: "none",
  });
} else {
  storedValues.push({
    selectedFamily: selectedFamily,
  });
}

// console.log('LocalStorage values for ingrideients accods, and family:', storedValues);

let storedValues1 = [];
storedValues1.push({
  selectedOption: JSON.parse(selectedOption),
});
storedValues1.push({
  selectedMood: selectedMood ? selectedMood : "none",
});

storedValues1.push({
  selectedOcassion: selectedOcassion ? selectedOcassion : "none",
});
// console.log(JsonString);

// console.log('LocalStorage values for mood and ocassion:', storedValues1);

var JsonString = JSON.stringify(storedValues1);
// console.log(JsonString);
storedValues1.push({
  selectedOption: JSON.parse(selectedOption),
});
var JsonString1 = JSON.stringify(storedValues);
// console.log(JsonString1);

var json1 = JSON.parse(JsonString);
var json2 = JSON.parse(JsonString1);

var combinedJson = json1.concat(json2);
function processQuizData(data) {
  let result = {};
  data.forEach((entry) => {
    for (let key in entry) {
      if (entry[key] !== "none") {
        result[key] = entry[key];
      }
    }
  });

  return JSON.stringify(result);
}

const filteredQuizValue = processQuizData(combinedJson);

// document.getElementById("quizvalue").value = filteredQuizValue;

console.log(typeof filteredQuizValue);

// time to update the db
var updated = localStorage.getItem('updated');

if (updated == 0) {
  $.ajax({
    type: "POST",
    url: "./db.php",
    data: { data: filteredQuizValue },
    success: function () {
      //success code here
      localStorage.setItem('updated', 1);
      console.log("data updated successfully");
    },
    error: function () {
      //error code here
      console.log("there was an error");
    },
  });
}
