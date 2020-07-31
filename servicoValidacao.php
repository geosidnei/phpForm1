<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 06/06/18
 * Time: 23:54
 * Adaptado por: Sidnei Lopes Ribeiro (aluno Digital Innovation One)
 * Date: 31/07/2020
 * Time: 14:30
 */
function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro('O nome não pode ficar vazio. Preencha, por favor.');
        return false;
    }
    else if (strlen($nome) < 9)
    {
        setarMensagemErro('O nome não pode conter menos de 9 caracteres. Preencha, por favor.');
        return false;
    }
    else if(strlen($nome) > 40)
    {
        setarMensagemErro('O nome não pode conter mais de 40 caracteres: abrevie, por favor!');
        return false;
    }
    return true;
}
function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemErro('Informe um número para idade');
        return false;
    }
    return true;
}