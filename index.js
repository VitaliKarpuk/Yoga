window.addEventListener(orientationEvent, function() {
    var orientation = Math.abs(window.orientation) == 90 ? 'landscape' : 'portrait';
}, false);