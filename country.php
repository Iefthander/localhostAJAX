<?php
/* Выбор номера тега категории и определение его товара (Клавы) */
if ($_GET["country"] == 2) {
	echo json_encode(array(
	"1" => "Клавиатура Logitech",
	"2" => "Клавиатура BLOODY"));
/* Выбор номера тега категории и определение его товара (Мониторы) */
} else if ($_GET["country"] == 3){
	echo json_encode(array(
	"1" => "Монитор IIyama",
	"2" => "Монитор Samsung"));
/* Выбор номера тега категории и определение его товара (Мышки) */
} else if ($_GET["country"] == 4){
echo json_encode(array(
	"1" => "Игровая мышь Sensei",
	"2" => "Мышь XTRFY"));
/* Выбор номера тега категории и определение его товара (Колонки) */
} else if ($_GET["country"] == 5){
echo json_encode(array(
	"1" => "Колонки SVEN",
	"2" => "Колонки Edifier"));
/* Выбор номера тега категории и определение его товара (Всё) */
} else if ($_GET["country"] == 1){
echo json_encode(array(
	"1" => "Клавиатура Logitech",
	"2" => "Клавиатура BLOODY",
	"3" => "Монитор IIyama",
	"4" => "Монитор Samsung",
	"5" => "Игровая мышь Sensei",
	"6" => "Мышь XTRFY",
	"7" => "Колонки SVEN",
	"8" => "Колонки Edifier"));
}else{
	echo "";
}
?>