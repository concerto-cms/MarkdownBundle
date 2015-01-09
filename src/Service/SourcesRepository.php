<?php
/**
 * Created by PhpStorm.
 * User: mathieu
 * Date: 9/01/15
 * Time: 12:44
 */

namespace ConcertoCms\MarkdownBundle\Service;


class SourcesRepository {
    private $sources = array();
    public function addSources($sources)
    {
        $this->sources = array_merge($this->sources, $sources);
    }

    public function getAll()
    {
        return $this->sources;
    }
    public function get($key)
    {
        if (isset($this->sources[$key])) {
            return $this->sources[$key];
        } else {
            return null;
        }
    }
}
