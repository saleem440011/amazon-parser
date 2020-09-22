<?php

	class Amazon{
		
		//Welcome to Amazon Class
		
		public function get_title($pageString){
			
			$title = "";
			
			preg_match('#<title>(.*?)</title>#is',$pageString,$_title);
			
			if(isset($_title[1])){
				return json_encode(array("Title"=>$_title[1]));
			}
			else{
				return json_encode(array("Title"=>$title));
			}		
		}
	}
?>
