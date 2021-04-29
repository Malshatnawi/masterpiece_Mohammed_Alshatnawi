<?php

namespace App;


class Cart
{
    public $items =[];
    public $totalPrice= 0;
    public $totalQty= 0;

    public function __construct($oldCart){

        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQty = $oldCart->totalQty;
        }
    }


    public function add($item , $id){
        $storedItem = ["price" => $item->course_price , "item" => $item];
            if(array_key_exists($id , $this->items)){
                $storedItem = $this->items[$id];
            }
            else{
                $this->items[$id]=$storedItem;
                $this->totalQty++;
                $this->totalPrice +=$item->course_price;
            }
        
    }

    public function delete($id){

        $storedItems = $this->items;
        $ItemPrice = $this->items[$id]["price"];

        unset($this->items[$id]);
        $this->totalQty--;
        $this->totalPrice -=$ItemPrice;

      
        // $storedItem = ["price" => $item->course_price , "item" => $item];
        //     if(array_key_exists($id , $this->items)){
        //         $storedItem = $this->items[$id];
        //     }
        //     else{
        //         $this->items[$id]=$storedItem;
        //         $this->totalQty++;
        //         $this->totalPrice +=$item->course_price;
        //     }
        
    }


    
}