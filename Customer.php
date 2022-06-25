<?php 

class Customer extends User
{
    public function regis($data)
    {    
        //tambahkan data film baru    
        parent::regis($data);
    }

}