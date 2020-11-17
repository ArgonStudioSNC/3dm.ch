<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models;
use App\Http\Requests\StoreRenderRequest;
use App\Http\Requests\UpdateRenderRequest;
use Illuminate\Support\Facades\Storage;
use Image;

class RendersController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /*
    |-------------------------------------------------------------------------------
    | Get All Renders
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/renders
    | Method:         GET
    | Description:    Gets all of the renders in the application
    */
    public function index(){
        $renders = Models\Render::all();

        return response()->json( $renders );
    }

    /*
    |-------------------------------------------------------------------------------
    | Get An Individual Render
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/renders/{id}
    | Method:         GET
    | Description:    Gets an individual render
    | Parameters:
    |   $id   -> ID of the render we are retrieving
    */
    public function show( $id ){
        return response()->json( Models\Render::findOrFail($id) );
    }

    /*
    |-------------------------------------------------------------------------------
    | Adds a New Render
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/renders
    | Method:         POST
    | Description:    Adds a new render to the application
    */
    public function store( StoreRenderRequest $request ){
        $render = new Models\Render();
        $render->name = $request['name'];
        if ( isset($request['year']) ) $render->year = $request['year'];

        $request->whenHas('categories', function($input) use ($render) {
            $render = $this->setCategories($render, $input);
        });

        $render->filename = $this->storeImage($request);

        $render->save();

        return response()->json($render, 201);
    }

    /*
    |-------------------------------------------------------------------------------
    | Updates An Individual Render
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/renders/{id}
    | Method:         PUT
    | Description:    Updates an individual render
    | Parameters:
    |   $id   -> ID of the render we are updating
    */
    public function update( UpdateRenderRequest $request, $id ){
        $render = Models\Render::findOrFail($id);
        error_log('enter update');
        error_log($request['name']);
        if ( isset($request['name']) ) $render->name = $request['name'];
        if ( isset($request['year']) ) $render->year = $request['year'];

        $request->whenHas('categories', function($input) use ($render) {
            $render = $this->setCategories($render, $input);
        });

        if ( isset($request['picture']) ){
            $filename = $this->storeImage($request);
            $this->deleteImage($render->filename);
            $render->filename = $filename;
        }

        error_log('before save');
        $render->save();
        error_log('after save');

        return response()->json($render, 201);
    }

    /*
    |-------------------------------------------------------------------------------
    | Deletes An Individual Render
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/renders/{id}
    | Method:         DELETE
    | Description:    Deletes an individual render
    | Parameters:
    |   $id   -> ID of the render we are deleting
    */
    public function delete( $id ){
        $render = Models\Render::findOrFail($id);
        $filename = $render->filename;

        $render->delete();
        $this->deleteImage($filename);

        return true;
    }

    /*
    |-------------------------------------------------------------------------------
    | Stores An Image In Storage
    |-------------------------------------------------------------------------------
    | Description:    Stores an image in storage
    | Parameters:
    |   $request   -> The request containing the image to store
    */
    public function storeImage( $request ) {
        $file = $request->file('picture');
        $fileExt  = $file->getClientOriginalExtension();

        $filename = date('YmdHis').'_'.uniqid().'.'.$fileExt;

        $file->storeAs('original',$filename,'rendersurfer');

        $smallImage = Image::make($file)->resize(600, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode($fileExt);

        Storage::disk('rendersurfer')->put('small'.'/'.$filename, $smallImage);

        return $filename;
    }

    /*
    |-------------------------------------------------------------------------------
    | Deletes An Image From Storage
    |-------------------------------------------------------------------------------
    | Description:    Deletes an image from storage. The File goes in the Deleted directory
    | Parameters:
    |   $filename   -> The filename of the image to delete
    */
    public function deleteImage( $filename ) {
        Storage::disk('rendersurfer')->move( 'original' . '/' . $filename, 'deleted' . '/' .  $filename );
        Storage::disk('rendersurfer')->delete( 'small' . '/' .  $filename );
    }

    /*
    |-------------------------------------------------------------------------------
    | Sets The Categories In A Given Render
    |-------------------------------------------------------------------------------
    | Description:    Sets the categories in a given render
    | Parameters:
    |   $render         -> The render to updateCategories
    |   $categories     -> JSON with the categories ids for the render
    */
    public function setCategories($render, $categories) {
        if (isset($categories->office_id)) {
            $render->office_id =  $categories->office_id;
        }
        if (isset($categories->type_id)) {
            $render->type_id =  $categories->type_id;
        }
        if (isset($categories->style_id)) {
            $render->style_id =  $categories->style_id;
        }
        if (isset($categories->seasontime_id)) {
            $render->seasontime_id =  $categories->seasontime_id;
        }
        if (isset($categories->weather_id)) {
            $render->weather_id =  $categories->weather_id;
        }
        if (isset($categories->daytime_id)) {
            $render->daytime_id =  $categories->daytime_id;
        }
        if (isset($categories->light_id)) {
            $render->light_id =  $categories->light_id;
        }
        if (isset($categories->composition_id)) {
            $render->composition_id =  $categories->composition_id;
        }
        if (isset($categories->assignement_id)) {
            $render->assignement_id =  $categories->assignement_id;
        }
        if (isset($categories->country_code)) {
            $render->country_code =  $categories->country_code;
        }
        return $render;
    }

    // public function uploadFile(Request $request){
    //
    //     if ($request->input('submit') != null ){
    //
    //         $file = $request->file('file');
    //
    //         // File Details
    //         $filename = $file->getClientOriginalName();
    //         $extension = $file->getClientOriginalExtension();
    //         $tempPath = $file->getRealPath();
    //         $fileSize = $file->getSize();
    //         $mimeType = $file->getMimeType();
    //
    //         // Valid File Extensions
    //         $valid_extension = array("csv");
    //
    //         // 2MB in Bytes
    //         $maxFileSize = 2097152;
    //
    //         // Check file extension
    //         if(in_array(strtolower($extension),$valid_extension)){
    //
    //             // Check file size
    //             if($fileSize <= $maxFileSize){
    //
    //                 // File upload location
    //                 $location = 'uploads';
    //
    //                 // Upload file
    //                 $file->move($location,$filename);
    //
    //                 // Import CSV to Database
    //                 $filepath = public_path($location."/".$filename);
    //
    //                 // Reading file
    //                 $file = fopen($filepath,"r");
    //
    //                 $importData_arr = array();
    //                 $i = 0;
    //
    //                 while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
    //                     $num = count($filedata );
    //
    //                     // Skip first row (Remove below comment if you want to skip the first row)
    //                     if($i == 0){
    //                         $i++;
    //                         continue;
    //                     }
    //                     for ($c=0; $c < $num; $c++) {
    //                         $importData_arr[$i][] = $filedata [$c];
    //                     }
    //                     $i++;
    //                 }
    //                 fclose($file);
    //
    //                 // Insert to MySQL database
    //                 foreach($importData_arr as $importData){
    //                     $render = new Models\Render;
    //
    //                     $render->name           = $importData[1];
    //
    //                     $filter = Models\Office::firstWhere('name', $importData[2]);
    //                     $render->office_id = $filter ? $filter->id : null;
    //
    //                     $render->year = $importData[3] ? $importData[3] : null;
    //
    //                     $filter = Models\Type::firstWhere('name', $importData[4]);
    //                     $render->type_id = $filter ? $filter->id : null;
    //
    //                     $filter = Models\Style::firstWhere('name', $importData[5]);
    //                     $render->style_id = $filter ? $filter->id : null;
    //
    //                     $filter = Models\Seasontime::firstWhere('name', $importData[6]);
    //                     $render->seasontime_id = $filter ? $filter->id : null;
    //
    //                     $filter = Models\Weather::firstWhere('name', $importData[7]);
    //                     $render->weather_id = $filter ? $filter->id : null;
    //
    //                     $filter = Models\Daytime::firstWhere('name', $importData[8]);
    //                     $render->daytime_id = $filter ? $filter->id : null;
    //
    //                     $filter = Models\Light::firstWhere('name', $importData[9]);
    //                     $render->light_id = $filter ? $filter->id : null;
    //
    //                     $filter = Models\Composition::firstWhere('name', $importData[10]);
    //                     $render->composition_id = $filter ? $filter->id : null;
    //
    //                     $filter = Models\Assignement::firstWhere('name', $importData[11]);
    //                     $render->assignement_id = $filter ? $filter->id : null;
    //
    //                     $filter = Models\Country::firstWhere('name', $importData[12]);
    //                     $render->country_code = $filter ? $filter->code : null;
    //
    //                     $render->filename       = $importData[13];
    //
    //                     $render->save();
    //                 }
    //
    //                 Session::flash('message','Import Successful.');
    //             }else{
    //                 Session::flash('message','File too large. File must be less than 2MB.');
    //             }
    //
    //         }else{
    //             Session::flash('message','Invalid File Extension.');
    //         }
    //
    //     }
    //
    //     // Redirect to index
    //     return redirect()->route('admin.index');
    // }
}
