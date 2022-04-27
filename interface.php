<?php
interface crud
{
    public function delete($id);
    public function list();
    public function add();
    public function edit($id);
}
?>