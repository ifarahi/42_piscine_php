var ft_list;
var cookie = [];

window.onload = function () {
    document.querySelector("#new").addEventListener("click", newTodo);
    ft_list = document.querySelector("#ft_list");
    var tmp = document.cookie;
    if (tmp) {
        cookie = JSON.parse(tmp);
        cookie.forEach(function (e) {
            addTodo(e);
        });
    }
};

function getDate()
{
    var d = new Date();
    d.setTime(d.getTime() + (30*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  return (expires);
}

function setcookie() {
    var todo = ft_list.children;
    var newCookie = [];
    for (var i = 0; i < todo.length; i++)
        newCookie.unshift(escape(todo[i].innerHTML));
    document.cookie = JSON.stringify(newCookie) + '; ' + getDate();
};


function newTodo(){
    var todo = prompt("Whats your todo task?!");
    if (todo !== '' && todo.replace(/\s+/g, '').length) {
        addTodo(todo)
    }
}

function addTodo(todo){
    var div = document.createElement("div");
    div.innerHTML = unescape(todo);
    div.addEventListener("click", deleteTodo);
    ft_list.insertBefore(div, ft_list.firstChild);
    setcookie();
}

function deleteTodo(){
    if (confirm("Are you sure you?")){
        this.parentElement.removeChild(this);
        setcookie();
    }
}