<?php

namespace SertxuDeveloper\Sitemap;

use Carbon\Carbon;
use DateTime;

class Url {

  const CHANGE_FREQUENCY_ALWAYS = 'always';
  const CHANGE_FREQUENCY_HOURLY = 'hourly';
  const CHANGE_FREQUENCY_DAILY = 'daily';
  const CHANGE_FREQUENCY_WEEKLY = 'weekly';
  const CHANGE_FREQUENCY_MONTHLY = 'monthly';
  const CHANGE_FREQUENCY_YEARLY = 'yearly';
  const CHANGE_FREQUENCY_NEVER = 'never';

  /** @var string */
  public $url = '';

  /** @var \Carbon\Carbon */
  public $lastModificationDate;

  /** @var string */
  public $changeFrequency;

  /** @var float */
  public $priority = 0.8;

  /** @var array */
  public $alternates = [];

  /**
   * Url constructor.
   *
   * @param string $url
   */
  public function __construct(string $url) {
    $this->url = $url;
    $this->lastModificationDate = Carbon::now();
    $this->changeFrequency = static::CHANGE_FREQUENCY_DAILY;
  }

  /**
   * Create a new Url
   *
   * @param string $url
   * @return Url
   */
  public static function create(string $url): self {
    return new static($url);
  }

  /**
   * Set the address
   *
   * @param string $url
   * @return Url
   */
  public function setUrl(string $url): Url {
    $this->url = $url;
    return $this;
  }

  /**
   * Set the last modification date
   *
   * @param \DateTime $lastModificationDate
   * @return Url
   */
  public function setLastModificationDate(DateTime $lastModificationDate): Url {
    $this->lastModificationDate = $lastModificationDate;
    return $this;
  }

  /**
   * Set the change frequency
   * @param string $changeFrequency
   * @return Url
   */
  public function setChangeFrequency(string $changeFrequency): Url {
    $this->changeFrequency = $changeFrequency;
    return $this;
  }

  /**
   * Set the priority
   * @param float $priority
   * @return Url
   */
  public function setPriority(float $priority): Url {
    $this->priority = max(0, min(1, $priority));
    return $this;
  }

  /**
   * Add alternate to the URL
   *
   * @param string $url
   * @param string $locale
   * @return $this
   */
  public function addAlternate(string $url, string $locale = '') {
    $this->alternates[] = new Alternate($url, $locale);
    return $this;
  }
}
