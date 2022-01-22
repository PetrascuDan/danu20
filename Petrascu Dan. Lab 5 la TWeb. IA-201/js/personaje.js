function hiddenClickButton(id){
    var el=document.getElementById(id);
    if(el.style.display=="table-row"){
        el.style.display="none";
    } 
    else {
        el.style.display="table-row";
    }
}
