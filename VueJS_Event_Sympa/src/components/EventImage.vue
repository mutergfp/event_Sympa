<template>
    <div class="container">
        <article class="style1">
                        <span class="image">
                            <img v-bind:src="imageUrl(event.image)" v-bind:alt="event.title" @click="actionEvent(event.id)"/>
                        </span>
            <br>
            <h2>{{ event.title }}<br> {{ event.event_type }}</h2>
            <div class="content">
                <p>{{ event.description | truncate(150, "...")}}</p>
            </div>
        </article>

    </div>
</template>

<script>
    export default {
        name: "EventImage",
        props: {
            event: Object
        },
        methods: {
            actionEvent(index) {
                this.$router.push({ name: 'Event', params: { id: index }})
            },
            imageUrl(image){
                return require('@/assets/images/' + image);
            }
        }
    }
</script>

<style scoped>
    .container{
        width: 33%;
    }
    .style1{
        width: 100%;
    }

</style>