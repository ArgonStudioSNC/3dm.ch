<?php

namespace App\Http\Controllers\Web;

use Session;
use App\Models;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
    * Get the Rendersurfer SPA.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index()
    {
        return view('admin');
    }

    public function uploadFile(Request $request){

        if ($request->input('submit') != null ){

            $file = $request->file('file');

            // File Details
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize();
            $mimeType = $file->getMimeType();

            // Valid File Extensions
            $valid_extension = array("csv");

            // 2MB in Bytes
            $maxFileSize = 2097152;

            // Check file extension
            if(in_array(strtolower($extension),$valid_extension)){

                // Check file size
                if($fileSize <= $maxFileSize){

                    // File upload location
                    $location = 'uploads';

                    // Upload file
                    $file->move($location,$filename);

                    // Import CSV to Database
                    $filepath = public_path($location."/".$filename);

                    // Reading file
                    $file = fopen($filepath,"r");

                    $importData_arr = array();
                    $i = 0;

                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                        $num = count($filedata );

                        // Skip first row (Remove below comment if you want to skip the first row)
                        if($i == 0){
                            $i++;
                            continue;
                        }
                        for ($c=0; $c < $num; $c++) {
                            $importData_arr[$i][] = $filedata [$c];
                        }
                        $i++;
                    }
                    fclose($file);

                    // Insert to MySQL database
                    foreach($importData_arr as $importData){
                        $render = new Models\Render;

                        $render->name           = $importData[1];

                        $filter = Models\Office::firstWhere('name', $importData[2]);
                        $render->office_id = $filter ? $filter->id : null;

                        $render->year = $importData[3] ? $importData[3] : null;

                        $filter = Models\Type::firstWhere('name', $importData[4]);
                        $render->type_id = $filter ? $filter->id : null;

                        $filter = Models\Style::firstWhere('name', $importData[5]);
                        $render->style_id = $filter ? $filter->id : null;

                        $filter = Models\Seasontime::firstWhere('name', $importData[6]);
                        $render->seasontime_id = $filter ? $filter->id : null;

                        $filter = Models\Weather::firstWhere('name', $importData[7]);
                        $render->weather_id = $filter ? $filter->id : null;

                        $filter = Models\Daytime::firstWhere('name', $importData[8]);
                        $render->daytime_id = $filter ? $filter->id : null;

                        $filter = Models\Light::firstWhere('name', $importData[9]);
                        $render->light_id = $filter ? $filter->id : null;

                        $filter = Models\Composition::firstWhere('name', $importData[10]);
                        $render->composition_id = $filter ? $filter->id : null;

                        $filter = Models\Assignement::firstWhere('name', $importData[11]);
                        $render->assignement_id = $filter ? $filter->id : null;

                        $filter = Models\Country::firstWhere('name', $importData[12]);
                        $render->country_code = $filter ? $filter->code : null;

                        $render->filename       = $importData[13];

                        $render->save();
                    }

                    Session::flash('message','Import Successful.');
                }else{
                    Session::flash('message','File too large. File must be less than 2MB.');
                }

            }else{
                Session::flash('message','Invalid File Extension.');
            }

        }

        // Redirect to index
        return redirect()->route('admin.index');
    }
}
