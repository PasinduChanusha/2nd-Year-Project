<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <element event="some JavaScript"></element>
    <title>Review</title>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="Review\review.css">
    <link type="text/css" rel="stylesheet" href="css\footer.css">
</head>

<body>
    <?php include_once('php/header1.php');?>
    

    <div class="cont">
        <div class="title">
            <h1 class = "sign">Are you Satisfied?<br><span class="remember">Rate Here</span></h1>
        </div>
        <div class="stars">
            <form action="">
                <input class="star star-5" id="star-5" type="radio" name="star" />
                <label class="star star-5" for="star-5"></label>
                <input class="star star-4" id="star-4" type="radio" name="star" />
                <label class="star star-4" for="star-4"></label>
                <input class="star star-3" id="star-3" type="radio" name="star" />
                <label class="star star-3" for="star-3"></label>
                <input class="star star-2" id="star-2" type="radio" name="star" />
                <label class="star star-2" for="star-2"></label>
                <input class="star star-1" id="star-1" type="radio" name="star" />
                <label class="star star-1" for="star-1"></label>
            </form>
        </div>
        <p class="remember">click the stars</p>
    
    <br>

    
        <div class="stars">
            <form action="">
                <input class="star star-5" id="star-5-2" type="radio" name="star" />
                <label class="star star-5" for="star-5-2"></label>
                <input class="star star-4" id="star-4-2" type="radio" name="star" />
                <label class="star star-4" for="star-4-2"></label>
                <input class="star star-3" id="star-3-2" type="radio" name="star" />
                <label class="star star-3" for="star-3-2"></label>
                <input class="star star-2" id="star-2-2" type="radio" name="star" />
                <label class="star star-2" for="star-2-2"></label>
                <input class="star star-1" id="star-1-2" type="radio" name="star" />
                <label class="star star-1" for="star-1-2"></label>
                <div class="rev-box">
                    <textarea class="review" col="30" name="review"></textarea>
                    <label class="rememb" for="review">Breif Review</label>
                    <br>
                    <br>
                    <button class="submit">Rate Us</button>
                </div>
            </form>

        </div>
    </div>
    <br>
    <?php include('php/footer.php');?>
</body>
<br>
</html>