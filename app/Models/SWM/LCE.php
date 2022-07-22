<?php

namespace App\Models\SWM;

use App\Models\Barangay;
use App\Models\Municipality;
use App\Models\Province;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LCE extends Model
{
    use HasFactory;
    protected $table = 'tbl_solidwaste_lce';
    protected $fillable = [
        "lce_title",
        "lce_first_name",
        "lce_middle_name",
        "lce_last_name",
        "lce_salutation",
        "lce_position",
        "lce_municipality_FK",
        "lce_province_FK",
        "lce_barangay_FK",
        "lce_disctrict",
        "lce_zip_code",
        "lce_focal_person",
        "lce_contact_number",
        "lce_email_address",
    ];
    
    public function lce_province()
    {
        return $this->belongsTo(Province::class, "lce_province_FK", "PK_province_ID");
    }
    public function lce_municipality()
    {
        return $this->belongsTo(Municipality::class, "lce_municipality_FK");
    }
    public function lce_barangay()
    {
        return $this->belongsTo(Barangay::class, "lce_barangay_FK");
    }
    public function setlce_complete_address($value)
    {
        return $this->lce_province.', '. $this->lce_municipality. ', ' . $this->lce_barangay. ', ' . $this->lce_disctrict. ', ' . $this->lce_zip_code;
    }

    public function setnamewithtitle($value)
    {
        return $this->title . ' ' .$this->lce_first_name. ' ' .$this->lce_middle_name. ' ' .$this->lce_last_name;
    }

    public function setnamewithsalutation($value)
    {
        return $this->lce_salutation . ' ' .$this->lce_first_name. ' ' .$this->lce_middle_name. ' ' .$this->lce_last_name;
    }
    public function setdecentname($value)
    {
        return $this->lce_salutation . ' ' .$this->lce_first_name. ' ' .$this->lce_middle_name. ' ' .$this->lce_last_name;
    }
}
