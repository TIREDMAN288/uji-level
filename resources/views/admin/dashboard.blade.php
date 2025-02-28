<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantis Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

    <style>
      :root {
  --primary-color: #2196f3;
  --primary-dark: #1976d2;
  --primary-light: #e3f2fd;
  --secondary-color: #3e4396;
  --success-color: #4caf50;
  --warning-color: #ffa500;
  --danger-color: #f44336;
  --text-color: #333;
  --text-muted: #6c757d;
  --text-light: #fff;
  --bg-light: #f8f9fa;
  --border-color: #e0e0e0;
  --border-radius: 8px;
  --shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  --transition: all 0.3s ease;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Montserrat", sans-serif;
  background: var(--bg-light);
  color: var(--text-color);
  min-height: 100vh;
  overflow-x: hidden;
}

/* Layout Styles */
.layout-wrap {
  display: flex;
  position: relative;
  min-height: 100vh;
}

/* Sidebar Styles */
.sidebar {
  width: 260px;
  height: 100vh;
  background: white;
  position: fixed;
  left: 0;
  top: 0;
  color: var(--text-color);
  z-index: 1000;
  transition: var(--transition);
  box-shadow: var(--shadow);
  overflow-y: auto;
  overflow-x: hidden;
  border-right: 1px solid var(--border-color);
}

.sidebar-logo {
  padding: 20px;
  display: flex;
  align-items: center;
  border-bottom: 1px solid var(--border-color);
}

.sidebar-logo img, .sidebar-logo svg {
  height: 32px;
  width: auto;
  margin-right: 10px;
}

.sidebar-logo h1 {
  font-size: 20px;
  font-weight: 700;
  color: var(--text-color);
}

.sidebar-toggle {
  width: 30px;
  height: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: var(--bg-light);
  border-radius: 5px;
  cursor: pointer;
  margin-left: auto;
  transition: var(--transition);
}

.sidebar-toggle:hover {
  background: var(--primary-light);
}

.sidebar-section {
  margin-top: 20px;
}

.sidebar-heading {
  color: var(--text-muted);
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 15px 20px 10px;
  font-weight: 600;
}

.sidebar-menu {
  list-style: none;
  padding: 0;
  margin: 0;
}

.sidebar-item {
  margin: 5px 10px;
  border-radius: var(--border-radius);
  transition: var(--transition);
}

.sidebar-item a {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 12px 15px;
  color: var(--text-color);
  text-decoration: none;
  border-radius: 8px;
  transition: var(--transition);
}

.sidebar-item:hover {
  background: var(--primary-light);
}

.sidebar-item:hover a {
  color: var(--primary-color);
}

.sidebar-item.active {
  background: var(--primary-light);
}

.sidebar-item.active a {
  color: var(--primary-color);
  font-weight: 500;
}

.sidebar-item .icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 24px;
  height: 24px;
  transition: var(--transition);
}

.sidebar-item:hover .icon {
  transform: scale(1.1);
}

.sidebar-item .text {
  font-size: 14px;
  font-weight: 500;
}

/* Main Content Area */
.main-content-wrapper {
  flex: 1;
  margin-left: 260px;
  transition: var(--transition);
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

.main-content {
  flex: 1;
  padding: 20px;
  transition: var(--transition);
}

/* Header */
.header {
  background: white;
  padding: 15px 20px;
  margin-bottom: 20px;
  position: sticky;
  top: 0;
  z-index: 900;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
}

.header-left {
  display: flex;
  align-items: center;
  gap: 15px;
}

.menu-toggle {
  display: none;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: var(--bg-light);
  align-items: center;
  justify-content: center;
  cursor: pointer;
}

.breadcrumb {
  display: flex;
  align-items: center;
  gap: 10px;
  margin: 0;
  padding: 0;
  list-style: none;
}

.breadcrumb-item {
  font-size: 14px;
  color: var(--text-muted);
}

.breadcrumb-item a {
  color: var(--text-color);
  text-decoration: none;
}

.breadcrumb-item a:hover {
  color: var(--primary-color);
}

.breadcrumb-item.active {
  color: var(--text-color);
  font-weight: 500;
}

.breadcrumb-divider {
  color: var(--text-muted);
}

.header-right {
  display: flex;
  align-items: center;
  gap: 15px;
}

.search-form {
  position: relative;
  max-width: 300px;
}

.search-input {
  width: 100%;
  padding: 10px 15px 10px 40px;
  border: 1px solid var(--border-color);
  border-radius: 6px;
  font-size: 14px;
  outline: none;
  transition: var(--transition);
  background-color: var(--bg-light);
}

.search-input:focus {
  border-color: var(--primary-color);
  box-shadow: 0 0 0 3px rgba(33, 150, 243, 0.1);
}

.search-icon {
  position: absolute;
  left: 12px;
  top: 50%;
  transform: translateY(-50%);
  color: var(--text-muted);
}

.header-icon {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: var(--bg-light);
  cursor: pointer;
  transition: var(--transition);
}

.header-icon:hover {
  background: var(--primary-light);
  color: var(--primary-color);
}

.user-profile {
  display: flex;
  align-items: center;
  gap: 10px;
  cursor: pointer;
}

.user-avatar {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  overflow: hidden;
}

.user-avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.user-name {
  font-size: 14px;
  font-weight: 600;
}

/* Dashboard Cards */
.dashboard-cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  margin-bottom: 30px;
}

