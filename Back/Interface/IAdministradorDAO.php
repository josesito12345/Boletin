<?php
interface IAdministradorDAO{
    public function select();
    public function selectById($id);
    public function search($campo,$valor);
    public function insert(Administrador $administrador);
    public function update(Administrador $administrador);
    public function delete($id);
    public function listar($lista);
}