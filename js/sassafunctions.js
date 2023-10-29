// JavaScript Document

// Handler for the mouse click event.
function toggleImageSrc(imgElement, altSrc) {
    let currentSrc = imgElement.getAttribute('src');
    
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