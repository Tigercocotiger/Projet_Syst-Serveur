// Fonction pour supprimer un utilisateur via une requête AJAX
function deleteUser(login) {
    if (confirm("Voulez-vous vraiment supprimer cet utilisateur ?")) {
        // Requête AJAX
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Actualiser la page après la suppression
                    location.reload();
                } else {
                    alert("Erreur lors de la suppression de l'utilisateur : " + xhr.responseText);
                }
            }
        };

        xhr.open("POST", "supprimer_utilisateur.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("login=" + encodeURIComponent(login));
    }
}


// Fonction pour filtrer les utilisateurs du tableau en fonction du login
function searchUser() {
    var input = document.getElementById("searchInput");
    var filter = input.value.toUpperCase();
    var table = document.getElementById("userTable");
    var tr = table.getElementsByTagName("tr");

    for (var i = 0; i < tr.length; i++) {
        var td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            var login = td.innerText.toUpperCase();
            if (login.indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
