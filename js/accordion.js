var accordion = document.getElementsByClassName("accordion");

var i;
for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener("click", clicked);
}

function clicked(){
    this.classList.toggle("active");
    var acc_answer = this.nextElementSibling;

    if (acc_answer.style.display === "block") {
        acc_answer.style.display = "none";
    } else {
        acc_answer.style.display = "block";
    }
}