<template>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">Data Pengunjung Perpustakaan</div>

                    <div class="card-body">
                        <router-link :to="{ name: 'create' }" class="btn btn-md btn-success">TAMBAH PENGUNJUNG</router-link>

                        <div class="table-responsive mt-2">
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Nama Pengunjung</th>
                                    <th>No Telp</th>
                                    <th>Email</th>
                                    <th>NIK</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Is Active</th>
                                    <th>Is Deleted</th>
                                    <th>Created By</th>
                                    <th>Updated By</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(datapengunjung, index) in datapengunjung" :key="datapengunjung.id">
                                    <td>{{ datapengunjung.nama-pengunjung }}</td>
                                    <td>{{ datapengunjung.no-telp }}</td>
                                    <td>{{ datapengunjung.email }}</td>
                                    <td>{{ datapengunjung.nik }}</td>
                                    <td>{{ datapengunjung.tgl-lahir }}</td>
                                    <td>{{ datapengunjung.alamat }}</td>
                                    <td>{{ datapengunjung.is-active }}</td>
                                    <td>{{ datapengunjung.is-deleted }}</td>
                                    <td>{{ datapengunjung.created-by }}</td>
                                    <td>{{ datapengunjung.updated-by }}</td>
                                    <td class="text-center">
                                        <router-link :to="{name: 'edit', params: { id: datapengunjung.id }}" class="btn btn-sm btn-primary">EDIT</router-link>
                                        <button @click.prevent="datapengunjungDelete(datapengunjung.id, index)" class="btn btn-sm btn-danger">HAPUS</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

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
                dataPengunjung: []
            }
        },
        created() {
            let uri = `http://127.0.0.1:8000/api/pengunjung/get-data`;
            this.axios.get(uri).then(response => {
                this.dataPengunjung = response;
                console.log(this.dataPengunjung);
            });
        }
    }
</script>
