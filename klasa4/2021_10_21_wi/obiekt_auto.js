var pojazd = {
  marka: "Ford",
  model: "Fiesta",
  rok_produkcji: 2018,
  przebieg: "tak - biegał",
  wyswietlDane: function () {
    document.write(
      `Marka: ${this.marka}, model: ${this.model}, rok produkcji: ${this.rok_produkcji}}`
    );
  },
};
pojazd.wyswietlDane();
pojazd.numer_rej = "ABCDEF";
document.write("<br>");
pojazd.wyswietlDetails = () => {
  document.write(
    `Marka: ${pojazd.marka}, tablica rejestracyjna: ${pojazd.numer_rej}`
  );
};
pojazd.wyswietlDetails();
