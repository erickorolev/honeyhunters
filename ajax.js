function getComments() {
        if (window.XMLHttpRequest) {
            // Для IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // Для IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("ajax").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getcomments.php",true);
        xmlhttp.send();
}