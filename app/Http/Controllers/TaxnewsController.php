<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Auth;
use URL;
use Illuminate\Pagination\LengthAwarePaginator;

class TaxnewsController extends Controller
{
   
    public function index()
    {   
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://clearstarttax.com/wp-json/post/v2/taxnews/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);
        
        curl_close($curl);
        $taxnews = json_decode($response, true);

         // Paginate the data with 10 items per page
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemsPerPage = 15;
        $currentItems = array_slice($taxnews, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
        $taxnewsPaginated = new LengthAwarePaginator($currentItems, count($taxnews), $itemsPerPage);


        return view('taxnews.index', compact('taxnewsPaginated'));
    }
    
    
    public function taxnews_details($id)
    {
     
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://clearstarttax.com/wp-json/post/v2/taxnews/?post_id='.$id,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        $taxnews_details = json_decode($response, true); 
        
        if($taxnews_details){
            $cid = $taxnews_details[0]['categories'][0];
            $curl = curl_init();
        
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://clearstarttax.com/wp-json/post/v2/taxnews/?post_not_in_id='.$id.'&category_id='.$cid,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            
            $response = curl_exec($curl);

            curl_close($curl);

            $taxnews_related = json_decode($response, true); 
            if(count($taxnews_related) < 5){

                    $curl = curl_init();
        
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://clearstarttax.com/wp-json/post/v2/taxnews/?post_not_in_id='.$id,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'GET',
                    ));

                    $response = curl_exec($curl);
                    
                    curl_close($curl);
                    $taxnews = json_decode($response, true);

                    // Shuffle the array to randomize its order
                    shuffle($taxnews);

                    // Take the first 5 elements of the shuffled array
                    $array2Subset = array_slice($taxnews, 0, 8);

                    // Merge $array2Subset into $array1
                    $taxnews_related = array_merge($taxnews_related, $array2Subset);


            }

        }



        return view('taxnews.taxnews_details', compact('taxnews_details', 'taxnews_related'));
    }
    
}

