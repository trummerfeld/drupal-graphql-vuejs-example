/* eslint-disable */

import gql from 'graphql-tag'

export const ALL_NEWS_QUERY = gql`
query newsQuery {
	nodeQuery(filter:{conditions:{field: "type", value: "news", operator: EQUAL}}){
    entities {
      ... on NodeNews {
        nid
        title
        fieldText
      }
    }
	}
}
`

export const CREATE_NEWS_MUTATION = gql`
  mutation createArticle($input:NodeInput!) {
    createNode(input: $input) {
      entity{
        entityId
      }
      errors
      violations{
        message
      }
    }
  }
`