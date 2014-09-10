<?php
	class Sistema {
		protected $diretorio;		

		public function __construct($diretorio) {
			$this->diretorio = $diretorio;
		}

		public function getUrlRaiz() {
			return  'http://'.$_SERVER['SERVER_NAME'].$this->diretorio;
		}
	}

	$vP;
	$dir = '/zk/';
	$urlRaiz = new Sistema($dir);
?>