<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\KeluhanPelanggan;

class DeleteKeluhan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'keluhan:delete';

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
        return KeluhanPelanggan::where('flag_aktif', 0)->where('status_keluhan', 'O')->delete();
    }
}
