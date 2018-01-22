function checkInput(str){
    if(str === ""){
        document.getElementById('response').innerHTML = 'Поле не может быть пустым';
        return false;
    }
    
    if(str.length < 2){
        document.getElementById('response').innerHTML = 'Поля менее 2х символов';
        return false;
    }
    
    if(str.indexOf(" ", str.length-1) >= 0){
        str = str.substr(0, str.length-1);
    } else {
        return str;
    }

    return checkInput(str);
}