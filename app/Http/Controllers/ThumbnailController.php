<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Laracasts\Flash\Flash;

class ThumbnailController extends Controller
{

    public function showCropImageModal(Request $request){

        return view('admin/crop_modal' , $request->toArray());
    }


    public function makeCrop(Request $request){

        $img = Image::make(public_path($request->path));
        $img->crop((integer)$request->w, (integer)$request->h, (integer)$request->x1, (integer)$request->y1);
        $img = self::makeResize($img,$request->width, $request->height);

        $prefix_path = $request->path;
        if(!empty($request->prefix)){
            $prefix_path = self::getPrefixFilePath($request->path,$request->prefix);
        }

        $img->save(public_path($prefix_path));
        Flash::success('Sikeres módosítás');


        return redirect()->back();
    }


    /**
     * Elvégzi az átméretezést
     *
     * @param
     * @return
     */
    public static function makeResize($img, $width, $height){

        if(!empty($width) && !empty($height) ){
            $img->fit($width , $height);
        }
        if(empty($width)){
            $img->heighten($height);
        }
        if(empty($height)){
            $img->widen($width);
        }
        return $img;
    }

    /**
     * Prefix alapján megváltoztatott fájl nevet ad vissza az eredeti elérés uttal
     * @param string $path    /file/slide/521/azta.jpg
     * @param string $prefix resize_
     * @return string  /file/slide/0/521/resize_azta.jpg
     */
    public static function getPrefixFilePath($path,$prefix){
        $path = str_replace("\\","/", $path);
        $path_array = explode('/', $path);
        $path_array[count($path_array)-1] = $prefix.end($path_array);
        $path = implode('/', $path_array);

        return $path;
    }


    public function uploadImage(Request $request){
        $request->validate([
//            'image' => 'required|unique:posts|max:255',
            'image' => 'required',
//            'publish_at' => 'nullable|date',
        ]);

        $image = $request->image;
        $path = public_path($request->path . $request->image_name);
        Image::make($image->getRealPath())->save($path);
        return redirect()->back();
    }
}
