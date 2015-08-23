<?php

namespace Doctrine\Tests\Models\Translation;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCRODM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @PHPCRODM\Document(translator="children", referenceable=true)
 */
class ChildTranslationArticle extends Article
{
}
