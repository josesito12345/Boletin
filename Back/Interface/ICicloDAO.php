<?php
interface ICicloDAO{
    public function select();
    public function selectById($id);
    public function search($campo,$valor);
    public function insert(Ciclo $ciclo);
    public function update(Ciclo $ciclo);
    public function delete($id);
    public function listar($lista);
}