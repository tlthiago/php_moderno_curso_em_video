function gerarNumero() {
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("resultado").innerHTML = this.responseText;
        }
    };

    xhttp.open("GET", "gerarNumero.php", true);
    xhttp.send();
}