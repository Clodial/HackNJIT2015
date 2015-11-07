<?php

include "headFoot.css";

abstract class pageTemplate{

	/**
	* @
	*/
	
	public function get(){

	}
	public function post(){

	}
	public function makeHeader(){
		echo "
			<div>
                                <input type='search' id='mySearch' placeholder='
Searching....'>
                                <button >Search</button>
        		</div>

        		<ul>
                		<li><a href='#home'>Home</a></li>
                		<li><a href='#explore'>Explore</a></li>
                		<li><a href='#account'>Account</a></li>
                		<li><a href='#signin'>Sign In</a></li>

        		</ul>";
	}
	public function makeFooter(){
		echo "<div id='footer'>A Project by Matt and Adam</div>";
	}
	
}

?>
