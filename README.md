The main purpose of this repository is to provide a POC for sending notifications by PHP using Firebase, both for devices and topics.

The topics part was tested by building the project source: https://github.com/throcha3/Topic-Based-Push-Notification
The device notification was tested on the web with the same project. Source: https://www.webappfix.com/post/web-push-notification-send-using-firebase-cloud-messaging-in-laravel-tutorial-include-demo-example.html

To use the code, create an application in the Firebase console and record the access data + the server key for the messaging part.

Look for the .example files in the project in resources/views and also in public/, make a copy by inserting the data provided by the Firebase console.

Add the "FCM_SERVER_KEY" env with the messaging server key.

To use Device notification, access the /home route and click on authorize device to generate your personal token, and then you will be able to send messages (you need to enable notification in the browser)

As for the message-to-topic test, just access the /send-topic-notification route and a notification will be sent with a standard msg for the "restaurant" topic. You can change this via code if necessary.
