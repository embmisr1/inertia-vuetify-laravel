<?php

namespace App\Models\Fleet;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleMaintenance extends Model
{
    use HasFactory;

    protected $connection = 'mysql_chauffeur';
    protected $table = 'vehicle_maintenances';
    protected $fillable = [
        "vehicle_id",
        "odo_meter",
        "date_of_pr",
        "gross_amount",
        "description",
        "supplier",
        "date_of_p_o",
        "net_amount",
        "date_repaired",
        "remarks",
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