.dashboard-card {
  background: white;
  border-radius: var(--border-radius);
  padding: 20px;
  box-shadow: var(--shadow);
}

.card-title {
  font-size: 14px;
  color: var(--text-muted);
  margin-bottom: 10px;
}

.card-value {
  font-size: 28px;
  font-weight: 600;
  margin-bottom: 15px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.percentage {
  font-size: 13px;
  font-weight: 500;
  padding: 4px 8px;
  border-radius: 4px;
  display: flex;
  align-items: center;
  gap: 4px;
}

.percentage.up {
  background-color: rgba(76, 175, 80, 0.1);
  color: var(--success-color);
}

.percentage.down {
  background-color: rgba(244, 67, 54, 0.1);
  color: var(--danger-color);
}

.card-footer {
  font-size: 13px;
  color: var(--text-muted);
}

.card-footer .highlight {
  color: var(--primary-color);
  font-weight: 500;
}

/* Charts Section */
.charts-section {
  display: grid;
  grid-template-columns: 2fr 1fr;
  gap: 20px;
  margin-bottom: 30px;
}

.chart-card {
  background: white;
  border-radius: var(--border-radius);
  padding: 20px;
  box-shadow: var(--shadow);
}

.chart-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

.chart-title {
  font-size: 16px;
  font-weight: 600;
}

.chart-tabs {
  display: flex;
  gap: 10px;
}

.chart-tab {
  padding: 8px 15px;
  border-radius: 4px;
  font-size: 13px;
  font-weight: 500;
  cursor: pointer;
  transition: var(--transition);
}

.chart-tab:hover {
  background: var(--primary-light);
  color: var(--primary-color);
}

.chart-tab.active {
  background: var(--primary-color);
  color: white;
}

.chart-container {
  width: 100%;
  height: 300px;
}

.income-card {
  background: white;
  border-radius: var(--border-radius);
  padding: 20px;
  box-shadow: var(--shadow);
}

.income-header {
  margin-bottom: 20px;
}

.income-title {
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 5px;
}

.income-value {
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 20px;
}

.income-bars {
  display: flex;
  height: 200px;
  align-items: flex-end;
  gap: 15px;
}

.bar {
  flex: 1;
  background: var(--primary-color);
  border-radius: 4px 4px 0 0;
  transition: var(--transition);
}

.bar:hover {
  background: var(--primary-dark);
}

/* Responsive Styles */
@media (max-width: 1200px) {
  .dashboard-cards {
    grid-template-columns: repeat(2, 1fr);
  }
  
  .charts-section {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 992px) {
  .sidebar {
    width: 0;
    transform: translateX(-100%);
  }
  
  .sidebar.active {
    width: 260px;
    transform: translateX(0);
  }
  
  .main-content-wrapper {
    margin-left: 0;
  }
  
  .menu-toggle {
    display: flex;
  }
}

@media (max-width: 768px) {
  .dashboard-cards {
    grid-template-columns: 1fr;
  }
  
  .header {
    flex-direction: column;
    align-items: flex-start;
    gap: 15px;
  }
  
  .header-right {
    width: 100%;
    justify-content: space-between;
  }
  
  .search-form {
    max-width: none;
    width: 100%;
  }
}

@media (max-width: 576px) {
  .main-content {
    padding: 15px 10px;
  }
  
  .breadcrumb {
    display: none;
  }
  
  .user-name {
    display: none;
  }
}
    </style>
</head>
<body>
    <div class="layout-wrap">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-logo">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 2.5L2.5 15L15 27.5L27.5 15L15 2.5Z" fill="#2196F3"/>
                </svg>
                <h1>Mantis</h1>
                <div class="sidebar-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            
            <div class="sidebar-menu-container">
                <ul class="sidebar-menu">
                    <li class="sidebar-item active">
                        <a href="#">
                            <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
                </ul>

                <div class="sidebar-section">
                    <div class="sidebar-heading"></div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-item">
                            <a href="#">
                                <span class="icon"><i class="fas fa-font"></i></span>
                                <span class="text">Typography</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#">
                                <span class="icon"><i class="fas fa-palette"></i></span>
                                <span class="text">Color</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#">
                                <span class="icon"><i class="far fa-images"></i></span>
                                <span class="text">Icons</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-section">
                    <div class="sidebar-heading">Pages</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-item">
                            <a href="#">
                                <span class="icon"><i class="fas fa-sign-in-alt"></i></span>
                                <span class="text">Login</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#">
                                <span class="icon"><i class="fas fa-user-plus"></i></span>
                                <span class="text">Register</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-section">
                    <div class="sidebar-heading">Other</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-item">
                            <a href="#">
                                <span class="icon"><i class="fas fa-layer-group"></i></span>
                                <span class="text">Menu levels</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#">
                                <span class="icon"><i class="far fa-file-alt"></i></span>
                                <span class="text"><form method="POST" action="{{ route('logout') }}">
                                  @csrf
                                  <!-- Link yang akan submit form -->
                                  <x-responsive-nav-link :href="route('logout')"
                                      onclick="event.preventDefault();
                                               this.closest('form').submit();">
                                      {{ __('Log Out') }}
                                  </x-responsive-nav-link>
                              </form>/span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="main-content-wrapper">
            <!-- Header -->
            <header class="header">
                <div class="header-left">
                    <div class="menu-toggle">
                        <i class="fas fa-bars"></i>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-divider">/</li>
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-divider">/</li>
                        <li class="breadcrumb-item active">Home</li>
                    </ul>
                </div>
                <div class="header-right">
                    <form class="search-form">
                        <span class="search-icon"><i class="fas fa-search"></i></span>
                        <input type="text" class="search-input" placeholder="Search here...">
                    </form>
                    <div class="header-icon">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="user-profile">
                        <div class="user-avatar">
                            <img src="https://i.pravatar.cc/150?img=12" alt="User">
                        </div>
                        <div class="user-name">Stebin Ben</div>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <div class="main-content">
                <!-- Dashboard Cards -->
                <div class="dashboard-cards">
                    <div class="dashboard-card">
                        <div class="card-title">Total Page Views</div>
                        <div class="card-value">
                            4,42,236
                            <span class="percentage up">
                                <i class="fas fa-arrow-up"></i> 59.3%
                            </span>
                        </div>
                        <div class="card-footer">
                            You made an extra <span class="highlight">35,000</span> this year
                        </div>
                    </div>
                    <div class="dashboard-card">
                        <div class="card-title">Total Users</div>
                        <div class="card-value">
                            78,250
                            <span class="percentage up">
                                <i class="fas fa-arrow-up"></i> 70.5%
                            </span>
                        </div>
                        <div class="card-footer">
                            You made an extra <span class="highlight">8,900</span> this year
                        </div>
                    </div>
                    <div class="dashboard-card">
                        <div class="card-title">Total Order</div>
                        <div class="card-value">
                            18,800
                            <span class="percentage down">
                                <i class="fas fa-arrow-down"></i> 27.4%
                            </span>
                        </div>
                        <div class="card-footer">
                            You made an extra <span class="highlight">1,943</span> this year
                        </div>
                    </div>
                    <div class="dashboard-card">
                        <div class="card-title">Total Sales</div>
                        <div class="card-value">
                            $35,078
                            <span class="percentage down">
                                <i class="fas fa-arrow-down"></i> 27.4%
                            </span>
                        </div>
                        <div class="card-footer">
                            You made an extra <span class="highlight">$20,395</span> this year
                        </div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="charts-section">
                    <div class="chart-card">
                        <div class="chart-header">
                            <div class="chart-title">Unique Visitor</div>
                            <div class="chart-tabs">
                                <div class="chart-tab">Month</div>
                                <div class="chart-tab active">Week</div>
                            </div>
                        </div>
                        <div class="chart-container">
                            <!-- Chart would be rendered here by JavaScript -->
                            <svg width="100%" height="100%" viewBox="0 0 800 300">
                                <!-- Light blue area chart -->
                                <path d="M0,200 C100,180 200,190 300,160 C400,130 500,170 600,120 C700,70 800,100 800,120 L800,300 L0,300 Z" fill="rgba(33, 150, 243, 0.2)"></path>
                                <!-- Light blue line -->
                                <path d="M0,200 C100,180 200,190 300,160 C400,130 500,170 600,120 C700,70 800,100 800,120" fill="none" stroke="#2196f3" stroke-width="2"></path>
                                
                                <!-- Teal area chart -->
                                <path d="M0,250 C100,220 200,180 300,220 C400,260 500,230 600,200 C700,170 800,190 800,190 L800,300 L0,300 Z" fill="rgba(0, 188, 212, 0.2)"></path>
                                <!-- Teal line -->
                                <path d="M0,250 C100,220 200,180 300,220 C400,260 500,230 600,200 C700,170 800,190 800,190" fill="none" stroke="#00bcd4" stroke-width="2"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="income-card">
                        <div class="income-header">
                            <div class="income-title">Income Overview</div>
                            <div class="income-value">$7,650</div>
                            <div class="income-subtitle">This Week Statistics</div>
                        </div>
                        <div class="income-bars">
                            <div class="bar" style="height: 70%;"></div>
                            <div class="bar" style="height: 90%;"></div>
                            <div class="bar" style="height: 60%;"></div>
                            <div class="bar" style="height: 40%;"></div>
                            <div class="bar" style="height: 65%;"></div>
                            <div class="bar" style="height: 45%;"></div>
                            <div class="bar" style="height: 75%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle menu on mobile
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });
        
        document.querySelector('.sidebar-toggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });
    </script>
</body>
</html>