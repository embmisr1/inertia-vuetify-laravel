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
            "un_crs_number",
            "un_lat",
            "un_long",
            "un_firmname",
            "un_proponent",
            "province",
            "city_municipality",
            "barangay",
        ];
    }
    public function query()
    {
        $query = DB::table('tbl_universe as a')->select(
            "un_crs_number",
            "un_lat",
            "un_long",
            "un_firmname",
            "un_proponent",
            'b.provDesc as province',
            'c.citymunDesc as city_municipality',
            'd.brgyDesc as barangay',
            // 'b.provDesc',
            // 'c.citymunDesc',
            // 'd.brgyDesc',
        )
            ->leftjoin('ref_province as b', 'a.un_province', '=', 'b.PK_province_ID')
            ->leftjoin('ref_citymun as c', 'a.un_municipality', '=', 'c.PK_citymun_ID')
            ->leftjoin('ref_brgy as d', 'a.un_brgy', '=', 'd.PK_brgy_ID')
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
            $data->un_crs_number,
            $data->un_lat,
            $data->un_long,
            $data->un_firmname,
            $data->un_proponent,
            $data->province,
            $data->city_municipality,
            $data->barangay,
        ];
    }
}
