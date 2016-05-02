<?php
namespace Insebre\EbreescoolngInstaller\Facades;
use Illuminate\Support\Facades\Facade;
/**
 * Class AdminLTE.
 */
class EbreescoolngAdminLTE extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'EbreescoolAdminLTE';
    }
}
