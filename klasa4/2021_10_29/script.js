let printTab = (tab) => {
  tab.forEach((element) => {
    console.log(element);
  });
};

// Zdefinuj prostą tablicę, która będzie zawierała liczby 6,13,18,24,125,46,57.
// Wypisz tablicę do div z id="Danetablica" za pomocą pętli for. Dane rozdziel przecinkami.
let tab = [6, 13, 18, 24, 125, 46, 57];
Danetablica.innerHTML = "<h2>Zad 1: </h2>" + tab.join(", ");

// Zdefinuj prostą tablicę, która będzie zawierała liczby 6,13,18,24,125,46,57.
// Wypisz tablicę do konsoli. Dodaj do tablicy 2 liczby 33 i 44.
// Zrób to w jednej instrukcji. Wypisz do konsoli dłuość tablicy i jej zawartość.
console.log("Zad 2: ");
tab = [6, 13, 18, 24, 125, 46, 57];
printTab(tab);
console.log("Length: " + tab.length);
tab.push(33, 44);
console.log("".padEnd(20, "="));

// Wykorzystaj podaną tablicę osoby=["Jan Kozaczek", "Zygfryd Sztosik", "Stefan Uczciwy",
// "Ewa Mocna", "Mariusz Wiercipiętka"] Odwróć tablicę - pierwszy element ma być ostatnim, itd.
console.log("Zad 3: ");
let osoby = [
  "Jan Kozaczek",
  "Zygfryd Sztosik",
  "Stefan Uczciwy",
  "Ewa Mocna",
  "Mariusz Wiercipiętka",
];

osoby.reverse();
printTab(osoby);

// Zdefiniuj prostą tablicę, która będzie zawierała imiona: 'Zenek', 'Tomasz', 'Adam',
// 'Ewa', 'Krzysztof' Posortuj ją i ponownie wyświetl

let zad4 = ["Zenek", "Tomasz", "Adam", "Ewa", "Krzysztof"];

zad4.sort();

printTab(zad4);

// Wykorzystaj podaną tablicę osoby=["Jan Kozaczek", "Zygfryd Sztosik", "Stefan Uczciwy",
// "Ewa Mocna", "Mariusz Wiercipiętka"].
// Wyświetl jej elementy w jednej lini rozdzielone przecinkami
// Poniżej wyświetl jej elementy w kolejnych akapitach

osoby = [
  "Jan Kozaczek",
  "Zygfryd Sztosik",
  "Stefan Uczciwy",
  "Ewa Mocna",
  "Mariusz Wiercipiętka",
];

let zad5 = document.getElementById("zad5");
let p = document.createElement("p");
zad5.innerHTML = "<h2>Zad 5:</h2> ";
p.innerText = osoby.join(", ");
zad5.appendChild(p);
osoby.forEach((element) => {
  let p = document.createElement("p");
  p.innerHTML = element;
  zad5.appendChild(p);
});

// Przekazano dane
// samochody = ["Skoda", "Fiat", "Mercedes", "Volvo", "Kia", "Opel", "Citroen"]
// wyświetl je w konsoli, ale zamiast elementów 2 i 3 wyśweitl słowo "tajne";
console.log("".padEnd(20, "="));
samochody = ["Skoda", "Fiat", "Mercedes", "Volvo", "Kia", "Opel", "Citroen"];
console.log("Zad 6: ");
for (let index = 0; index < samochody.length; index++) {
  const element = samochody[index];
  console.log(index == 2 || index == 3 ? "tajne" : element);
}

// Do zmiennej tekst przypisz wartość
// "JavaScript został opracowany przez firmę Netscape w połowie lat 90.
// Jego twórcą jest Breand Eich"
// Z podanego tekstu wypisz 2 znaki począwszy od 22 znaku tekstu.
// Tekst wpisz do div id="informacja"
let tekst =
  "JavaScript został opracowany przez firmę Netscape w połowie lat 90. Jego twórcą jest Breand Eich";

informacja.innerText = tekst.substr(21, 2);

// zad 8
console.log("".padEnd(20, "="));
console.log("Zad 8:");
let tekstzesplitowany = tekst.split(" ");
printTab(tekstzesplitowany);

pb95 = 4;
var oferta = {
  marka: "Kia",
  model: "Carens",
  cena: 60000,
  spalanie: 8,
  koszt100km: () => {
    return this.spalanie * pb95;
  },
};
oferta.rocznik = 2004;

oferta.wiekSamochodu = () => {
  return new Date().getFullYear() - oferta.rocznik;
};
console.log("".padEnd(20, "="));
console.log("Zad 11: ");
// Do zmiennej liczba1 przypisz wartość 216.7621
// Wyświetl część całkowitą tej zmiennej w konsoli
let liczba1 = 216.7621;
console.log(parseInt(liczba1));

// Wyświetl w konsoli 6 przypadkowych liczb z zakresu od 1 do 49
console.log("".padEnd(20, "="));
console.log("Zad 12: ");
for (let index = 0; index < 6; index++) {
  console.log(Math.random() * 48 + 1);
}

// Wyświetl na ekranie 6 przypadkowych liczb całkowitych rozdzielonych przecinkami
console.log("".padEnd(20, "="));
console.log("Zad 12: ");
for (let index = 0; index < 6; index++) {
  console.log(parseInt(Math.random() * 2 ** 32));
}

// Skrozystaj z metody prompt(). Napisz program, który w kółko dla podaego promienia>0
// oblicza pole koła i jego obwód
setInterval(() => {
  let r = parseFloat(prompt());
  r = Math.abs(r);
  console.log(
    `Dla promienia ${r}, pole to ${Math.PI * r ** 2}, a obwód to ${
      2 * Math.PI * r
    }`
  );
}, 1000);
