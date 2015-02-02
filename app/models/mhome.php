<?php

	Class mHome{

		public function Info(){
			
			return array(
					
					'nombre' => 'Alejandro Zarcero Largo'
					
			);

		}

		public function suma($a, $b, $num1, $num2){
			
			return array(
				
				'result'=>$num1 + $num2,
				'num1'=>$num1,
				'num2'=>$num2,
			
			);
		
		}


	}
