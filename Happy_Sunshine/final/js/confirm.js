var inputList = document.getElementsByClassName('button_input');

var ASAP = document.getElementById("ASAP");

// for(var i of inputList){
//     if(i.value == "ASAP"){
//         console.log("IS ASAP");
//         ASAP = i;
//     }
// }

var customTime = document.getElementById("custom_pick_up_time");

if(ASAP.checked == true){
    customTime.value = "";
    
}

ASAP.addEventListener("click", function(){
    console.log("ASAP CLICKED");
    if(ASAP.checked == true){
        customTime.value = "";
    }
});