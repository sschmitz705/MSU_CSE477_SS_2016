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
        if(isset($request['p'])) {
            $this->place($request['p']);
        } 
        elseif(isset($request['r'])) {
            $this->rotate($request['r']);
        } 
        elseif(isset($request['h'])) {
            $this->hover($request['h']);
        } 
        else if(isset($request['n'])) {
            // New game!
            $this->reset = true;
        }
    }

    /**
     * Get reference to a page
     * @return Page object
     */
    public function getPage() {
        return $this->page;
    }
    public function isReset() {
        return $this->reset;
    }

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
