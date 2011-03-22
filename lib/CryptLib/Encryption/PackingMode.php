<?php
/**
 * The core PackingMode interface.  All packingmodes must implement this
 * interface
 *
 * A packing mode is a method for padding a string to a specified size using
 * various methods
 *
 * PHP version 5.3
 *
 * @category   PHPCryptLib
 * @package    Encryption
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://opensource.org/licenses/bsd-license.php New BSD License
 * @license    http://www.gnu.org/licenses/lgpl-2.1.html LGPL v 2.1
 * @version    Build @@version@@
 */

namespace CryptLib\Encryption;

/**
 * The core PackingMode interface.  All packingmodes must implement this
 * interface
 *
 * A packing mode is a method for padding a string to a specified size using
 * various methods
 *
 * @category   PHPCryptLib
 * @package    Encryption
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
interface PackingMode {

    /**
     * Pad the string to the specified size
     *
     * @param string $string    The string to pad
     * @param int    $blockSize The size to pad to
     *
     * @return string The padded string
     */
    public function pad($string, $blockSize = 32);

    /**
     * Strip the padding from the supplied string
     *
     * @param string $string The string to trim
     *
     * @return string The unpadded string
     */
    public function strip($string);

}

