<?php
class DB extends PDO
{
    protected int $id = -1;
    public function __construct()
    {
        parent::__construct(
            'mysql:host=localhost;dbname=corre;charset=utf8',
            'root','',
            
        );
    }
}
