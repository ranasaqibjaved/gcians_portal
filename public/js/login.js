function ShowPassword1() {
    var x = document.getElementById("myInput1");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
function ShowPassword2() {
    var x = document.getElementById("myInput2");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
function ShowPassword3() {
    var x = document.getElementById("myInput3");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
addEventListener(
    "load",
    function () {
        setTimeout(hideURLbar, 0);
    },
    false
);

function hideURLbar() {
    window.scrollTo(0, 1);
}
