<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = $this->addressRegion();
        foreach ($cities as $value){
            City::create(["state" => "PA", "city" => $value->nome]);
        }
    }

    private function addressRegion(){

        $url = "https://servicodados.ibge.gov.br/api/v1/localidades/estados/PA/municipios?orderBy=nome";
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_RETURNTRANSFER => true,
        ));

        $response = curl_exec($curl);
        $error = curl_error($curl);
        curl_close($curl);
        if ($error) {
            return false;
        }
        return json_decode($response);
    }

}
