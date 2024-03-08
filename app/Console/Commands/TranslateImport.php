<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TranslateImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:translate-import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import translation.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $config = config('app.translates.spreadsheets');

        $id = $config['id'];
        $gids = $config['gids'];

        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false
            ]
        ]);

        $translates = [];
        foreach($gids as $locale => $gid) {
            $link = str_replace(['{id}', '{gid}'], [$id, $gid], 'https://docs.google.com/spreadsheets/d/{id}/export?format=csv&gid={gid}');

            $i = 1;
            $translates[$locale] = [];

            $this->info(sprintf('Open %s locale...', $locale));
            if (($handle = fopen($link, "r", null, $context)) !== false) {
                while (($data = fgetcsv($handle, 2048, ",")) !== false) {

                    //
                    if(count($data) < 1) {
                        continue;
                    }

                    // Skip first line
                    if($i == 1) {
                        $i++;
                        continue;
                    }

                    [$key, $value] = $data;

                    if(!empty($value)) {
                        $this->info(sprintf('- %s:%s', $key, $value));
                        $translates[$locale][$key] = $value;
                    }
                }
            }
        }

        $this->info('Build translates files...');

        foreach($gids as $locale => $gid) {
            $filename = lang_path(sprintf('%s/app.php', $locale));
            @mkdir(lang_path(sprintf('%s', $locale)));
            @unlink($filename);

            file_put_contents($filename, '<?php'."\n", FILE_APPEND);
            file_put_contents($filename, 'return ['."\n", FILE_APPEND);

            foreach($translates[$locale] as $key => $value) {
                $out = "    '" . $key . "' => '" . addcslashes($value, '\'') . "',"."\n";
                file_put_contents($filename, $out, FILE_APPEND);
            }

            file_put_contents($filename, '];'."\n", FILE_APPEND);
        }

        $this->info('Done.');
    }
}
