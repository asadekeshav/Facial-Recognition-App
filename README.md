# Facial Recognition App

This project is a **Facial Recognition App** built using **JavaScript**, **PHP**, and **face-api.js**. It utilizes pre-trained models and real-time processing to detect and recognize faces directly in the browser. The app is fully browser-based and ensures privacy by not requiring server-side data processing.

## Features
- **Face Detection**: Detects faces in images or video feeds using face-api.js.
- **Facial Recognition**: Matches detected faces against a trained dataset.
- **Real-Time Processing**: Works with live video streams for instant recognition.
- **Data Storage**: PHP scripts handle saving and retrieving face data.
- **Pre-Trained Models**: Includes multiple models for detection, recognition, and analysis.

## File Structure
- **HTML Files**:
  - `index.html`: Main entry point of the app.
  - `matchFaces.html`: Interface for matching faces.
  - `readFaces.html`: Interface for reading and displaying face data.
  
- **PHP Scripts**:
  - `fetch_faces.php`: Retrieves stored face data.
  - `save_face.php`: Saves face data to storage or a database.

- **JavaScript**:
  - `face-api.min.js`: The face-api.js library for facial recognition.

- **Models**:
  - Contains pre-trained models required by face-api.js, including:
    - `ssd_mobilenetv1_model` (for detection).
    - `face_recognition_model` (for recognition).
    - `age_gender_model` (for age and gender prediction).

## Getting Started
1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/facial-recognition-app.git
   ```
2. Navigate to the project folder:
   ```bash
   cd facial-recognition-app
   ```
3. Ensure a local server is set up for running the PHP scripts.
4. Open `index.html` in your browser to start the application.

## Requirements
- **Browser**: A modern browser with support for WebRTC and WebGL.
- **Local Server**: Required to execute PHP scripts (e.g., XAMPP, WAMP, or MAMP).

## Use Cases
- Real-time face recognition for authentication systems.
- Emotion detection for sentiment analysis.
- Attendance tracking.
- Personalized user experiences.

## Technologies Used
- **JavaScript**: For implementing core functionality.
- **face-api.js**: For face detection, recognition, and analysis.
- **PHP**: For server-side operations like storing and fetching data.
- **HTML/CSS**: For building the user interface.


