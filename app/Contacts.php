<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = 'TblContacts';

    protected $primaryKey = 'Contacts_ID';

    public function contactName()
    {
        return $this->Contacts_Name;
    }
}
