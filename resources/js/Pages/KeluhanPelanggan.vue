<script>
export default {
    name:"keluhan_pelanggan",
    data(){
        return{
            keluhanpelanggan:[]
        }
    },
    created(){
        this.fetchKeluhan()
    },
	methods: {
		deleteKeluhan(event) {
            let uri = 'http://127.0.0.1:8000/api/keluhanpelanggan/'+event.id
            this.keluhanpelanggan.splice(this.keluhanpelanggan.indexOf(event), 1)
            this.axios.delete(uri)
        },
		fetchKeluhan() {
            let uri = 'http://127.0.0.1:8000/api/keluhanpelanggan'
            this.axios.get(uri).then(response => {
                this.keluhanpelanggan = response.data
            })
            .catch(e => {
                console.log(e.response)
            });
        }
	}, 
}
</script>

<template>
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">Keluhan Pelanggan</div>
	                <div class="card-body">
						<!-- <button style="float: right;">Tambah Data</button> -->
						<RouterLink to="/tambah-keluhan" class="btn btn-primary btn-sm" style="float: right;">Tambah</RouterLink>
	                    <table class="table table-striped table-hover">
							<thead>
								<th>Nama</th>
								<th>Email</th>
								<th>Nomor Hp</th>
								<th>Status Keluhan</th>
								<th>Status</th>
								<th>Keluhan</th>
								<th>Aksi</th>
							</thead>
							<tbody v-if="keluhanpelanggan.length > 0">
								<tr v-for="(keluhanpelanggan,key) in keluhanpelanggan" :key="key">
									<td>{{ keluhanpelanggan.nama }}</td>
									<td>{{ keluhanpelanggan.email }}</td>
									<td>{{ keluhanpelanggan.nomor_hp }}</td>
									<td>{{ keluhanpelanggan.status_keluhan == 'O' ? 'Open' : 'Close'}}</td>
									<td>{{ keluhanpelanggan.flag_aktif == 1 ? 'aktif' : 'tidak aktif' }}</td>
									<td>{{ keluhanpelanggan.keluhan }}</td>
									<td>
										<RouterLink :to="{name: 'edit_keluhan_pelanggan', params: {id: keluhanpelanggan.id}}" class="btn btn-warning btn-sm">Edit</RouterLink>
										<button v-on:click="deleteKeluhan(keluhanpelanggan)" class="btn btn-danger btn-sm mx-2">Delete</button>
										
									</td>
								</tr>
							</tbody>
							<tbody v-else>
                                <tr>
                                    <td colspan="6" align="center">No Keluhan Found.</td>
                                </tr>
                            </tbody>
						</table>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</template>