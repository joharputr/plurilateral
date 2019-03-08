
function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if ((charCode > 47 && charCode < 58) || charCode < 21 || charCode === 43) {
        return true;
    }
    return false;
}

function hanyaHuruf(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if ((charCode > 64 && charCode < 91)||(charCode > 96 && charCode < 123)||charCode < 21) {
        return true;
    }
    return false;
}