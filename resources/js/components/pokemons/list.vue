<template>
    <div class="row">
        <spinner v-show="loading"></spinner>
        <div class="col-sm" v-for="pokemon in pokemons" v-bind:key="pokemon.id">
            <div class="card text-center" style="width: 18rem; margin-top: 70px">
                <img style="height: 100px; width:100px; background-color: #EFEFEF; margin: 10px;" v-bind:src="pokemon.picture" alt="Imagen Avatar" class="card-img-top rounded-circle display-block mx-auto">
                <div class="card-body">
                    <h5 class="card-title">{{pokemon.name}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/trainers/" class="btn btn-primary">Ver mas...</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import EventBus from '../../event-bus';
    export default {
        data(){
            return{
                pokemons: [],
                loading: true
            }
        },
        created(){
            EventBus.$on('pokemon-added',data=>{
                this.pokemons.push(data)
            })
        },
        mounted(){

            let currentRoute = window.location.pathname
            axios
                .get(`http://127.0.0.1:8000${currentRoute}/pokemons`)
                .then((res)=>{
                    console.log(res)
                    this.pokemons=res.data
                    this.loading = false
                });

        }
    }
</script>