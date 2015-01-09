<?php
/**
 * Created by PhpStorm.
 * User: mathieu
 * Date: 08/01/2015
 * Time: 21:42
 */

namespace ConcertoCms\MarkdownBundle\Document;


use ConcertoCms\CoreBundle\Util\AbstractPage;
use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;

/**
 * @PHPCR\Document(referenceable=true)
 */
class MarkdownPage extends AbstractPage {
    /**
     * @return bool
     */
    public function isPublished()
    {
        return true;
    }

}