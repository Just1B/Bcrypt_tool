function encrypt() {

    let xhr = new XMLHttpRequest();
    let url = "php/encrypt.php"

    let data = {
        'password' : document.getElementsByName("password")[0].value,
    }
    
    xhr.onreadystatechange = function( ) {
        if (this.readyState == 4 && this.status == 200) {
            
            let showEncrypted = document.getElementById('showEncrypted')

            showEncrypted.style.display = 'block'
            showEncrypted.innerHTML = this.responseText
       }
    };

    xhr.open("POST", url, true);
    xhr.setRequestHeader('Content-Type','application/json');
    xhr.send(JSON.stringify(data));
}

function compare() {
    
    let xhr = new XMLHttpRequest();
    let url = "php/compare.php"

    let data = {
        'brut' : document.getElementsByName("brut")[0].value,
        'hash' : document.getElementsByName("hash")[0].value,
    }
    
    xhr.onreadystatechange = function( ) {
        if (this.readyState == 4 && this.status == 200) {
            
            let showDecrypted = document.getElementById('showDecrypted')

            showDecrypted.style.display = 'block'
            showDecrypted.innerHTML = this.responseText
       }
    };

    xhr.open("POST", url, true);
    xhr.setRequestHeader('Content-Type','application/json');
    xhr.send( JSON.stringify(data) );

}