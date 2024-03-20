<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class UpdateFeatures extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:update-featured {productId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'change product featured';


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //creare ciclo per cambiare più prodotti

        //se un prodotto ha già featured 1 allora la metto a 0

        $product = Product::where('id', $this->argument('productId'));
        $product->update(['featured' => 1]);


        return Command::SUCCESS;
    }
}
