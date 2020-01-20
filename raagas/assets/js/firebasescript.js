
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyBrpbgr_qoVYVMKF6rp6Bn0oSNckLfEJ10",
    authDomain: "raagas-5af35.firebaseapp.com",
    databaseURL: "https://raagas-5af35.firebaseio.com",
    projectId: "raagas-5af35",
    storageBucket: "raagas-5af35.appspot.com",
    messagingSenderId: "355254970714",
    appId: "1:355254970714:web:d69d366aa02081d8ceeb63"
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
  
    // Save message
    saveMessage(bandName, collegeName, noofmembers, contact1, contact2);
  

    // Clear form
    document.getElementById('pushform').reset();
  }
  
  // Function to get get form values

  
  // Save message to firebase
  function saveMessage(bandName, collegeName, noofmembers, contact1, contact2){
    var newMessageRef = messagesRef.push();
    var datentime = new Date();
    var datentime2 = datentime.toString();

    newMessageRef.set({
        bandName: bandName,
        collegeName:collegeName,
      noofmembers:noofmembers,
      contact1:contact1,
      contact2:contact2,
      datentime2:datentime2,
    });
    console.log(datentime2);
  }