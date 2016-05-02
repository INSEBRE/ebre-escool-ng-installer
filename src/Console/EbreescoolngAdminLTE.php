<?php
namespace Insebre\EbreescoolngInstaller\Console;
use Illuminate\Console\Command;
/**
 * Class AdminLTE.
 */
class EbreescoolngAdminLTE extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'ebre-escool-ng:install';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Ebre-escool ng AdminLTE Template into fresh laravel project';
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->installHomeController();
        $this->installAuthController();
        $this->installPublicAssets();
        $this->installViews();
        $this->installResourceAssets();
    }
    /**
     * Install Home Controller.
     */
    private function installHomeController()
    {
        $this->install(\Insebre\EbreescoolngInstaller\Facades\EbreescoolngAdminLTE::homeController());
    }
    /**
     * Install Auth controller.
     */
    private function installAuthController()
    {
        $this->install(\Insebre\EbreescoolngInstaller\Facades\EbreescoolngAdminLTE::authController());
    }
    /**
     * Install public assets.
     */
    private function installPublicAssets()
    {
        $this->install(\Insebre\EbreescoolngInstaller\Facades\EbreescoolngAdminLTE::publicAssets());
    }
    /**
     * Install views.
     */
    private function installViews()
    {
        $this->install(\Insebre\EbreescoolngInstaller\Facades\EbreescoolngAdminLTE::views());
    }
    /**
     * Install resource assets.
     */
    private function installResourceAssets()
    {
        $this->install(\Insebre\EbreescoolngInstaller\Facades\EbreescoolngAdminLTE::resourceAssets());
    }
    /**
     * Install files from array.
     *
     * @param $files
     */
    private function install($files)
    {
        foreach ($files as $fileSrc => $fileDst) {
            copy($fileSrc, $fileDst);
        }
    }
}
