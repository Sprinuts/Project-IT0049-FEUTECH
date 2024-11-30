
function updateAccessories() {
    var category = document.getElementById('category').value;
    var accessories = document.getElementById('accessories');
    if (category === 'laptop') {
        accessories.value = 'charger';
    } else if (category === 'dlp'){
        accessories.value = 'extension-vga-hdmicable-powercable';
    } else if (category === 'hdmi' || category === 'vga' || category === 'dlpremote' || category === 'extension-cord' || category === 'cable-crimping-tool' || category === 'cable-tester' || category === 'lab-room-key'){ //for non 
        accessories.value = 'none';
    } else if (category === 'mac-keyboard-mouse'){
        accessories.value = 'lightning-cable';
    } else if (category === 'wacom'){
        accessories.value = 'pen';
    } else if (category === ''){

    }
    else {
        accessories.value = '';
    }
    accessories.disabled = false;
}
