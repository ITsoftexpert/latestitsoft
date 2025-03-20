<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            display: flex;
            height: 100vh;
            background: #f0f2f5;
        }
        .sidebar {
            width: 250px;
            background: #222;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            transition: 0.3s;
        }
        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 22px;
            border-bottom: 2px solid #444;
            padding-bottom: 10px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 12px 15px;
            display: block;
            border-radius: 5px;
            margin: 5px 0;
            font-size: 16px;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background: #007BFF;
        }
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .header {
            background: #007BFF;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .content {
            flex: 1;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            margin: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .content h2 {
            font-size: 26px;
            margin-bottom: 15px;
        }
        .content p {
            font-size: 16px;
            color: #555;
        }
        .footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <!-- <a href="/admin/admin-dashboard">📄 Dashboard</a> -->
        <a href="/blogs/create">📄 Blogs</a>
        <!-- <a href="#success-stories">🏆 Success Stories</a> -->
        <a href="#client-query">📩 Client Query</a>
    </div>
    <div class="main-content">
        <div class="header">Admin Dashboard</div>
        <div class="content">
            <h2>Welcome to Admin Dashboard</h2>
            <p>Select an option from the sidebar to manage content.</p>
        </div>
        <div class="footer">&copy; 2025 Admin Dashboard | Designed with ❤️</div>
    </div>
</body>
</html>
<?php /**PATH F:\xampp\htdocs\itsoftexpert\resources\views/admin/admin-dashboard.blade.php ENDPATH**/ ?>