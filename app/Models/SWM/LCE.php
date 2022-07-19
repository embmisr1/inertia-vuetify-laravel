<?php

namespace App\Models\SWM;

use App\Models\Barangay;
use App\Models\Municipality;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LCE extends Model
{
    use HasFactory;
    protected $table = 'tbl_solidwaste_lce';
    protected $fillable = [
        "lca_title",
        "lca_first_name",
        "lca_middle_name",
        "lca_last_name",
        "lca_salutation",
        "lca_position",
        "lca_municipality_FK",
        "lca_province_FK",
        "lce_barangay_FK",
        "lca_disctrict",
        "lca_zip_code",
        "lca_focal_person",
        "lca_contact_number",
        "lca_email_address",
    ];
    public function lca_province()
    {
        return $this->belongsTo(Province::class, "lca_province_FK");
    }
    public function lca_municipality()
    {
        return $this->belongsTo(Municipality::class, "lca_municipality_FK");
    }
    public function lce_barangay()
    {
        return $this->belongsTo(Barangay::class, "lce_barangay_FK");
    }
    public function setlca_complete_address($value)
    {
        return $this->lca_province.', '. $this->lca_municipality. ', ' . $this->lce_barangay. ', ' . $this->lca_disctrict. ', ' . $this->lca_zip_code;
    }

    public function setnamewithtitle($value)
    {
        return $this->title . ' ' .$this->lca_first_name. ' ' .$this->lca_middle_name. ' ' .$this->lca_last_name;
    }

    public function setnamewithsalutation($value)
    {
        return $this->lca_salutation . ' ' .$this->lca_first_name. ' ' .$this->lca_middle_name. ' ' .$this->lca_last_name;
    }
    public function setdecentname($value)
    {
        return $this->lca_salutation . ' ' .$this->lca_first_name. ' ' .$this->lca_middle_name. ' ' .$this->lca_last_name;
    }
}
