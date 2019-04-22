<template>
    <div>
        <a href="/" class="btn btn-primary">Back</a>
        <div class='row'>
            <div class="col-md-3" v-for="animal in shelter.animals" >
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0255/4205/files/myths-about-rescue-dogs.jpg?v=1492082180" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> {{animal.name}} </h5>
                        <p>{{animal.type}}</p>
                        <p>Breed: {{ animal.breed }}</p>
                        <p>Size: {{ animal.size }}</p>
                        <p>Status: {{ animal.status }}</p>
                        <p>age: {{ animal.years_old }}</p>
                        <a href="#" class="btn btn-primary">Adopt</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: 'AdoptionTable',
        data(){ 
            return {
                shelter:{
                    id: 1,
                    animals : [],
                }
            }
        },
        mounted() {
            this.getAnimals()
        },
        methods: {
            getAnimals(){
                const vm = this
                let shelter_id = window.location.pathname.split('/')[2]
                axios.get('/api/shelters/'+ shelter_id + '/animals').then(function(response){
                    console.log({response})
                    vm.shelter = response.data

                }).catch(function(error){
                    console.log({error})
                })
            }
        }
    }
</script>
