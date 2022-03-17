var inputList = document.getElementsByClassName('button_input');

var ASAP = document.getElementById("ASAP");
var ASAP_label = document.getElementById("ASAP_label");
var ASAP_picker = document.getElementById("ASAP_picker");

// for(var i of inputList){
//     if(i.value == "ASAP"){
//         console.log("IS ASAP");
//         ASAP = i;
//     }
// }

var customTime = document.getElementById("custom_pick_up_time");
var customTime_label = document.getElementById("custom_pick_up_time_label");
var timePicker = document.getElementById("time_picker_container");

ASAP.addEventListener("click", function(){
    if(ASAP.hasAttribute("checked")){
    
    } else {
        customTime.value = "";

        customTime.style.border="2px solid #CEC3B7";
        customTime.style.borderLeft="0";
        customTime_label.style.backgroundColor = "#ECECEC";
        customTime_label.style.border="2px solid #CEC3B7";
        customTime_label.style.borderRight="0";
        timePicker.style.filter="drop-shadow(0 3px 1.5px #C4C4C4)";

        ASAP_label.style.backgroundColor="#F0D028";
        ASAP_label.style.border="2px solid #D6BA24";
        ASAP_label.style.filter="none";

        ASAP.setAttribute("checked", true);
        console.log("ASAP TRUE");
    }
});


customTime_label.addEventListener("click", function(){
    if(ASAP.hasAttribute("checked")){
        customTime.style.border="2px solid #D6BA24";
        customTime.style.borderLeft="0";
        customTime_label.style.backgroundColor = "#F0D028";
        customTime_label.style.border="2px solid #D6BA24";
        customTime_label.style.borderRight="0";
        timePicker.style.filter="none";

        ASAP_label.style.backgroundColor="#FFFFFF";
        ASAP_label.style.border="2px solid #C4C4C4";
        ASAP_label.style.filter="drop-shadow(0 3px 1.5px #C4C4C4)";
        
        ASAP.removeAttribute("checked");
        console.log("ASAP FALSE");
    } else {
        
    }
})

customTime.addEventListener("click", function(){
    if(ASAP.hasAttribute("checked")){
        customTime.style.border="2px solid #D6BA24";
        customTime.style.borderLeft="0";
        customTime_label.style.backgroundColor = "#F0D028";
        customTime_label.style.border="2px solid #D6BA24";
        customTime_label.style.borderRight="0";
        timePicker.style.filter="none";

        ASAP_label.style.backgroundColor="#FFFFFF";
        ASAP_label.style.border="2px solid #C4C4C4";
        ASAP_label.style.filter="drop-shadow(0 3px 1.5px #C4C4C4)";
        
        ASAP.removeAttribute("checked");
        console.log("ASAP FALSE");
    } else {
        
    }
})