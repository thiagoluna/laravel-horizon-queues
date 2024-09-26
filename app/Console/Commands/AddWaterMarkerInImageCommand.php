<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Services\Images\Contracts\WaterMarkerInterface;
use Illuminate\Console\Command;

class AddWaterMarkerInImageCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'watermarker:image-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add watermarker in user images';

    public function __construct(
        protected WaterMarkerInterface $waterMarker,
        protected User $user,
    )
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = $this->user->get();

        foreach ($users as $user) {
            $this->waterMarker->make($user->image);
        }

        return 0;
    }
}
