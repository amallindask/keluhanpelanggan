<?php

namespace App\Console\Commands;

use App\Models\KeluhanPelanggan;
use Illuminate\Console\Command;

class UpdateKeluhan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'keluhan:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return Command::SUCCESS;
        return KeluhanPelanggan::where('created_at', '<', now())->update(['status_keluhan' => 'C']);
    }
}
