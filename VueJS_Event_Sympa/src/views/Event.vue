<template>
    <div class="container">
        <EventDescription :event="event" :place="place"/>
    </div>
</template>

<script>
import EventDescription from "@/components/EventDescription"
import Axios from 'axios'

    export default {
        name: "Event",
        components: {EventDescription},
        data() {
            return {
                id : this.$route.params.id,
                event : '',
                place : ''
            }
        },
        mounted() {
            let urlE = this.$store.state.urlEvents + this.id;
            Axios.get(urlE).then(response => {
                this.event = response.data
                let urlP = decodeURIComponent("http://localhost:8000" + this.event.placeNamePlace);
                Axios.get(urlP).then(response => {
                    this.place = response.data
                }).catch(e => this.place = e)
            }).catch(e => this.event = e)

        }
    }
</script>

<style >
    @import '../assets/css/main.css';
    @import '../assets/css/noscript.css';
</style>