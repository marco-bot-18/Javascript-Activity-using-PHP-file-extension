function Compute()
{
    var disp_add = document.getElementById("res1");
    var disp_sub = document.getElementById("res2");
    var disp_multi = document.getElementById("res3");
    var disp_div = document.getElementById("res4");

    var num1 = parseFloat(document.getElementById("num1").value);
    var num2 = parseFloat(document.getElementById("num2").value);
    
    if(num1 == "")
    {
        alert("Please enter number 1");
    }
    else if(num2 == "")
    {
        alert("Please enter number 2");
    }

    else if(num1 == "" && num2 == "")
    {
        alert("Please enter number 1 and 2");
    }
    else if(num1 != "" && num2 != "")
    {
        var res_1 = num1 + num2 || 0;
        var res_2 = num1 - num2 || 0;
        var res_3 = num1 * num2 || 0;
        var res_4 = num1 / num2 || 0;
                
        disp_add.innerHTML = " "  + res_1.toFixed(2);
        disp_sub.innerHTML = " "  + res_2.toFixed(2);
        disp_multi.innerHTML = " "  +  res_3.toFixed(2);
        disp_div.innerHTML = " "  + res_4.toFixed(2);
        console.log("Sum: " + res_1.toFixed(2));
        console.log("Difference: " + res_2.toFixed(2));
        console.log("Product: " + res_3.toFixed(2));
        console.log("Quotient: " + res_4.toFixed(2));
    }			
}


