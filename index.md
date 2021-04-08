---
layout: default
---

# Portfolio
* * *

## Mobile Apps
### [Calories Per Dollar Android App](https://github.com/nathanjchan/calories-per-dollar-app)
Calories Per Dollar helps you optimize your shopping by calculating and tracking your foods' calories per dollar.
* Built an app in **Kotlin** and **Android Studio** that calculates calories per dollar for a food based on the user’s input and saves it to disk by implementing Android shared preferences and using the Gson library that converts Kotlin objects to JSON.
* Currently implementing Google MLKit Vision API and Open Food Facts API in Kotlin to get nutritional facts based on just a picture of the food or barcode using machine learning.


### [Driver Buddy iOS App](https://github.com/nathanjchan)
Driver Buddy guides new drivers in getting their license by taking them on customized routes with automatic progress tracking.
* Created a search algorithm in **Swift** that generates randomized educational driving routes based the user’s learning progress and on traffic obstacles from OpenStreetMap Overpass API by using an **iOS** dispatch group that synchronizes API calls.
* Implemented Swift protocols and delegates from the Mapbox Navigation SDK that records in real-time when the user drives past certain traffic obstacles during live navigation.
* Wrote design documents for the **MVC** architecture. Designed UI/UX with Balsamiq. Implemented Agile team principles.

### [Check Yourself! Android App](https://github.com/nathanjchan/check-yourself)
Check Yourself! solves your math homework with a snap of the camera.
* Built **Firebase** server backend in **Python** and **Bash** that detects when a user uploads a picture of their math homework to the server and solves the handwritten math problem using the Mathpix API.

## Data Science
### [Finding Ice on Mars From Radar Images](https://github.com/nathanjchan/ice-on-mars)
Discovered that computer vision and machine learning can classify ice in radar images of Mars due to speckle-like interference in the radar image.
* Built a data pipeline with parallel processing in **R** that extracts texture features from 20,000 radar images of Mars by teaching myself computer vision techniques and domain knowledge for Mars radar imaging.
* Developed an algorithm in R that calculates coordinates of each radar image using satellite position metadata and creates a training set and testing set using spatial ice models of Mars.
* Implemented supervised machine learning in R and Python that classifies ice in the radar images with 87% accuracy. (libraries: randomForest, scikit-learn)
* Created data visualizations in R with ggplot and wrote a research paper to present my findings.
* Deployed a [web app](https://ice-on-mars.herokuapp.com/) using **Python** by learning **Django** and developed an algorithm that searches 65,000 map coordinates and classifies the existence of ice. (Python, Django, JavaScript, HTML, CSS, Heroku)

### [Ozone and PM2.5 Scraper](https://github.com/nathanjchan/ozone-pm25-scraper)
Scrape high-precision air quality data from the California Air Resources Board.
* Built a web scraper in **Python** that acquires and processes air quality data and combines it with the lab’s data based on the study participants’ locations (libraries: numpy, pandas, RESTful APIs).
