let selectedAccord = [];
 
const maxSelections = 1;
 
document.querySelectorAll('.ingredient-option').forEach(option => {
    option.addEventListener('click', function() {
        const checkbox = this.querySelector('input[type="checkbox"]');
        const accord = checkbox.value;
 
     
        if (checkbox.checked) {
            checkbox.checked = false;
            selectedAccord = selectedAccord.filter(item => item !== accord);
            this.classList.remove('selected');
        } else {
           
            if (selectedAccord.length < maxSelections) {
                checkbox.checked = true;
                selectedAccord.push(accord);
                this.classList.add('selected');
            } else {
                alert(`You can select only up to ${maxSelections} accords.`);
            }
        }
 
        console.log('selectedAccord', selectedAccord);
 
    localStorage.setItem('selectedAccord', JSON.stringify(selectedAccord));
    });
});