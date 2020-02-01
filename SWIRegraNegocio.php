<?php

namespace RegraDeNegocio;

#Interface que deve ser implementada nos comandos da BD;

interface SWIRegraNegocio {
   
   /*Metodo para verificação de campos
    * 
    *Deve ser usado para os comandos de Incluir, Alterar e Deletar
    */
   public function verificarCampos($campo);
   
}
