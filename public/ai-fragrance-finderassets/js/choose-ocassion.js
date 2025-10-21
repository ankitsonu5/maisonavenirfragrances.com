let selectedOcassion = [];

const maxSelections = 1;

document.querySelectorAll('.ingredient-option').forEach(option => {
    option.addEventListener('click', function () {
        const checkbox = this.querySelector('input[type="checkbox"]');
        const ocassion = checkbox.value;
        if (checkbox.checked) {
            checkbox.checked = false;
            selectedOcassion = selectedOcassion.filter(item => item !== ocassion);
            this.classList.remove('selected');
        } else {
            if (selectedOcassion.length < maxSelections) {
                checkbox.checked = true;
                selectedOcassion.push(ocassion);
                this.classList.add('selected');
            } else {
                alert(`You can select only up to ${maxSelections} occasion(s).`);
            }
        }
        console.log('selectedOcassion:', selectedOcassion);
        localStorage.setItem('selectedOcassion', JSON.stringify(selectedOcassion));
        // window.location.href = './contact-us.html';
        window.location.href = './result.html?r=' + selectedOcassion[0];
    });
});