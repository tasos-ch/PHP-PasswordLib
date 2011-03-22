<?php
/**
 * The Random Number Source interface.
 *
 * All random number sources must implement this interface
 *
 * PHP version 5.3
 *
 * @category   PHPCryptLib
 * @package    Random
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://opensource.org/licenses/bsd-license.php New BSD License
 * @license    http://www.gnu.org/licenses/lgpl-2.1.html LGPL v 2.1
 * @version    Build @@version@@
 */

namespace CryptLib\Random;

/**
 * The Random Number Source interface.
 *
 * All random number sources must implement this interface
 *
 * @category   PHPCryptLib
 * @package    Random
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
interface Source {

    /**
     * Return an instance of Strength indicating the strength of the source
     *
     * @return Strength An instance of one of the strength classes
     */
    public static function getStrength();

    /**
     * Generate a random string of the specified size
     *
     * Note: If the source fails to generate enough data, the result must be
     * padded to the requested length.
     *
     * @param int $size The size of the requested random string
     *
     * @return string A string of the requested size
     */
    public function generate($size);

}
