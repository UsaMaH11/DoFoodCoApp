<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Shop Management</h5>
                    </div>
                    <div class="card-header table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Shop Name</th>
                                    <th>Email</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in data" :key="index">
                                    <td>{{index+1}}</td>
                                    <td><img :src="'/storage/store/'+item.image" width="50"></td>
                                    <td>{{item.store_name}}</td>
                                    <td>{{item.user.email}}</td>
                                    <td>{{item.location}}</td>
                                    <td>
                                        <a v-if="item.status == 'terminated'" class="btn btn-danger btn-xs" href="#">Terminated</a>
                                        <a v-if="item.status == 'active'" class="btn btn-success btn-xs" href="#">Active</a>
                                        <a v-if="item.status == 'inactive'" @click="activeStore(item.id)" class="btn btn-primary btn-xs" href="#">Inactive</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import axios from 'axios';
    export default {
        data() {
            return {
                data: {},
            }
        },
        created() {
            this.getStoreList()
        },
        methods: {  
            getStoreList() {
                axios.get('/admin/store/list')
                .then((res) => {
                    this.data = res.data
                })
            },
            activeStore(id) {
                axios.get('/admin/store/active/'+id)
                .then((res) => {
                    if(res.data.success == true){
                        Swal.fire({
                            icon: 'success',
                            text: 'Store has been activated successfully.',
                        })
                        this.getStoreList()
                    }else{
                        Swal.fire({
                            icon: 'error',
                            text: 'Something went wrong.Please reload the page and try again. Thanks!',
                        })
                    }
                })
            },
        }
    }

</script>
