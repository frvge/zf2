<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_View
 * @subpackage Resolver
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

namespace Zend\View\Resolver;

use Zend\View\Renderer\RendererInterface as Renderer;

/**
 * @category   Zend
 * @package    Zend_View
 * @subpackage Resolver
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
interface ResolverInterface
{
    /**
     * Resolve a template/pattern name to a resource the renderer can consume
     * 
     * @param  string $name 
     * @param  null|Renderer $renderer 
     * @return mixed
     */
    public function resolve($name, Renderer $renderer = null);
}
