<template>
    <div class="container">
            <div class="card">
                <div class="card-header">¿En qué estás pensando ahora?
                </div>
                    <div class="card-body">
                        <form action="" v-on:submit.prevent="newThought()">
                            <div class="form-group">
                                <label for="thought">Ahora estoy pensando en:</label>
                                <input type="text" class="form-control" name="thought" v-model="description">
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Enviar Pensamiento
                            </button>
                        </form>
                    </div>
            </div>
        
    </div>
</template>

<script>
    export default {
        data(){
            return {
                description:''
            };
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            newThought() {
                const params = {
                    description: this.description,
                }   
                
                this.description = '';
                
                axios.post('/thoughts',params).then((response) => {
                    const thought = response.data;
                    this.$emit('new', thought);
                });
                /*
                let thought = {
                    id: 2,
                    description: this.description,
                    created_at: '04/06/2021',
                };
                this.$emit('new', thought);
                this.description = '';
                */
            }
        },
    }
</script>
