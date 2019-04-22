<template>
    <div class='row'>

        <div class="col-md-4" v-for="shelter in shelters" >
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://pbs.twimg.com/profile_images/625947248023597056/jRm1pBl4_400x400.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> {{shelter.name}} </h5>
                    <p class="card-text">Recuing and caring for homeless, neglected and abused dogs and cats of Asia since 2003.</p>
                    <p>Status: {{ shelter.status }}</p>
                    <p>Animal Vacancies: {{ shelter.animal_vacancies }}</p>
                    <a :href="'/shelter/' + shelter.id" class="btn btn-primary">Visit</a>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: 'SheltersList',
        data(){ 
            return {
                shelters : [],
                response : null,
                message : 'Recuing and caring for homeless, neglected and abused dogs and cats of Asia since 2003.'
            }
        },
        mounted() {
            this.getShelters()
        },
        methods: {
            getShelters(){
                const vm = this
                axios.get('/shelters').then(function(response){
                    console.log({response})
                    vm.shelters = response.data

                }).catch(function(error){
                    console.log({error})
                })
                console.log('getting shelters.')
            }
        }
    }
</script>
