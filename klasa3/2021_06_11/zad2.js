btn.addEventListener("click", () => {
  let year = parseInt(rok.value);
  let month = parseInt(mies.value);
  let days31 = [1, 3, 5, 7, 8, 10, 12];
  let days30 = [4, 6, 9, 11];
  if (days30.includes(month)) dni.innerText = "30";
  else if (days31.includes(month)) dni.innerText = "31";
  else if (month === 2) {
    if ((year % 4 == 0 && year % 100 != 0) || year % 400 == 0)
      dni.innerText = 29;
    else dni.innerText = 28;
  }
});
