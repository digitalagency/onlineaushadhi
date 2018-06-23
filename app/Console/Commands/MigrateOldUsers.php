<?php

namespace App\Console\Commands;

use App\OldUser;
use App\User;
use Illuminate\Console\Command;

class MigrateOldUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'oldtonew:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //dd(OldUser::all());
        $users = OldUser::all();

        foreach ($users as $user) {
            User::create([
                'name' => $user->fullname,
                'email' => $user->email,
                'created_at' => $user->register_date,
                'register_from' => $user->register_from,
                'phone' => $user->mobile_number,
                'additional_phone' => $user->landline_number,
                'address' => $user->ward_no.' '.$user->place_name.' '.$user->district.' '.$user->district,
                'reference' => $user->reference ? $user->reference : '',
                'discount_percentage' => $user->discount_percentage,
                'type' => $user->user_type,
                'active' => $user->active
            ]);

            echo $user->email."\n";
           // sleep(2);
        }
    }
}
