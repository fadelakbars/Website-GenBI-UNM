<div class=" container mx-auto px-4 py-8 ">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold">Upcoming Events</h1>
        <p class="text-gray-600">Discover the latest and upcoming events from GenBI</p>
    </div>
    <div class="d-flex justify-content-center flex-wrap justify-center gap-6">
        @foreach($events as $event)
        <div class="card bg-base-100 justify-center shadow-lg hover:shadow-xl transition-shadow duration-300" style="width: 400px;">
                <img
                    class="absolute top-0 left-0 object-cover w-full h-full"
                    src="{{ asset('storage/' . $event['gambar']) }}"
                    alt="{{ $event['nama_event'] }}" />
            <div class="card-body p-3">
                <h2 class="card-title text-lg font-semibold mb-2">
                    {{ $event['nama_event'] }}
                    @if($event['status_kegiatan'] == 'NEW')
                    <div class="badge badge-secondary">NEW</div>
                    @elseif($event['status_kegiatan'] == 'Coming Soon')
                    <div class="badge badge-warning">Coming Soon</div>
                    @elseif($event['status_kegiatan'] == 'Ongoing')
                    <div class="badge badge-success">Ongoing</div>
                    @elseif($event['status_kegiatan'] == 'Completed')
                    <div class="badge badge-gray">Completed</div>
                    @endif
                </h2>
                <p class="text-gray-700 text-sm mb-4">{{ Str::limit($event['deskripsi'], 100) }}</p>
                <div class="flex justify-between text-xs text-gray-600 mb-4">
                    <span><i class="fas fa-map-marker-alt mr-1"></i>{{ $event['tempat'] }}</span>
                    <span><i class="fas fa-calendar-alt mr-1"></i>{{ $event['tanggal_kegiatan'] }}</span>
                </div>
                <div class="flex justify-between text-xs text-gray-600 mb-4">
                    <span>{{ $event['deputi_pelaksana'] }}</span>
                </div>
                <a href="{{ $event['link_gform_pendaftaran'] }}" class="btn btn-primary w-full text-center text-xs" target="_blank">
                    Daftar
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
