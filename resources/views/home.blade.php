@extends('layouts.app')

@section('content')
<div class="gradient-bg min-h-screen">
    <!-- Header Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-8">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-sm">UMY</span>
                        </div>
                        <span class="ml-2 text-gray-600 text-sm">CDC</span>
                    </div>
                    
                    <div class="hidden md:flex space-x-6">
                        <a href="#" class="text-gray-700 hover:text-green-600 font-medium">Beranda</a>
                        <a href="#" class="text-gray-700 hover:text-green-600 font-medium">Kuesioner</a>
                        <a href="#" class="text-gray-700 hover:text-green-600 font-medium">Laporan</a>
                        <a href="#" class="text-gray-700 hover:text-green-600 font-medium">Kontak</a>
                    </div>
                </div>
                
                <button class="btn-primary text-white px-4 py-2 rounded-lg font-medium hover:shadow-lg transition-all duration-200">
                    Masuk
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="space-y-6">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-blue-500 rounded transform rotate-45"></div>
                </div>
                
                <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                    Empowering Alumni With The University Alumni Tracer
                </h1>
                
                <p class="text-gray-600 text-lg leading-relaxed">
                    Sistem pelacakan alumni yang membantu universitas dalam memantau perkembangan karir lulusan dan meningkatkan kualitas pendidikan.
                </p>
                
                <button class="btn-primary text-white px-8 py-3 rounded-lg font-medium hover:shadow-lg transition-all duration-200">
                    Mulai Sekarang
                </button>
            </div>
            
            <!-- Right Content - Hero Image -->
            <div class="relative">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop&crop=face" 
                         alt="Alumni" 
                         class="w-64 h-64 object-cover rounded-xl mx-auto">
                    
                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 w-12 h-12 bg-pink-400 rounded-lg opacity-80"></div>
                    <div class="absolute top-8 -left-4 w-8 h-8 bg-blue-400 rounded-lg opacity-80"></div>
                    <div class="absolute -bottom-4 left-8 w-10 h-10 bg-green-400 rounded-lg opacity-80"></div>
                    
                    <!-- Stats Badge -->
                    <div class="absolute top-4 right-4 bg-white rounded-lg px-3 py-2 card-shadow">
                        <div class="text-2xl font-bold text-gray-900">50%</div>
                        <div class="text-xs text-gray-500">Response Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Apa yang akan kamu dapatkan di Tracer Study?
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Nikmati berbagai fitur yang membantu dalam pengembangan karir dan CV secara gratis
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Data Kuesioner Card -->
                <div class="bg-orange-50 rounded-2xl p-8 text-center hover:shadow-lg transition-all duration-200">
                    <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Data Kuesioner</h3>
                    <p class="text-gray-600 mb-6">
                        Mengumpulkan data alumni yang berguna untuk evaluasi dan pengembangan program studi
                    </p>
                    <a href="#" class="text-orange-600 font-medium hover:text-orange-700 inline-flex items-center">
                        Mulai Mengisi →
                    </a>
                </div>
                
                <!-- CV Builder Card -->
                <div class="bg-blue-50 rounded-2xl p-8 text-center hover:shadow-lg transition-all duration-200">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">CV Builder</h3>
                    <p class="text-gray-600 mb-6">
                        Buat CV profesional dengan template menarik untuk meningkatkan peluang karir
                    </p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-700 inline-flex items-center">
                        Buat CV →
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Career Development Center Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="space-y-6">
                    <h2 class="text-3xl font-bold text-gray-900">
                        Career Development Center UMY
                    </h2>
                    
                    <p class="text-gray-600 leading-relaxed">
                        CDC UMY hadir sebagai jembatan antara dunia akademik dan industri. Kami menyediakan berbagai layanan untuk membantu mahasiswa dan alumni dalam mengembangkan karir, mulai dari konsultasi karir, pelatihan soft skills, hingga penempatan kerja.
                    </p>
                    
                    <p class="text-gray-600 leading-relaxed">
                        Dengan jaringan yang luas dan program yang terstruktur, CDC UMY berkomitmen untuk menghasilkan lulusan yang siap kerja dan mampu bersaing di pasar global.
                    </p>
                </div>
                
                <!-- Right Content - Image -->
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=400&fit=crop&crop=face" 
                         alt="Career Development" 
                         class="w-64 h-64 object-cover rounded-full mx-auto">
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Section -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-8">
                <!-- Total Alumni -->
                <div class="text-center">
                    <div class="text-4xl font-bold text-gray-900 mb-2">{{ $stats['total_alumni'] }}</div>
                    <div class="text-sm text-gray-600">Total Alumni</div>
                    <div class="w-full bg-green-200 rounded-full h-1 mt-2">
                        <div class="bg-green-600 h-1 rounded-full" style="width: 100%"></div>
                    </div>
                </div>
                
                <!-- Data Kuesioner -->
                <div class="text-center">
                    <div class="text-4xl font-bold text-gray-900 mb-2">{{ $stats['data_kuesioner'] }}</div>
                    <div class="text-sm text-gray-600">Data Kuesioner</div>
                    <div class="w-full bg-orange-200 rounded-full h-1 mt-2">
                        <div class="bg-orange-600 h-1 rounded-full" style="width: 85%"></div>
                    </div>
                </div>
                
                <!-- CV Builder -->
                <div class="text-center">
                    <div class="text-4xl font-bold text-gray-900 mb-2">{{ $stats['cv_builder'] }}</div>
                    <div class="text-sm text-gray-600">CV Builder</div>
                    <div class="w-full bg-blue-200 rounded-full h-1 mt-2">
                        <div class="bg-blue-600 h-1 rounded-full" style="width: 90%"></div>
                    </div>
                </div>
                
                <!-- Job Portal -->
                <div class="text-center">
                    <div class="text-4xl font-bold text-gray-900 mb-2">{{ $stats['job_portal'] }}</div>
                    <div class="text-sm text-gray-600">Job Portal</div>
                    <div class="w-full bg-yellow-200 rounded-full h-1 mt-2">
                        <div class="bg-yellow-600 h-1 rounded-full" style="width: 75%"></div>
                    </div>
                </div>
                
                <!-- Career Center -->
                <div class="text-center">
                    <div class="text-4xl font-bold text-gray-900 mb-2">{{ $stats['career_center'] }}</div>
                    <div class="text-sm text-gray-600">Career Center</div>
                    <div class="w-full bg-red-200 rounded-full h-1 mt-2">
                        <div class="bg-red-600 h-1 rounded-full" style="width: 80%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection