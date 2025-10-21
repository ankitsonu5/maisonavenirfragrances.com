let selectedMood = []; 

const maxSelections = 1; 

document.querySelectorAll('.ingredient-option').forEach(option => {
    option.addEventListener('click', function() {
        const checkbox = this.querySelector('input[type="checkbox"]');
        const mood = checkbox.value;
        if (checkbox.checked) {
            checkbox.checked = false; 
            selectedMood = selectedMood.filter(item => item !== mood); 
            this.classList.remove('selected'); 
        } else {
            if (selectedMood.length < maxSelections) {
                checkbox.checked = true; 
                selectedMood.push(mood); 
                this.classList.add('selected'); 
            } else {
                alert(`You can select only up to ${maxSelections} families.`);
            }
        }
        console.log('selectedMood', selectedMood);
        localStorage.setItem('selectedMood', (selectedMood));
        window.location.href = './choose-ocassion.html';
    });
});