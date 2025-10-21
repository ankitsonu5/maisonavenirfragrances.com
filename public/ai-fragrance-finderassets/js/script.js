const selections = [];

document.querySelectorAll('input[name="question"]').forEach(function (radio) {
    radio.addEventListener('change', function () {
        const selectedValue = this.value;

        selections.push(selectedValue);
        console.log('Selections:', selections);

        if (selectedValue === "Based On Ingredients, Accords and Families") {
            window.location.href = 'Ingredients.html';
        } else if (selectedValue === "Based On your Mood And Occasions") {
            window.location.href = 'ChooseMood.html';
        } else if (selectedValue === "Based On Another Fragrance You Like") {
            window.location.href = 'anotherFragrance.html';
        }
    });
});

let selectedIngredients = [];

const maxSelections = 4;

document.querySelectorAll('.ingredient-option').forEach(option => {
    option.addEventListener('click', function () {
        const checkbox = this.querySelector('input[type="checkbox"]');
        const ingredient = checkbox.value;


        if (checkbox.checked) {
            checkbox.checked = false;
            selectedIngredients = selectedIngredients.filter(item => item !== ingredient);
            this.classList.remove('selected');
        } else {

            if (selectedIngredients.length < maxSelections) {
                checkbox.checked = true;
                selectedIngredients.push(ingredient);
                this.classList.add('selected');
            } else {
                alert(`You can select only up to ${maxSelections} ingredients.`);
            }
        }

        console.log('Selected Ingredients:', selectedIngredients);

        localStorage.setItem('selectedIngredients', JSON.stringify(selectedIngredients));
    });
});