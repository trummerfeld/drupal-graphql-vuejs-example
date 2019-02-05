<?php

namespace Drupal\drupalup_graphql_mutation\Plugin\GraphQL\Mutations;

use Drupal\graphql\GraphQL\Execution\ResolveContext;
use Drupal\graphql_core\Plugin\GraphQL\Mutations\Entity\CreateEntityBase;
use GraphQL\Type\Definition\ResolveInfo;

/**
 * Simple mutation for creating a new news node.
 *
 * @GraphQLMutation(
 *   id = "create_node",
 *   entity_type = "node",
 *   entity_bundle = "news",
 *   secure = true,
 *   name = "createNode",
 *   type = "EntityCrudOutput!",
 *   arguments = {
 *     "input" = "NodeInput"
 *   }
 * )
 */
class CreateNews extends CreateEntityBase {

  /**
   * {@inheritdoc}
   */
  protected function extractEntityInput(
    $value,
    array $args,
    ResolveContext $context,
    ResolveInfo $info
  ) {
    return [
      'title' => $args['input']['title'],
      'field_text' => $args['input']['field_text'],
    ];
  }

}
