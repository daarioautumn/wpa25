<?php 

define("DD", realpath(__DIR__ . "/.."));

require DD . "/vendor/autoload.php";

// $stus = DB::table("students")->select("id", "name", "address")->get();
// var_dump($stus);
// $students = DB::table("students")->get();
// var_dump($students);
// $stocks = DB::table("stocks")->get();
// INSERT INTO <table_name> name, address VALUES 'Aung Aung', "Hledan"

// DB::table("students")->insert([
// 	"name"		=> 'Aung Aung',
// 	'address'	=> 'Mandalay',
//   'university' => 'MUFL'
// 	]);

DB::table("students")->update(2,[
    'name' => 'Mg Mg',
    'university' => 'Yatanarpon'
  ]);

// DB::table("stocks")->insert([
// 		'name'	=> 'iPad Pro',
// 		'price'	=> '900000'
// 	]);

// DB::table("students")->delete(1);

// $students = DB::table("students")->paginate(5);






// SELECT id, name, address FROM students;
 ?>