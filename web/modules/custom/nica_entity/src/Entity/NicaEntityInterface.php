<?php

namespace Drupal\nica_entity\Entity;

use Drupal\Core\Entity\RevisionLogInterface;
use Drupal\Core\Entity\RevisionableInterface;
use Drupal\Component\Utility\Xss;
use Drupal\Core\Url;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Nica entity entities.
 *
 * @ingroup nica_entity
 */
interface NicaEntityInterface extends RevisionableInterface, RevisionLogInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Nica entity creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Nica entity.
   */
  public function getCreatedTime();

  /**
   * Sets the Nica entity creation timestamp.
   *
   * @param int $timestamp
   *   The Nica entity creation timestamp.
   *
   * @return \Drupal\nica_entity\Entity\NicaEntityInterface
   *   The called Nica entity entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Gets the Nica entity revision creation timestamp.
   *
   * @return int
   *   The UNIX timestamp of when this revision was created.
   */
  public function getRevisionCreationTime();

  /**
   * Sets the Nica entity revision creation timestamp.
   *
   * @param int $timestamp
   *   The UNIX timestamp of when this revision was created.
   *
   * @return \Drupal\nica_entity\Entity\NicaEntityInterface
   *   The called Nica entity entity.
   */
  public function setRevisionCreationTime($timestamp);

  /**
   * Gets the Nica entity revision author.
   *
   * @return \Drupal\user\UserInterface
   *   The user entity for the revision author.
   */
  public function getRevisionUser();

  /**
   * Sets the Nica entity revision author.
   *
   * @param int $uid
   *   The user ID of the revision author.
   *
   * @return \Drupal\nica_entity\Entity\NicaEntityInterface
   *   The called Nica entity entity.
   */
  public function setRevisionUserId($uid);

}
