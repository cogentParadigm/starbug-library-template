<?php
namespace Starbug\Library;

class Example {

  protected $delimiter;
  protected $strings = [];

  public function __construct($delimiter = "") {
    $this->delimiter = $delimiter;
  }

  /**
   * Add a string.
   *
   * @param string $string The string to add.
   */
  public function addString(string $string) {
    $this->strings[] = $string;
  }

  /**
   * Build concatenation.
   *
   * @return string All added strings, joined by the delimiter.
   */
  public function build() {
    return implode($this->delimiter, $this->strings);
  }
}
