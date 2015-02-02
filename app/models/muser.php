<?php 
	class mUser{

		public function show($Valor){
			
			$Tamanyo = strlen($Valor);
			
			return array(
				
				'Tamanyo'=>$Tamanyo,
				'Valor'=>$Valor,
			);
		}
	}