<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universe;
use App\Models\Permit;
use App\Models\Monitoring;
use App\Models\Hazwaste;
use App\Models\Legal;
use App\Models\Complaint;
use App\Models\Pco;
use App\Models\Barangay;
use App\Models\Municipality;
use App\Models\Province;
use DB;
use Carbon\Carbon;

class MiniDashboardController extends Controller
{
        
    public function mini_dashboard($fk){
        $today = Carbon::now('Asia/Manila');
        $ctr_permit = Permit::where('universe_FK',$fk)->where('is_priority',1)->count();
        $ctr_permit_pd1586 = Permit::where('universe_FK',$fk)->where('perm_law','like','%PD 1586%')->where('is_priority',1)->count();
        $ctr_permit_ra8749 = Permit::where('universe_FK',$fk)->where('perm_law','like','%RA 8749%')->where('is_priority',1)->count();
        $ctr_permit_ra9275 = Permit::where('universe_FK',$fk)->where('perm_law','like','%RA 9275%')->where('is_priority',1)->count();
        $ctr_permit_ra6969 = Permit::where('universe_FK',$fk)->where('perm_law','like','%RA 6969%')->where('is_priority',1)->count();
        $ctr_permit_active = Permit::where('universe_FK',$fk)
        ->where(
            function($query) {
                $query->orwhere('perm_date_expiry','>',Carbon::now('Asia/Manila'))->orwhere('perm_law','like','PD 1586%');
            }
        )->where('is_priority',1)->count();
        $ctr_permit_expired = Permit::where('universe_FK',$fk)->where('perm_date_expiry','<=',$today)->where('is_priority',1)->count();
        $ctr_monitoring = Monitoring::where('universe_FK',$fk)->count();
        $ctr_monitoring_pd1586 = Monitoring::where('universe_FK',$fk)->where('mon_law','like','%PD 1586%')->count();
        $ctr_monitoring_ra8749 = Monitoring::where('universe_FK',$fk)->where('mon_law','like','%RA 8749%')->count();
        $ctr_monitoring_ra9275 = Monitoring::where('universe_FK',$fk)->where('mon_law','like','%RA 9275%')->count();
        $ctr_monitoring_ra6969 = Monitoring::where('universe_FK',$fk)->where('mon_law','like','%RA 6969%')->count();
        $ctr_monitoring_ra9003 = Monitoring::where('universe_FK',$fk)->where('mon_law','like','%RA 9003%')->count();
        $ctr_legal = Legal::where('universe_FK',$fk)->where('nov_compliance_status','!=','Complied')->count();
        $ctr_legal_pd1586 = Legal::where('universe_FK',$fk)->where('nov_law','like','%PD 1586%')->where('nov_compliance_status','!=','Complied')->count();
        $ctr_legal_ra8749 = Legal::where('universe_FK',$fk)->where('nov_law','like','%RA 8749%')->where('nov_compliance_status','!=','Complied')->count();
        $ctr_legal_ra9275 = Legal::where('universe_FK',$fk)->where('nov_law','like','%RA 9275%')->where('nov_compliance_status','!=','Complied')->count();
        $ctr_legal_ra6969 = Legal::where('universe_FK',$fk)->where('nov_law','like','%RA 6969%')->where('nov_compliance_status','!=','Complied')->count();
        $ctr_legal_ra9003 = Legal::where('universe_FK',$fk)->where('nov_law','like','%RA 9003%')->where('nov_compliance_status','!=','Complied')->count();
        $ctr_hazwaste = Hazwaste::where('universe_FK',$fk)->count();
        $ctr_pco = Pco::where('universe_FK',$fk)->count();
        $ctr_complaint = Complaint::where('universe_FK',$fk)->count();
        $array = [
            'permit' => [
                'header' => $ctr_permit,
                'content_label' => [
                    'PD 1586: ',
                    'RA 8749: ',
                    'RA 9275: ',
                    'RA 6969: ',
                    'Valid: ',
                    'Expired: ',
                ],
                'content' => [
                    $ctr_permit_pd1586,
                    $ctr_permit_ra8749,
                    $ctr_permit_ra9275,
                    $ctr_permit_ra6969,
                    $ctr_permit_active,
                    $ctr_permit_expired,
                ],
            ],
            'nov' => [
                'header' => $ctr_legal,
                'content_label' => [
                    'PD 1586: ',
                    'RA 8749: ',
                    'RA 9275: ',
                    'RA 6969: ',
                    'RA 9003: ',
                ],
                'content' => [
                    $ctr_legal_pd1586,
                    $ctr_legal_ra8749,
                    $ctr_legal_ra9275,
                    $ctr_legal_ra6969,
                    $ctr_legal_ra9003,
                ],
            ],
            'monitoring' => [
                'header' => $ctr_monitoring,
                'content_label' => [
                    'PD 1586: ',
                    'RA 8749: ',
                    'RA 9275: ',
                    'RA 6969: ',
                    'RA 9003: ',
                ],
                'content' => [
                    $ctr_monitoring_pd1586,
                    $ctr_monitoring_ra8749,
                    $ctr_monitoring_ra9275,
                    $ctr_monitoring_ra6969,
                    $ctr_monitoring_ra9003,
                ],
            ],
            'hazwaste' => [
                'header' => null,
                'content_label' => [''],
                'content' => [
                    $ctr_hazwaste,
                ],
            ],
            'pco' => [
                'header' => null,
                'content_label' => [''],
                'content' => [
                    $ctr_pco,
                ],
            ],
            'complaint' => [
                'header' => null,
                'content_label' => [''],
                'content' => [
                    $ctr_complaint,
                ],
            ],
        ];
        return $array;
    }
}
