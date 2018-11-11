<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bezoek_registraties extends Model
{
    //
    protected $table = 'bezoek_registraties';
    protected $fillable = ['lastname',
                            'firstname',
                            'sedula',
                            'platenumber',
                            'reason',
                            'person',
                            'particularities',
                            'badge',
                            'date',
                            'timein',
                            'timeout',
                            'username'];

}
