---
layout: default
---

# Portfolio
* * *

## Mobile Apps
### [Calories Per Dollar Android App](https://github.com/nathanjchan/calories-per-dollar-app)
Calories Per Dollar helps you optimize your shopping by calculating and tracking your foods' calories per dollar.
* Built an app in Kotlin and Android Studio that calculates calories per dollar for a food item and saves it to disk by implementing Android shared preferences and utilizing the Gson library.
* Currently implementing Google MLKit Vision API and Open Food Facts API in Kotlin to get nutritional facts based on just a picture of the food or barcode using machine learning.


### [Driver Buddy iOS App](https://github.com/nathanjchan)
Driver Buddy guides new drivers in getting their license by taking them on customized routes with automatic progress tracking.
* Created an algorithm in Swift to generate randomized educational driving routes based on traffic obstacles from OpenStreetMap Overpass API by using a dispatch group to synchronize API calls.
* Implemented Swift delegates from Mapbox Navigation SDK in Swift to record in real-time when the user drives past certain traffic obstacles during live navigation.
* Wrote design docs for MVC architecture. Designed UI/UX with Balsamiq. Implemented Agile principles.

### [Check Yourself! Android App](https://github.com/nathanjchan/check-yourself)
Check Yourself! solves your math homework with a snap of the camera.
* Built Firebase server backend in Bash that solves handwritten math problems by detecting when a user uploads a picture of their math homework to the server using Mathpix API in Python.

## Data Science
### [Finding Ice on Mars From Radar Images](https://github.com/nathanjchan/ice-on-mars)
Discovered that computer vision and machine learning can classify ice in radar images of Mars due to speckle-like interference in the radar image.
* Built a data pipeline with parallel processing in R to extract texture features from 20,000 radar images of Mars by teaching myself computer vision techniques and domain knowledge for Mars radar imaging.
* Developed an algorithm in R to calculate coordinates of each radar image using satellite position metadata to create a training set and testing set using spatial ice models of Mars.
* Implemented supervised machine learning in R and Python to classify ice in the radar images with 87% accuracy. (libraries: randomForest, scikit-learn)
* Created data visualizations in R with ggplot and wrote a research paper to present my findings.
* Deployed a [web app](https://ice-on-mars.herokuapp.com/) using Python by learning Django and developed an algorithm to search 65,000 map coordinates to classify the existence of ice. (Python, Django, JavaScript, HTML, CSS, Heroku)

### [Ozone and PM2.5 Scraper](https://github.com/nathanjchan/ozone-pm25-scraper)
Scrape high-precision air quality data from the California Air Resources Board.
* Built a web scraper in Python to acquire and process inaccessible data and create a time-series dataset from 10 different public datasets (libraries: numpy, pandas, RESTful APIs).
