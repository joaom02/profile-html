function mail(){
    document.getElementById("form").style.display = "block";
    document.getElementById("botao").style.visibility = "hidden";
}

function cancelar(){
    document.getElementById("form").style.display = "none";
    document.getElementById("botao").style.visibility = "visible";
}

function enviar(){
    alert(document.getElementById("idEmail").value + "\n\n" + document.getElementById("idMsg").value);
}

let mybutton = document.getElementById("btn-back-to-top");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}