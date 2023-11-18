<?php
interface IUsuarioDAO{
    public function validacion($dni, $contraseña);
    public function select();
    public function selectById($id);
    public function search($campo,$valor);
    public function insert(Usuario $usuario);
    public function update(Usuario $usuario);
    public function delete($id);
    public function listar($lista);
}