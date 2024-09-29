<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../admin/style/admin-events.css">
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
                <a href="admin-login.php">GARCIA, J.</a>
            </div>
        </div>
    </header>

    <main>
        <section class="events-database">
            <h1>EVENTS MANAGEMENT</h1>
            
            <div class="tab-buttons">
                <button class="tab-btn active" onclick="showTab('events')" style="font-family: 'Montserrat',sans-serif;">LIST OF EVENTS</button>
                <button class="tab-btn" onclick="showTab('create')" style="font-family: 'Montserrat',sans-serif;">CREATE EVENTS</button>
            </div>


            <div id="events" class="tab-content">
                <!-- Table for Existing Events -->
                <table>
                    <!-- Table headers -->
                    <thead>
                        <tr>
                            <th></th>
                            <th>Event ID</th>
                            <th>Participants ID</th>
                            <th>Picture</th>
                            <th>Time</th>
                            <th>Date</th>
                            <th>Venue</th>
                            <th>By</th>
                            <th>Source</th>
                            
                        </tr>
                    </thead>
                    <!-- Table body with event data -->
                    <tbody>
                        <!-- First event -->
                        <tr class="event-row">
                            <td class="checkbox-container">
                                <input type="checkbox">
                            </td>
                            <td>01</td>
                            <td>01</td>
                            <td>120315123...</td>
                            <td>4:00-10:00pm</td>
                            <td>12/14/24</td>
                            <td>UITC Hall</td>
                            <td>Admin Ris</td>
                            <td>&lt;Link&gt;</td>
                            
                        </tr>
                        <tr class="title-row">
                            <td colspan="9">123rd Alumni Homecoming</td>
                        </tr>
                        <tr class="desc-row">
                            <td colspan="9">Alumni from the Technological University of the Philippines are cordially invited to get in touch and bring back connections with one another. Come celebrate life's milestones...</td>
                        </tr>

                        <!-- Repeat for other events -->
                        <!-- Additional rows can be added here in the same structure -->
                    </tbody>
                </table>
            </div>

            <div id="create" class="tab-content">
                <h3>CREATE NEW EVENT</h3>
                <div class="event-form">
                    <div class="form-group">
                        <label for="event-image" class="import-image">
                            <p style="font-weight:400;"><i class="fa-solid fa-image"></i> Insert Image </p>
                            <input type="file" id="event-image" accept="image/*" style="display:none;">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" placeholder="Title" style="font-family: 'Montserrat',sans-serif;" required>
                    </div>

                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea id="about" placeholder="Write events description" style="font-family: 'Montserrat',sans-serif;"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" id="date" style="font-family: 'Montserrat',sans-serif;" required >
                        
                        <label for="time">Time</label>
                        <input type="time" id="time" style="font-family: 'Montserrat',sans-serif;" required >
                        
                        <label for="venue">Venue</label>
                        <input type="text" id="venue" placeholder="Venue" style="font-family: 'Montserrat',sans-serif;">
                    </div>

                    <div class="form-group">
                        <label for="source">Source</label>
                        <input type="text" id="source" placeholder="Source" style="font-family: 'Montserrat',sans-serif;">
                    </div>

                    <div class="form-actions">
                        <button class="back-btn" style="font-family: 'Montserrat',sans-serif;"><< BACK</button>
                        <button class="post-btn" style="font-family: 'Montserrat',sans-serif;">POST</button>
              
                </div>
            </div>

        </section>
    </main>

    <footer>
        <p>2024 TUP-Manila &nbsp; | &nbsp; Designed by: GGPR</p>
    </footer>

    <script>
    // JavaScript to toggle tabs
        function showTab(tab) {
                const events = document.getElementById('events');
                const create = document.getElementById('create');

                if (tab === 'events') {
                    events.style.display = 'block';
                    create.style.display = 'none';
                } else if (tab === 'create') {
                    events.style.display = 'none';
                    create.style.display = 'block';
                }

                document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
                event.target.classList.add('active');
        }
        // Set initial tab to 'events'
        document.addEventListener('DOMContentLoaded', () => {
            showTab('events');
        });
    </script>


</body>
</html>