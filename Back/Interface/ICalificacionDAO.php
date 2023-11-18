<?php
interface ICalificacionDAO{
    public function select();
    public function selectById($id);
    public function search($campo,$valor);
    public function insert(Calificacion $calificacion);
    public function update(Calificacion $calificacion);
    public function delete($id);
    public function listar($lista);
}