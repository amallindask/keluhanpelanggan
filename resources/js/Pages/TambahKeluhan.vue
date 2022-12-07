<template>
    <div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">Tambah Keluhan Pelanggan</div>
	                <div class="card-body">
                        <form v-on:submit.prevent="storeKeluhan">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" autocomplete="off" v-model="keluhanpelanggan.nama">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" autocomplete="off" v-model="keluhanpelanggan.email">
                            </div>
                            <div class="mb-3">
                                <label for="nomor_hp" class="form-label">Nomor Hp</label>
                                <input type="number" class="form-control" id="nomor_hp" autocomplete="off" v-model="keluhanpelanggan.nomor_hp">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flag_aktif" value="1" id="flag_aktif" v-model="keluhanpelanggan.flag_aktif">
                                <label class="form-check-label" for="flag_aktif">
                                    Aktif
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="flag_aktif" value="0" id="flag_aktif" v-model="keluhanpelanggan.flag_aktif" checked>
                                <label class="form-check-label" for="flag_aktif">
                                    Tidak Aktif
                                </label>
                            </div>
                            <div class="mb-3">
                                <label for="keluhan" class="form-label">Keluhan</label>
                                <textarea class="form-control" id="keluhan" rows="3" v-model="keluhanpelanggan.keluhan"></textarea>
                            </div>
                            <RouterLink to="/keluhan-pelanggan" class="btn btn-info">Kembali</RouterLink> 
                            <button type="submit" class="btn btn-primary mx-3">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>
<script>
export default {
    data() {
        return {
            keluhanpelanggan: {}
        }
    },
    methods: {
        storeKeluhan() {
            let uri = 'http://127.0.0.1:8000/api/keluhanpelanggan'
            this.axios.post(uri, this.keluhanpelanggan).then((response) => {
                this.$router.push({name: 'keluhan_pelanggan'})
            })
        },
        createNew() {
            this.keluhanpelanggan = {}
        }
    }
}
</script>