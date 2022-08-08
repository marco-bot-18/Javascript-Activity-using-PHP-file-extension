function Multiply() {
    let num1 = parseInt(document.getElementById('numMultiply1').value);
    let num2 = parseInt(document.getElementById('numMultiply2').value);
    let res = "";

    for(let i = 1; i <= num2; i++){
        res += num1 + " * " + i + " = " + num1 * i + "\n";
        console.log(res);
    }
    
    document.getElementById('demo').innerHTML = res;    
};

