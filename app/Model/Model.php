<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Model extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;

    const CREATED_AT = 'ins_date';
    const UPDATED_AT = 'upd_date';


    public function tryGet($relation)
    {
        if (empty($this->{$relation})) {
            $instance = $this->$relation()->getRelated();
            $data = array_combine(
                $instance->getFillable(),
                array_fill(0, count($instance->getFillable()), null)
            );
            return $instance->fill($data);
        }
        return $this->{$relation};
    }

    public static function getTableName()
    {
        return with(new static)->getTable();
    }
}