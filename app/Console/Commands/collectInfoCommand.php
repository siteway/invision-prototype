<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Project;
class collectInfoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:collect';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Collect info from the files in folder and save it to the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // get all projects
        $projects = Project::all();

        // get all files in folder
        $files = glob('storage/app/public/prototypes/*');
        foreach ($projects as $project) {
            $files = glob('storage/app/public/prototypes/' . $project->slug . '/files/screens/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
            $firstImage = array_shift($files);
            $project->first_image = basename($firstImage);

            // if no first image, skip
            if (!$firstImage) {
                $this->info('No first image for ' . $project->slug);
                continue;
            }
            $this->info($project->first_image);

            // Get Project Name from H1 in index.html
            $html = file_get_contents('storage/app/public/prototypes/' . $project->slug . '/index.html');
            preg_match('/<title>\s*(.*?)\s*<\/title>/', $html, $matches);
            $project->name = $matches[1] ?? 'Unknown';

            $project->save();
        }
    }
}
