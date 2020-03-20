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

function run(){
    var url = window.location.href;
    var url = url.substr(url.length - 5);
    var chatModal = document.getElementById('chatModal');
    chatModal.src = 'https://tlk.io/'+url;
    
}