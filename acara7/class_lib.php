<?php
//membuat class baru dengan nama class 'person'
class person{
    /*membuat properti baru dengan keyword var 
    dan nama properti 'name'*/
    public $name;
    /*membuat method set_name untuk mengatur nilai properti 'name'
    dengan nilai yang akan ditampung pada parameter new_name */
    public function set_name($new_name){
    }
    //membuat method get_name untuk mendapatkan nilai dari properti 'name'
    public function get_name(){
        //untuk mengembalikan nilai dari properti 'name'
        return $this->name;
    }
}
?>
