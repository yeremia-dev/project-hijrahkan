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
        <th style="font-weight: bold">NAMA</th>
        <th style="font-weight: bold">NOMOR TELEPHONE</th>
        <th style="font-weight: bold">EMAIL</th>
    </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach( $datainfos as $datainfo)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $datainfo->nama }}</td>
            <td>{{ $datainfo->nomor_hp }}</td>
            <td>{{ $datainfo->email }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
