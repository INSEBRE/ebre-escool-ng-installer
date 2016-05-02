<?php
namespace Insebre\EbreescoolngInstaller;
/**
 * Class AdminLTE.
 */
class EbreescoolngAdminLTE
{
    /**
     * Home controller copy path.
     *
     * @return array
     */
    public function homeController()
    {
        return [
            EBREESCOOLNGADMINLTETEMPLATE_PATH.'/src/stubs/HomeController.stub' => app_path('Http/Controllers/HomeController.php'),
        ];
    }
    /**
     * Auth controller copy path.
     *
     * @return array
     */
    public function authController()
    {
        return [
            EBREESCOOLNGADMINLTETEMPLATE_PATH.'/src/stubs/AuthController.stub' => app_path('Http/Controllers/Auth/AuthController.php'),
        ];
    }
    /**
     * Public assets copy path.
     *
     * @return array
     */
    public function publicAssets()
    {
        return [
            EBREESCOOLNGADMINLTETEMPLATE_PATH.'/public/img'     => public_path('img'),
            EBREESCOOLNGADMINLTETEMPLATE_PATH.'/public/css'     => public_path('css'),
            EBREESCOOLNGADMINLTETEMPLATE_PATH.'/public/js'      => public_path('js'),
            EBREESCOOLNGADMINLTETEMPLATE_PATH.'/public/plugins' => public_path('plugins'),
            EBREESCOOLNGADMINLTETEMPLATE_PATH.'/public/fonts'   => public_path('fonts'),
        ];
    }
    /**
     * Views copy path.
     *
     * @return array
     */
    public function views()
    {
        return [
            EBREESCOOLNGADMINLTETEMPLATE_PATH.'/resources/views/auth'              => base_path('resources/views/auth'),
            EBREESCOOLNGADMINLTETEMPLATE_PATH.'/resources/views/auth/emails'       => base_path('resources/views/auth/emails'),
            EBREESCOOLNGADMINLTETEMPLATE_PATH.'/resources/views/errors'            => base_path('resources/views/errors'),
            EBREESCOOLNGADMINLTETEMPLATE_PATH.'/resources/views/layouts'           => base_path('resources/views/layouts'),
            EBREESCOOLNGADMINLTETEMPLATE_PATH.'/resources/views/home.blade.php'    => base_path('resources/views/home.blade.php'),
            EBREESCOOLNGADMINLTETEMPLATE_PATH.'/resources/views/welcome.blade.php' => base_path('resources/views/welcome.blade.php'),
        ];
    }
    /**
     * Tests copy path.
     *
     * @return array
     */
    public function tests()
    {
        return [
            EBREESCOOLNGADMINLTETEMPLATE_PATH.'/tests'       => base_path('tests'),
            EBREESCOOLNGADMINLTETEMPLATE_PATH.'/phpunit.xml' => base_path('phpunit.xml'),
        ];
    }
    /**
     * Resource assets copy path.
     *
     * @return array
     */
    public function resourceAssets()
    {
        return [
            EBREESCOOLNGADMINLTETEMPLATE_PATH.'/resources/assets/less' => base_path('resources/assets/less'),
            EBREESCOOLNGADMINLTETEMPLATE_PATH.'/gulpfile.js'           => base_path('gulpfile.js'),
        ];
    }
}
