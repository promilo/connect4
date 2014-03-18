<?php
class Gamelogic extends CI_Controller {
    
    function __construct() {
    		// Call the Controller constructor
	    	parent::__construct();
	    	session_start();
    }
        
    public function index(){
        
    }
    
    public function gameWon($board){
        
    }
    
    public function placePiece($board, $x, $y){
        if($board == NULL){
            return intval($x)+7*6;
        }
        else{
            $newx = $x;
            $newy = 6;
            foreach ($board as $key => $value) {
                if($key < 0) continue;
                if($value >= 42) $value = $value - 42;
                if($value == $x + 7*$y) return -1;
                $currentIndexX = (int)($value%7);
                $currentIndexY = (int)($value/7);
                if($newx == $currentIndexX){
                    $newy = min(array($currentIndexY-1, $newy));
                }
            }
            return $newx + 7*$newy;
        }
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
