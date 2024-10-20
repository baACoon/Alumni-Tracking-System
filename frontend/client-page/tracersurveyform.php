<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../design/survey.css">
    <link rel="stylesheet" href="../design/header.css">
    <link rel="stylesheet" href="../design/footer.css">
    <link rel="stylesheet" href="../design/tracersurvey.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>TUP MANILA | Home</title>
</head>
<body>  
<!-- header.php -->
<div class="header-container">
    <div class="header-logo">
        <div class="header-logo-1">
            <img src="../image/Tuplogo.png" alt="TUP Logo">
        </div>
        <div class="header-logo-2">
            <img src="../image/tupmanila_assoc.png" alt="TUP Manila Association Logo">
        </div>
    </div>

    <div class="header-banner">
        <h1>The Technological University of the Philippines - Alumni Tracer System</h1>
        <h2><i>Your Journey, Our Legacy</i></h2>
    </div>
    
    <!-- Navigation bar -->
    <nav class="navbar">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="surveys.php">SURVEYS</a></li>
            <li><a href="events.php">EVENTS</a></li>
            <li><a href="opportunities.php">OPPORTUNITIES</a></li>
            <li><a href="contact.php">CONTACT US</a></li>
            <li class="profile-btn"><a href="profile.php">PROFILE</a></li>
        </ul>
    </nav>
</div>


    <!-- sidebar -->
    <aside class="sidebar">
        <nav>
            <ul>
                <li><a href="surveys.php">Pending Surveys</a></li>
                <li><a href="history.php">Completed Surveys</a></li>
            </ul>
        </nav>
    </aside>


    <!-- BAKGROUND IMAGE-->
    <div class="logo-background"></div>

    <!-- SURVEY FORM -->
    <div class="survey-container">
        <h1>Tracer Survey Form (2024)</h1>
        <form action="process_survey.php" method="post">
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>" readonly>
            </div>

            <div class="form-group">
                <label for="occupation">Occupation:</label>
                <input type="text" id="occupation" name="occupation" required>
            </div>

            <div class="form-group">
                <label for="company_name">Company Name:</label>
                <input type="text" id="company_name" name="company_name" required>
            </div>

            <div class="form-group">
                <label for="year_started">Year Started in the Company (Date of Employment):</label>
                <input type="text" id="year_started" name="year_started" required>
            </div>

            <div class="form-group">
                <label for="position">Position / Designation:</label>
                <input type="text" id="position" name="position" required>
            </div>

            <div class="form-group">
                <label for="job_status">Job Status:</label>
                <div class="radio-group">
                    <label><input type="radio" name="job_status" value="Permanent" required> Permanent</label>
                    <label><input type="radio" name="job_status" value="Contractual" required> Contractual / Project Based</label>
                    <label><input type="radio" name="job_status" value="Temporary" required> Temporary</label>
                    <label><input type="radio" name="job_status" value="Unemployed" required> Unemployed</label>
                </div>
            </div>

            <div class="form-group">
                <label for="type_of_organization">Type of Organization:</label>
                <div class="radio-group">
                    <label><input type="radio" name="type_of_organization" value="Private" required> Private</label>
                    <label><input type="radio" name="type_of_organization" value="Non-Government" required> Non-Government Organization</label>
                    <label><input type="radio" name="type_of_organization" value="Temporary" required> Temporary</label>
                    <label><input type="radio" name="type_of_organization" value="Self-Employed" required> Self-Employed</label>
                </div>
            </div>

            <div class="form-group">
                <label for="supervisor_name">Name of Immediate Supervisor:</label>
                <input type="text" id="supervisor_name" name="supervisor_name" required>
            </div>

            <div class="form-group">
                <label for="supervisor_contact">Contact No. / Email of Immediate Supervisor:</label>
                <input type="text" id="supervisor_contact" name="supervisor_contact" required>
            </div>

            <div class="form-group">
                <label for="work_alignment">Is your current work aligned with your academic specialization?</label>
                <div class="radio-group">
                    <label><input type="radio" name="work_alignment" value="Very much aligned" required> Very much aligned</label>
                    <label><input type="radio" name="work_alignment" value="Aligned" required> Aligned</label>
                    <label><input type="radio" name="work_alignment" value="Averagely Aligned" required> Averagely Aligned</label>
                    <label><input type="radio" name="work_alignment" value="Somehow Aligned" required> Somehow Aligned</label>
                    <label><input type="radio" name="work_alignment" value="Unaligned" required> Unaligned</label>
                </div>
            </div>

            <div class="button-container">
                <button type="submit">Save</button>
            </div>
 
        </form>


    </div>




    