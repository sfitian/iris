// Initialize Firebase(2)
var config = {
  apiKey: 'YOUR-API-KEY',
  authDomain: 'YOUR-AUTH-DOMAIN',
  databaseURL: 'YOUR-DATABASE-URL',
  projectId: 'YOUR-PROJECT-ID',
  storageBucket: 'YOUR-STORE-BUCKET',
  messagingSenderId: 'YOUR-MESSAGING-SENDER-ID'
};
firebase.initializeApp(config);

//Reference for form collection(3)
let formMessage = firebase.database().ref('register');

//listen for submit event//(1)
document
  .getElementById('registrationform')
  .addEventListener('submit', formSubmit);

//Submit form(1.2)
function formSubmit(e) {
  e.preventDefault();
  // Get Values from the DOM
  let name = document.querySelector('#name').value;
  let phoneNumber = document.querySelector('#phoneNumber').value;
  let emailId = document.querySelector('#email').value;
  let collegeName = document.querySelector('#collegeName').value;
  let year = document.querySelector('#yearOfStudy').value;

  //send message values
  sendMessage(name, phoneNumber, emailId, collegeName, year);

  //Show Alert Message(5)
  document.querySelector('.alert').style.display = 'block';

  //Hide Alert Message After Seven Seconds(6)
  setTimeout(function() {
    document.querySelector('.alert').style.display = 'none';
  }, 7000);

  //Form Reset After Submission(7)
  document.getElementById('registrationform').reset();
}

//Send Message to Firebase(4)

function sendMessage(name, phoneNumber, emailId, collegeName, year) {
  let newFormMessage = formMessage.push();
  newFormMessage.set({
    name: name,
    phoneNumber: phoneNumber,
    emailID: emailId,
    collgeName: collegeName,
    year: year
  });
}

