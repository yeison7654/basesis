<?php 
	
	class Views
	{
		function getView($controller,$view,$data="")
		{
			$controller = get_class($controller);
			if($controller == "Home"){
				$view = "Views/APP/".$view.".php";
			}else{
				$view = "Views/APP".$controller."/".$view.".php";
			}
			require_once ($view);
		}
	}

 ?>