<?php
namespace Insebre\EbreescoolngInstaller\Console;
use Illuminate\Console\Command;
/**
 * Class AdminLTE.
 */
class AdminLTE extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'adminlte-laravel:install';
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
        $this->install(\Insebre\EbreescoolngInstaller\Facades\EbreescoolAdminLTE::homeController());
    }
    /**
     * Install Auth controller.
     */
    private function installAuthController()
    {
        $this->install(\Insebre\EbreescoolngInstaller\Facades\EbreescoolAdminLTE::authController());
    }
    /**
     * Install public assets.
     */
    private function installPublicAssets()
    {
        $this->install(\Insebre\EbreescoolngInstaller\Facades\EbreescoolAdminLTE::publicAssets());
    }
    /**
     * Install views.
     */
    private function installViews()
    {
        $this->install(\Insebre\EbreescoolngInstaller\Facades\EbreescoolAdminLTE::views());
    }
    /**
     * Install resource assets.
     */
    private function installResourceAssets()
    {
        $this->install(\Insebre\EbreescoolngInstaller\Facades\EbreescoolAdminLTE::resourceAssets());
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
