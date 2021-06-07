<template>
<div class="container">
    <form-component  @new="addThought"></form-component>
    <br>
    <thought-component 
    v-for="(thought,index) in thoughts" 
    :key="thought.id"
    :thought="thought"
    @delete="deleteThought(index,thought)"
    @update="updateThought(index)">
    </thought-component>

</div>

</template>

<script>
    export default {
        data() {
            return {
                thoughts: []
            }; 
        },

        mounted() {
           axios.get('/thoughts').then((response) => {
               this.thoughts = response.data;
           });
        },
        methods: {
            addThought(thought) {
                this.thoughts.push(thought);
            },
            deleteThought(index,thought){
                this.thoughts.splice(index,1);
            },
            updateThought(index){
                this.thought[index] = thought;
            },
        },
    }
</script>
