function Convert() {
    let input = parseInt(document.getElementById('numTemp').value);
    let res;
    var textConvert = document.getElementById('getTextConvert').value;
    var disp_res = document.getElementById('textRes');

    if(textConvert == "celToFah") {
        res = (input * 1.8) + 32;
        disp_res.innerHTML = res.toFixed(1) + "°F";
        console.log(res.toFixed(1) + "°F");
    }
    else if(textConvert == "fahToCel") {
        res = (input - 32) / 1.8;
        disp_res.innerHTML = res.toFixed(4) + "°C";
        console.log(res.toFixed(4) + "°C");
    }
    else if(textConvert == "celToKelv") {
        res = input + 273.15;
        disp_res.innerHTML = res.toFixed(2) + "K";
        console.log(res.toFixed(2) + "K");
    }
};

function Update() {
    var select = document.getElementById('converter');
    var option = select.options[select.selectedIndex]; //get the value of selected index from dropdown

    document.getElementById('getTextConvert').value = option.value;
};

Update(); //to load the selected value in dropdown in hidden textbox
