<?php
require_once 'sws_extensao.php';
require_once 'sws_cdc_PessoaFisicaNFe.php';

$credenciais        = new Credenciais();
$credenciais->Email = 'seu email aqui';
$credenciais->Senha = 'sua senha aqui';

$pfnfe                = new PessoaFisicaNFe();
$pfnfe->Credenciais   = $credenciais;
$pfnfe->Documento     = 'documento a ser consultado';

$cdc = new CDC();
$pfnfe = $cdc->getPessoaFisicaNFe($pfnfe);

echo "\n\n-----------------------   INFORMACOES GERAIS   -----------------------\n\n\n";

# PRINT PROPRIEDADES DO OBJETO
echo 'Documento:        ' . $pfnfe->Documento . "\n";
echo 'Nome:             ' . $pfnfe->Nome . "\n";
echo 'SituacaoRFB:      ' . $pfnfe->SituacaoRFB . "\n";
echo 'DataConsultaRFB:  ' . date('d/m/Y H:i:s', $pfnfe->DataConsultaRFB) . "\n";
echo 'ProtocoloRFB:     ' . $pfnfe->ProtocoloRFB . "\n";
echo 'DigitoVerificador:' . $pfnfe->DigitoVerificador . "\n";
echo 'Mensagem:         ' . $pfnfe->Mensagem . "\n";
echo 'Status:           ' . $pfnfe->Status . "\n";

echo "\n----------------------------------------------------------------------\n\n\n";

# PRINT TODOS ELEMENTOS (TESTE)
print_r($pfnfe);
?>
