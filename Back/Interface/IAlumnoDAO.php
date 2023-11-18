<?php
interface IAlumnoDAO{
    public function select();
    public function selectById($id);
    public function search($campo,$valor);
    public function insert(Alumno $alumno);
    public function update(Alumno $alumno);
    public function delete($id);
    public function listar($lista);
}