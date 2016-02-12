<?php

/**
 * Created by PhpStorm.
 * User: ssc
 * Date: 2/11/2016
 * Time: 2:57 PM
 */
class Model{
    /**
     * Constructor
     * @param $seed Random number seed
     */
    private $st;
    private $end;
    private $grid;
    public function __construct($seed = null){

    }
    public function getst($p){
        return $this->st;
    }
    public function getend($p){
        return $this->end;
    }
    public function hover($p){
        //retruns the square to be highlighted
        return $this->end;
    }
    public function place(type,loc){
        if(stream at end ){
            $this->grid[loc]=type;
            $this->steam_update();
            return true;
        }
        else{
            return false;
        }
    }
    public function steam_update(){
        //calculates whre the steam is coming out
    }
}
