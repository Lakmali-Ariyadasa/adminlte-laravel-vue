<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

// use Intervention\Image\Facades\Image;


class ImageController extends Controller
{

public function upload(Request $request)
{
    // $request->validate([
    //     'title' => 'required',
    //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
    // ]);
   
    $image = $request->file('image');

    $imageData = file_get_contents($image->getRealPath());

    $newImage = Image::create([
        'title' => $request->input('title'),
        'image_data' => $imageData,
    ]);


    return response()->json(['message' => 'Image uploaded successfully']);
}


    public function handleImageUpload(Request $request)
{
    try {
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('uploads'), $imageName);

        $imagePath = public_path('uploads') . '/' . $imageName;

        $dominantColor = $this->getDominantColor($imagePath);

        return response()->json(['dominantColor' => $dominantColor]);

        \Log::info('Image upload successful.');

        return response()->json(['message' => 'Image uploaded successfully.']);
    } catch (\Exception $e) {
      
        \Log::error('Error handling image upload: ' . $e->getMessage());

        return response()->json(['error' => 'Internal Server Error'], 500);
    }
}

    private function getDominantColor($imagePath)
    {
        $img = Image::make($imagePath);
        $pixel = $img->limitColors(1)->pickColor(0, 0, 'hex');
        return $pixel;
    }
}


