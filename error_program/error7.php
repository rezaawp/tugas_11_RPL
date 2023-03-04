<?php

    $items = ['item1', 'item2', 'item3']
    if(count($items) == 0){
        echo "Item Kosong";
    }else{
        foreach ($items as $item) {
            echo "Item : $item" ."<br />"; 
    }
    
    

 // expetasi output : 
 //          Item : item1
 //          Item : item2
 //          Item : item3