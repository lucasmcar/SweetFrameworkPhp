<?php


class SWModel implements SWIComando, SWIRegraNegocio
{
    
    verificaInterface('PieIComando', 'PieIRegraNegocio');
    
    function alterar($id) 
    {
        try 
        {
            
        } 
        catch (Exception $exc) 
        {
            
            echo $exc->getTraceAsString();
        }
    }

    function deletar($id) 
    {
        try 
        {
            
        } 
        catch (Exception $exc) 
        {
            
            echo $exc->getTraceAsString();
        }
    }

    function inserir() 
    {
        try 
        {
            
        } 
        catch (Exception $exc) 
        {
            
            echo $exc->getTraceAsString();
        }
    }

    function visualizar() 
    {
        try 
        {
            
        } 
        catch (Exception $exc) 
        {
            
            echo $exc->getTraceAsString();
        }
        
    }
    
    //
    function verificaInterface($interface1, $interface2)
    {
        if(!interface_exists($interface1))
        {
            if(!interface_exists($interface2))
            {
                throw new Exception("Interface não existe ou não declarada.");
            }
    
        }

    }

    function verificarCampos($campo) {
        
    }

    //Métodos privados aqui
    
    /*Algumas validaões devem ser feitas antes de qualquer tentativa de
     *alterar algo no banco, lembrando que os métodos de exluir e alterar 
     *devem sempre receber um parametro para se trabalhar com a clausula WHERE;
     */
    
    //Método faz uma veririficação completa sobre o campo que for passado por parâmetro
   
}
