function setWynik(a) {
  document.getElementById("wynik").innerHTML = `Wynik: ${a}`;
}

function dodawanie() {
  let liczbaA = Number(document.getElementById("liczbaA").value);
  let liczbaB = Number(document.getElementById("liczbaB").value);
  if (liczbaA < 0 || liczbaB < 0) {
    alert("Błędne dane");
  } else {
    setWynik(liczbaB + liczbaA);
  }
}

document.getElementById("odejmowanie").onclick = function () {
  let liczbaA = Number(document.getElementById("liczbaA").value);
  let liczbaB = Number(document.getElementById("liczbaB").value);
  setWynik(liczbaA - liczbaB);
};

document.getElementById("mnozenie").onclick = () => {
  let liczbaA = Number(document.getElementById("liczbaA").value);
  let liczbaB = Number(document.getElementById("liczbaB").value);
  setWynik(liczbaB * liczbaA);
};

document.getElementById("dzielenie").onclick = () => {
  let liczbaA = Number(document.getElementById("liczbaA").value);
  let liczbaB = Number(document.getElementById("liczbaB").value);
  setWynik(liczbaA / liczbaB);
};

document.getElementById("potegowanie").onclick = function () {
  let liczbaA = Number(document.getElementById("liczbaA").value);
  let liczbaB = Number(document.getElementById("liczbaB").value);
  setWynik(liczbaA ** liczbaB);
};
