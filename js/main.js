// Disables the right-click context menu sitewide.

document.addEventListener("contextmenu", function (e) {
    e.preventDefault();
}, false);


// Prevent opening Dev Tools in Chrome (idk the point of adding this but it's here anyway)
$(document).keydown(function (event) {                              
    if (event.keyCode == 123) {                                             // Prevent F12
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {    // Prevent Ctrl+Shift+I        
        return false;
    }
});
