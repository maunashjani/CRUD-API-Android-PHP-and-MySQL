# CRUD API - Android (PHP and MySQL)

Table:

Product:

CREATE TABLE IF NOT EXISTS `product` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `PName` text NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`ProductID`)
)

Note:

1. Here OkHttp plugin is used to communicate with APIs created in PHP. Refer - http://square.github.io/okhttp/

   Add implementation 'com.squareup.okhttp3:okhttp:3.11.0' to Gradle App level.

2. 4 APIs are create for CRUD operations in PHP and the database is created in MySQL (using wampserver).

3. On each button click the approriate API url is called by using the enqueue method of OkHttpClient class.

4. For CRUD operations the GET method is used to submit data to the server.

5. The Create, Update, Delete operations receive the reponse as a message but in the Read operation the data is fetched
on the basis of a product id supplied so a full row is sent as response.

6. For point 5 the PHP code stores the entire row in an array and then to process at the Android code end it is converted
to a JSON format as an open standard for transport of data just like XML.

7. The JSON code returned during read operation is as below:

    Example:

    [
      {
        "ProductID": "2",
        "PName": "P1",
        "Price": "100"
      }
    ]

    To process the above code in Android JSONArray and JSONObject classes are used.

8. The URL used in the Android code for the API is the IP address of the machine running the PHP code. To access the data
in the Android App the devices should be connected in the same network.
