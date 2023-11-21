// JavaScript Document
var spinnerShown = false; // Global flag

window.addEventListener('load', (event) => {
    document.body.classList.add('fade-in');
});

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

document.addEventListener('keydown', function(event) {

    console.log(event.key + ' pressed...');
    
    if (event.key === 'Escape') {
        // Code to execute when Esc is pressed
        var activeSpinners = document.querySelectorAll('.spinner-border');
        activeSpinners.forEach(function(spinner) {
            spinner.style.display = 'none';
        });
    }

});

function isValidSAID(linkElement, idNumber) {

    // Select the div element by its ID
    var userMessage = '';

    // Remove all the spaces from the ID number. 
    idNumber = idNumber.replace(/\s/g, "");
    
    // Check if the length of the ID number is at least 13
    if (idNumber.length !== 13 || isNaN(idNumber)) {
        
        showModal('ID number must be 13 digits and numeric.', 'ID Error')        
        return false;
        
    } else {
        
        // Extract the date of birth from the ID
        let dob = idNumber.substring(0, 6);
        let year = parseInt(dob.substring(0, 2), 10);
        let month = parseInt(dob.substring(2, 4), 10) - 1; // Month is 0-indexed in JS
        let day = parseInt(dob.substring(4, 6), 10);

        // Check the validity of the date
        let dateOfBirth = new Date(year + 1900, month, day);
        
        if (dateOfBirth.getFullYear() != year + 1900 ||
            
            dateOfBirth.getMonth() != month ||
            dateOfBirth.getDate() != day) {
            showModal('Please check the date of birth in the ID number. It\'s incorrect.', 'ID Error');

            return false;
        
        }

        // Luhn algorithm check (modulus 10)
        let total = 0;
        let count = 0;

        for (let i = 0; i < 13; i++) {
            let digit = parseInt(idNumber.charAt(i), 10);
            if (isNaN(digit)) {
                showModal('Please ensure that there are only numeric characters in the ID number.', 'ID Error');
                return false;
            }
            if (count % 2 !== 0) {
              digit *= 2;
              if (digit > 9) digit -= 9;
            }
            total += digit;
            count++;
        }
        
        // Validate with Luhn algorithm
        if (total % 10 === 0) {
        
            setTimeout(function() {
                // Code to execute after the delay
                var spinner = linkElement.querySelector('.spinner-border');
                spinner.style.display = 'block';
                spinnerShown = true; // Set the flag when showing the spinner
            }, 10)

            // Check what the origitnal URL for the target page is. 
            var hrefValue = linkElement.getAttribute('href');
            var form = document.getElementById('idForm');
            
            // Navigate to that URL.
            form.action = hrefValue // + '?ID=' + idNumber;
            form.submit();
            return false; // Prevent the URL to be followed (the one in the HTML page. We are already achiving that with the submit button above)
            
        } else {

            showModal('The ID number is invalid.', 'ID Error');
            return false; // Continue with default action.
        
        }
        
    } 

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

function formatInput(input) {
  
    let numbers = input.value.replace(/\D/g, '');
    let sections = [];

    sections.push(numbers.substring(0, 6)); // First 6 digits
    if (numbers.length == 0) {
        var divMessage = document.getElementById('idNotice');
        divMessage.className = 'text-primary';
        divMessage.textContent = "Please enter an ID Number."; // Replace 'New text content' with the text you want to display
    } 
    if (numbers.length > 6) sections.push(numbers.substring(6, 10)); // Next 4 digits
    if (numbers.length > 10) sections.push(numbers.substring(10, 12)); // Next 2 digits
    if (numbers.length > 12) sections.push(numbers.substring(12, 13)); // Next digit

    input.value = sections.join(' ').trim();
	
}

function showModal(userMessage, title){

    var modalElement = document.getElementById('modalDialog');
    var modalInstance = new bootstrap.Modal(modalElement);
    var divMessage = document.getElementById('idNotice');
    var inputField = document.getElementById('numberInput');
    
    // Show the modal dialog.
    modalElement.querySelector('#modalTitle').innerText = title;
    modalElement.querySelector('#modalMessage').innerText = userMessage;
    modalInstance.show();
    
    // Update the message under the ID number. 
    divMessage.className = 'text-danger';
    divMessage.textContent = userMessage; // Replace 'New text content' with the text you want to display
    
    // Move cursor to the ID number field.
    window.scrollTo(0, 0); // Scroll to the top of the page
    inputField.focus(); // Focus on the input field
    inputField.select(); // Select all text in the input field
    
    return;

}