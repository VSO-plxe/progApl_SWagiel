function RGB(color) {
  let size = document.getElementById("rozmiarTekstu").value;
  let styl = document.getElementById("stylTekstu").value;
  let wynik = document.getElementById("wynikTekst");
  wynik.style.color = color;
  wynik.style.fontSize = size + "%";
  wynik.style.fontStyle = styl;
}