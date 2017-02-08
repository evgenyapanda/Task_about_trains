<?php

use Illuminate\Database\Seeder;

use App\Train;
use App\Schedule;
use App\Country;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        (new Train())->truncate();
        (new Schedule())->truncate();
        (new Country())->truncate();

        $trainData = [
            'train_number' => '1'
        ];

        $scheduleData = [
            'time_departure' => '12:00',
            'time_arrival' => '14:00',
            'id_train' => '1'
        ];

        $countryData = [
            'country' => 'Dnepr'
        ];

        $train = App\Train::create($trainData);

        $schedule = App\Schedule::create($scheduleData);

        $country = App\Country::create($countryData);
    }
}
