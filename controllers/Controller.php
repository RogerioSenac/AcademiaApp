<?php
    class Controller{
        protected function model($model){
            // Incluir o arquivo do modelo
            require_once '../models/' . $model.'.php'; //Ajuste o caminho conforme necessidade

            // Instancia e retorna o modelo
            return new $model();
        }
    //Carregar uma view
    protected function view($view, $data = []) {
        //Verifica se a view existe
        if(file_exists('../views/' . $view . '.php')){
            //Extrai dados para a view
            if(!empty($data)) {
                extract($data);
            }
            //Inclui o arquivo da view
            require_once '../views/'.$view.'.php'; //Ajuste o caminho conforme necessidade
        }else {
            //Se a view não existir, exibe um erro ou redireciona
            die("A View $view não existe.");
        }
    }
}
?>