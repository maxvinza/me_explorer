<template>
    <div v-bind:class="port.state"> {{ port.id }} {{ port.client }}</div>
</template>

<script>
export default {
    props: {
        Ports: {
            id: Number,
            state: String,
            client: String,
        }
    }
}
</script>
