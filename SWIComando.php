<?php

namespace RegraDeNegocio;

//Essa interface deve ser utilizada apenas para a classe PieModel

interface SWIComando {
    
    public function inserir();
    public function visualizar();
    public function alterar($id);
    public function deletar($id);
}
