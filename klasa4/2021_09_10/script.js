sum1 = 0;
for (let i = 1; i <= 10; i++) {
    sum1 += i;
    z1.innerHTML += `${sum1} `;

}
document.getElementById("z2b").addEventListener("click", () => {
    let x2 = document.getElementById("x2").value;
    let y2 = document.getElementById("y2").value;
    let amount = 0;
    for (i = 0; i < x2; i++) {
        amount += parseInt(y2);
        amount *= 1.08;
        // debugger;
    }

    // z2.innerHTML = Math.round(amount);
    z2.innerHTML = amount;
});

document.getElementById("z3b").addEventListener("click", () => {
    let x = parseInt(x3.value);
    let op = operator3.value;
    let y = parseInt(y3.value);
    let outp = document.getElementById("z3");
    outp.innerHTML = "";
    outp.innerHTML += "Wynik: ";
    switch (op) {
        case "+":
            outp.innerHTML += x + y;
            break;
        case "-":
            outp.innerHTML += x - y;
            break;
        case "*":
            outp.innerHTML += x * y;
            break;
    }
})

document.getElementById("z4b").addEventListener("click", () => {
    let z4 = document.getElementById("z4");
    let wzrost = parseFloat(document.getElementById("w4").value);
    let masa = parseFloat(document.getElementById("m4").value);
    let bmi = masa / ((wzrost * wzrost)) * 10000;
    z4.innerHTML = bmi;
    if (bmi < 18.5)
        z4.innerHTML += " - poniżej normy";
    else if (bmi > 25)
        z4.innerHTML += " - norma";
    else
        z4.innerHTML += " - powyżej normy";
})