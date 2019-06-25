var ft_list;
var cookie = [];

$(document).ready(function(){
    $('#new').click(newTodo);
    $('#ft_list div').click(deleteTodo);
    ft_list = $('#ft_list');
    var tmp = document.cookie;
    if (tmp) {
        cookie = JSON.parse(tmp);
        cookie.forEach(function (e) {
            addTodo(e);
        });
    }
});

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
    if (todo !== '') {
        addTodo(todo)
    }
}

function addTodo(todo){
    ft_list.prepend($('<div>' + unescape(todo) + '</div>').click(deleteTodo))
    setcookie();
}

function deleteTodo(){
    if (confirm("Are you sure you?")){
        this.remove();
        setcookie();
    }
}