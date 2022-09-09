function checker(that) {
    if (that.value == "create-database") {
        document.getElementById("ifyes").style.display = "block";
    } else {
        document.getElementById("ifyes").style.display = "none";
    }
}