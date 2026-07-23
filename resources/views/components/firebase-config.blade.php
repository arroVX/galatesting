<!-- Firebase Web SDK 10 (CDN) -->
<script type="module">
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-app.js";
  import { 
    getAuth, 
    signInWithPopup, 
    GoogleAuthProvider, 
    signInWithEmailAndPassword,
    createUserWithEmailAndPassword
  } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-auth.js";
  import {
    getFirestore,
    collection,
    addDoc,
    getDocs,
    onSnapshot,
    doc,
    setDoc,
    updateDoc,
    serverTimestamp
  } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-firestore.js";
  import {
    getDatabase,
    ref as rtdbRef,
    push,
    set,
    onValue
  } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-database.js";
  import {
    getStorage,
    ref as storageRef,
    uploadBytes,
    getDownloadURL
  } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-storage.js";

  // Firebase Config (Fallback & Environment Sync)
  const firebaseConfig = {
    apiKey: "{{ env('FIREBASE_API_KEY', 'AIzaSyBLY89nfm-496oISfqJBWzWp6zWqjllLQg') }}",
    authDomain: "{{ env('FIREBASE_AUTH_DOMAIN', 'galaksi-xii.firebaseapp.com') }}",
    databaseURL: "https://galaksi-xii-default-rtdb.asia-southeast1.firebaseio.com",
    projectId: "{{ env('FIREBASE_PROJECT_ID', 'galaksi-xii') }}",
    storageBucket: "{{ env('FIREBASE_STORAGE_BUCKET', 'galaksi-xii.firebasestorage.app') }}",
    messagingSenderId: "{{ env('FIREBASE_MESSAGING_SENDER_ID', '25195711464') }}",
    appId: "{{ env('FIREBASE_APP_ID', '1:25195711464:web:ebaa294ffb744d4260f25d') }}"
  };

  // Initialize Firebase App, Auth, Firestore, Realtime DB & Storage
  const app = initializeApp(firebaseConfig);
  const auth = getAuth(app);
  const db = getFirestore(app);
  const rtdb = getDatabase(app);
  const storage = getStorage(app);
  const googleProvider = new GoogleAuthProvider();

  // Expose to Global Window Scope
  window.FirebaseApp = app;
  window.FirebaseAuth = auth;
  window.FirebaseDB = db;
  window.FirebaseRTDB = rtdb;
  window.FirebaseStorage = storage;
  window.GoogleAuthProvider = googleProvider;
  window.signInWithPopup = signInWithPopup;
  window.signInWithEmailAndPassword = signInWithEmailAndPassword;
  window.createUserWithEmailAndPassword = createUserWithEmailAndPassword;

  // Firestore Helpers
  window.collection = collection;
  window.addDoc = addDoc;
  window.getDocs = getDocs;
  window.onSnapshot = onSnapshot;
  window.doc = doc;
  window.setDoc = setDoc;
  window.updateDoc = updateDoc;
  window.serverTimestamp = serverTimestamp;

  // Realtime Database Helpers
  window.ref = rtdbRef;
  window.push = push;
  window.set = set;
  window.onValue = onValue;

  // Storage Helpers
  window.storageRef = storageRef;
  window.uploadBytes = uploadBytes;
  window.getDownloadURL = getDownloadURL;

  // Dispatch event when Firebase is fully initialized and attached to window
  window.dispatchEvent(new CustomEvent('firebase-ready'));
</script>
