var button_input_array = document.getElementsByClassName("button_input");
var button_label_array = document.getElementsByClassName("button_label");

//console.log(button_label_array);

for(var i = 0; i < button_label_array.length; i++){
    //console.log(button_label_array[i]);
    if(!button_input_array[i].classList.contains("custom_pick_up_time")){
        button_label_array[i].addEventListener("click", bindClick(i));
    }
}

function bindClick(i){
    return function(){
        if(button_input_array[i].checked){
            //console.log("WORKED");
            button_input_array[i].checked = false;
        } else {
            //console.log("ERROR");
            button_input_array[i].checked = true;
        }
    }
}