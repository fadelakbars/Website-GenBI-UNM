<div class=" container mx-auto px-4 py-8 section-gap " id="event">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold">Upcoming Events</h1>
        <p class="text-gray-600">Discover the latest and upcoming events from GenBI</p>
    </div>
    <div class="d-flex justify-content-center flex-wrap justify-center gap-6">
        @foreach($events as $event)
        <div class="card bg-base-100 justify-center shadow-lg hover:shadow-xl transition-shadow duration-300 m-2" style="width: 300px;">
                <img
                    class="absolute top-0 left-0 object-cover w-full h-full"
                    src="{{ asset('storage/' . $event['gambar']) }}"
                    alt="{{ $event['nama_event'] }}" />
            <div class="card-body p-3">
                <h3 class="card-title text-lg font-semibold mb-2">
                    @if($event['status_kegiatan'] == 'NEW')
                    <div class="badge badge-secondary">NEW</div>
                    @elseif($event['status_kegiatan'] == 'Coming Soon')
                    <div class="badge badge-warning">Coming Soon</div>
                    @elseif($event['status_kegiatan'] == 'Ongoing')
                    <div class="badge badge-success">Ongoing</div>
                    @elseif($event['status_kegiatan'] == 'Completed')
                    <div class="badge badge-primary">Completed</div>
                    @endif
                </h3>
                <h4 class="mb-2">
                    {{ $event['nama_event'] }}
                </h4>
                <p class="text-gray-700 text-sm mb-1">{{ Str::limit($event['deskripsi'], 100) }}</p>
                
                <div class="text-xs text-gray-600 mb-3">
                    <table class="table-auto w-full">
                        <tbody>
                            <tr>
                                <td class="pr-2"><i class="fas fa-map-marker-alt"></i></td>
                                <td>{{ $event['tempat'] }}</td>
                            </tr>
                            <tr>
                                <td class="pr-2"><i class="fas fa-calendar-alt"></i></td>
                                <td>{{ $event['tanggal_kegiatan'] }}</td>
                            </tr>
                            <tr>
                                <td class="pr-2"><i class="fas fa-user-friends"></i></td>
                                <td>{{ $event['deputi_pelaksana'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="{{ $event['link_gform_pendaftaran'] }}" class="btn btn-primary w-full text-center text-xs" target="_blank">
                    Daftar
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
