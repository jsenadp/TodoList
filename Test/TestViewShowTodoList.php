<?php

require_once "../Model/ToDoList.php";
require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

AddTodoList("Jalasena");
AddTodoList("Dwi");
AddTodoList("Putra");
AddTodoList("Belajar");
AddTodoList("Programming");

ViewShowTodoList();