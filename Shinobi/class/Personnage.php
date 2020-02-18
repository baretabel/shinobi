<?php
class Personnage{
    protected $name;
    protected $lvl;
    protected $xp;
    protected $max_xp;
    protected $tai;
    protected $gen;
    protected $nin;
    protected $max_tai;
    protected $max_gen;
    protected $max_nin;
    protected $chk;
    protected $max_chk;
    protected $bourse;

     public function __construct($name){
         $this->name = $name;
         $this->lvl = 1;
         $this->xp = 0;
         $this->max_xp =520;
         $this->tai = 0;
         $this->gen = 0;
         $this->nin = 0;
         $this->max_tai = 55;
         $this->max_gen = 50;
         $this->max_nin = 50;
         $this->chk = 37;
         $this->max_chk = 37;
         $this->bourse = 150;
     }
     protected function lvlup(){
        $this->lvl += 1;
        $this->mxpup();
        $this->mtaiup();
        $this->mgenup();
        $this->mninup();
        $this->mchkup();
        
     }
     protected function mxpup(){
        $this->max_xp +=($this->max_xp*10)/100 ;
     } 
     protected function mtaiup(){
        $this->max_tai +=5 ;
     }
     protected function mgenup(){
        $this->max_gen +=5 ;
     }
     protected function mninup(){
        $this->max_nin +=5 ;
     }
     protected function mchkup(){
        $this->max_chk +=12 ;
     }

     public function xpup(){
         $x=($this->max_xp*10)/100;
         $y=rand(0,$x);
         
        $this->xp += $y;
        if($this->xp>=$this->max_xp){
            
            $this->xp -= $this->max_xp;
            $this->lvlup();
        }
       
     }
     public function retrait(){
        $this->bourse-=50;
        $this->roue();

     }
     protected function roue(){
        
        $y=rand(0,9);
        echo $y;
        if($y==5){
            $this->bourse+=500;

        }
     }
     protected function empecher_negatif(){
        
        if($this->chk < 0){
            $this->chk = 0;
        }
    }
}
?>