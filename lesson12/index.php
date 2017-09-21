<?php
spl_autoload_register();
echo '<pre>';
$review = new \Models\Review();
$data = [
        'name' => 'Роман',
    'phone' => '89999999999',
    'text' => 'Хороший сайт',

];
$review->create($data);
print_r($data);