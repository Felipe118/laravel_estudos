<template>
    <section class="container-fluid">
        <h1 class="mb-5 mt-5" style="text-align: center;">Levantamento IRI</h1>
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <form @submit.prevent="submitForm">
                    <div class="form-group mb-4">
                        <label for="Rodovia" class="form-label">Rodovia</label>
                        <input class="form-control" type="text" placeholder="Rodovia" v-model="form.rodovia">
                    </div>
                    <div class="form-group mb-4">
                        <label for="Rodovia" class="form-label">Latitude</label>
                        <input  class="form-control" type="text" placeholder="Rodovia" v-model="form.latitude">
                    </div>
                    <div class="form-group mb-4 ">
                        <label for="Rodovia" class="form-label">Longitude</label>
                        <input  class="form-control" type="text" placeholder="Rodovia" v-model="form.longitude">
                    </div>

                    <button class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </section>
</template>

<script>
    import axios from 'axios'
    export default {
        name:'LevantamentoIri',

        data() {
            return {
                form: {}
            }
        },

        methods: {
            submitForm(){
                axios.post('levantamento-iri', this.form)
                .then((resp) => {
                    console.log(resp)
                })
            }
        }
    }
</script>