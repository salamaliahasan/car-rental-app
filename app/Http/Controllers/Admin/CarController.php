<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CarController extends Controller
{
    function CarPage():View{
        return view('pages.dashboard.car-page');
    }


    function CreateCar(Request $request)
    {
        $user_id=$request->header('id');

        // Prepare File Name & Path
        $img=$request->file('img');

        $t=time();
        $file_name=$img->getClientOriginalName();
        $img_name="{$user_id}-{$t}-{$file_name}";
        $img_url="uploads/{$img_name}";


        // Upload File
        $img->move(public_path('uploads'),$img_name);


        // Save To Database
        return Car::create([
            'name'=>$request->input('name'),
            'brand'=>$request->input('brand'),
            'model'=>$request->input('model'),
            'year'=>$request->input('year'),
            'car_type'=>$request->input('car_type'),
            'daily_rent_price'=>$request->input('daily_rent_price'),
            'image'=>$img_url,
            'availability'=>$request->input('availability')
        ]);
    }


    function DeleteCar(Request $request)
    {
       // $user_id=$request->header('id');
        $car_id=$request->input('id');
        $filePath=$request->input('file_path');
        File::delete($filePath);
        return Car::where('id',$car_id)->delete();

    }


    function CarByID(Request $request)
    {
       // $user_id=$request->header('id');
        $car_id=$request->input('id');
        return Car::where('id',$car_id)->first();
    }


    function CarList(Request $request)
    {
        //$user_id=$request->header('id');
        return Car::all();
    }




    function UpdateCar(Request $request)
    {
         $user_id=$request->header('id');
         $car_id=$request->input('id');

        if ($request->hasFile('img')) {

            // Upload New File
            $img=$request->file('img');
            $t=time();
            $file_name=$img->getClientOriginalName();
            $img_name="{$user_id}-{$t}-{$file_name}";
            $img_url="uploads/{$img_name}";
            $img->move(public_path('uploads'),$img_name);

            // Delete Old File
            $filePath=$request->input('file_path');
            File::delete($filePath);

            // Update Car

            return Car::where('id',$car_id)->update([
                'name'=>$request->input('name'),
            'brand'=>$request->input('brand'),
            'model'=>$request->input('model'),
            'year'=>$request->input('year'),
            'car_type'=>$request->input('car_type'),
            'daily_rent_price'=>$request->input('daily_rent_price'),
            'image'=>$img_url,
            'availability'=>$request->input('availability')
            ]);

        }

        else {
            return Car::where('id',$car_id)->update([
                'name'=>$request->input('name'),
                'brand'=>$request->input('brand'),
                'model'=>$request->input('model'),
                'year'=>$request->input('year'),
                'car_type'=>$request->input('car_type'),
                'daily_rent_price'=>$request->input('daily_rent_price'),
                'availability'=>$request->input('availability')
            ]);
        }
    }
}
