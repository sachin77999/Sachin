<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table="data";
    public $timestamps = false;
    protected $fillable = ['fullnames','nickname','gender','occupation','workplace','phonesafaricom','phoneairtel','idno','facebookid','ageset','ward','location','sublocation','village','pollingstation','nfluencelocality','influenceother','supportlevel','remarks','positionnominated'];
}
