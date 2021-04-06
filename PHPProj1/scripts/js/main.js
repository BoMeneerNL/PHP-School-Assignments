function formdatachecker(){

}
function executor(action){
    if(action == 0){
        document.getElementById("bestelfinishform").style.display = "initial";
    }
    if(action == 1){
        Cookies.set('betalen','ja')
        location.href = "index?serve=betalen"
    }
    if(action == 2){
        Cookies.set('Allowed','allowed')
        location.href = "index"
    }
}