<?php
/**
 * Exception handlers
 *
 * @package     PCianes\Support
 * @since     	1.0.0
 * @author      Pablo Cianes
 * @link     	https://pablocianes.com
 * @license     GNU General Public License 2.0+
 *
 */
namespace PCianes\Support;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

$whoops_run = new Run();
$error_page_handler = new PrettyPageHandler();
$error_page_handler->setEditor( 'sublime' );

$whoops_run->pushHandler( $error_page_handler);
$whoops_run->register();