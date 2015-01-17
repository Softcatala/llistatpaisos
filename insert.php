<?php
require( 'lib/db.php' );

$file = array('path' => 'csv/llistat_cldr.csv', 'source' => 'cldr');
$fields = array('source', 'alfa2_code', 'alfa3_code', 'en', 'ca', 'ca_long', 'ca_article', 'state', 'comments');

# Open the File.
if (($handle = fopen($file['path'], "r")) !== FALSE) {
    # Set the parent multidimensional array key to 0.
    $nn = 0;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    	# Count the total keys in the row.
    	
    	$count = count($data);
    	if($nn == 0) {
    		for ($x=0;$x<$count;$x++) {
	            $header[$x] = $data[$x];
	        }
    	} else {
	        # Populate the multidimensional array.
	        for ($x=0;$x<$count;$x++) {
	            $countries[$nn][$header[$x]] = $data[$x];
	        } 
    	}
    	$nn++;
    }
    # Close the File.
    fclose($handle);
}

//Prepare the columns for the SQL insert statement
$columns = implode(", ",$fields);

foreach ($countries as $key => $country) {
	foreach ($fields as $field) {
		if($field == 'source') {
			$country_values[$field] = $db->escape($file['source']);
		} else {
			if(isset($country[$field])) {
				$country_values[$field] = $db->escape($country[$field]);
			} else {
				$country_values[$field] = '';
			}
		}
	}

	//Prepare values to be inserted in the DB
	$values = implode("', '", $country_values);

	$db->query( "INSERT INTO country_codes ( $columns ) VALUES ( '$values' )" );
}
