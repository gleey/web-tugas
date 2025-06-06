<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/cursor.css"/>
    <link rel="stylesheet" href="css/feedback.css"/>
    <!-- Fonts & Logos -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap">
	<link rel="icon" type="image/svg" href="resources/logos/evos.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
</head>

<body>
    
    <!-- Navigation bar of the Document -->
    <nav>
        <ul id="navbar">
            <li id="logo" style="float:left"><a href="home.php"><img src="resources/logos/evos.png" alt="logo"></a></li>
			<li><a href="home.php" ><span class="material-symbols-rounded">home</span><span class="nav__text">Home</span></a></li>
			<li><a href="gallery.php"><span class="material-symbols-rounded">movie</span><span class="nav__text">Gallery</span></a></li>
			<li><a href="feedback.php" class="active"><span class="material-symbols-rounded">chat</span><span class="nav__text">Comments</span></a></li>
			<li><a href="team.php"><span class="material-symbols-rounded">info</span><span class="nav__text">About Us</span></a></li>
    </nav>
    <div class="cursor rounded move" id="cursor"></div>  <!-- Cursor of the Document -->

    <!-- Main Content of the Document -->
    <div class="container">
        <h1>Send your feedback</h1>
        <div class="form__bg">
            <!-- Form submit reference = https://formsubmit.co/?utm_source=formsubmit.co&utm_medium=site%20link&utm_campaign=submission%20page -->
            <form id="form" action="https://formsubmit.co/lashenmartino@gmail.com" method="POST">

                <div class="form__container animate">
                    <span>Was this your first time visiting?</span>
                    <div class="radio_class">
                        <div class="radio__box"><input type="radio" name="view" value="Yes" id="yes"><label for="yes">Yes</label></div>
                        <div class="radio__box"><input type="radio" name="view" value="No" id="no"><label for="no">No</label></div>
                    </div>
                </div>

                <div class="form__container animate">
                    <span>How satisfied are you with our service?<span class="star"> *</span> <br><span class="comment">Choose from 0 to 10. [ With 0 being "Not satisfied at all!" and 10 being "Extremely satisfied!" ]</span></span>
                    <div class="rating">
                        <div class="radio__box"><input type="radio" name="rating" value="0" id="0"><label for="0">0</label></div>
                        <div class="radio__box"><input type="radio" name="rating" value="1" id="1"><label for="1">1</label></div>
                        <div class="radio__box"><input type="radio" name="rating" value="2" id="2"><label for="2">2</label></div>
                        <div class="radio__box"><input type="radio" name="rating" value="3" id="3"><label for="3">3</label></div>
                        <div class="radio__box"><input type="radio" name="rating" value="4" id="4"><label for="4">4</label></div>
                        <div class="radio__box"><input type="radio" name="rating" value="5" id="5"><label for="5">5</label></div>
                        <div class="radio__box"><input type="radio" name="rating" value="6" id="6"><label for="6">6</label></div>
                        <div class="radio__box"><input type="radio" name="rating" value="7" id="7"><label for="7">7</label></div>
                        <div class="radio__box"><input type="radio" name="rating" value="8" id="8"><label for="8">8</label></div>
                        <div class="radio__box"><input type="radio" name="rating" value="9" id="9"><label for="9">9</label></div>
                        <div class="radio__box"><input type="radio" name="rating" value="10" id="10" checked><label for="10">10</label></div>
                    </div>
                </div>

                <div class="form__container animate">
                    <label for="email">Email<span class="star"> *</span></label>
                    <input type="email" id="email" name="Email" placeholder="Your email.." required>
                </div>

                <div class="form__container animate">
                    <label for="discovery">How did you find this website?<span class="star"> *</span></label>
                    <select id="discovery" name="discovery" required>
                        <option value="" selected disabled>Select an option</option>  
                        <option value="direct">Direct link</option>
                        <option value="search">Search engine</option>
                        <option value="social">Social media</option>
                        <option value="friend">Friend</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form__container animate">
                    <label for="device">Which device did you use to visit us?<span class="star"> *</span></label>
                    <select id="device" name="device" required>
                        <option value="" selected disabled>Select an option</option>
                        <option value="desktop">Desktop</option>
                        <option value="laptop">Laptop</option>
                        <option value="mobile">Mobile</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form__container animate">
                    <label for="comment">Your overal comment on the experience<span class="star"> *</span></label>
                    <textarea id="comment" name="comment" placeholder="Write something.." style="height:200px" required></textarea>
                </div>

                <div class="form__container animate">
                    <span>Was this website informative and easy to navigate through?</span>
                    <div class="radio_class">
                        <div class="radio__box"><input type="radio" name="navigate" value="Yes" id="yes"><label for="yes">Yes</label></div>
                        <div class="radio__box"><input type="radio" name="navigate" value="No" id="no"><label for="no">No</label></div>
                    </div>
                </div>

                <div class="form__container animate">
                    <label for="improvements">How do you like to see improvements on this website?</label>
                    <textarea id="improvements" name="improvements" placeholder="Write something.." style="height:200px"></textarea>
                </div>

                <div class="form__container animate">
                    <label for="name">Name (optional):</label><br>
                    <input type="text" id="name" name="name" placeholder="Your name..">
                </div>

                <div class="form__container animate">
                    <input type="button" value="Preview Feedback" onclick="previewFeedback()">
                </div>
                
                <div class="form__container animate" id="line1">
                    <input type="reset" value="Reset">
                    <input type="submit" value="Submit">
                </div>

                <!-- Modal for previewing feedback -->
                <div id="previewModal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closePreviewModal()">&times;</span>
                        <!-- Display preview feedback content here -->
                        <div id="previewFeedbackContent"></div>
                    </div>
                </div>
                    
            </form>
        </div>
    </div>

    <!-- Footer Section of the Document -->
    <div id="footer">
		<div class="footer__container">
			<div class="animate" id="dev">
				<a href="subpages/lashen-info.html"><img src="resources/images/developers/Univ.png" alt="Lashen Martino"><span>TUGAS WEB</span></a>
			</div>
			<div class="footer__container__left">
				<h3>Life on Land</h3>
				<p>&copy; Life on Land is a collaborative website built by a group of students from Universitas Sam Ratulangi</p>
			</div>
			<div class="footer__container__right">
				<h3>Contact Us</h3>
				<ul>
					<li><a href="mailto:kelompokWEB@gmail.com">Email</a></li>
                    <li><a href="https://www.facebook.com">Facebook</a></li>
                    <li><a href="https://twitter.com">Twiter</a></li>
				</ul>
			</div>
		</div>
	</div>

    <!-- JavaScript files -->
    <script src="js/cursor.js"></script>
    <script src="js/feedback.js"></script>

</body>

</html>