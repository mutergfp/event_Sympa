<template>
    <div class="container">
        <div id="main">
            <div class="inner">
                <h1>{{ event.title }} - {{ event.eventType }}</h1>
                <span class="image main"><img v-bind:src="imageUrl(event.image)" v-bind:alt="event.title" /></span>
                <p>Date de début de l'événement : <b>{{ event.startDate | moment }}</b></p>
                <p>Date de fin de l'événement : <b>{{ event.endDate | moment }}</b></p>
                <p>Lieu de l'événement : <b>{{ place.placeName}},{{ place.adress }},{{ place.postalCode }},{{ place.city }}</b></p>
                <p>Place disponible : <b>{{ event.placeRemain }}/{{ event.placeMax }}</b></p>
                <p>Prix unitaire : <b>{{ event.price }}€</b></p>
                <p>{{ event.description }}</p>
            </div>
        </div>
    </div>
</template>

<script>
    import Axios from 'axios'
    import Moment from 'moment'

    export default {
        name: "EventDescription",
        props : {
            event : Object,
            place : Object
        },
        methods : {
            imageUrl(image){
                return require('@/assets/images/' + image);
            }
        },
        filters: {
            moment: function (date) {
                return Moment(date).locale('fr').format('Do MMMM YYYY');
            }
        }
    }
</script>

<style scoped>

    .image.main img{
        margin: auto;
    }
</style>