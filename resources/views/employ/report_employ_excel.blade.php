<p>Data Employees</p>
<br>
  <table >
    <thead>
      <tr>
        <th>No</th>
	<th>No Induk Karyawan</th>
	<th>Nama</th>
	<th>No Identitas</th>
	<th>Cabang</th>
	<th>Jabatan</th>
      </tr>
    </thead>
   <tbody>
     @forelse ($employes as $employ)
     <tr>
       <td>{{ $loop->iteration }}.</td>
       <td>{{ $employ->nomor_induk_karyawan }}</td>
       <td>{{ $employ->nama_lengkap }}</td>
       <td>{{ $employ->no_identitas}}</td>
       <td>{{ $employ->cabang->nama}}</td>
       <td>{{ $employ->jabatan->nama}}</td>
     </tr>
     @empty
     <p>Data Tidak Tersedia</p>
     @endforelse
   </tbody>
 </table>
