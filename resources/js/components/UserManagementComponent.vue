<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>User Management</h5>
                    </div>
                    <div class="card-header table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Location</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in data" :key="index">
                                    <td>{{index+1}}</td>
                                    <td>image</td>
                                    <td>{{item.name}}</td>
                                    <td>{{item.email}}</td>
                                    <td>{{item.location}}</td>
                                    <td>{{item.type}}</td>
                                    <td>
                                        <a v-if="item.status == 'terminated'" class="btn btn-danger btn-xs" href="#">Terminated</a>
                                        <a v-if="item.status == 'active'" class="btn btn-success btn-xs" href="#">Active</a>
                                        <a v-if="item.status == 'inactive'" class="btn btn-primary btn-xs" href="#">Inactive</a>
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
            this.getUsersList()
        },
        methods: {  
            getUsersList() {
                axios.get('/admin/user/list')
                .then((res) => {
                    this.data = res.data
                })
            },
        }
    }

</script>
