<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class InvoiceCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'invoice:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for invoice per-month';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = \DB::table('users')
                        ->where('id_role', 2)
                        ->get();
        foreach($users as $user)
        {
            $cron_job = \DB::table('invoice')
                            ->insert([
                                'id_user' => $user->id,
                                'no_invoice' => 'SIS'.$user->username.date('Ymd'),
                                'tgl_bayar' => null,
                                'nominal_bayar' => 500000,
                                'note_invoice' => 'Pembayaran SPP '.date('d F Y'),
                                'status_invoice' => 'Belum Bayar',
                                'updated_at' => date('d F Y'),
                                'created_at' => date('d F Y')
                            ]);
        } 

        Log::info('Creating invoice cron job! '.date('d F Y'));
    }
}
