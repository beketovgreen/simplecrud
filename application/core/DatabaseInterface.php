<?php

Interface DatabaseInterface{
    public function create($n, $s, $em);
    public function read($n, $s, $em);
    public function update($n, $s, $em);
    public function delete($n, $s, $em);
}
?>