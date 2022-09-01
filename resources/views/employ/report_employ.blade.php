<div class="loker">
        <div class="container">
        <h5 class="title-vacancy">Data Employees</h5>
		<div class="table-body">

			<table class="table table-responsive data-table">
				<thead>
				<tr class="judul">
				    <th scope="col" >No</th>
				    <th scope="col" width="20%">No Induk Karyawan</th>
				    <th scope="col" width="20%">Nama</th>
				    <th scope="col" width="20%">No Identitas</th>
				    <th scope="col" width="20%">Cabang</th>
				    <th scope="col" width="20%">Jabatan</th>
				    <th scope="col" colspan="3">Actions</th>
				</tr>
				</thead>
				<tbody >
					@forelse ($employes as $employ)
                                <tr class="isi">
                                    <td>{{ $loop->iteration }}.</td>
                                    <td>{{ $employ->nomor_induk_karyawan }}</td>
                                    <td>{{ $employ->nama_lengkap }}</td>
                                    <td>{{ $employ->no_identitas}}</td>
                                    <td>{{ $employ->cabang->nama}}</td>
                                    <td>{{ $employ->jabatan->nama}}</td>
                                    <td>
                                    </td>      
                                   
                              @empty
                              
                                  <div class="alert alert-danger">
                                      Data belum Tersedia.
                                  </div>
                               
                              @endforelse
                </tbody>
            </table>
        </div>
    </div>
    </div>
