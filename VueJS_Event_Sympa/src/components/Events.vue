<template>
    <div class="container">
        <div id="main">
            <div class="inner">
                <header>
                    <h1>Bienvenue sur Event-Sympa ! Le seul site qui vous permet de trouver tous les événements en France</h1>
                    <p>Un  événement, un concert, un spectacle, tout se que vous vouliez trouver ce trouve dans la liste ci-dessous</p>
                </header>
                    <section class="tiles">
                        <EventImage v-for="(item) in events" :event="item"/>
                    </section>
            </div>
        </div>
    </div>
</template>

<script>
    import EventImage from './EventImage'
    import Axios from 'axios'

    export default {
        name: 'Events',
        components: {
            EventImage
        },
        data() {
            return {
                events : []
            }
        },
        mounted() {
            let urlE = this.$store.state.urlEvents
            Axios.get(urlE).then(response => {
                this.events = response.data
            }).catch(e => this.events = e)
        }
    }

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>