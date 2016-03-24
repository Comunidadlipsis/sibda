function updateOnlineStatus(msg) {
    var status = document.getElementById("status");
    var condition = navigator.onLine ? "ACTIVA" : "DESACTIVADA";
    status.setAttribute("class", condition);
    var state = document.getElementById("state");
    state.innerHTML = condition;
}

function loaded() {
    updateOnlineStatus("load");
    document.body.addEventListener("offline", function() {
        updateOnlineStatus("offline")
    }, false);
    document.body.addEventListener("online", function() {
        updateOnlineStatus("online")
    }, false);
}