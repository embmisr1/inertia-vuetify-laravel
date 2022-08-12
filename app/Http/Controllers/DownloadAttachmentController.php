<?php

namespace App\Http\Controllers;

use App\Http\Resources\AttachmentResource;
use App\Models\Complaint;
use App\Models\Legal;
use App\Models\Monitoring;
use App\Models\Permit;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class DownloadAttachmentController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->type;
        $id = (int) $request->id;

        $data = [
            "url" => url('/app')
        ];
        switch ($type) {
            case 'permits':
                $data = array("permits" => $this->permit($id));
                break;
            case 'monitoring':
                $data['monitoring'] = $this->monitoring($id);
                break;
            case 'legal':
                $data['legal'] = $this->legal($id);
                break;
            case 'complaint':
                $data['complaint'] = $this->complaint($id);
                break;
            case 'complaintaction':
                $data['complaintaction'] = $this->complaintaction($id);
                break;
            case 'slot 6':
                break;
            default:
                $data = array("permits" => $this->permit($id));
                $data['monitoring'] = $this->monitoring($id);
                $data['legal'] = $this->legal($id);
                $data['complaint'] = $this->complaint($id);
                $data['complaintaction'] = $this->complaintaction($id);
                break;
        };
        // return $data;
        return view('download_attachment', $data);
    }

    private function permit($id)
    {
        $permit = Permit::find($id);
        return AttachmentResource::collection($permit->getMedia('permits'));
    }
    private function monitoring($id)
    {
        $monitoring = Monitoring::find($id);
        return AttachmentResource::collection($monitoring->getMedia('monitoring'));
    }
    private function legal($id)
    {
        $legal = Legal::find($id);
        return AttachmentResource::collection($legal->getMedia('legal'));
    }
    private function complaint($id)
    {
        $complaint = Complaint::find($id);
        return AttachmentResource::collection($complaint->getMedia('complaint'));
    }
    private function complaintaction($id)
    {
        $complaint = Complaint::find($id);
        return AttachmentResource::collection($complaint->getMedia('complaintaction'));
    }
}
