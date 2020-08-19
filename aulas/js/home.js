$(document).ready(() => {
    $("#nav-content").hide();
})

$("#open").click(() => {
    $("#menu-horizontal").hide(350);
    $("#nav-content").show(350);
});

$("#close").click(() => {
    $("#nav-content").hide(350);
    $("#menu-horizontal").show(350);
});