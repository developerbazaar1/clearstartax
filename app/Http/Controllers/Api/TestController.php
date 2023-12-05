<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class TestController extends Controller
{
    
         public function abcd(Request $request)
    {
          
        $providedPoints = $request->input('points'); 
        // Example array of points in the given format
        // $providedPoints = [
        //     [3, 2],
        //     [3, 2],
        //     // ... (insert the rest of your points here)
        //     [4, 2],
        //     [3, 2],
        // ];
        
        // Convert the provided points to the reference format
        $referencePoints = array_map(function ($point) {
            return ['x' => $point[0], 'y' => $point[1]];
        }, $providedPoints);
        
        // Display the converted points
        // echo json_encode(['points' => $referencePoints], JSON_PRETTY_PRINT);

      
        
        $points = $referencePoints;
        // $points = [
        //     ['x' => 2, 'y' => 2],
        //     ['x' => 4, 'y' => 10],
        //     ['x' => 9, 'y' => 7],
        //     ['x' => 11, 'y' => 2],
        //     ['x' => 2, 'y' => 2],   
        // ];

          $area = 0;

            // Triangulate the shape and calculate area for each triangle
            for ($i = 1; $i < count($points) - 1; $i++) {
                $x1 = $points[0]['x'];
                $y1 = $points[0]['y'];
                $x2 = $points[$i]['x'];
                $y2 = $points[$i]['y'];
                $x3 = $points[$i + 1]['x'];
                $y3 = $points[$i + 1]['y'];
        
                // Calculate the area of the triangle using Shoelace formula
                $triangleArea = 0.5 * abs(($x1 * ($y2 - $y3) + $x2 * ($y3 - $y1) + $x3 * ($y1 - $y2)));
                $area += $triangleArea;
            }
        
            return $area;
    }
    

}
