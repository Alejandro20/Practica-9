<?php

final class User extends Controller {
		function __construct ($params){
				parent::__construct ($params);
				$this->model=new mUser;
		}



		function show(){
		$data=Request::getParams();
		$Valor = $data[3];
		$this->loader->vista('vUser.php', $this->model->show($Valor));
				

		}
	

}