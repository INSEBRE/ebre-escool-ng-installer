<?php
namespace Insebre\EbreescoolngInstaller\Providers;
use Insebre\EbreescoolngInstaller\Facades\EbreescoolngAdminLTE;
use Illuminate\Console\AppNamespaceDetectorTrait;
use Illuminate\Support\ServiceProvider;
/**
 * Class AdminLTETemplateServiceProvider.
 */
class EbreescoolngServiceProvider extends ServiceProvider
{
    use AppNamespaceDetectorTrait;
    /**
     * Register the application services.
     */
    public function register()
    {
        if (!defined('EBREESCOOLNGADMINLTETEMPLATE_PATH')) {
            define('EBREESCOOLNGADMINLTETEMPLATE_PATH', realpath(__DIR__.'/../../'));
        }
        if ($this->app->runningInConsole()) {
            $this->commands([\Insebre\EbreescoolngInstaller\Console\EbreescoolAdminLTE::class]);
        }
        $this->app->bind('EbreescoolngAdminLTE', function () {
            return new \Insebre\EbreescoolngInstaller\EbreescoolAdminLTE();
        });
    }
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->defineRoutes();
        $this->publishHomeController();
        $this->changeAuthController();
        $this->publishPublicAssets();
        $this->publishViews();
        $this->publishResourceAssets();
        $this->publishTests();
    }
    /**
     * Define the AdminLTETemplate routes.
     */
    protected function defineRoutes()
    {
        if (!$this->app->routesAreCached()) {
            $router = app('router');
            $router->group(['namespace' => $this->getAppNamespace().'Http\Controllers'], function () {
                require __DIR__.'/../Http/routes.php';
            });
        }
    }
    /**
     * Publish Home Controller.
     */
    private function publishHomeController()
    {
        $this->publishes(EbrescoolngAdminLTE::homeController(), 'ebreescoolngadminlte');
    }
    /**
     * Change default Laravel AuthController.
     */
    private function changeAuthController()
    {
        $this->publishes(EbrescoolngAdminLTE::authController(), 'ebreescoolngadminlte');
    }
    /**
     * Publish public resource assets to Laravel project.
     */
    private function publishPublicAssets()
    {
        $this->publishes(EbrescoolngAdminLTE::publicAssets(), 'ebreescoolngadminlte');
    }
    /**
     * Publish package views to Laravel project.
     */
    private function publishViews()
    {
        $this->loadViewsFrom(EBREESCOOLNGADMINLTETEMPLATE_PATH.'/resources/views/', 'ebreescoolngadminlte');
        $this->publishes(EbrescoolngAdminLTE::views(), 'ebreescoolngadminlte');
    }
    /**
     * Publish package resource assets to Laravel project.
     */
    private function publishResourceAssets()
    {
        $this->publishes(EbrescoolngAdminLTE::resourceAssets(), 'ebreescoolngadminlte');
    }
    /**
     * Publish package tests to Laravel project.
     */
    private function publishTests()
    {
        $this->publishes(EbrescoolngAdminLTE::tests(), 'ebreescoolngadminlte');
    }
}
