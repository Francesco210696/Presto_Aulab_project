<?php

namespace App\Jobs;

use App\Models\Image;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Manipulations;

class CopyrightImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(private $announcement_image_id)
    {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->announcement_image_id);
        if (!$i) {
            return;
        }
        $srcPath = storage_path('app/public/' . $i->path);


        $image = SpatieImage::load($srcPath);


        $image->watermark(base_path('resources\img\watermark.png'))
            ->watermarkOpacity(25)
            ->watermarkPosition(Manipulations::POSITION_CENTER)
            ->watermarkHeight(100, Manipulations::UNIT_PERCENT)
            ->watermarkWidth(100, Manipulations::UNIT_PERCENT)
            ->watermarkFit(Manipulations::FIT_CONTAIN);

        $image->save($srcPath);
    }
}
