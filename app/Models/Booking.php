<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function __construct($type = null)
    {
        parent::__construct();
        $this->setTable("booking");
    }

    public $timestamps=false;

    protected $fillable = [
        'memberid', 'courtid', 'bookingdate', 'starttime', 'endtime', 'fee'
    ];

    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];
}
