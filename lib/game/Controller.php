<?php
namespace game;
class Controller{
    private $model;                // The model object we are controlling
    private $page = 'game.php';     // The next page we will go to
    private $reset = false;         // True if we need to reset the game

    /**
     * Constructor
     * @param Wumpus $wumpus The Wumpus object
     * @param $request The $_REQUEST array
     */
    public function __construct(Model $model, $request) {
        $this->model = $model;
        if(isset($request['m'])) {
            $this->move($request['m']);
        } else if(isset($request['s'])) {
            $this->shoot($request['s']);
        } else if(isset($request['n'])) {
            // New game!
            $this->reset = true;
        }
        else if(isset($request['c'])) {
            // cheat game!
            $this->cheat = true;
        }
    }

    /**
     * Get reference to a page
     * @return Page object
     */
    public function getPage() {
        return $this->page;
    }

    /**
     * Get reference to a page
     * @return Page object
     */
    public function isReset() {
        return $this->reset;
    }
    public function isCheat() {
        return $this->cheat;
    }

    /** rotates request
     * @param $ndx Index for room to move to */
    private function rotates($rl) {
        // Simple error check
        if($rl!="r" || $rl!="l") {
            return;
        }

        switch($this->model->rotates($rl)) {
            if($rl=="r") {
              return;
            }
            if($rl=="l") {
              return;
            }
        }
    }
}