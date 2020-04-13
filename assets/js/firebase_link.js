var firebaseConfig = {
 apiKey: "AIzaSyClBK8MmERfTlHMYUmAr8yjkllJPMda9YA",
 authDomain: "gonews-c2cce.firebaseapp.com",
 databaseURL: "https://gonews-c2cce.firebaseio.com",
 projectId: "gonews-c2cce",
 storageBucket: "gonews-c2cce.appspot.com",
 messagingSenderId: "525488501355",
 appId: "1:525488501355:web:87f167968aaf20377a772e",
 measurementId: "G-7Q4LCLN40S"
};
firebase.initializeApp(firebaseConfig);

firebase.analytics();
var database = firebase.database();