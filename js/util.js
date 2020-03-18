
function textCopy() {
    var dummy = document.createElement('input'),
    text = window.location.href;
    text = text.substr(text.length - 5);
    document.body.appendChild(dummy);
    dummy.value = text;
    dummy.select();
    document.execCommand('copy');
    document.body.removeChild(dummy);
    alert("Copied Access Code: " + text);
}
function redirect(code) {
    alert("Hi:"+code);
}