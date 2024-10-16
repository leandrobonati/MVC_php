<?php 
class inicioController {
    public function inicio()
    {
        echo "Estou em uma classe inicioController e executei o 
        método inicio";
        require_once "views/menu.html";

        //outras rotas  http://localhost/index.php?controle=usuarioController&metodo=listar
    }
}
?>