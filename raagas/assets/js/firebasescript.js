
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyDmV4z3QpECAMF8pzaokG-tjluH36sLuRQ",
    authDomain: "raagasnev.firebaseapp.com",
    databaseURL: "https://raagasnev.firebaseio.com",
    projectId: "raagasnev",
    storageBucket: "raagasnev.appspot.com",
    messagingSenderId: "295843167353",
    appId: "1:295843167353:web:e55c2fe5f5aa6993bf68a8",
    measurementId: "G-F7RWPRQEKB"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  // Reference messages collection
  var messagesRef = firebase.database().ref('messages');
  
  // Listen for form submit
  document.getElementById('pushform').addEventListener('submit', submitForm);
  
  // Submit form
  function submitForm(e){
    e.preventDefault();
  
    // Get values
    var bandName = document.getElementById('bandname').value;
    var collegeName = document.getElementById('collegeName').value;
    var noofmembers = document.getElementById('noofmembers').value;
    var contact1 = document.getElementById('contact1').value;
    var contact2 = document.getElementById('contact2').value;
    var now = new Date();
  
    // Save message
    saveMessage(bandName, collegeName, noofmembers, contact1, contact2,now);
  

    // Clear form
    document.getElementById('pushform').reset();
  }
  
  // Function to get get form values

  
  // Save message to firebase
  function saveMessage(bandName, collegeName, noofmembers, contact1, contact2,now){
    var newMessageRef = messagesRef.push();
    newMessageRef.set({
        bandName: bandName,
        collegeName:collegeName,
      noofmembers:noofmembers,
      contact1:contact1,
      contact2:contact2,
      time:now
    });
  }