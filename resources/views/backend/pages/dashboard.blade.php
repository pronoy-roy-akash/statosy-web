@extends('backend.layout.template')
@section('title', 'Dashboard — Statosy Admin')
@section('pageTitle', 'Dashboard')
@section('body-content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-bar-chart-2 bg-blue"></i>
                        <div class="d-inline">
                            <h5>Dashboard</h5>
                            <span>Quick control panel for content, navigation, and settings</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}"><i class="ik ik-home"></i></a>
                            </li>
                            {{-- <li class="breadcrumb-item active" aria-current="page">Dashboard</li> --}}
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Welcome Banner -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card adminWelcome">
                    <div class="card-body p-4 d-flex align-items-start justify-content-between gap-3 flex-wrap">
                        <div>
                            <h4 class="mb-2">Welcome back</h4>
                            <p class="mb-0">Manage content, navigation, and website settings with confidence.</p>
                        </div>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <a href="{{ route('admin.navigation.edit') }}" class="btn btn-light adminBtn">Navbar</a>
                            <a href="{{ route('admin.content.index') }}" class="btn btn-outline-light adminBtn">Content</a>
                            <a href="{{ route('admin.settings.edit') }}" class="btn btn-outline-light adminBtn">Settings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="row g-3">
            <!-- Messages -->
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card adminStat">
                    <div class="card-body">
                        <div class="media static-top-widget d-flex align-items-center">
                            <div class="align-self-center text-center adminIcon adminIcon--primary me-3">
                                <i data-feather="mail" style="width: 22px; height: 22px;"></i>
                            </div>
                            <div class="media-body">
                                <span class="m-0 adminMeta">Messages</span>
                                <div class="adminMetric">{{ $totalMessages }}</div>
                            </div>
                        </div>
                        <a href="{{ route('admin.messages.index') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <!-- Content Blocks -->
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card adminStat">
                    <div class="card-body">
                        <div class="media static-top-widget d-flex align-items-center">
                            <div class="align-self-center text-center adminIcon adminIcon--info me-3">
                                <i data-feather="file-text" style="width: 22px; height: 22px;"></i>
                            </div>
                            <div class="media-body">
                                <span class="m-0 adminMeta">Content blocks</span>
                                <div class="adminMetric">{{ $totalContents }}</div>
                            </div>
                        </div>
                        <a href="{{ route('admin.content.index') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <!-- Navbar -->
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card adminStat">
                    <div class="card-body">
                        <div class="media static-top-widget d-flex align-items-center">
                            <div class="align-self-center text-center adminIcon adminIcon--success me-3">
                                <i data-feather="menu" style="width: 22px; height: 22px;"></i>
                            </div>
                            <div class="media-body">
                                <span class="m-0 adminMeta">Navbar items</span>
                                <div class="adminMetric">{{ $totalNavItems }}</div>
                            </div>
                        </div>
                        <a href="{{ route('admin.navigation.edit') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <!-- Site status -->
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card adminStat">
                    <div class="card-body">
                        <div class="media static-top-widget d-flex align-items-center">
                            <div class="align-self-center text-center adminIcon adminIcon--warning me-3">
                                <i data-feather="activity" style="width: 22px; height: 22px;"></i>
                            </div>
                            <div class="media-body">
                                <span class="m-0 adminMeta">Website</span>
                                <div class="adminMetric">{{ $siteEnabled ? 'Up' : 'Down' }}</div>
                            </div>
                        </div>
                        <a href="{{ route('admin.settings.edit') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <!-- Applications -->
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card adminStat">
                    <div class="card-body">
                        <div class="media static-top-widget d-flex align-items-center">
                            <div class="align-self-center text-center adminIcon adminIcon--danger me-3">
                                <i data-feather="briefcase" style="width: 22px; height: 22px;"></i>
                            </div>
                            <div class="media-body">
                                <span class="m-0 adminMeta">Applications</span>
                                <div class="adminMetric">{{ $totalApplications }}</div>
                            </div>
                        </div>
                        <a href="{{ route('admin.applications.index') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .page-header-title h5 {
            color: rgba(255, 255, 255, 0.92);
        }

        .page-header-title span {
            color: rgba(255, 255, 255, 0.66) !important;
        }

        .adminWelcome {
            border-radius: 18px;
            border: 1px solid rgba(255, 255, 255, 0.14) !important;
            background: radial-gradient(900px 420px at 18% 0%, rgba(255, 255, 255, 0.10), transparent 55%),
                radial-gradient(760px 420px at 90% 20%, rgba(255, 255, 255, 0.06), transparent 62%),
                linear-gradient(180deg, rgba(255, 255, 255, 0.06), rgba(255, 255, 255, 0.02));
            color: rgba(255, 255, 255, 0.9);
        }

        .adminWelcome h4 {
            font-weight: 850;
            letter-spacing: -0.6px;
        }

        .adminWelcome p {
            color: rgba(255, 255, 255, 0.72);
        }

        .adminBtn {
            border-radius: 14px;
            font-weight: 800;
        }

        .adminStat {
            border-radius: 18px;
            border: 1px solid rgba(255, 255, 255, 0.12) !important;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.02));
            box-shadow: 0 18px 55px rgba(0, 0, 0, 0.55);
        }

        .adminMeta {
            color: rgba(255, 255, 255, 0.65) !important;
            font-size: 13px;
            letter-spacing: 0.2px;
            display: block;
        }

        .adminMetric {
            margin-top: 4px;
            color: rgba(255, 255, 255, 0.92);
            font-weight: 900;
            letter-spacing: -0.6px;
            font-size: 26px;
            line-height: 1.1;
        }

        .adminIcon {
            width: 46px;
            height: 46px;
            display: grid;
            place-items: center;
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.14);
            color: rgba(255, 255, 255, 0.92);
            background: rgba(0, 0, 0, 0.22);
        }

        .adminIcon--primary {
            background: radial-gradient(60px 60px at 30% 20%, rgba(36, 105, 92, 0.55), transparent 55%),
                rgba(0, 0, 0, 0.22);
        }

        .adminIcon--info {
            background: radial-gradient(60px 60px at 30% 20%, rgba(68, 102, 242, 0.55), transparent 55%),
                rgba(0, 0, 0, 0.22);
        }

        .adminIcon--success {
            background: radial-gradient(60px 60px at 30% 20%, rgba(30, 201, 12, 0.45), transparent 55%),
                rgba(0, 0, 0, 0.22);
        }

        .adminIcon--warning {
            background: radial-gradient(60px 60px at 30% 20%, rgba(255, 159, 64, 0.55), transparent 55%),
                rgba(0, 0, 0, 0.22);
        }

        .adminIcon--danger {
            background: radial-gradient(60px 60px at 30% 20%, rgba(255, 99, 132, 0.50), transparent 55%),
                rgba(0, 0, 0, 0.22);
        }

        .adminStat {
            transition: transform 220ms ease, box-shadow 220ms ease, border-color 220ms ease;
        }

        .adminStat:hover {
            transform: translateY(-4px);
            border-color: rgba(255, 255, 255, 0.18) !important;
            box-shadow: 0 26px 70px rgba(0, 0, 0, 0.62);
        }
    </style>
@endsection
