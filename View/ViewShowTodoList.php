<?php

require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../Helper/input.php";

function ViewShowTodoList(){

    while (true) {
        ShowTodoList();

        echo "MENU".PHP_EOL;
        echo "1. Tambah Todo".PHP_EOL;
        echo "2. Hapus Todo".PHP_EOL;
        echo "x. Keluar".PHP_EOL;

        $pilihan = input("Pilih");
        if ($pilihan == "1"){
            viewAddTodoList();
        }elseif ($pilihan == "2"){
            viewRemoveTodoList();
        }elseif ($pilihan == "x"){
            break;
        }else{
            echo "Pilihan Tidak Tersedia";
        }
    }

    echo "Sampai Jumpa Lagi";
    
}