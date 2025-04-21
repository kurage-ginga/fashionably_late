<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail',

    ];

    public function getDetail()
    {
        $txt = 'ID'.
        $this->id . '' . $this->first_name . '' . $this->last_name . '' . $this->gender . '' . $this->email . '' . $this->tel . '' . $this->address . '' . $this->building . '' . $this->detail;
        return $txt;
    }
}
