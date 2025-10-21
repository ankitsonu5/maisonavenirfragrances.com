let selectedFamily = [];

const maxSelections = 1;

document.querySelectorAll('.ingredient-option').forEach(option => {
    option.addEventListener('click', function () {
        const checkbox = this.querySelector('input[type="checkbox"]');
        const family = checkbox.value;


        if (checkbox.checked) {
            checkbox.checked = false;
            selectedFamily = selectedFamily.filter(item => item !== family);
            this.classList.remove('selected');
        } else {

            if (selectedFamily.length < maxSelections) {
                checkbox.checked = true;
                selectedFamily.push(family);
                this.classList.add('selected');
            } else {
                alert(`You can select only up to ${maxSelections} ingredients.`);
            }
        }

        console.log('selectedFamily', selectedFamily);
        // console.log(selectedFamily[0]);

        localStorage.setItem('selectedFamily', JSON.stringify(selectedFamily));
    });
});


document.getElementById('submit-btn').addEventListener('click', function (event) {
    event.preventDefault();
    console.log(selectedFamily[0]);
    
    if (Object.keys(selectedFamily).length === 0) {
        alert("Select at least one ingredient");
    } else {
        window.location.href = './result.html?r=' + selectedFamily[0];
    }
    // window.location.href = './form1.html';
});