<!DOCTYPE html>

<style>
    body {
        background-image: url("https://nathanjchan.com/coding/buildings_small.jpg");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        height: 100%;
    }
</style>

<html>
<head>
<meta http-equiv = "Content-Type" content = "text/html; charset = iso-8859-1" />
<title>Nathan J. Chan - Coding</title>

<nav id = "heading"></nav>

</head>
<body>
    <article>
        <center>

            <nav id="topmenu"></nav>

            <font face="helvetica" color="black" size=4>
                <table style="width: 50%">
                    <tr>
                        <td>
                            <p>
                                <b>Programming Projects</b>
                            </p>
                            <p>
                            As a statistical data science major, I am continually learning and applying my knowledge of
                            the relationship between statistics and computer science.
                            </p>
                            <hr>
                            <p><form method="post" action="https://www.nathanjchan.com/coding/predict_numbers.zip" target="_blank"><button type="submit">
                                Predicting Handwritten Numbers in R</button></form></p>
                                <p>Click the button above to download the .zip file!</p>
                            <p>
                            This is a program (a set of R scripts, rather) that predicts handwritten numbers.
                            It uses the k-nearest neighbors machine learning algorithm, and can predict numbers with 95% accuracy.
                            </p>
                            <p>There are seven files in the .zip file.</p>
                            </p>
                            <p>
                            <i>test.txt</i> and <i>train.txt</i> contain the training data and testing data, which are pixel values
                            for the handwritten number images.
                            </p>
                            <p><i>knn.R</i> has all the functions necessary to run the algorithm. The other R files reference this file.</p>
                            <p><i>knn_best.R</i> finds the best k-value to use.</p>
                            <p><i>knn_cv.R</i> uses cross validation to find the approximate error rate for each k-value.</p>
                            <p><i>knn_run.R</i> runs the algorithm, predicting the images in test.txt based on the training data in train.txt.</p>
                            <p><i>view_image.R</i> contains functions to view the handwritten number images.</p>
                            <hr>
                            <p><form method="post" action="https://www.nathanjchan.com/coding/predict_numbers.zip" target="_blank"><button type="submit">
                                UC Davis Class Catalog in R</button></form></p>
                            <p>Click the button above to download the .zip file!</p>
                            <p>This is an R scipt that loads the entire UC Davis class catalog into a data frame, which is a type of table in R.
                            The user can use simple R subsetting commands to find specific classes that follow certain criteria.</p>
                            <p></p>For example, while figuring out which classes to take, the user can search which classes fulfill 
                            two different general education requirements.</p>
                            <p>In the .zip file, there is a folder with the .txt files with all the class information from each department.</p>
                            <p>The R script takes the information from the .txt files and divides the class information into separate categories,
                            including the class name, number, description, and general education eligibility.</p>
                            <hr>
							<p><form method="post" action="https://www.zedta.com/pinpoint/" target="_blank"><button type="submit">
                                Project Pinpoint</button></form></p>
								<p>I am the director of the <i>Project Pinpoint</i> mobile game. Click the button above for more information!</p>
                            <hr>
                            <p><form method="post" action="https://www.nathanjchan.com/coding/assignment.pdf" target="_blank"><button type="submit">
                                Assignment</button></form></p>
                            <p>Here is an example assignment from one of my statistical data science classes.
                            It hopefully demonstrates my use of data analysis, ggplot2, and R to draw conclusions from real data.</p>
                            <p><center>
                                <iframe src= "https://docs.google.com/viewer?url=https://www.nathanjchan.com/coding/assignment.pdf&embedded=true" style="width:800px; height:1080px;" frameborder="0">
                                </center></iframe></p>
                        </td>
                    </tr>
                </table>
            </font>
        </center>
    </article>

<nav id = "lowmenu"></nav>

    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br /><br />
    <font face="helvetica" color="black" size=4>
        <p>
            <center>
                <table>
                    <td>
                        <a href="https://www.nathanjchan.com/coding/buildings.jpg" target="_blank">
                            Buildings during my visit to Hong Kong
                        </a>
                    </td>
                </table>
            </center>
        </p>
    </font>

<script src = "https://nathanjchan.com/basic.js"></script>
</body>
</html>