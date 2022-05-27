<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monitoring;
use DB;

class UniverseMonitoringController extends Controller
{
    public function monitoring_process_create($request, $universe_id){
        if($request->monitoring['mon_law'] && $request->monitoring['mon_date_monitored']){
            $query = new Monitoring();
            foreach($this->monitoring_columns() as $cols){
                $query->$cols = $request->monitoring[$cols];
            }
            $query->mon_law = $this->industry_laws($request, 'monitoring', 'mon_law');
            $query->universe_FK = $universe_id;
            $query->save();
            return $query->id;
        }
    }

    public function monitoring_process_update($request, $universe_id){
        if($request->monitoring['mon_law'] && $request->monitoring['mon_date_monitored']){
            if($request->monitoring['mon_id']){
                $query = Monitoring::find($request->monitoring['mon_id']);
            }else{
                $query = new Monitoring();
            }
            foreach($this->monitoring_columns() as $cols){
                $query->$cols = $request->monitoring[$cols];
            }
            $query->mon_law = $this->industry_laws($request, 'monitoring', 'mon_law');
            $query->universe_FK = $universe_id;
            $query->save();
            return $request->monitoring['mon_id'];
        }
    }
    
    public function delete_monitoring($request){
        $query = Monitoring::find($request);
        $query->delete();
        return back();
    }

    public function monitoring_columns(){
        $columns_controller = new ColumnsController;
        return $columns_controller->monitoring_columns();
    }

    public function industry_laws($request, $law, $column){
        $industry_laws = '';
        foreach($request->$law[$column] as $industry_law){
            $industry_laws = $industry_laws.$industry_law.', ';
        }
        return rtrim($industry_laws,', ');
    }
}
