<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 07/06/18(professor Eduardo)
 * Time: 00:29
 * Adaptado por: Sidnei Lopes Ribeiro (aluno Digital Innovation One)
 * Date: 31/07/2020
 * Time: 14:30
 */
function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $catetorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'jovem';
    $categorias[] = 'adulto';
	$categorias[] = 'Melhor Idade';
	
    if(validaNome($nome) && validaIdade($idade))
    {
        removerMensagemErro();
        if($idade >= 6 && $idade <= 12)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'infantil')
                {
                    setarMensagemSucesso("O nadador ".$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
        else if($idade >= 13 && $idade <= 18)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'jovem')
                {
                    setarMensagemSucesso("O nadador ".$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
        else if($idade >= 18 && $idade <= 59)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'adulto')
                {
                    setarMensagemSucesso("O nadador ".$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
		else if($idade >= 60)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'Melhor Idade')
                {
                    setarMensagemSucesso("O nadador ".$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
	}
	else
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}