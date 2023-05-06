function loadView(page, args) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("content").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", page + "?" + args, true);
    xhttp.send();
}


function saveContact(){

    const form = document.getElementById('contactForm');
    const formData = new FormData(form);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('lid').value = this.responseText;
        }
    };
    xhttp.open("POST", "contact_save.php", true);
    xhttp.send(formData);

}

window.onload = () => {
    this.loadView("contact_list.php");
};