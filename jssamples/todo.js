function createTask(){
    var  i = 0;
    var task = document.getElementById("task").value;
    if(task === ""){
        alert("Enter some todo task");
        return 0;
    }
    var x = document.createElement("li");
    x.setAttribute('id', i);
    var t = document.createTextNode(task);
    x.appendChild(t);
    document.getElementById("todo-list").appendChild(x);
    document.getElementById("task").value = "";
}