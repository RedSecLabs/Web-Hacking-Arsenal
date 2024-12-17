async function log(event) {
    const docClient = new AWS.DynamoDB.DocumentClient();
    let requestid = event.requestContext.requestId;
    let ip = event.requestContext.identity.sourceIp;
    let documentUrl = event.queryStringParameters.document_url;
    await docClient.put({
        TableName: process.env.TABLE_NAME,
        Item: {
          'id': requestid,
          'ip': ip,
          'document_url': documentUrl
        }
      }
  ).promise();
}
exports.handler = async (event) => {
    try {
      await log(event);
      let documentUrl = event.queryStringParameters.document_url;
      let txt = child_process.execSync('./bin/curl --silent -L ${documentUrl} | /lib64/ld-linux-x86-64.so.2. /bin/catdoc -').toString();