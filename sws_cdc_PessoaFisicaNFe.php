<?php
	
	class CDC extends WebService
	{
		/* URL de Test-Drive */
		const URI_LOCATION      = 'http://www.soawebservices.com.br/webservices/test-drive/cdc/cdc.asmx';
		const URI_LOCATION_WSDL = 'http://www.soawebservices.com.br/webservices/test-drive/cdc/cdc.asmx?WSDL';

		/* URL de Producao */
		/*
		const URI_LOCATION      = 'http://www.soawebservices.com.br/webservices/producao/cdc/cdc.asmx';
		const URI_LOCATION_WSDL = 'http://www.soawebservices.com.br/webservices/producao/cdc/cdc.asmx?WSDL';
		*/
		
		private $_traceEnabled  = 1;
		
		public function __construct()
		{
			$options = array
			(
				'location' => CDC::URI_LOCATION,
		        'trace'    => $this->_traceEnabled,
				'style'    => SOAP_RPC,
		        'use'      => SOAP_ENCODED,
			);
			
			parent::__construct(CDC::URI_LOCATION_WSDL, $options);
		}
		
		public function getPessoaFisicaNFe(PessoaFisicaNFe $pfnfe)
		{
			$result = $this->callMethod('PessoaFisicaNFe', array('parameters' => Util::objectToArray($pfnfe)));
			return Util::arrayToObject($result->{$this->getLastCalledMethod() . 'Result'}, $pfnfe);
		}
	}

	class Credenciais
	{
		public $Email;
		public $Senha;
	}

	class PessoaFisicaNFe extends ClassMap
	{
		public $Documento;
		public $Nome;
		public $SituacaoRFB;
		public $DataConsultaRFB;
		public $ProtocoloRFB;
		public $DigitoVerificador;
		public $Mensagem;
		public $Status;
		
		public function __construct()
		{
			parent::__construct(array(
				'Documento'             => 'string',
				'Nome'                  => 'string',
				'SituacaoRFB'           => 'string',
				'DataConsultaRFB'       => 'string',
				'ProtocoloRFB'          => 'string',
				'DigitoVerificador'     => 'string',
				'Mensagem'              => 'string',
				'Status'                => 'boolean',
			));
		}
	}

?>
