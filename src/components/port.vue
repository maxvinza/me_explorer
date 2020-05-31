<template>
    <div @class="port.up"> {{ port.id }} {{ port.description }}</div>
</template>

<script>
export default {
    props: {
        Ports: {
            id: Number,
            up: String,
            speed: String,
            description: String,
        }
    }
}
</script>
