<?php

/**
 * Created by PhpStorm.
 * User: ssc
 * Date: 2/11/2016
 * Time: 2:57 PM
 */
class Model
{
    /**
     * Constructor
     * @param $seed Random number seed
     */
    public function __construct($seed = null)
    {

    }

    /**
     * Create game of desired size
     * @param $size Game size
     */
    public function createGame($size = 10)
    {
        $this->size = $size;
    }

    /**
     * Get size
     * @return $size Game size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Keep track of current player turn
     * @return $size Game size
     */
    public function curTurn()
    {

    }


    private $size = 0;    // Game size
}
