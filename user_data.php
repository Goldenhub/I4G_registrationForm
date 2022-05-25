<?php

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['date']) && isset($_POST['gender']) && isset($_POST['country'])){
       
        //Get filename
        $filename = 'userdata.csv';
    
        //Open file in append mode
        $fileHandlerAppend = fopen($filename, "a");
        $fileHandlerRead = fopen($filename, "r");
    
        // Write the data to the CSV file
        $put = fputcsv($fileHandlerAppend, $_POST, ",");
        // Close file
        fclose($fileHandlerAppend);
    
        // Read the file content
        while (($data = fgetcsv($fileHandlerRead, filesize($filename), ",")) !== false) 
        {        
          $csvarray[] = $data;
        }
        // Close file
        fclose($fileHandlerRead);
    
        // print to screen
        echo "<pre>";
        print_r($csvarray);
        echo "</pre>";
        
    }else{
        echo "Please fill all the form fields";
    }

