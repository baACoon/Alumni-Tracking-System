<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Database</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../admin/style/alumnidatabase.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <a href="dashboard.php">
                    <img src="../image/TUPAC.png" alt="TUPATSlogo">
                </a>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="dashboard.php">DASHBOARD</a></li>
                    <li><a href="alumnidatabase.php">ALUMNI</a></li>
                    <li><a href="admin-survey.php">SURVEYS</a></li>
                    <li><a href="admin-events.php">EVENTS</a></li>
                    <li><a href="admin-opportunities.php">OPPORTUNITIES</a></li>
                </ul>
            </nav>
            <div class="profile">
                <a href="profile.php">GARCIA, J.</a>
            </div>
        </div>
    </header>

    <main>
        <section class="alumni-database">
            <h1>ALUMNI DATABASE</h1>

            <!-- Dropdown Filters -->
            <div class="filters">
                <select id="batch" class="dropdown-select" style="font-family: 'Montserrat',sans-serif;">
                    <option value="2024">Batch 2024</option>
                    <option value="2023">Batch 2023</option>
                    <option value="2022">Batch 2022</option>
                    <option value="2021">Batch 2021</option>
                </select>

                <select id="college" class="dropdown-select" onchange="updateCourses()" style="font-family: 'Montserrat',sans-serif;">
                    <option value="">All Colleges</option>
                    <option value="COE">College of Engineering</option>
                    <option value="COS">College of Sciences</option>
                    <option value="CAFA">College of Architechture and Fine Arts</option>
                    <option value="CLA">College of Liberal Arts</option>
                    <option value="CIT">College of Industrial Technology</option>
                    <option value="CIE">College of Industrial Education</option>
                </select>

                <select id="course" class="dropdown-select" style="font-family: 'Montserrat',sans-serif;">
                    <option value="">Select Course</option>
                </select>
            </div>
            
            <div class="tab-buttons">
                <button class="tab-btn active" onclick="showTab('registered')" style="font-family: 'Montserrat',sans-serif;">REGISTERED ALUMNI</button>
                <button class="tab-btn" onclick="showTab('graduates')" style="font-family: 'Montserrat',sans-serif;">LIST OF GRADUATES</button>
            </div>
            
            <div id="registered" class="tab-content">
                <!-- Table or content for Registered Alumni -->
                <table>
                    <thead>
                        <tr>
                            <th>TUP-ID</th>
                            <th>College</th>
                            <th>Department</th>
                            <th>Course</th>
                            <th>Personal Email</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Table rows go here -->
                    </tbody>
                </table>
            </div>
            
            <div id="graduates" class="tab-content" style="display:none;">
                <!-- Content for List of Graduates -->
                <p>No graduate files uploaded yet.</p>
            </div>
        </section>
    </main>

    <footer>
        <p>2024 TUP-Manila &nbsp; | &nbsp; Designed by: GGPR</p>
    </footer>

    <script>
        // Courses per college
        const coursesByCollege = {
            'COE': ['BS-CE', , 'BS-EE', 'BS-ECE', 'BS-ME'], // College of Engineering courses
            'COS': ['BAS-LT', 'BS-CS', 'BS-ES', 'BS-IS', 'BS-IT'], // College of Engineering courses
        };

        // Function to update Courses dropdown based on selected College
        function updateCourses() {
            const collegeSelect = document.getElementById('college');
            const courseSelect = document.getElementById('course');
            const selectedCollege = collegeSelect.value;

            // Clear current courses
            courseSelect.innerHTML = '<option value="">Select Course</option>';

            if (selectedCollege && coursesByCollege[selectedCollege]) {
                const courses = coursesByCollege[selectedCollege];
                courses.forEach(course => {
                    const option = document.createElement('option');
                    option.value = course;
                    option.textContent = course;
                    courseSelect.appendChild(option);
                });
            }
        }

        // JavaScript to toggle tabs
        function showTab(tab) {
            const registered = document.getElementById('registered');
            const graduates = document.getElementById('graduates');

            if (tab === 'registered') {
                registered.style.display = 'block';
                graduates.style.display = 'none';
            } else if (tab === 'graduates') {
                registered.style.display = 'none';
                graduates.style.display = 'block';
            }

            document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
        }
    </script>
</body>
</html>