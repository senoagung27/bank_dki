@extends('layouts.app')

@section('title', 'Customer List')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
    }
    .card {
        border: 1px solid #eaeaea;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
    }
    .fw-medium {
        font-weight: 500;
    }
    .mb-0 {
        margin-bottom: 0;
    }
    .text-nowrap {
        white-space: nowrap;
    }
</style>
<div class="card">
    <div class="d-flex justify-content-between mb-4">
        <div>
            <h4 class="fw-medium mb-2">Pemberitahuan Persetujuan</h4>
            <p class="mb-2">Selamat, {{ $customerName }}!</p>
            <p class="mb-0">Data pengajuan Anda telah disetujui oleh {{ $approverName }}.</p>
        </div>
    </div>
    <hr />
    <div>
        <h6 class="mb-3">Rincian Pengajuan:</h6>
        <table>
            <tbody>
                <tr>
                    <td class="pe-4">Nomor Pengajuan:</td>
                    <td class="fw-medium">{{ $customer->id }}</td>
                </tr>
                <tr>
                    <td class="pe-4">Tanggal Pengajuan:</td>
                    <td class="fw-medium">{{ $customer->created_at->format('d-m-Y') }}</td>
                </tr>
                <tr>
                    <td class="pe-4">Status:</td>
                    <td class="fw-medium">Disetujui</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        <span class="fw-medium">Note:</span>
        <span>Terima kasih atas kesabaran Anda. Kami berharap dapat bekerja sama dengan Anda lagi di masa depan.</span>
    </div>
</div>
@endsection
