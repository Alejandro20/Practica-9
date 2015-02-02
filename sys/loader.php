<?php

	class loader{

		public function Vista($route,$variables){

			extract($variables);
			require VIEWS_PATH.$route;
		
		}

	}