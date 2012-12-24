<?php
/**
 * Created by RubikIntegration Team.
 *
 * Date: 10/18/12
 * Time: 10:32 AM
 * Question? Come to our website at http://rubikin.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code or refer to the LICENSE
 * file of ZePLUF framework
 */

namespace plugins\riSample;

class Something2 extends Something
{
    /**
     * much cooler method
     *
     * @return mixed
     */
    public function coolMethod(){
        // ri is the function responsible for translation
        return ri("I'm cooler");
    }
}

// Now Plugin::get('riSample.Something')->coolMethod() will return "I'm cooler"