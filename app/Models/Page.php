<?php

namespace App\Models; // Update this namespace according to your structure

use Illuminate\Database\Eloquent\Model;
use Dotlogics\Grapesjs\App\Traits\EditableTrait;
use Dotlogics\Grapesjs\App\Contracts\Editable;

class Page extends Model implements Editable
{
    use EditableTrait;

    // Specify which attributes can be mass assignable
    protected $fillable = [
        'title',   // Add other columns you have in the table
        'gjs_data',
    ];
}
