<?php

namespace Quang\Xuongoop\Models;

use Quang\Xuongoop\Commons\Model;

class Category extends Model
{
    protected string $tableName = 'categories';
    
    public function all() {
        return $this->queryBuilder
        ->select('*')
        ->from($this->tableName)
        ->orderBy('id', 'desc')
        ->fetchAllAssociative();
    }
}