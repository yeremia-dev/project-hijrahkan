<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th style="font-weight: bold">NO</th>
            <th style="font-weight: bold">JENIS CICILAN</th>
            <th style="font-weight: bold">NAMA</th>
            <th style="font-weight: bold">NOMOR TELEPHONE</th>
            <th style="font-weight: bold">EMAIL</th>
            <th style="font-weight: bold">SISA CICILAN (Rp)</th>
            <th style="font-weight: bold">BESAR CICILAN (Rp)</th>
            <th style="font-weight: bold">SISA WAKTU CICILAN</th>
            <th style="font-weight: bold">NAMA BANK</th>
        </tr>
        </thead>
        <tbody>
        @php $no = 1 @endphp
        @foreach( $datausers as $datauser)
            <tr>
                <td>{{ $no++ }}</td>
                @if($datauser->id_jenis == 1)
                    <td>{{ $jeniscicilans[0]->jenis }}</td>
                @elseif($datauser->id_jenis == 2)
                    <td>{{ $jeniscicilans[1]->jenis }}</td>
                @elseif($datauser->id_jenis == 3)
                    <td>{{ $jeniscicilans[2]->jenis }}</td>
                @else
                    <td>{{ $jeniscicilans[3]->jenis }}</td>
                @endif
                <td>{{ $datauser->nama }}</td>
                <td>{{ $datauser->nomor_hp }}</td>
                <td>{{ $datauser->email }}</td>
                <td>{{ $datauser->sisa_cicilan }}</td>
                <td>{{ $datauser->besar_cicilan }}</td>
                <td>{{ $datauser->sisa_waktu_cicilan }} Bulan</td>
                <td>{{ $datauser->nama_bank }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
