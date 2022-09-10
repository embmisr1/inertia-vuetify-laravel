<?php

namespace App\Exports;

use App\Models\Universe;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Http\Request;


class UniverseExport3 implements FromQuery, WithHeadings, WithMapping
{

    use Exportable;

    protected $request = null;
    public function __construct($request)
    {
        $this->request = $request;
    }
    public function headings(): array
    {
        return [
            "#",
            "ecc_number",
            "region",
            "firmname",
            "proponent",
            "barangay",
            "city_municipality",
            "province",
            "latitude",
            "longitude",
            "psic_group_desc",
            "psic_class_desc",
            "psic_subclass_desc",
            "project_type_desc",
            "project_subtype_desc",
            "project_specific_type_desc",
            "project_specific_subtype_desc",
            "poa_number",
            "poa_issuance",
            "poa_expiry",
            "wwdp_number",
            "wwdp_issuance",
            "wwdp_expiry",
            "hazwaste_number",
            "hazwaste_issuance",
            "monitoring_law",
            "monitoring_date",
            "pco_name",
            "pco_number",
            "nov_law",
            "nov_date",
            "nov_tc_date",
            "nov_compliance_status",
        ];
    }
    public function query()
    {
        $query = DB::table('tbl_universe as a')->select(
            // BASIC INFO
            "a.un_lat as latitude",
            "a.un_long as longitude",
            "a.un_region as region",
            "a.un_firmname as firmname",
            "a.un_proponent as proponent",
            "a.un_representative_name as representative",
            "a.un_representative_designation as representative_designation",
            "a.un_representative_gender as representative_gender",
            "a.un_remarks as remarks",
            // LOCATION
            'b.provDesc as province',
            'c.citymunDesc as city_municipality',
            'd.brgyDesc as barangay',
            // PSIC
            'fk_psic_group.psic_group_desc as psic_group_desc',
            'fk_psic_class.psic_class_desc as psic_class_desc',
            'fk_psic_subclass.psic_subclass_desc as psic_subclass_desc',
            // PROJECT TYPE
            'fk_project_type.project_type_desc as project_type_desc',
            'fk_project_subtype.project_subtype_desc as project_subtype_desc',
            'fk_project_specific_type.project_specific_type_desc as project_specific_type_desc',
            'fk_project_specific_subtype.project_specific_subtype_desc as project_specific_subtype_desc',
            // ECC
            'fk_ecc.perm_number as ecc_number',
            // POA
            'fk_poa.perm_number as poa_number',
            'fk_poa.perm_date_issuance as poa_issuance',
            'fk_poa.perm_date_expiry as poa_expiry',
            // WWDP
            'fk_wwdp.perm_number as wwdp_number',
            'fk_wwdp.perm_date_issuance as wwdp_issuance',
            'fk_wwdp.perm_date_expiry as wwdp_expiry',
            // HAZWASTE
            'fk_hazwaste.perm_number as hazwaste_number',
            'fk_hazwaste.perm_date_issuance as hazwaste_issuance',
            // MONITORING
            'fk_monitoring.mon_law as monitoring_law',
            'fk_monitoring.mon_date_monitored as monitoring_date',
            // PCO
            'fk_pco.pco_name as pco_name',
            'fk_pco.pco_number as pco_number',
            // NOV FOR LEGAL
            'fk_legal.nov_law as nov_law',
            'fk_legal.nov_date as nov_date',
            'fk_legal.nov_tc_date as nov_tc_date',
            'fk_legal.nov_compliance_status as nov_compliance_status',
        )
            ->leftjoin('ref_province as b', 'a.un_province', '=', 'b.PK_province_ID')
            ->leftjoin('ref_citymun as c', 'a.un_municipality', '=', 'c.PK_citymun_ID')
            ->leftjoin('ref_brgy as d', 'a.un_brgy', '=', 'd.PK_brgy_ID')
            ->leftjoin('tbl_psic_group as fk_psic_group', 'a.un_psic_group', '=', 'fk_psic_group.id')
            ->leftjoin('tbl_psic_class as fk_psic_class', 'a.un_psic_class', '=', 'fk_psic_class.id')
            ->leftjoin('tbl_psic_subclass as fk_psic_subclass', 'a.un_psic_subclass', '=', 'fk_psic_subclass.id')
            ->leftjoin('tbl_project_type as fk_project_type', 'a.un_project_type', '=', 'fk_project_type.id')
            ->leftjoin('tbl_project_subtype as fk_project_subtype', 'a.un_project_subtype', '=', 'fk_project_subtype.id')
            ->leftjoin('tbl_project_specific_type as fk_project_specific_type', 'a.un_project_specific_type', '=', 'fk_project_specific_type.id')
            ->leftjoin('tbl_project_specific_subtype as fk_project_specific_subtype', 'a.un_project_specific_subtype', '=', 'fk_project_specific_subtype.id')
            ->leftjoin('tbl_permit as fk_ecc', 'a.un_ecc_number', '=', 'fk_ecc.id')
            ->leftjoin('tbl_permit as fk_poa', 'a.un_poa_number', '=', 'fk_poa.id')
            ->leftjoin('tbl_permit as fk_wwdp', 'a.un_wwdp_number', '=', 'fk_wwdp.id')
            ->leftjoin('tbl_permit as fk_hazwaste', 'a.un_hazwaste_number', '=', 'fk_hazwaste.id')
            ->leftjoin('tbl_monitoring as fk_monitoring', 'a.un_monitoring', '=', 'fk_monitoring.id')
            ->leftjoin('tbl_pco as fk_pco', 'a.un_pco', '=', 'fk_pco.id')
            ->leftjoin('tbl_legal as fk_legal', 'a.un_legal', '=', 'fk_legal.id')
            ->when(request('PK_province_ID'), function ($query) {
                $query->where('a.un_province', request('PK_province_ID'));
            })
            ->when(request('PK_citymun_ID'), function ($query) {
                $query->where('a.un_municipality', request('PK_citymun_ID'));
            })
            ->when(request('PK_brgy_ID'), function ($query) {
                $query->where('a.un_brgy', request('PK_brgy_ID'));
            })
            ->when(request('searchStatus'), function ($query) {
                $query->where('a.un_status', request('searchStatus'));
            })
            ->when(request('searchType'), function ($query) {
                $query->where('a.un_type', request('searchType'));
            })
            ->when(request('selectedSearchCategory') == 'PERMIT', function ($query) {
                $query->leftjoin('tbl_permit as e', 'a.id', '=', 'e.universe_FK');
                $query->where(
                    function ($query) {
                        if (request('search1586')) {
                            $query->orwhere('e.perm_law', 'like', '%' . request("search1586") . '%');
                        }
                        if (request('search8749')) {
                            $query->orwhere('e.perm_law', 'like', '%' . request("search8749") . '%');
                        }
                        if (request('search9275')) {
                            $query->orwhere('e.perm_law', 'like', '%' . request("search9275") . '%');
                        }
                        if (request('search6969')) {
                            $query->orwhere('e.perm_law', 'like', '%' . request("search6969") . '%');
                        }
                    }
                );
                $query->where('e.perm_law', '!=', '');
                $query->whereNotNull('e.perm_law');
                return $query->where('e.is_priority', 1);
            })
            ->when(request('selectedSearchCategory') == 'MONITORING', function ($query) {
                $query->leftjoin('tbl_monitoring as f', 'a.id', '=', 'f.universe_FK');
                $query->where(
                    function ($query) {
                        if (request('search1586')) {
                            $query->orwhere('f.mon_law', 'like', '%' . request("search1586") . '%');
                        }
                        if (request('search8749')) {
                            $query->orwhere('f.mon_law', 'like', '%' . request("search8749") . '%');
                        }
                        if (request('search9275')) {
                            $query->orwhere('f.mon_law', 'like', '%' . request("search9275") . '%');
                        }
                        if (request('search6969')) {
                            $query->orwhere('f.mon_law', 'like', '%' . request("search6969") . '%');
                        }
                        if (request('search9003')) {
                            $query->orwhere('f.mon_law', 'like', '%' . request("search9003") . '%');
                        }
                        $query->where('f.mon_law', '!=', '');
                        $query->whereNotNull('f.mon_law');
                        return $query;
                    }
                );
            })
            ->when(request('selectedSearchCategory') == 'NOV', function ($query) {
                $query->leftjoin('tbl_legal as g', 'a.id', '=', 'g.universe_FK');
                $query->where(
                    function ($query) {
                        if (request('search1586')) {
                            $query->orwhere('g.nov_law', 'like', '%' . request("search1586") . '%');
                        }
                        if (request('search8749')) {
                            $query->orwhere('g.nov_law', 'like', '%' . request("search8749") . '%');
                        }
                        if (request('search9275')) {
                            $query->orwhere('g.nov_law', 'like', '%' . request("search9275") . '%');
                        }
                        if (request('search6969')) {
                            $query->orwhere('g.nov_law', 'like', '%' . request("search6969") . '%');
                        }
                        if (request('search9003')) {
                            $query->orwhere('g.nov_law', 'like', '%' . request("search9003") . '%');
                        }
                        return $query;
                    }
                );
                $query->where('g.nov_law', '!=', '');
                $query->whereNotNull('g.nov_law');
                $query->where('g.nov_compliance_status', '!=', 'Complied');
            })
            ->when(request('selectedSearchCategory') == 'ORDER', function ($query) {
                $query->leftjoin('tbl_legal as h', 'a.id', '=', 'h.universe_FK');
                $query->where('h.nov_law', '!=', '');
                $query->whereNotNull('h.nov_law');
                $query->where('h.nov_compliance_status', '!=', 'Complied')->where('h.nov_order_number', '!=', null);
            })
            ->when(request('selectedSearchCategory') == 'PCO', function ($query) {
                $query->leftjoin('tbl_pco as i', 'a.id', '=', 'i.universe_FK');
                $query->where('i.pco_name', '!=', '');
                $query->whereNotNull('i.pco_name');
            })
            ->when(request('selectedSearchCategory') == 'COMPLAINT', function ($query) {
                $query->leftjoin('tbl_complaint as j', 'a.id', '=', 'j.universe_FK');
                $query->where('j.comp_name', '!=', '');
                $query->whereNotNull('j.comp_name');
            })
            ->when(request('searchValidity'), function ($query) {
                if (request('searchValidity') == 'EXPIRED') {
                    $query->where('e.perm_date_expiry', '<=', Carbon::today()->toDateString());
                } elseif (request('searchValidity') == 'VALID') {
                    $query->where('e.perm_date_expiry', '>', Carbon::today()->toDateString());
                } else {
                    $query->where('e.perm_date_expiry', null);
                }
            })
            ->when(request('un_firmname'), function ($query) {
                $query->where('a.un_firmname', 'like', '%' . request("un_firmname") . '%');
            })
            ->when(request('un_crs_number'), function ($query) {
                $query->where('a.un_crs_number', 'like', '%' . request("un_crs_number") . '%');
            })
            ->when(request('un_proponent'), function ($query) {
                $query->where('a.un_proponent', 'like', '%' . request("un_proponent") . '%');
            })
            ->when(request('un_status'), function ($query) {
                $query->where('a.un_status', 'like', '%' . request("un_status") . '%');
            })
            ->orderBy("a.created_at", "desc");

        return $query;
    }
    public function map($data): array
    {
        return [
            $data->ecc_number,
            $data->region,
            $data->firmname,
            $data->proponent,
            $data->barangay,
            $data->city_municipality,
            $data->province,
            $data->latitude,
            $data->longitude,
            $data->psic_group_desc,
            $data->psic_class_desc,
            $data->psic_subclass_desc,
            $data->project_type_desc,
            $data->project_subtype_desc,
            $data->project_specific_type_desc,
            $data->project_specific_subtype_desc,
            $data->poa_number,
            $data->poa_issuance,
            $data->poa_expiry,
            $data->wwdp_number,
            $data->wwdp_issuance,
            $data->wwdp_expiry,
            $data->hazwaste_number,
            $data->hazwaste_issuance,
            $data->monitoring_law,
            $data->monitoring_date,
            $data->pco_name,
            $data->pco_number,
            $data->nov_law,
            $data->nov_date,
            $data->nov_tc_date,
            $data->nov_compliance_status,
        ];
    }
}
