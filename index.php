<?php

$users = [

	[
   "name" => "Drake",
	"username" => "Brian",
	"age" => 23,
	"email" => "Drake@example.com"
	], 
	[
		"name" => "Ria",
		"username" => "Brian",
		"age" => 20,
		"email" => "Ria@example.com"
		], 
		[
			"name" => "Mary",
			"username" => "Brian",
			"age" => 20,
			"email" => "Mary@example.com"
			], 
		];
		
		$products = [
			[
				"product__title" => "chair",
				"product__price" => 20,
				"create" => "2021-07-28"
				], 
				[
				"product__title" => "table",
				"product__price" => 50,
				"create" => "2021-07-28"
					], 
					[
				"product__title" => "computer",
				"product__price" => 100,
				"create" => "2021-07-28"
					], 
		];
		

   function map($items, $func) {
     $results = [];

	  foreach($items as $item) 
	  {
       $results[] = $func($item);
	  }
	  return $results;
	};

    $emails = map($users, function($user){
    return $user['email'];
	 });

	 $names = map($users, function($user){
    return $user ['name'];
	 });
	 
    $finalProducts = map($products, function($product){
     return [
		  "title" => $product['product__title'],
		  "price" => $product['product__price']
	  ];
	 });
 var_dump($email, $name, $products);
	
		