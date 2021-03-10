let guziki = document.querySelectorAll("button");

guziki[0].onclick = () => {
  let akapit = document.querySelector("p.abc");
  akapit.style.color = "hotpink";
};

guziki[1].onclick = () => {
  let akapit = document.querySelector("p#id1");
  akapit.style.color = "red";
  akapit.style.backgroundColor = "black";
};

guziki[2].onclick = () => {
  let element = document.querySelector("ul>li");
  element.style.border = "5px solid purple";
};

guziki[3].onclick = () => {
  let punkty = document.querySelectorAll("ol>li.def");
  punkty.forEach((i) => {
    i.style.textDecoration = "overline";
  });
};

guziki[4].onclick = () => {
  let punkty = document.querySelectorAll("li.def");
  punkty.forEach((i) => {
    i.style.fontWeight = "bold";
  });
};
