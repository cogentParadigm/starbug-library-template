<?php

namespace spec\Starbug\Library;

use Starbug\Library\Example;
use PhpSpec\ObjectBehavior;

/**
 * Spec test for Starbug\Library\Example.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
 */
class ExampleSpec extends ObjectBehavior {
  public function let() {
    $this->beConstructedWith(" ");
  }
  public function it_is_initializable() {
    $this->shouldHaveType(Example::class);
  }
  public function it_can_concatenate_strings() {
    $this->addString("first");
    $this->addString("second");
    $this->build()->shouldReturn("first second");
  }
}
