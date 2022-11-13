var task = document.querySelector('#task');
var todobtn = document.querySelector('#todo');
var todoshow = document.querySelector('#todo-list-show');
// function addtodo(){
//     console.log(task.value);
// }
todobtn.addEventListener('click', function () {
    if(task.value==''){
        alert("Enter A Task Value to continue!");
    }
    else{
        // addtodo();
        if (localStorage.getItem('todo-list') == null) {
            localStorage.setItem('todo-list', '[]');
            var todos = JSON.parse(localStorage.getItem('todo-list'));
            todos.push(task.value);
            localStorage.setItem('todo-list', JSON.stringify(todos));
            showtododata();
            task.value=null;
        }
        else {
            //JSON.parse is way to conversation string to array
            // localStorage.setItem('todo-list','[dfdfd]');
            var todos = JSON.parse(localStorage.getItem('todo-list'));
            todos.push(task.value);
            localStorage.setItem('todo-list', JSON.stringify(todos));
            showtododata();
            task.value=null;
        }
        // window.location.reload();
    }
});
function showtododata(){
    var data = JSON.parse(localStorage.getItem('todo-list'));
    var display='';
    for(d in data){
        // todoshow.innerHTML += d;
        display += `
        <tr class="text-center">
            <th scope="row">
                ${data[d]}
            </th>
            <td>
                <button class="py-3 px-4 rounded-pill" onclick="edittodo(${d})"><i class="fa-solid fa-pen-to-square"></i></button>
                <button class="py-3 px-4 rounded-pill" onclick="deletetodo(${d})"><i class="fa-solid fa-delete-left"></i></button>
            </td>
        </tr>
        `;
    }   
    // var todoshow = document.querySelector('#todo-list-show');
    todoshow.innerHTML = display;
}
showtododata();

// function deletetodo(id){
//     // console.log(id);
//     var data = JSON.parse(localStorage.getItem('todo-list'));
//     data.splice(id,1);
//     localStorage.setItem('todo-list', JSON.stringify(data));
//     showtododata();
// }
function deletetodo(id){
    if(confirm("Are you Sure to perform delete Operation?")){
        // console.log(id);
        var data = JSON.parse(localStorage.getItem('todo-list'));
        data.splice(id,1);
        localStorage.setItem('todo-list', JSON.stringify(data));
        showtododata();
    }
}
function edittodo(id){
    // task.value = JSON.parse(localStorage.getItem('todo-list'))[id];

    var data = JSON.parse(localStorage.getItem('todo-list'));
    task.value = data[id];  
    var updates = document.querySelector("#btnHolder");
    updates.innerHTML = `
        <button class="btn btn-success py-2 px-4 rounded-pill" onclick="updatetodo(${id})">Update</button>
    `;

}
function updatetodo(id){
    var data = JSON.parse(localStorage.getItem('todo-list'));
    // data.splice(id);
    data[id]=(task.value);
    localStorage.setItem('todo-list', JSON.stringify(data));
    showtododata();
}
