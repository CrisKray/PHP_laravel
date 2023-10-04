<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function Upload()
    {
        return view('upload');
    }

    public function UploadHandler(Request $rq)
    {
        $files=$rq->hinh_anh;
        $paths=[];
        foreach($files as $file)
        {
            $paths[] = $file->store('uploads');
        }
        $message="Upload thành công";
        $data=[
            'paths'=>$paths,
        ];
        return view('upload-success',$data);
    }
}
