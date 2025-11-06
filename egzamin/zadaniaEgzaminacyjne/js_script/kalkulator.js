function dodawanie(a, b){
    if(!sprawdzPola()) return;
    var a = document.getElementById("liczba1").value;
    var b = document.getElementById("liczba2").value;
    var wynik = parseInt(a) + parseInt(b);
    document.getElementById("wynik").innerHTML = "Wynik: " + wynik;
}

function odejmowanie(a, b){
    if(!sprawdzPola()) return;
    var a = document.getElementById("liczba1").value;
    var b = document.getElementById("liczba2").value;
    var wynik = parseInt(a) - parseInt(b);
    document.getElementById("wynik").innerHTML = "Wynik: " + wynik;
}

function mnozenie(a, b){
    if(!sprawdzPola()) return;
    var a = document.getElementById("liczba1").value;
    var b = document.getElementById("liczba2").value;
    var wynik = parseInt(a) * parseInt(b);
    document.getElementById("wynik").innerHTML = "Wynik: " + wynik;
}

function dzielenie(a, b){
    if(!sprawdzPola()) return;
    var a = document.getElementById("liczba1").value;
    var b = document.getElementById("liczba2").value;
    if(a != 0 && b != 0){
        var wynik = parseInt(a) / parseInt(b);
        document.getElementById("wynik").innerHTML = "Wynik: " + wynik;
    } else {
        document.getElementById("wynik").innerHTML = "Nie dziel przez 0!";
    }
}

function sprawdzPola(){
    var a = document.getElementById("liczba1").value;
    var b = document.getElementById("liczba2").value;
    if(a == "" || b == ""){
        document.getElementById("wynik").innerHTML = "Proszę uzupełnić obie liczby";
        return false;
    } else {
        return true;
    }
}