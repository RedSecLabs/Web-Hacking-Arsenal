// Page # 33
function spoof() {
    var x = open('about:blank');
    base64 = 'VE1HTQo=' //phishing page encoded in base64
    x.document.body.innerHTML = atob(base64);
}
