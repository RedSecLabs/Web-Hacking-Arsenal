# page # 433

import os
import json
def lambda_handler(event, context):
    query_params = event['queryStringParameters']
    debug = query_params.get('debug', 'false').lower() == 'true'
    if debug:
        return {
            'statusCode': 200,
            'body': json.dumps({
                'access_key': os.getenv('AccessKey'),
                'secret_access_key': os.getenv('AccessSecret')
            }),
        }
    else:
        return {
            'statusCode': 200,
            'body': json.dumps('Hello World!'),
        }