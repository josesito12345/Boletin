<?php
interface ICursoDAO{
    public function select();
    public function selectById($id);
    public function search($campo,$valor);
    public function insert(Curso $curso);
    public function update(Curso $curso);
    public function delete($id);
    public function listar($lista);
}