btn.addEventListener("click", () => {
  zawodnik.value.split(" ").forEach((element) => {
    elem = document.createElement("li");
    elem.innerText = element.toUpperCase();
    document.getElementsByTagName("ul")[0].appendChild(elem);
  });
});
