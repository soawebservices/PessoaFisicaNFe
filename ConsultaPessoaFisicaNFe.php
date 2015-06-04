<?php
require_once 'sws_extensao.php';
require_once 'sws_cdc_PessoaFisicaNFe.php';

$credenciais        = new Credenciais();
$credenciais->Email = 'seu email aqui';
$credenciais->Senha = 'sua senha aqui';

$pfnfe                 = new PessoaFisicaNFe();
$pfnfe->Credenciais    = $credenciais;
$pfnfe->Documento      = 'documento a ser consultado';
$pfnfe->DataNascimento = 'Data de Nascimento do Consultado';

$cdc = new CDC();
$pfnfe = $cdc->getPessoaFisicaNFe($pfnfe);

echo "\n\n-----------------------   INFORMACOES GERAIS   -----------------------\n\n\n";

# PRINT PROPRIEDADES DO OBJETO
echo 'Documento:                  ' . $pfnfe->Documento . "\n";
echo 'Nome:                       ' . $pfnfe->Nome . "\n";
echo 'Data Nascimento:            ' . date('d/m/Y H:i:s', $pfnfe->DataNascimento) . "\n";
echo 'Data Inscricao:             ' . date('d/m/Y H:i:s', $pfnfe->DataInscrcao) . "\n";
echo 'Ano Obito:                  ' . $pfnfe->AnoObito . "\n";
echo 'Mensagem Obito:             ' . $pfnfe->MensagemObito . "\n";
echo 'Codigo Situacao Cadastral:  ' . $pfnfe->CodigoSituacaoCadastral . "\n";
echo 'SituacaoRFB:                ' . $pfnfe->SituacaoRFB . "\n";
echo 'DataConsultaRFB:            ' . date('d/m/Y H:i:s', $pfnfe->DataConsultaRFB) . "\n";
echo 'ProtocoloRFB:               ' . $pfnfe->ProtocoloRFB . "\n";
echo 'DigitoVerificador:          ' . $pfnfe->DigitoVerificador . "\n";
echo 'Mensagem:                   ' . $pfnfe->Mensagem . "\n";
echo 'Status:                     ' . $pfnfe->Status . "\n";

echo "\n----------------------------------------------------------------------\n\n\n";

# PRINT TODOS ELEMENTOS (TESTE)
print_r($pfnfe);
?>
