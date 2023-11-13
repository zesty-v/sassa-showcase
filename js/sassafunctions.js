// JavaScript Document

var spinnerShown = false; // Global flag

document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('click', function(e) {
        if (spinnerShown && e.target.tagName === 'IMG') {
            var activeSpinners = document.querySelectorAll('.spinner-border');
            activeSpinners.forEach(function(spinner) {
                spinner.style.display = 'none';
            });
        }
        spinnerShown = false; // Reset the flag after processing the click
    });
});

function showSpinner(linkElement) {
    setTimeout(function() {
    // Code to execute after the delay
        var spinner = linkElement.querySelector('.spinner-border');
        spinner.style.display = 'block';
        spinnerShown = true; // Set the flag when showing the spinner
    }, 10)
}
function toggleImageSrc(imgElement, altSrc) {
    let currentSrc = imgElement.getAttribute('src');
    
	// Thanks CGPT4.
    // Check if the current source is the same as the alternate source.
    // If it is, you might want to toggle it back to the original or handle it differently.
    if (currentSrc === altSrc) {
        // For this example, let's assume you have a way to derive the original source.
        // Here, I'm just replacing "1.1" with "1.0" as an example.
        imgElement.setAttribute('src', currentSrc.replace('1.1', '1.0'));
    } else {
        imgElement.setAttribute('src', altSrc);
    }
}

function isValidSAID(number) {
  // Check for the correct length
  if (number.length !== 13) return false;

  // Extract the date of birth from the ID
  let dob = number.substring(0, 6);
  let year = parseInt(dob.substring(0, 2), 10);
  let month = parseInt(dob.substring(2, 4), 10) - 1; // Month is 0-indexed in JS
  let day = parseInt(dob.substring(4, 6), 10);

  // Check the validity of the date
  let dateOfBirth = new Date(year + 1900, month, day);
  if (dateOfBirth.getFullYear() != year + 1900 ||
      dateOfBirth.getMonth() != month ||
      dateOfBirth.getDate() != day) {
    return false;
  }

  // Luhn algorithm check (modulus 10)
  let total = 0;
  let count = 0;

  for (let i = 0; i < 13; i++) {
    let digit = parseInt(number.charAt(i), 10);
    if (isNaN(digit)) return false;
    if (count % 2 !== 0) {
      digit *= 2;
      if (digit > 9) digit -= 9;
    }
    total += digit;
    count++;
  }

  return (total % 10 === 0);
}

function formatInput(input) {
  let numbers = input.value.replace(/\D/g, '');

  // If the input is not a valid SA ID number, do nothing
  if (!isValidSAID(numbers)) {
    // Optionally, provide user feedback that the ID is invalid
    return;
  }

  let sections = [];
  sections.push(numbers.substring(0, 6)); // First 6 digits
  if (numbers.length > 6) sections.push(numbers.substring(6, 10)); // Next 4 digits
  if (numbers.length > 10) sections.push(numbers.substring(10, 12)); // Next 2 digits
  if (numbers.length > 12) sections.push(numbers.substring(12, 13)); // Next digit

  input.value = sections.join(' ').trim();
	
}

