<?php

#Classe que retorna uma mensagem de erro ao usuário
abstract class Message
{
    static function showErrors($message)
    {
        
        switch($message)
        {
            /*
             * As mensagens abaixo não podem ser alteradas, 
             * pois são redirecionadas para um mesmo sistema de arquivos
             */
            //Quando arquivo não existir ou diretório não existir
            case 1:
                return "Arquivo o diretório inexistente, por favor, contatar administrador do servidor";
            break;
            //Quando o formato for diferente
            case 2:
                return "Arquivo  inválido";
            break;
            //Quando for nulo
            case 3:
                return "Arquivo nulo";
            break;
            //Adicionar aqui novas linhas de messagem
        }
    }
}