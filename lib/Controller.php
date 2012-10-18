<?php
/**
 * Created by RubikIntegration Team.
 *
 * Date: 10/18/12
 * Time: 11:01 AM
 * Question? Come to our website at http://rubikin.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code or refer to the LICENSE
 * file of ZePLUF framework
 */

namespace plugins\riSample\lib;

use \Symfony\Component\HttpFoundation;

class AdminController extends \plugins\riSimplex\Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function someAction(){
        return $this->render('riSample:frontend/sample.php');
    }

    /**
     * @param Request $request
     */
    public function someAjaxAction(Request $request){
        return $this->renderJson(array('key' => $request->get('key')));
    }
}
