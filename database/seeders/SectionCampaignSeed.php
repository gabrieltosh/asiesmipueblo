<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\SectionCampaign;
class SectionCampaignSeed extends Seeder
{
    public function run()
    {
        $data=array(
            [
                'name'=>'Inicio de Campaña',
                'description'=>'Inicio de Campaña',
                'priority'=>'1',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'name'=>'Entrega de Donaciones',
                'description'=>'Entrega de Donaciones',
                'priority'=>'3',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'name'=>'Seguimiento y/o Cierre de Campaña',
                'description'=>'Seguimiento y/o Cierre de Campaña',
                'priority'=>'5',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        );
        SectionCampaign::insert($data);
    }
}
