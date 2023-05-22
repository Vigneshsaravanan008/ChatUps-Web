<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Storage;

trait ImageTrait
{
    public function imageUpload(Request $request, $path)
    {
        $files = request()->file('image');
        $image = file_get_contents($request->image);
        Storage::disk('public')->put($path . $files->getClientOriginalName(), $image);
        return $image;
    }
}
