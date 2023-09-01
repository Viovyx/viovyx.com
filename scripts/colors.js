// Function to set the selected palette
function setPalette(paletteNumber) {
    document.documentElement.style.setProperty('--color--primary', `var(--palette${paletteNumber}-primary)`);
    document.documentElement.style.setProperty('--color--foreground', `var(--palette${paletteNumber}-foreground)`);
    document.documentElement.style.setProperty('--color--background', `var(--palette${paletteNumber}-background)`);
    // You can add more customizations for each palette here
    savePaletteChoice(paletteNumber); // Save the selected palette to localStorage
}

// Function to save the selected palette to localStorage
function savePaletteChoice(paletteNumber) {
    localStorage.setItem('selectedPalette', paletteNumber);
}

// Function to load the saved palette from localStorage (on page load)
function loadSavedPalette() {
    const selectedPalette = localStorage.getItem('selectedPalette');
    if (selectedPalette) {
        setPalette(selectedPalette); // Apply the saved palette
    }
}

// Add event listeners for each palette button
document.getElementById('palette1').addEventListener('click', () => setPalette(1));
document.getElementById('palette2').addEventListener('click', () => setPalette(2));
// Add event listeners for other palette buttons as needed

// Load the saved palette choice when the page loads
window.addEventListener('load', loadSavedPalette);
