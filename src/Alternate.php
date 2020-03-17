<?php

namespace SertxuDeveloper\Sitemap;

class Alternate {

  /** @var string */
  public $locale;

  /** @var string */
  public $url;

  /**
   * Create a new Alternate.
   *
   * @param string $url
   * @param string $locale
   * @return Alternate
   */
  public function create(string $url, string $locale = ''): self {
    return new static($url, $locale);
  }

  /**
   * Alternate constructor.
   *
   * @param string $url
   * @param string $locale
   */
  public function __construct(string $url, $locale = '') {
    $this->setUrl($url);
    $this->setLocale($locale);
  }

  /**
   * @param string $locale
   *
   * @return $this
   */
  public function setLocale(string $locale = '') {
    $this->locale = $locale;
    return $this;
  }

  /**
   * @param string $url
   *
   * @return $this
   */
  public function setUrl(string $url = ''){
    $this->url = $url;
    return $this;
  }
}
