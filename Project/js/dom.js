var Div = document.getElementById("1");
Div.classList.add('comment');
var a = '<textarea name = "comment" cols="70" rows="10"></textarea>';







function del() {
    Div.firstElementChild.remove();
    
};
function add() {  
    Div.insertAdjacentHTML('afterbegin', a)
};




function style_2() {
    document.body.style.backgroundColor = "#aef5f5";
};
function style_1() {
    document.body.style.backgroundColor = "#5CCCCC";
};



function results_1(form) {
    if (form.rating.value == "")
        alert("Вы не поставили оценку.");
    else 
        alert("Вы поставили " + form.rating.value +", спасибо за оценку!");
}

function results_2(form) {
    if (form.login.value == "" || form.password.value == "")
        alert("Заполните форму полностью");
    else {
        alert("Ваш логин: " + form.login.value+ "\nВаш пароль: " + form.password.value);
    }
}

function results_3(form) {
    if (form.new_login.value == "" || form.new_password_1.value == "" || form.new_password_2.value == "" && (form.new_password_1.value == form.new_password_2.value))
        alert("Заполните форму полностью(или введите верные данные)");
    else {
        alert("Ваш новый логин: " + form.new_login.value+ "\nВаш новый пароль: " + form.new_password_1.value + "\nВаша возрастная категория: " + form.Age.value);
    }
}