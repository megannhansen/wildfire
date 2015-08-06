<?php


function is_page($page){
		$url = $_SERVER['REQUEST_URI'];
		$url = explode('/', $url);
		$url = $url[2];
		$url = str_replace('.php', '', $url);
		

		if($url == $page){
			echo 'active';
		}
}
