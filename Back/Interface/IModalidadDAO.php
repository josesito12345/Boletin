<?php
interface IModalidadDAO{
    public function select();
    public function selectById($id);
    public function search($campo,$valor);
    public function insert(Modalidad $modalidad);
    public function update(Modalidad $modalidad);
    public function delete($id);
    public function listar($lista);
}