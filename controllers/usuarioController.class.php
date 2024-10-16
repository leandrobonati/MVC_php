<?php 
class usuarioController
{
    public function listar()
    {
        "Estou em uma classe inicioController e executei o 
        método listar";

        //busca todos usuarios do banco
        require_once "models/usuario.class.php";
        $usuario = new Usuario();
        $retorno = $usuario->buscar_todos_usuarios();

        //mostrar dados na views 
        require_once "views/listar_usuario.php";
    }
    public function inserir()
    {
        echo "estou a inserir";
    }
    public function excluir()
    {
        
        echo "estou a excluir";
    }
    public function alterar()
    {
        echo "estou a alterar";
    }
}
?>