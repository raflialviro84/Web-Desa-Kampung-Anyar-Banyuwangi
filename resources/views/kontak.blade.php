@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-3xl font-bold mb-4">Kontak Desa Kampung Anyar</h1>
    <div class="bg-white rounded shadow p-6 max-w-xl mx-auto">
        <p class="mb-2">Alamat: Jl. Contoh Alamat, Kampung Anyar, Banyuwangi</p>
        <p class="mb-2">Telepon: (0333) 123456</p>
        <p class="mb-2">Email: info@kampunganyar-bwi.desa.id</p>
        <p class="mb-2">Website: kampunganyar-bwi.desa.id</p>
        <hr class="my-4">
        <form>
            <div class="mb-4">
                <label class="block text-gray-700">Nama</label>
                <input type="text" class="w-full border rounded px-3 py-2" placeholder="Nama Anda">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" class="w-full border rounded px-3 py-2" placeholder="Email Anda">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Pesan</label>
                <textarea class="w-full border rounded px-3 py-2" rows="4" placeholder="Tulis pesan Anda..."></textarea>
            </div>
            <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded">Kirim</button>
        </form>
    </div>
</div>
@endsection
