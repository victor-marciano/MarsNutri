<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apiData = $this->getTacoApiData();
        $arrFood = $this->createFoodData($apiData);
        
        array_walk($arrFood, function ($food) {
            DB::table('alimento')->insert([                
                'descricao' => $food['descricao'],
                'calorias' => $food['calorias'],
                'carbohidrato' => $food['carbohidrato'],
                'proteina' => $food['proteina'],
                'gordura' => $food['gordura']
            ]);
        }, $arrFood);
    }

    // private function getTacoApiData(): array
    // {
    //     try {
    //         $ch = curl_init('https://taco-food-api.herokuapp.com/api/v1/food');
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //         $response = curl_exec($ch);
    //         curl_close($ch);
    //     } catch (\Exception $e) {
    //         throw $e;
    //     }
        
    //     return json_decode($response, true);      
    // }

    private function getTacoApiData(): array
    {
        $response = include(__DIR__ . "\\foodData.php");
        return $response;
    }

    private function createFoodData(array $arrData): array
    {
        $arrReturn = array_map(function ($data) {
            $newArray = [];
            $newArray['descricao'] = $data[0];
            $newArray['calorias'] = number_format((float)$data[1]);
            $newArray['carbohidrato'] = number_format((float)$data[2]);
            $newArray['proteina'] = number_format((float)$data[3]);
            $newArray['gordura'] = number_format((float)$data[4]);
            return $newArray;
        }, $arrData);
        
        return $arrReturn;
    }
    // private function createFoodData(array $arrData): array
    // {
    //     $arrReturn = array_map(function ($data) {
    //         $newArray = [];
    //         $newArray['id'] = $data['id'];
    //         $newArray['descricao'] = $data['description'];
    //         $newArray['calorias'] = $data['attributes']['energy']['kcal'];
    //         $newArray['carbohidrato'] = $data['attributes']['carbohydrate']['qty'] ?? 0;
    //         $newArray['proteina'] = $data['attributes']['protein']['qty'] ?? 0;
    //         $newArray['gordura'] = $data['attributes']['lipid']['qty'] ?? 0;
    //         return $newArray;
    //     }, $arrData);
        
    //     return $arrReturn;
    // }

}
