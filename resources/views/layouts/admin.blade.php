<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') — AgroNet Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --primary: #2A5C2A; --primary-dark: #1e4220; --accent: #C8A84B;
            --dark: #0D1B2A; --sidebar-bg: #0f1e0f; --sidebar-text: rgba(255,255,255,0.75);
            --bg: #f0f4f0; --white: #fff; --border: #e2e8e2;
            --text: #1A1A1A; --muted: #6B7280;
            --font-h: 'Montserrat', sans-serif; --font-b: 'Inter', sans-serif;
            --radius: 6px; --shadow: 0 2px 12px rgba(0,0,0,0.07);
        }
        html, body {
            overflow-x: hidden;
            width: 100%;
            max-width: 100%;
        }
        body { font-family: var(--font-b); background: var(--bg); color: var(--text); min-height: 100vh; }
        a { text-decoration: none; color: inherit; }
        img { max-width: 100%; }

        /* Sidebar */
        .sidebar {
            width: 240px; min-height: 100vh; background: var(--sidebar-bg);
            position: fixed; top: 0; left: 0; bottom: 0;
            display: flex; flex-direction: column;
            z-index: 100; overflow-y: auto;
        }
        .sidebar-brand {
            padding: 22px 20px; border-bottom: 1px solid rgba(255,255,255,0.08);
        }
        .sidebar-brand span {
            font-family: var(--font-h); font-size: 18px; font-weight: 800;
            color: #fff; display: block;
        }
        .sidebar-brand span em { color: var(--accent); font-style: normal; }
        .sidebar-brand small { font-size: 11px; color: rgba(255,255,255,0.35); display: block; margin-top: 2px; }
        .sidebar-nav { flex: 1; padding: 16px 0; }
        .sidebar-label {
            font-size: 10px; font-weight: 700; letter-spacing: 2px;
            text-transform: uppercase; color: rgba(255,255,255,0.25);
            padding: 14px 20px 6px;
        }
        .sidebar-link {
            display: flex; align-items: center; gap: 12px;
            padding: 11px 20px; color: var(--sidebar-text);
            font-size: 13.5px; font-weight: 500;
            transition: all 0.2s; position: relative;
        }
        .sidebar-link:hover { color: #fff; background: rgba(255,255,255,0.06); }
        .sidebar-link.active { color: #fff; background: var(--primary); }
        .sidebar-link.active::before {
            content: ''; position: absolute; left: 0; top: 0; bottom: 0;
            width: 3px; background: var(--accent); border-radius: 0 2px 2px 0;
        }
        .sidebar-link i { width: 18px; text-align: center; font-size: 14px; }
        .sidebar-badge {
            margin-left: auto; background: #dc2626; color: #fff;
            font-size: 10px; font-weight: 700; padding: 2px 7px;
            border-radius: 10px;
        }
        .sidebar-footer {
            padding: 16px 20px; border-top: 1px solid rgba(255,255,255,0.08);
        }
        .sidebar-footer form button {
            display: flex; align-items: center; gap: 10px;
            width: 100%; background: rgba(220,38,38,0.12);
            border: 1px solid rgba(220,38,38,0.25);
            color: #fc8181; font-size: 13px; font-weight: 600;
            padding: 10px 14px; border-radius: var(--radius);
            cursor: pointer; transition: all 0.2s; font-family: var(--font-b);
        }
        .sidebar-footer form button:hover { background: rgba(220,38,38,0.2); color: #fca5a5; }

        /* Main Content */
        .admin-main { margin-left: 240px; display: flex; flex-direction: column; min-height: 100vh; min-width: 0; }
        .admin-topbar {
            background: var(--white); padding: 0 28px;
            height: 60px; display: flex; align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid var(--border);
            box-shadow: var(--shadow); position: sticky; top: 0; z-index: 50;
        }
        .admin-topbar h1 { font-family: var(--font-h); font-size: 16px; font-weight: 700; color: var(--dark); }
        .admin-topbar-right { display: flex; align-items: center; gap: 16px; }
        .admin-topbar-right .admin-name {
            font-size: 13px; font-weight: 600; color: var(--muted);
        }
        .admin-topbar-right .admin-avatar {
            width: 34px; height: 34px; background: var(--primary);
            border-radius: 50%; display: flex; align-items: center; justify-content: center;
            color: #fff; font-weight: 700; font-size: 14px; font-family: var(--font-h);
        }
        .admin-content { padding: 28px; }

        /* Cards */
        .card {
            background: var(--white); border-radius: var(--radius);
            box-shadow: var(--shadow); overflow: hidden;
        }
        .card-header {
            padding: 16px 22px; border-bottom: 1px solid var(--border);
            display: flex; align-items: center; justify-content: space-between;
        }
        .card-header h3 { font-family: var(--font-h); font-size: 14px; font-weight: 700; color: var(--dark); }
        .card-body { padding: 22px; }

        /* Stat Cards */
        .stats-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; margin-bottom: 24px; }
        .stat-card {
            background: var(--white); border-radius: var(--radius);
            padding: 22px; box-shadow: var(--shadow);
            display: flex; align-items: center; gap: 16px;
            border-left: 4px solid transparent;
        }
        .stat-card.green { border-left-color: var(--primary); }
        .stat-card.gold  { border-left-color: var(--accent); }
        .stat-card.blue  { border-left-color: #3B82F6; }
        .stat-card.red   { border-left-color: #EF4444; }
        .stat-icon {
            width: 48px; height: 48px; border-radius: var(--radius);
            display: flex; align-items: center; justify-content: center;
            font-size: 20px; flex-shrink: 0;
        }
        .stat-icon.green { background: rgba(42,92,42,0.1); color: var(--primary); }
        .stat-icon.gold  { background: rgba(200,168,75,0.1); color: var(--accent); }
        .stat-icon.blue  { background: rgba(59,130,246,0.1); color: #3B82F6; }
        .stat-icon.red   { background: rgba(239,68,68,0.1); color: #EF4444; }
        .stat-number { font-family: var(--font-h); font-size: 28px; font-weight: 800; color: var(--dark); line-height: 1; display: block; }
        .stat-label { font-size: 12px; color: var(--muted); margin-top: 3px; display: block; }

        /* Table */
        .admin-table { width: 100%; border-collapse: collapse; }
        .admin-table th {
            padding: 11px 16px; text-align: left;
            font-family: var(--font-h); font-size: 11px; font-weight: 700;
            text-transform: uppercase; letter-spacing: 1px;
            color: var(--muted); background: var(--bg);
            border-bottom: 1px solid var(--border);
        }
        .admin-table td {
            padding: 13px 16px;
            font-size: 13.5px;
            border-bottom: 1px solid var(--border);
            vertical-align: middle;
            word-break: break-word;
            overflow-wrap: break-word;
        }
        .admin-table tr:last-child td { border-bottom: none; }
        .admin-table tr:hover td { background: #f9fbf9; }

        /* Badges */
        .badge {
            display: inline-block; padding: 3px 10px;
            border-radius: 20px; font-size: 11.5px; font-weight: 600;
        }
        .badge-success { background: rgba(42,92,42,0.1); color: var(--primary); }
        .badge-danger  { background: rgba(239,68,68,0.08); color: #dc2626; }
        .badge-warning { background: rgba(200,168,75,0.1); color: #92700d; }

        /* Buttons */
        .btn { display: inline-flex; align-items: center; gap: 7px; padding: 9px 18px;
               border-radius: var(--radius); font-size: 13px; font-weight: 600;
               cursor: pointer; border: none; font-family: var(--font-b); transition: all 0.2s; }
        .btn-primary { background: var(--primary); color: #fff; }
        .btn-primary:hover { background: var(--primary-dark); }
        .btn-sm { padding: 5px 12px; font-size: 12px; }
        .btn-danger { background: #fee2e2; color: #dc2626; }
        .btn-danger:hover { background: #dc2626; color: #fff; }
        .btn-secondary { background: var(--bg); color: var(--text); border: 1px solid var(--border); }
        .btn-secondary:hover { border-color: var(--primary); color: var(--primary); }
        .btn-warning { background: rgba(200,168,75,0.1); color: #92700d; }
        .btn-warning:hover { background: var(--accent); color: #fff; }

        /* Page Header */
        .page-head { display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px; }
        .page-head h2 { font-family: var(--font-h); font-size: 20px; font-weight: 800; color: var(--dark); }

        /* Forms */
        .form-grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; }
        .form-group { margin-bottom: 18px; }
        .form-group label { display: block; font-size: 12.5px; font-weight: 600; color: var(--dark); margin-bottom: 6px; font-family: var(--font-h); }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%; padding: 10px 14px; border: 1.5px solid var(--border);
            border-radius: var(--radius); font-size: 13.5px; font-family: var(--font-b);
            color: var(--text); background: #fff; outline: none; transition: all 0.2s;
        }
        .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
            border-color: var(--primary); box-shadow: 0 0 0 3px rgba(42,92,42,0.08);
        }
        .form-group textarea { resize: vertical; min-height: 100px; }
        .form-check { display: flex; align-items: center; gap: 10px; cursor: pointer; }
        .form-check input { width: auto; }
        .form-check label { margin: 0; cursor: pointer; font-size: 13.5px; font-weight: 500; }
        .form-help { font-size: 12px; color: var(--muted); margin-top: 4px; }
        .invalid-feedback { color: #dc2626; font-size: 12px; margin-top: 4px; display: block; }

        /* Alert */
        .alert { padding: 12px 18px; border-radius: var(--radius); margin-bottom: 20px; font-size: 13.5px; font-weight: 500; display: flex; align-items: center; gap: 10px; }
        .alert-success { background: rgba(42,92,42,0.08); border: 1px solid var(--primary); color: var(--primary); }
        .alert-danger { background: rgba(220,38,38,0.06); border: 1px solid #dc2626; color: #dc2626; }

        /* Spec editor */
        .spec-row { display: flex; gap: 10px; margin-bottom: 10px; align-items: center; }
        .spec-row input { flex: 1; }
        .spec-row button { background: none; border: 1px solid var(--border); border-radius: var(--radius); padding: 8px 12px; cursor: pointer; color: #dc2626; font-size: 13px; }
        .spec-row button:hover { background: #fee2e2; }
        #add-spec-btn { background: none; border: 1px dashed var(--primary); color: var(--primary); border-radius: var(--radius); padding: 8px 16px; cursor: pointer; font-size: 13px; font-weight: 600; }

        /* Pagination */
        .pagination { display: flex; gap: 6px; list-style: none; }
        .pagination .page-item .page-link {
            padding: 7px 14px; border: 1px solid var(--border); border-radius: var(--radius);
            font-size: 13px; color: var(--text); background: var(--white); display: block;
        }
        .pagination .page-item.active .page-link { background: var(--primary); color: #fff; border-color: var(--primary); }
        .pagination .page-item .page-link:hover { border-color: var(--primary); color: var(--primary); }

        /* Sidebar Responsive Toggle Elements */
        .sidebar-toggle { display: none; }
        .sidebar-close { display: none; }
        
        .sidebar-overlay {
            position: fixed;
            inset: 0;
            background: rgba(13, 27, 42, 0.45);
            backdrop-filter: blur(3px);
            -webkit-backdrop-filter: blur(3px);
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: opacity 0.25s ease, visibility 0.25s ease;
        }
        .sidebar-overlay.open {
            display: block; /* Backwards compatibility with standard script toggles */
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        .dashboard-layout {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 18px;
        }

        @media (max-width: 991px) {
            .sidebar {
                left: -240px;
                transition: left 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            }
            .sidebar.open {
                left: 0;
            }
            .sidebar-link {
                padding: 13px 20px;
                font-size: 14px;
            }
            .admin-main {
                margin-left: 0;
            }
            .sidebar-toggle {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                background: rgba(42, 92, 42, 0.06);
                border: 1px solid rgba(42, 92, 42, 0.12);
                font-size: 18px;
                color: var(--primary);
                cursor: pointer;
                width: 38px;
                height: 38px;
                border-radius: 6px;
                transition: all 0.2s;
            }
            .sidebar-toggle:hover {
                background: rgba(42, 92, 42, 0.12);
                color: var(--primary-dark);
            }
            .sidebar-close {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                background: rgba(255, 255, 255, 0.08);
                border: none;
                color: #fff;
                font-size: 16px;
                cursor: pointer;
                width: 32px;
                height: 32px;
                border-radius: 50%;
                transition: all 0.2s;
            }
            .sidebar-close:hover {
                background: rgba(255, 255, 255, 0.15);
                transform: scale(1.05);
            }
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .dashboard-layout {
                grid-template-columns: 1fr;
            }
            .form-grid-2 {
                grid-template-columns: 1fr;
            }
            .card-body {
                overflow-x: auto;
            }
        }

        @media (max-width: 768px) {
            .admin-topbar h1 {
                font-size: 14px;
                max-width: 180px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            .admin-topbar-right .admin-name {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }
            .admin-topbar {
                padding: 0 15px;
            }
            .admin-content {
                padding: 15px;
            }
            .card-body {
                padding: 15px;
            }
            .page-head {
                flex-direction: column;
                align-items: stretch;
                gap: 12px;
            }
            .page-head h2 {
                font-size: 18px;
            }
            .page-head .btn, .page-head form, .page-head div {
                width: 100%;
            }
            .page-head div {
                display: flex;
                flex-direction: column;
                gap: 8px;
            }
            .page-head div .btn {
                width: 100%;
                justify-content: center;
            }
            form button[type="submit"], form .btn {
                width: 100%;
                justify-content: center;
            }
            .spec-row {
                flex-direction: column;
                align-items: stretch;
                gap: 8px;
                border: 1px dashed var(--border);
                padding: 12px;
                border-radius: var(--radius);
                background: #fdfdfd;
            }
            .spec-row input {
                width: 100%;
            }
            .spec-row button {
                align-self: flex-end;
                width: auto;
            }
        }
    </style>
    @yield('extra_css')
</head>
<body>

<div class="sidebar-overlay" id="sidebarOverlay"></div>

<aside class="sidebar" id="adminSidebar">
    <div class="sidebar-brand">
        <div style="display: flex; align-items: center; justify-content: space-between; width: 100%;">
            <span>Agro<em>Net</em></span>
            <button class="sidebar-close" id="sidebarClose" aria-label="Close Sidebar">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <small>Admin Control Panel</small>
    </div>
    <nav class="sidebar-nav">
        <div class="sidebar-label">Main</div>
        <a href="{{ route('admin.dashboard') }}"
           class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="fa-solid fa-gauge-high"></i> Dashboard
        </a>

        <div class="sidebar-label">Products</div>
        <a href="{{ route('admin.categories.index') }}"
           class="sidebar-link {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
            <i class="fa-solid fa-folder-open"></i> Categories
        </a>
        <a href="{{ route('admin.products.index') }}"
           class="sidebar-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
            <i class="fa-solid fa-boxes-stacked"></i> Products
        </a>

        <div class="sidebar-label">Customers</div>
        <a href="{{ route('admin.inquiries.index') }}"
           class="sidebar-link {{ request()->routeIs('admin.inquiries.*') ? 'active' : '' }}">
            <i class="fa-solid fa-envelope-open-text"></i> Inquiries
            @php $unread = \App\Models\Inquiry::where('is_read', false)->count(); @endphp
            @if($unread > 0)
            <span class="sidebar-badge">{{ $unread }}</span>
            @endif
        </a>

        <div class="sidebar-label">Website</div>
        <a href="{{ route('home') }}" target="_blank" class="sidebar-link">
            <i class="fa-solid fa-arrow-up-right-from-square"></i> View Website
        </a>
    </nav>
    <div class="sidebar-footer">
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
            </button>
        </form>
    </div>
</aside>

<div class="admin-main">
    <div class="admin-topbar">
        <div class="admin-topbar-left" style="display: flex; align-items: center; gap: 15px;">
            <button class="sidebar-toggle" id="sidebarToggle" aria-label="Toggle Sidebar">
                <i class="fa-solid fa-bars"></i>
            </button>
            <h1>@yield('title', 'Dashboard')</h1>
        </div>
        <div class="admin-topbar-right">
            <span class="admin-name">{{ session('admin_name', 'Admin') }}</span>
            <div class="admin-avatar">{{ substr(session('admin_name', 'A'), 0, 1) }}</div>
        </div>
    </div>

    <div class="admin-content">
        @if(session('success'))
        <div class="alert alert-success">
            <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger">
            <i class="fa-solid fa-circle-exclamation"></i> {{ session('error') }}
        </div>
        @endif

        @yield('content')
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('adminSidebar');
        const toggleBtn = document.getElementById('sidebarToggle');
        const closeBtn = document.getElementById('sidebarClose');
        const overlay = document.getElementById('sidebarOverlay');

        function toggleSidebar() {
            sidebar.classList.toggle('open');
            overlay.classList.toggle('open');
            if (sidebar.classList.contains('open')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        }

        if (toggleBtn) {
            toggleBtn.addEventListener('click', toggleSidebar);
        }
        if (closeBtn) {
            closeBtn.addEventListener('click', toggleSidebar);
        }
        if (overlay) {
            overlay.addEventListener('click', toggleSidebar);
        }
    });
</script>

@yield('extra_js')
</body>
</html>
