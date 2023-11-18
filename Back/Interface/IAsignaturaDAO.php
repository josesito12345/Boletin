<?php
interface IAsignaturaDAO{
    public function select();
    public function selectById($id);
    public function search($campo,$valor);
    public function insert(Asignatura $asignatura);
    public function update(Asignatura $asignatura);
    public function delete($id);
    public function listar($lista);
}