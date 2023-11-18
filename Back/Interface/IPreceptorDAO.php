<?php
interface IPreceptorDAO{
    public function select();
    public function selectById($id);
    public function search($campo,$valor);
    public function insert(Preceptor $preceptor);
    public function update(Preceptor $preceptor);
    public function delete($id);
    public function listar($lista);
}