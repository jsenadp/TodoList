<?php
//Menambah data ke todolist
function AddTodoList(string $todo){

    global $todolist;

    $number = sizeof($todolist)+1;

    $todolist[$number] = $todo;

    
}