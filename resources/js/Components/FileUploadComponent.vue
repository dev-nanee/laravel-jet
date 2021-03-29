<template>
    <div class="md:container md:mx-auto">
        <div class="">
            <div class="box-border w-80 border-1">
                <div class="text-base font-medium">Laravel Vue JS File Upload Demo</div>
                <div class="">
                    <div v-if="success != ''" class="text-red-600">
                        {{ success }}
                    </div>
                    <form @submit="formSubmit" enctype="multipart/form-data">
                        <input type="file" class="" v-on:change="onChange">
                        <button class="">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Button from "../Jetstream/Button";
export default {
    components: {Button},
    data() {
        return {
            name: '',
            file: '',
            success: ''
        };
    },
    methods: {
        onChange(e) {
            this.file = e.target.files[0];
        },
        formSubmit(e) {
            e.preventDefault();
            let existingObj = this;

            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }

            let data = new FormData();
            data.append('file', this.file);

            axios.post('/upload', data, config)
                .then(function (res) {
                    existingObj.success = res.data.success;
                })
                .catch(function (err) {
                    existingObj.output = err;
                });
        }
    }
}
</script>
