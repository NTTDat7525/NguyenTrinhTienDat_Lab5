<?php
require 'vendor/autoload.php';
$faker = Faker\Factory::create('vi_VN');

echo "<h2>Thông tin ngẫu nhiên</h2>";
echo "Tên: " . $faker->name . "<br>";
echo "Địa chỉ: " . $faker->address . "<br>";
echo "Email: " . $faker->email;