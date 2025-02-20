<?php

declare(strict_types = 1);

namespace Drupal\Tests\generated_content\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\Tests\generated_content\Traits\GeneratedContentTestMockTrait;

/**
 * Class GeneratedContentFunctionalTestBase.
 *
 * Base class for functional tests.
 */
abstract class GeneratedContentFunctionalTestBase extends BrowserTestBase {

  use GeneratedContentTestMockTrait;

  /**
   * {@inheritdoc}
   */
  protected $profile = 'standard';

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Assert table items are present with values.
   *
   * @throws \Behat\Mink\Exception\ElementNotFoundException
   * @throws \Behat\Mink\Exception\ElementTextException
   * @throws \Behat\Mink\Exception\ExpectationException
   */
  protected function assertInfoTableItems(?int $c1, ?int $c2, ?int $c3, ?int $c4, ?int $c5, ?int $c6, ?int $c7): void {
    $this->assertSession()->responseContains('Generate content');

    $row_idx = 1;
    if (!is_null($c1)) {
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[2]", 'user');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[3]", 'user');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[4]", '-100');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[5]", 'Disabled');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[6]", 'generated_content_example1');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[7]", (string) $c1);
      $row_idx++;
    }

    if (!is_null($c2)) {
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[2]", 'file');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[3]", 'file');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[4]", '-10');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[5]", 'Enabled');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[6]", 'generated_content_example1');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[7]", (string) $c2);
      $row_idx++;
    }

    if (!is_null($c3)) {
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[2]", 'media');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[3]", 'image');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[4]", '1');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[5]", 'Enabled');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[6]", 'generated_content_example1');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[7]", (string) $c3);
      $row_idx++;
    }

    if (!is_null($c4)) {
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[2]", 'media');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[3]", 'document');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[4]", '2');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[5]", 'Enabled');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[6]", 'generated_content_example2');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[7]", (string) $c4);
      $row_idx++;
    }

    if (!is_null($c5)) {
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[2]", 'taxonomy_term');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[3]", 'tags');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[4]", '12');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[5]", 'Enabled');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[6]", 'generated_content_example2');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[7]", (string) $c5);
      $row_idx++;
    }

    if (!is_null($c6)) {
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[2]", 'node');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[3]", 'page');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[4]", '35');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[5]", 'Enabled');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[6]", 'generated_content_example2');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[7]", (string) $c6);
      $row_idx++;
    }

    if (!is_null($c7)) {
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[2]", 'node');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[3]", 'article');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[4]", '36');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[5]", 'Enabled');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[6]", 'generated_content_example2');
      $this->assertSession()->elementTextContains('xpath', "//table/tbody/tr[$row_idx]/td[7]", (string) $c7);
    }
  }

}
