// function stdForm() {
//     var std = document.getElementById("stdForm");
//     var tea = document.getElementById("teaForm");
//     var reg = document.getElementById("regForm");

//     std.classList.add("unhide");
//     std.classList.remove("hide");

//     tea.classList.add("hide");
//     tea.classList.remove("hide");

//     reg.classList.add("hide");
//     reg.classList.remove("hide");
// }
// function teaForm() {
//     var std = document.getElementById("stdForm");
//     var tea = document.getElementById("teaForm");
//     var reg = document.getElementById("regForm");

//     std.classList.add("hide");
//     std.classList.remove("hide");

//     tea.classList.add("unhide");
//     tea.classList.remove("hide");
    
//     reg.classList.add("hide");
//     reg.classList.remove("hide");
// }
// function regForm() {
//     var std = document.getElementById("stdForm");
//     var tea = document.getElementById("teaForm");
//     var reg = document.getElementById("regForm");

//     std.classList.add("hide");
//     std.classList.remove("hide");

//     tea.classList.add("hide");
//     tea.classList.remove("hide");

//     reg.classList.add("unhide");
//     reg.classList.remove("hide");
// }
function stdForm() {
    document.getElementById("stdForm").style.display = "block";
    document.getElementById("teaForm").style.display = "none";
    document.getElementById("regForm").style.display = "none";
}
function teaForm() {
    document.getElementById("stdForm").style.display = "none";
    document.getElementById("teaForm").style.display = "block";
    document.getElementById("regForm").style.display = "none";
}
function regForm() {
    document.getElementById("stdForm").style.display = "none";
    document.getElementById("teaForm").style.display = "none";
    document.getElementById("regForm").style.display = "block";
}
