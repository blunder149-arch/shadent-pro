@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')

<div class="stats-grid">
    <div class="stat-card green">
        <div class="stat-icon green"><i class="fa-solid fa-folder-open"></i></div>
        <div>
            <span class="stat-number">{{ $totalCategories }}</span>
            <span class="stat-label">Total Categories</span>
        </div>
    </div>
    <div class="stat-card gold">
        <div class="stat-icon gold"><i class="fa-solid fa-boxes-stacked"></i></div>
        <div>
            <span class="stat-number">{{ $totalProducts }}</span>
            <span class="stat-label">Total Products</span>
        </div>
    </div>
    <div class="stat-card blue">
        <div class="stat-icon blue"><i class="fa-solid fa-envelope-open-text"></i></div>
        <div>
            <span class="stat-number">{{ $totalInquiries }}</span>
            <span class="stat-label">Total Inquiries</span>
        </div>
    </div>
    <div class="stat-card red">
        <div class="stat-icon red"><i class="fa-solid fa-bell"></i></div>
        <div>
            <span class="stat-number">{{ $unreadInquiries }}</span>
            <span class="stat-label">Unread Inquiries</span>
        </div>
    </div>
</div>

<div class="dashboard-layout">

    {{-- Recent Inquiries --}}
    <div class="card">
        <div class="card-header">
            <h3><i class="fa-solid fa-envelope-open-text" style="margin-right: 8px; color: var(--primary);"></i>Recent Inquiries</h3>
            <a href="{{ route('admin.inquiries.index') }}" class="btn btn-sm btn-secondary">View All</a>
        </div>
        <div style="overflow-x: auto;">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Product Interest</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($recentInquiries as $inquiry)
                    <tr>
                        <td><strong>{{ $inquiry->name }}</strong><br>
                            <span style="font-size:12px; color: var(--muted);">{{ $inquiry->email }}</span></td>
                        <td>{{ $inquiry->product_interest ?: '—' }}</td>
                        <td>{{ $inquiry->phone }}</td>
                        <td style="font-size: 12.5px; color: var(--muted);">{{ $inquiry->created_at->format('d M Y') }}</td>
                        <td>
                            @if($inquiry->is_read)
                            <span class="badge badge-success">Read</span>
                            @else
                            <span class="badge badge-danger">New</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.inquiries.show', $inquiry->id) }}"
                               class="btn btn-sm btn-warning">View</a>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="6" style="text-align: center; padding: 32px; color: var(--muted);">No inquiries yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Quick Actions --}}
    <div>
        <div class="card" style="margin-bottom: 18px;">
            <div class="card-header">
                <h3>Quick Actions</h3>
            </div>
            <div class="card-body" style="display: flex; flex-direction: column; gap: 10px;">
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary" style="justify-content: center;">
                    <i class="fa-solid fa-plus"></i> Add New Product
                </a>
                <a href="{{ route('admin.categories.create') }}" class="btn btn-secondary" style="justify-content: center;">
                    <i class="fa-solid fa-folder-plus"></i> Add New Category
                </a>
                <a href="{{ route('admin.inquiries.index') }}" class="btn btn-secondary" style="justify-content: center;">
                    <i class="fa-solid fa-envelope-open-text"></i> View All Inquiries
                </a>
                <a href="{{ route('home') }}" target="_blank" class="btn btn-secondary" style="justify-content: center;">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i> View Live Website
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-header"><h3>Overview</h3></div>
            <div class="card-body">
                <div style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid var(--border);">
                    <span style="font-size:13px; color: var(--muted);">Featured Products</span>
                    <strong style="font-size: 13px;">{{ $featuredProducts }}</strong>
                </div>
                <div style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid var(--border);">
                    <span style="font-size:13px; color: var(--muted);">Active Categories</span>
                    <strong style="font-size: 13px;">{{ $totalCategories }}</strong>
                </div>
                <div style="display: flex; justify-content: space-between; padding: 8px 0;">
                    <span style="font-size:13px; color: var(--muted);">Pending Inquiries</span>
                    <strong style="font-size: 13px; color: #dc2626;">{{ $unreadInquiries }}</strong>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
