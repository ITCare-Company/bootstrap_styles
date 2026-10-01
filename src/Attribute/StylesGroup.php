<?php

declare(strict_types=1);

namespace Drupal\bootstrap_styles\Attribute;

use Drupal\Component\Plugin\Attribute\Plugin;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Defines a styles group form plugin attribute object.
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class StylesGroup extends Plugin {

  /**
   * Constructs a StylesGroup attribute.
   *
   * @param string $id
   *   The plugin ID.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup $title
   *   The title of the styles group plugin.
   * @param int|null $weight
   *   (optional) The weight of this styles group.
   * @param class-string|null $deriver
   *   (optional) The deriver class.
   */
  public function __construct(
    public readonly string $id,
    public readonly TranslatableMarkup $title,
    public readonly ?int $weight = NULL,
    public readonly ?string $deriver = NULL,
  ) {}

}
