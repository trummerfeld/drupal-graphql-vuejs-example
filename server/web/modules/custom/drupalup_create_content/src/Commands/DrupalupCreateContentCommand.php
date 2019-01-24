<?php

namespace Drupal\drupalup_create_content\Commands;

use Drush\Commands\DrushCommands;
use Drupal\Core\Entity\EntityTypeManager;

/**
 * A Drush commandfile.
 *
 * In addition to this file, you need a drush.services.yml
 * in root of your module, and a composer.json file that provides the name
 * of the services file to use.
 */
class DrupalupCreateContentCommand extends DrushCommands {

  private $entityTypeManager;

  /**
   * Part of the DependencyInjection magic happening here.
   */
  public function __construct(EntityTypeManager $entity_type_manager) {
    $this->entityTypeManager = $entity_type_manager;
  }

  /**
   * Creates some rilldes.
   *
   * @command drupalup_create_content:news
   * @aliases duc-news
   * @usage drupalup_create_content:news
   *   Creates some news nodes.
   */
  public function news() {
    $news = [
      ['title' => 'University apologizes for 430 mistaken acceptance emails', 'text' => 'A Florida university said "human error" was to blame for about 430 acceptance emails being mistakenly sent out to applicants.'],
      ['title' => 'Essay contest offers $1.7 million mansion as the prize', 'text' => 'The owner of a $1.7 million mansion in Alberta is offering the home for a steeply discounted price -- $25 and an essay.'],
      ['title' => 'Forgotten tortillas lead Oregon man to $175,000 lottery jackpot', 'text' => 'An Oregon man said he won a $175,000 lottery jackpot thanks to making a return trip to the grocery store for some forgotten tortillas.'],
    ];

    $count = 0;
    foreach ($news as $news_item) {
      $this->entityTypeManager->getStorage('node')
        ->create([
          'type'  => 'news',
          'title' => $news_item['title'],
          'field_text' => [
            'value' => $news_item['text'],
          ],
        ])
        ->save();
      $this->output()->writeln('News node created.');
      $count++;
    }
    $this->output()->writeln('# ' . $count . ' news nodes created.');
  }

}
