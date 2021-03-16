let guziki = document.querySelectorAll("button");

guziki[0].addEventListener("click", () => {
  document.querySelector("ul").classList.toggle("zmiana");
});

guziki[1].addEventListener("dblclick", () => {
  let lista = document.querySelectorAll("li");
  lista[1].style.backgroundColor = "hotpink";
  lista[4].style["background-color"] = "green";
});

guziki[2].addEventListener("click", () => {
  let lista = document.querySelectorAll("li");
  for (let zmienna of lista) zmienna.classList.toggle("czcionka");
});
