<?php

require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

AddTodoList("Jalasena");
AddTodoList("Dwi");
AddTodoList("Putra");
AddTodoList("Desy");
AddTodoList("Ayu");

ShowTodoList();

RemoveTodoList(3);

ShowTodoList();

$success = RemoveTodoList(5);
var_dump($success);
ShowTodoList();