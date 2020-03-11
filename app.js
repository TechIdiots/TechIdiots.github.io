(
  function(){
    const config = {
    apiKey: "AIzaSyDiSqdmoLK4X743OBdf-CBe9KEgarSO9Tg",
    authDomain: "mynewproje.firebaseapp.com",
    databaseURL: "https://mynewproje.firebaseio.com",
    projectId: "mynewproje",
    storageBucket: "https://mynewproje.firebaseio.com/users/Ty88GjnFvWfAE2SyxGa7",
    messagingSenderId: "416132997388",
    appId: "1:416132997388:web:4e20066e340495ff6a2929",
    measurementId: "G-DNJYKK1XZF"
    };
    firebase.initializeApp(config);

  const preObject = document.getElementById('object');

  const dbRefObject = firebase.database().ref().child('object');
  dbRefObject.on('value',snap => {
    preObject.InnerText = JSON.stringify(snap.val());
  });

}());
