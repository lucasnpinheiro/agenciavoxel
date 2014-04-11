<?php
$retorno = array();
if (isset($dados) AND count($dados) > 0) {
    foreach ($dados as $key => $value) {
        switch ($key) {
            case 'nome':
                $retorno[$key]['titulo'] = 'Nome';
                $retorno[$key]['valor'] = $value;
                break;
            
            case 'website':
                $retorno[$key]['titulo'] = 'Website';
                $retorno[$key]['valor'] = $value;
                break;
            
            case 'empresa':
                $retorno[$key]['titulo'] = 'Empresa';
                $retorno[$key]['valor'] = $value;
                break;

            case 'data_nascimento':
                $retorno[$key]['titulo'] = 'Data de nascimento';
                $retorno[$key]['valor'] = $value;
                break;

            case 'email':
                $retorno[$key]['titulo'] = 'E-mail';
                $retorno[$key]['valor'] = $value;
                break;

            case 'telefone':
            case 'celular':
                if (isset($retorno['telefone']['valor'])) {
                    $retorno['telefone']['titulo'] = 'Telefones';
                    $retorno['telefone']['valor'] .= ' | ' . $value;
                } else {
                    $retorno['telefone']['titulo'] = 'Telefone';
                    $retorno['telefone']['valor'] = $value;
                }
                break;

            case 'sexo':
                $retorno[$key]['titulo'] = 'Sexo';
                $retorno[$key]['valor'] = ($value == 'M' ? 'Masculino' : 'Feminino');
                break;

            case 'cep':
                $retorno[$key]['titulo'] = 'CEP';
                $retorno[$key]['valor'] = $value;
                break;

            case 'endereco':
            case 'numero':
            case 'complemento':
                $retorno['endereco']['titulo'] = 'Endereço';
                if (isset($retorno['endereco']['valor'])) {
                    $retorno['endereco']['valor'] .= ' ' . $value;
                } else {
                    $retorno['endereco']['valor'] = $value;
                }
                break;

            case 'bairro':
            case 'cidade':
            case 'uf':
                $retorno['uf']['titulo'] = '';
                if (isset($retorno['uf']['valor'])) {
                    $retorno['uf']['valor'] .= ' ' . $value;
                } else {
                    $retorno['uf']['valor'] = $value;
                }
                break;

            case 'mensagem':
                $retorno[$key]['titulo'] = 'Mensagem';
                $retorno[$key]['valor'] = $value;
                break;

            default:
                break;
        }
    }
}
if (count($retorno) > 0) {
    foreach ($retorno as $key => $value) {
        echo '<strong>' . $value['titulo'] . ': </strong> ' . $value['valor'] . '<br />';
    }
}
?>