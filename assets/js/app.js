
  var config = {
    apiKey: "AIzaSyCuMiqK9WsFslDlP6vNgGiyfO8hO3iM080",
    authDomain: "banca-9d043.firebaseapp.com",
    databaseURL: "https://banca-9d043.firebaseio.com",
    storageBucket: "banca-9d043.appspot.com",
    messagingSenderId: "94361272956"
  };
  firebase.initializeApp(config);
const messaging=firebase.messaging();
messaging.requestPermission()
.then(function() {
    console.log('Notification permission granted.');
    return messaging.getToken();
}).then(function(token) {
   console.log(token);
})
.catch(function(err) {
  console.log('Unable to get permission to notify.', err);
});