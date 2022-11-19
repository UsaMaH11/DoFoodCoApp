<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Requested Food</h5>
                    </div>
                    <div class="card-header table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Shop Name</th>
                                    <th>Food Name</th>
                                    <th>Cook Time</th>
                                    <th>Type</th>
                                    <th>Price</th>
                                    <th>Images</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in data" :key="index">
                                    <td>{{index+1}}</td>
                                    <td>{{item.store.store_name}}</td>
                                    <!-- <td><img :src="'/storage/store/'+item.image" width="50"></td> -->
                                    <td>{{item.food_title}}</td>
                                    <td>{{item.cook_time}}</td>
                                    <td>{{item.type}}</td>
                                    <td>{{item.price}}</td>
                                    <td><button class="btn btn-primary btn-xs" type="button" @click="openModal(item.images, item.id)">Images</button></td>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Image</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        <tr v-for="(img, index) in images" :key="index">
                                                            <td>{{index+1}}</td>
                                                            <td><img :src="'/storage/food/'+img" style="border-radius: 50%" width="100" alt=""></td>
                                                            <td><a @click="delImg(img)">Delete</a></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                                    <a type="button" @click="updateImages()" class="btn btn-primary">Save changes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <td>
                                        <a v-if="item.status == 'terminated'" class="btn btn-danger btn-xs"
                                            href="#">Terminated</a>
                                        <a v-if="item.status == 'approved'" class="btn btn-success btn-xs"
                                            href="#">Active</a>
                                        <a v-if="item.status == 'processing'" @click="activeFood(item.id)"
                                            class="btn btn-primary btn-xs" href="#">Inactive</a>
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
                images: [],
                id: '',
            }
        },
        created() {
            this.getRequestedFood()
        },
        methods: {
            getRequestedFood() {
                axios.get('/admin/store/requested-foods')
                .then((res) => {
                    this.data = res.data
                })
            },
            openModal(images, id){
                this.images = images.split(',')
                this.id = id
                $('#exampleModal').modal('show')
            },
            delImg(img){
                this.images.splice(this.images.indexOf(img), 1);
            },
            updateImages(){
                axios.post('/admin/store/update-images', {
                    images: this.images,
                    food_id: this.id
                })
                .then((res) => {
                    if(res.data.success == true){
                        Swal.fire({
                            icon: 'success',
                            text: 'Images updated successfully.',
                        })
                        $('#exampleModal').modal('hide')
                        this.getRequestedFood()
                    } else {
                        Swal.fire({
                            icon: 'error',
                            text: 'Something went wrong.Please reload the page and try again. Thanks!',
                        })
                    }
                })
            },
            activeFood(id) {
                axios.get('/admin/store/food-active/' + id)
                    .then((res) => {
                        if (res.data.success == true) {
                            Swal.fire({
                                icon: 'success',
                                text: 'Food has been activated successfully.',
                            })
                            this.getRequestedFood()
                        } else {
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
