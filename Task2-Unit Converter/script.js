let feet    =document.getElementById("feet");
let meter   =document.getElementById("meter");
let inch    =document.getElementById("inches");
let cm      =document.getElementById("cm");
let yard    =document.getElementById("yards");
let km      =document.getElementById("km");
let mile    =document.getElementById("miles");
let kg      =document.getElementById("kg");
let g       =document.getElementById("g");
let hours   =document.getElementById("hours");
let minuts   =document.getElementById("minuts");
let seconds   =document.getElementById("seconds");
let celsius   =document.getElementById("celsius");
let fahrenheit   =document.getElementById("fahrenheit");


function feetToOther(val){
    meter.value =  val/3.2808; 
    inch.value =  val*12;   
    cm.value    =  val/0.032808; 
    yard.value  =  val*0.33333;  
    km.value    =  val/3280.8; 
    mile.value  =  val*0.00018939;       
}
function meterToOther(val){
    feet.value = val*3.2808;
    inch.value = val*39.370;  
    cm.value   = val/0.01;
    yard.value = val*1.0936; 
    km.value   = val/1000;
    mile.value = val*0.00062137;
}
function inchesToOther(val){
    feet.value = val*0.083333;
    meter.value = val/39.370;  
    cm.value = val/0.39370;
    yard.value = val*0.027778; 
    km.value = val/39370;
    mile.value = val*0.000015783;
}
function cmToOther(val){
    feet.value = val*0.032808;
    meter.value = val/100;  
    inch.value = val*0.39370;
    yard.value = val*0.010936; 
    km.value = val/100000 ;
    mile.value = val*0.0000062137;
}
function yardsToOther(val){
    feet.value = val*3;
    inch.value = val*36;  
    cm.value = val/0.010936;
    meter.value = val/1.0936; 
    km.value = val/1093.6;
    mile.value = val*0.00056818;
}
function kmToOther(val){
    feet.value = val*3280.8;
    inch.value = val*39370;  
    cm.value = val*100000;
    yard.value = val*1093.6; 
    meter.value = val*1000;
    mile.value = val*0.62137;
}
function milesToOther(val){
    feet.value = val*5280;
    inch.value = val*63360;  
    cm.value = val/0.0000062137;
    yard.value = val*1760; 
    km.value = val/0.62137;
    meter.value = val/0.00062137;

}
function kgToother(val){
    g.value = val*1000;
}

function gToother(val){
    kg.value = val/1000;
}

function hoursToother(val){
    minuts.value= val*60;
    seconds.value= val*60*60;
}

function minutsToother(val){
    hours.value= val/60;
    seconds.value= val*60;
}

function secondsToother(val){
    hours.value= val/3600;
    minuts.value= val/60;
}

function celsiusToother(val){
    fahrenheit.value= val*(9/5)+32;
}

function fahrenheitToother(val){
    celsius.value= (val-32)*(5/9);
}
// *********************//



function convertToOthers(convertFrom,value){    
    switch(convertFrom){
        case "feet" : feetToOther (parseFloat(value)); break;
        case "meter": meterToOther(parseFloat(value)); break;
        case "inch" : inchesToOther(parseFloat(value)); break;
        case "cm"   : cmToOther(parseFloat(value)); break;
        case "yard" : yardsToOther (parseFloat(value)); break;
        case "km"   : kmToOther (parseFloat(value)); break;
        case "mile" : milesToOther(parseFloat(value)); break;
        case "kg"   : kgToother(parseFloat(value));break;
        case "g"   : gToother(parseFloat(value));break;
        case "hours": hoursToother(parseFloat(value));break
        case "minuts": minutsToother(parseFloat(value));break
        case "seconds": secondsToother(parseFloat(value));break
        case "celsius": celsiusToother(parseFloat(value));break
        case "fahrenheit": fahrenheitToother(parseFloat(value));break

    }
}