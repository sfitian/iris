// The core Firebase JS SDK is always required and must be listed first
{/* <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script> */}
import('https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js');
// TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries
{/* <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-analytics.js"></script> */}
import('https://www.gstatic.com/firebasejs/7.7.0/firebase-analytics.js');

var firebaseConfig = {
  apiKey: "AIzaSyAsABhFAefrfvFGzR6K4spmZwkRSriGa-c",
  authDomain: "iris-sfit.firebaseapp.com",
  databaseURL: "https://iris-sfit.firebaseio.com/Singing/iris-sfit-singing",
  projectId: "iris-sfit",
  storageBucket: "iris-sfit.appspot.com",
  messagingSenderId: "373597560775",
  appId: "1:373597560775:web:c6dd2c2465e45234ae43e2",
  measurementId: "G-2XJ6Q7C7DK"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();

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
  let phoneNumber = document.querySelector('#contact').value;
  // let emailId = document.querySelector('#email').value;
  let collegeName = document.querySelector('#interCollege').value;
  let year = document.querySelector('#year').value;
  let department = document.querySelector('#dept');
  let pid = document.querySelector('#pid');
  let participation = document.querySelector('#participation');

  //send message values
  sendMessage(name, collegeName, year, department, pid, participation, phoneNumber);

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

function sendMessage(name, collegeName, year, department, pid, participation, phoneNumber) {
  let newFormMessage = formMessage.push();
  newFormMessage.set({
    name: name,
    collgeName: collegeName,
    year: year,
    department: department,
    pid: pid,
    participation: participation,
    phoneNumber: phoneNumber
    });
}

