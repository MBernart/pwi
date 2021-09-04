document.getElementById("btn").onclick = () => {
    let nr_kawy = Number(document.getElementById("kawa").value);
    let waga = Number(document.getElementById("dag").value);

    nr_kawy == 1 || nr_kawy == 2 || nr_kawy == 3 ? 
    document.getElementById("wynik").innerHTML = (nr_kawy + 4) * waga +
    "zł" : alert("Nie ma takiej kawuśki");
};
