document.getElementsByTagName("button")[0].addEventListener("click", () => {
  let liczba_ogloszen = parseInt(document.getElementById("ilosc").value);
  let cena_ogloszenia = liczba_ogloszen <= 50 ? 2 : 1;
  let obnizka = Boolean(document.getElementById("newsletter").checked);
  cena_ogloszenia = obnizka ? cena_ogloszenia - 0.2 : cena_ogloszenia;
  outp.innerText = `Koszt ogloszeń: ${cena_ogloszenia * liczba_ogloszen}`;
});
