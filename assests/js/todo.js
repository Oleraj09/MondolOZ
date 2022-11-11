var task = document.querySelector('#task');
var todobtn = document.querySelector('#todo');
var todoshow = document.querySelector('#show');
// function addtodo(){
//     console.log(task.value);
// }
todobtn.addEventListener('click', function () {
    // addtodo();
    if (localStorage.getItem('todo-list') == null) {
        localStorage.setItem('todo-list', '[]');
        var todos = JSON.parse(localStorage.getItem('todo-list'));
        todos.push(task.value);
        localStorage.setItem('todo-list', JSON.stringify(todos));
    }
    else {
        //JSON.parse is way to conversation string to array
        // localStorage.setItem('todo-list','[dfdfd]');
        var todos = JSON.parse(localStorage.getItem('todo-list'));
        todos.push(task.value);
        localStorage.setItem('todo-list', JSON.stringify(todos));
    }
    window.location.reload();
});
var data = JSON.parse(localStorage.getItem('todo-list'));
data.forEach(items => {
    todoshow.innerHTML += items;
});

// for (let k = 0; k < localStorage.length; k++) {
//     const key = localStorage.key(k);
//     const value = localStorage.getItem(key);
//     todoshow.innerHTML = value;
// }
// let list = '';
// data.forEach(datashow);
// todoshow.innerHTML = list;
// function datashow(items){
//    list += items;
// }

