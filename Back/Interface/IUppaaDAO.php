<?php
interface IUppaaDAO{
    public function select();
    public function selectById($id);
    public function search($campo,$valor);
    public function insert(UPPAA $UPPAA);
    public function update(UPPAA $UPPAA);
    public function delete($id);
}