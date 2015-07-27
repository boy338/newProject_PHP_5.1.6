<?php

class Frontend {
    private $textTitle = '';
    private $asset = array('css' => array(), 'js' => array());
    public function __construct() {

    }
    public function setTitle($textTitle) {
	$this->textTitle = $textTitle;
    }

    public function setCss($css) {
	array_push($this->asset['css'], $css);
    }

    public function setJs($js) {
	array_push($this->asset['js'], $js);
    }

    private function getHead() {
	$head = '';
	$head .= '<!DOCTYPE html>';
	$head .= '<html>';
	$head .= '<meta charset="UTF-8">';
	$head .= '<title>'.$this->textTitle.'</title>';
	if(count($asset['css']) > 0){
	    foreach($asset['css'] as $val){
	    	$head .= '<link rel="stylesheet" href="'.$val.'" >';
	    }
	}
	$head .= '<head>';
	$head .= '</head>';
	return $head;
    }

    private function getFoot() {	
	$foot = '';
	if(count($asset['js']) > 0 ){
	    foreach($asset['js'] as $val){
	    	$foor .= '<script src="'.$val.'"></script>';
	    }
	}
	$foot .= '</html>';
	return $foot;
    }

    public function render($body) {
	$tag = '';
	$tag .= $this->getHead();
	
	$tag .= $this->getFoot();

	return $tag;
    }

}

$r = new Frontend();
echo $r->render('body');
