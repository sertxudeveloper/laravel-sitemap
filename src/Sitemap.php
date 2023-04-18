<?php

namespace SertxuDeveloper\Sitemap;

class Sitemap
{
    /** @var array */
    protected $tags = [];

    /**
     * Create a new Sitemap
     */
    public static function create(): self {
        return new static;
    }

    /**
     * Add new tag to the Sitemap
     */
    public function add($tag): self {
        // Create new URL object with the string $tag
        if (is_string($tag)) {
            $tag = Url::create($tag);
        }

        // Add the URL object in the $this->tags if not in_array
        if (!in_array($tag, $this->tags)) {
            $this->tags[] = $tag;
        }

        return $this;
    }

    /**
     * Get all the tags in the Sitemap
     */
    public function getTags(): array {
        return $this->tags;
    }

    /**
     * Write as file
     */
    public function writeToFile(string $path): self {
        file_put_contents($path, $this->getXML());

        return $this;
    }

    /**
     * Write to specific disk as file
     */
    public function writeToDisk(string $disk, string $path): self {
        Storage::disk($disk)->put($path, $this->getXML());

        return $this;
    }

    /**
     * Build Sitemap as XML
     *
     * @return mixed
     */
    private function getXML() {
        sort($this->tags);
        $tags = collect($this->tags)->unique('url');

        return view('laravel-sitemap::sitemap')->with(compact('tags'))->render();
    }
}
