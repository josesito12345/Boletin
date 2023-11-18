<?php
interface IProfesorDAO{
    public function select();
    public function selectById($id);
    public function search($campo,$valor);
    public function insert(Profesor $profesor);
    public function update(Profesor $profesor);
    public function delete($id);
    public function listar($lista);
}