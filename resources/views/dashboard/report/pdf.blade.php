<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Report PDF - Famoney</title>
</head>
<style>
    html{
        font-family: "helvetica";
    }
</style>
<body>

    @php

    function rupiah($nominal)
    {
        $result = "Rp".number_format($nominal,2,',','.');
        return $result;
    }

    @endphp

    {{date('d-m-Y', strtotime($date));}}

	<h1 class="fs-1 fw-bolder mt-2 mb-2">
		Money Report - Famoney
	</h1>

        <table border="2">
            <thead>
                <tr>
                    <th>Pengeluaran</th>
                    <th>Pemasukan</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{rupiah($pemasukan);}}</td>
                    <td>{{rupiah($pengeluaran);}}</td>
                    <td>{{rupiah($total);}}</td>
                </tr>
            </tbody>
        </table>

    <br>

	<table border="2">
                        <thead class="thead">
                            <tr>
                                <th>No</th>
                                <th>Keterangan</th>
                                <th>Kategori</th>
                                <th>Nominal</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>

                        <tbody class="tbody">
                        	@foreach($money as $mn)
                        	<tr>
                        		<td>{{$loop->iteration}}</td>
                        		<td>{{$mn->description}}</td>
                        		<td>{{$mn->category->name}}</td>
                        		<td>{{rupiah($mn->nominal);}}</td>
                        		<td>{{date('d-m-Y', strtotime($mn->created_at));}}</td>
                        	</tr>
                        	@endforeach
                        </tbody>
                    </table>


               <p>Print by {{Auth::user()->name}}</p>

	
</body>
</html>