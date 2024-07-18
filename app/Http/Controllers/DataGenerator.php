<?php

namespace App\Http\Controllers;

use App\Domains\Company\Models\Company;
use App\Domains\Country\Models\Country;
use App\Domains\Mining\Models\Mining;
use Carbon\Carbon;
use Faker\Provider\en_US\Person;

class DataGenerator extends Controller
{

    public function process(): string
    {
        $this->processData();
        return 'Молодец';
    }

    public function processData()
    {
        $countryNames = ['Egypt', 'Ukraine', 'Japan', 'Spain', 'Italy',
            'France', 'Germany', 'Canada', 'Australia', 'USA'];
        foreach ($countryNames as $countryName) {
            $country = new Country();
            $country->name = $countryName;
            $country->plan = rand(100, 10000000);
            $country->save();
        }
        $this->generateCompanies(count($countryNames));
    }

    public function generateCompanies(int $countriesCount)
    {
        $data = [];
        for ($i = 0; $i < $countriesCount; $i++) {
            $company1 = new Company();
            $company2 = new Company();
            $company1->name = Person::firstNameMale();
            $company1->country_id = $i + 1;
            $company1->email = 'test1@test1.com';
            $company1->save();

            $company2->name = Person::firstNameFemale();
            $company2->country_id = $i + 1;
            $company2->email = 'test2@test2.com';
            $company2->save();
            $data[$i] = $company1;
            $data[$i+10] = $company2;
        }

        $this->generateMiningData($data);
    }

    public function generateMiningData($companies)
    {
        $data = [];

        for($j = 0; $j < count($companies); $j++) {
            $recordsCount = 50;
            for ($i = 0; $i < $recordsCount; $i++) {
                $date = Carbon::now()->subDays(rand(0, 180))->format('Y-m-d H:i:s');
                $weight = rand(100, 1000000);

                $mining = new Mining();
                $mining->company_id = $j + 1;
                $mining->date = $date;
                $mining->mined_weight = $weight;

                $mining->save();
            }
        }

        return $data;
    }
}
