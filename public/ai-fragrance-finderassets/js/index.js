localStorage.clear();
document.addEventListener('DOMContentLoaded', function () {
  const btnForYourself = document.getElementById('myBtn');
  const dropdownForYourself = document.getElementById('myDropdown');


  const btnForGifting = document.getElementById('myBtn1');
  const dropdownForGifting = document.getElementById('myDropdown1');

  btnForYourself.addEventListener('click', function () {
    dropdownForYourself.classList.toggle('show');
    dropdownForGifting.classList.remove('show');
  });

  btnForGifting.addEventListener('click', function () {
    dropdownForGifting.classList.toggle('show');
    dropdownForYourself.classList.remove('show');
  });

  dropdownForYourself.addEventListener('click', function (event) {
    if (event.target.tagName === 'A') {
      const selectedOption = event.target.textContent;
      localStorage.setItem('preference', JSON.stringify({
        type: 'For Yourself',
        option: selectedOption
      }));

    }
  });

  dropdownForGifting.addEventListener('click', function (event) {
    if (event.target.tagName === 'A') {
      const selectedOption = event.target.textContent;
      localStorage.setItem('preference', JSON.stringify({
        type: 'For Gifting',
        option: selectedOption
      }));

    }
  });
});

// set flag if the db is updated or not
localStorage.setItem('updated', 0);