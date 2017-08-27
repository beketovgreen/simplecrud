<?php

Interface DatabaseInterface{
    public function create($n, $s, $em);
    public function read();
    public function update($id);
    public function delete($id);
}
?>