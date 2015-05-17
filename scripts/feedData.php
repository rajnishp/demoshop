<?php 

$file = 'data.txt';

$data = file($file);
$inputHandle = fopen("php://stdin", 'r');

$db_handle = mysqli_connect("127.0.0.1", "root", "redhat11111p","cornerShop");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


foreach ($data as $value) {
       		
    $pieces = explode(",", $value);
    print_r($pieces);
    
    $new = 'y';
    
    while ($new == 'y') {
    	$categories = mysqli_query($db_handle, "SELECT *
												FROM `category`;");
	    //echo "id Category Name";
	    $count = 0;
	    while($category = mysqli_fetch_array($categories)) {
	    		$count ++;

	        	echo   $category ['name'] . "(". $category['id'].")       ";

	        	if ($count >= 8){
	        		echo "\n\n";
	        		$count = 0;
	        	}

	    }

	    echo "Do you want to create new category [y/n]\n";
	    $new = fgetc(fopen("php://stdin", 'r'));

	    if ($new == 'y'){
	    	
	    	echo "Type category name\n";
			
			$catName = fgets(fopen("php://stdin", 'r'));    	
			
			echo "parent category id\n";
			$parentId = fgets(fopen("php://stdin", 'r'));

			$sql = "INSERT INTO category (id, store_id, name, parent_id, image_link, type) 
						VALUES (NULL, '1', '". $catName ."', '". $parentId ."' , '', '1');";

        	$score1 = mysqli_query($db_handle, $sql);    	

	    }
	        	

    }
	    


    echo "Going to add product, Please type category ID form above list \n";
    $catId = fgets(fopen("php://stdin", 'r'));

    $thiscategories = mysqli_query($db_handle, "SELECT name FROM `category` WHERE id = '". $catId . "';");
    $temp = mysqli_fetch_array($thiscategories);
    print_r($temp);
    
    $imageLink = "media/" . $temp['name'] . "/" . $pieces[1 ]. "_" . $pieces[0] ."/1.jpg";

    echo "image url will be : " . $imageLink . "\n";

    $productSql = "INSERT INTO product (id, store_id, name, description, sku, pricebuy, pricesell, category_id, image_link, type, last_update_time) 
    		VALUES (NULL, '2', '". $pieces[1] ."', '". $pieces[4] ."', '". $pieces[0] ."', '". $pieces[2] ."', '". $pieces[3] ."', '". $catId ."', '". $imageLink ."', '1', null)";

    $score1 = mysqli_query($db_handle, $productSql);
}




?>